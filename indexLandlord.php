<?php
require 'Views/Components/header.php';

require 'Models/IndexLandlord.php';

if (isset($_SESSION['connected'])) { //Display leases & id pieces 
    if(isset($_SESSION['id'])){
        header('Location: index.php');//Forbidding access for tenants
    }
    $listLeasesLandlords = getLeaseLandlord($_SESSION['id_landlord']);
    $listIdentityPiecesLandlords = getIdPiecesLandlord($_SESSION['id_landlord']);
}else{
    header('Location: index.php');//Same for not connected
}

//------------------------------------------------------------- function to delete all of the ID pieces
if (isset($_POST['delete_all_id_pieces'])) {

    $paths = getPathToUnlink($_SESSION['id_landlord']);

    foreach ($paths->fetchAll() as $path) {
        unlink($path['file_dir_landlord']);
    }

    deleteAllIdPieces($_SESSION['id_landlord']);
    resetFileCounter($_SESSION['id_landlord']);

    header('Location: indexLandlord.php?fullDelSuccess');
}
//--------------------------------------------------------------



//--------------------------------------------------------------------- Delete only 1 selected ID piece
if(isset($_POST['delete_id_piece'])){
    $pathsToDelete= getPathToUnlink($_SESSION['id_landlord']);
    $pathToDelete=$pathsToDelete->fetch();
    unlink($pathToDelete['file_dir_landlord']);
    
    deleteIdPiece($_POST['id_nb_file_landlord']);
    decrementFileCounter();

    header('Location: indexLandlord.php?singleDelIdSuccess');
}
//--------------------------------------------------------------------


if (htmlspecialchars(isset($_POST['submit_file']))) {
    $fileExistsFlag = false;

    //Check if it is PDF indeed
    if (substr($_FILES['file_landlord']['name'], -3) != "pdf") {

        header('Location: indexLanlord.php?wrongFormat');
    }

    $fileNameAndPath = "Assets/files/landlord/" . $_FILES['file_landlord']['name'];
    $fileName = $_FILES['file_landlord']['name'];
    /* 
    *    Checking whether the file already exists in the destination folder 
    */

    $checkFileNameLandlords = checkFileNameLandlord($fileNameAndPath, $_SESSION['id_landlord']);

    foreach ($checkFileNameLandlords->fetchAll() as $checkFileNameLandlord) {

        if ($checkFileNameLandlord['id_uploading_landlord'] == $_SESSION['id_landlord']) {

            if ($checkFileNameLandlord['file_dir_landlord'] == $fileNameAndPath) {
                $fileExistsFlag = true;
            }
        }
    }
    /*
    *     If file is not present in the destination folder
    */

    $checkNbFilesUp = checkBeforeIncrement($_SESSION['id_landlord']);

    $fetchedNbOfFiles = $checkNbFilesUp->fetch();
    $currentNbOfFiles = $fetchedNbOfFiles['nb_files_uploaded_landlord'];
    

    if ($currentNbOfFiles > 6) { //Maximum cap for uploading files(6 files maximum) (initialized at 1 so it isn't null)

        header('Location: indexLandlord.php?fileOverflow');
    } else {
        if ($fileExistsFlag == false) {
            $target = "Assets/files/landlord/";
            $fileTarget = $target . $fileName;
            $tempFileName = $_FILES['file_landlord']['tmp_name'];
            if ($_FILES['file_landlord']['size'] <= 2000000) {

                $IncrementFileUp = incrementFileUploadNbLandlord($_SESSION['id_landlord']);

                $result = move_uploaded_file($tempFileName, $fileTarget);
                /*
            *    If file was successfully uploaded in the destination folder
            */
                if ($result) {
                    $_POST['fileNameAndPath'] = $fileNameAndPath;
                    $addPictureToGalery = uploadFileLandlord(($_POST['fileNameAndPath']), ($_SESSION['id_landlord']));

                    header('Location: indexLandlord.php?fileSaved');

                } else {

                    header('Location: indexLandlord.php?ErrorUpload');

                }
            } else {

                header('Location: indexLandlord.php?fileTooLarge');

            }
        }
        /*
    *     If file is already present in the destination folder
    */ else {

        header('Location: indexLandlord.php?fileAlreadyExisting');

        }
    }
}


require 'Views/indexViewLandlord.php';
require 'Views/Components/footer.php';
