<?php
require 'Views/Components/header.php';

require 'Models/IndexTenant.php';

if (isset($_SESSION['connected'])) { //Display leases & id pieces 
    if(isset($_SESSION['id_landlord'])){
        header('Location: index.php');  
    }
    $listLeasesTenants = getLeaseTenant($_SESSION['id']);
    $listIdentityPiecesTenants = getIdPiecesTenant($_SESSION['id']);
}else{
    header('Location: index.php');
}

//------------------------------------------------------------- function to delete all of the ID pieces
if (isset($_POST['delete_all_id_pieces'])) {

    $paths = getPathToUnlink($_SESSION['id']);

    foreach ($paths->fetchAll() as $path) {
        unlink($path['file_dir']);
    }

    deleteAllIdPieces($_SESSION['id']);
    resetFileCounter($_SESSION['id']);

    header('Location: indexTenant.php?fullDelSuccess');
}
//--------------------------------------------------------------



//--------------------------------------------------------------------- Delete only 1 selected ID piece
if(isset($_POST['delete_id_piece'])){
    $pathsToDelete= getPathToUnlink($_SESSION['id']);
    $pathToDelete=$pathsToDelete->fetch();
    unlink($pathToDelete['file_dir']);
    
    deleteIdPiece($_POST['id_nb_file_tenant']);
    decrementFileCounter();

    header('Location: indexTenant.php?singleDelIdSuccess');
}
//--------------------------------------------------------------------


if (htmlspecialchars(isset($_POST['submit_file']))) {
    $fileExistsFlag = false;

    //Check if it is PDF indeed
    if (substr($_FILES['file_tenant']['name'], -3) != "pdf") {

        header('Location: indexLanlord.php?wrongFormat');
    }

    $fileNameAndPath = "Assets/files/tenant/" . $_FILES['file_tenant']['name'];
    $fileName = $_FILES['file_tenant']['name'];
    /* 
    *    Checking whether the file already exists in the destination folder 
    */

    $checkFileNameTenants = checkFileNameTenant($fileNameAndPath, $_SESSION['id']);

    foreach ($checkFileNameTenants->fetchAll() as $checkFileNameTenant) {

        if ($checkFileNameTenant['id_uploading_tenant'] == $_SESSION['id']) {

            if ($checkFileNametenant['file_dir'] == $fileNameAndPath) {
                $fileExistsFlag = true;
            }
        }
    }
    /*
    *     If file is not present in the destination folder
    */

    $checkNbFilesUp = checkBeforeIncrement($_SESSION['id']);

    $fetchedNbOfFiles = $checkNbFilesUp->fetch();
    $currentNbOfFiles = $fetchedNbOfFiles['nb_files_uploaded_tenant'];
    

    if ($currentNbOfFiles > 6) { //Maximum cap for uploading files(6 files maximum) (initialized at 1 so it isn't null)

        header('Location: indexTenant.php?fileOverflow');
    } else {
        if ($fileExistsFlag == false) {
            $target = "Assets/files/tenant/";
            $fileTarget = $target . $fileName;
            $tempFileName = $_FILES['file_tenant']['tmp_name'];
            if ($_FILES['file_tenant']['size'] <= 2000000) {

                $IncrementFileUp = incrementFileUploadNbTenant($_SESSION['id']);

                $result = move_uploaded_file($tempFileName, $fileTarget);
                /*
            *    If file was successfully uploaded in the destination folder
            */
                if ($result) {
                    $_POST['fileNameAndPath'] = $fileNameAndPath;
                    $addPictureToGalery = uploadFileTenant(($_POST['fileNameAndPath']), ($_SESSION['id']));

                    header('Location: indexTenant.php?fileSaved');

                } else {

                    header('Location: indexTenant.php?ErrorUpload');

                }
            } else {

                header('Location: indexTenant.php?fileTooLarge');

            }
        }
        /*
    *     If file is already present in the destination folder
    */ else {

        header('Location: indexTenant.php?fileAlreadyExisting');

        }
    }
}


require 'Views/indexViewTenant.php';
require 'Views/Components/footer.php';
