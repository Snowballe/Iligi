<?php

require 'Views/Components/headerAdmin.php';

require 'Models/Admin.php';

if(isset($_POST['submitBeneficiaries'])) {

    if(isset($_POST['firstname_beneficiaries']) && isset($_POST['name_beneficiaries']) && isset($_POST['gender_beneficiaries']) && isset($_POST['birthdate_beneficiaries']) && isset($_POST['country_code_beneficiaries']) && isset($_POST['tel_beneficiaries']) && isset($_POST['phone_beneficiaries']) && isset($_POST['email_beneficiaries']) && isset($_POST['department_beneficiaries']) && isset($_POST['city_beneficiaries']) && isset($_POST['address_beneficiaries']) && isset($_POST['family_beneficiaries']) && isset($_POST['entry_date_beneficiaries']) && isset($_POST['structure_referent_beneficiaries']) && isset($_POST['password_beneficiaries'])) {
                
        $contryPhone = $_POST['country_code_beneficiaries']." ".$_POST['phone_beneficiaries'];
        $contryTel = $_POST['country_code_beneficiaries']." ".$_POST['tel_beneficiaries'];

        if(isset($_POST['children_beneficiaries'])){

            $addingBeneficiariesChildren = addingBeneficiariesChildren($_POST['firstname_beneficiaries'], $_POST['name_beneficiaries'], $_POST['gender_beneficiaries'], $_POST['birthdate_beneficiaries'], $contryTel, $contryPhone, $_POST['email_beneficiaries'], $_POST['department_beneficiaries'], $_POST['city_beneficiaries'], $_POST['address_beneficiaries'], $_POST['family_beneficiaries'], $_POST['children_beneficiaries'], $_POST['entry_date_beneficiaries'], $_POST['structure_referent_beneficiaries'], $_POST['password_beneficiaries']);
    
        } else {

            $addingBeneficiaries = addingBeneficiaries($_POST['firstname_beneficiaries'], $_POST['name_beneficiaries'], $_POST['gender_beneficiaries'], $_POST['birthdate_beneficiaries'], $contryTel, $contryPhone, $_POST['email_beneficiaries'], $_POST['department_beneficiaries'], $_POST['city_beneficiaries'], $_POST['address_beneficiaries'], $_POST['family_beneficiaries'], $_POST['entry_date_beneficiaries'], $_POST['structure_referent_beneficiaries'], $_POST['password_beneficiaries']);   
        
        }
    
    }

}
/* TODO : Ajouter le website en truc pas required --> chiant

Prévoire toutes les possibilité dans l'envoie vers le model

Revoire la structure pour ne pas faire de INSERT INTO dans le model mais juste ajouter les informations où l'on veux

*/
if(isset($_POST['submitAddStructure'])){
    
    if(isset($_POST['name_structure']) && isset($_POST['nature_structure']) && isset($_POST['vocation_structure']) && isset($_POST['department_structure']) && isset($_POST['city_structure']) && isset($_POST['adress_structure']) && isset($_POST['tel_structure']) && isset($_POST['mail_structure']) && isset($_POST['website_structure'])){
        
        if(isset($_POST['other_structure'])) {

            $addingStructureOther = addingStructureOther($_POST['name_structure'], $_POST['nature_structure'], $_POST['vocation_structure'], $_POST['department_structure'], $_POST['city_structure'], $_POST['adress_structure'], $_POST['tel_structure'], $_POST['mail_structure'], $_POST['website_structure'], $_POST['other_structure']);
        
        } else {

            $addingStructure = addingStructure($_POST['name_structure'], $_POST['nature_structure'], $_POST['vocation_structure'], $_POST['department_structure'], $_POST['city_structure'], $_POST['adress_structure'], $_POST['tel_structure'], $_POST['mail_structure'], $_POST['website_structure']);
        
        }
    }
}



if(isset($_POST['submitAddReferent'])) {

    if(isset($_POST['contact_type_referent']) && isset($_POST['firstname_referent']) && isset($_POST['name_referent']) && isset($_POST['structure_referent']) && isset($_POST['tasks_structure_referent']) && isset($_POST['tel_referent']) && isset($_POST['phone_referent']) && isset($_POST['mail_referent']) && isset($_POST['contact_tracked_structure_referent'])) {
        
        if((isset($_POST['initial_contact_referent']) && isset($_POST['initial_contact_date_referent'])) || (isset($_POST['presentation_appointment_referent']) && isset($_POST['presentation_appointment_date_referent'])) || (isset($_POST['convention_referent']) && isset($_POST['convention_date_referent'])) || (isset($_POST['signature_referent']) && (isset($_POST['first_date_signature_referent']) || isset($_POST['second_date_signature_referent'])) ) || (isset($_POST['first_action_referent']) && isset($_POST['date_first_action_referent']) && isset($_POST['object_first_action_referent']) ) ){
            
            if(isset($_POST['initial_contact_referent']) && isset($_POST['initial_contact_date_referent'])) {
                
                $addReferentInitialContact = addReferentInitialContact($_POST['contact_type_referent'], $_POST['firstname_referent'], $_POST['name_referent'], $_POST['structure_referent'], $_POST['tasks_structure_referent'], $_POST['tel_referent'], $_POST['phone_referent'], $_POST['mail_referent'], $_POST['contact_tracked_structure_referent'], $_POST['initial_contact_referent'], $_POST['initial_contact_date_referent']);

            }

            if(isset($_POST['presentation_appointment_referent']) && isset($_POST['presentation_appointment_date_referent'])) {

                $addReferentPresentationAppointement = addReferentPresentationAppointement($_POST['contact_type_referent'], $_POST['firstname_referent'], $_POST['name_referent'], $_POST['structure_referent'], $_POST['tasks_structure_referent'], $_POST['tel_referent'], $_POST['phone_referent'], $_POST['mail_referent'], $_POST['contact_tracked_structure_referent'], $_POST['presentation_appointment_referent'], $_POST['presentation_appointment_date_referent']);

            }

            if(isset($_POST['convention_referent']) && isset($_POST['convention_date_referent'])) {

                $addReferentConvention = addReferentConvention($_POST['contact_type_referent'], $_POST['firstname_referent'], $_POST['name_referent'], $_POST['structure_referent'], $_POST['tasks_structure_referent'], $_POST['tel_referent'], $_POST['phone_referent'], $_POST['mail_referent'], $_POST['contact_tracked_structure_referent'], $_POST['convention_referent'], $_POST['convention_date_referent']);

            }

            if(isset($_POST['signature_referent']) && (isset($_POST['first_date_signature_referent']) || isset($_POST['second_date_signature_referent']))) {

                if(isset($_POST['first_date_signature_referent'])) {
                    
                    $addReferentFirstSignature = addReferentFirstSignature($_POST['contact_type_referent'], $_POST['firstname_referent'], $_POST['name_referent'], $_POST['structure_referent'], $_POST['tasks_structure_referent'], $_POST['tel_referent'], $_POST['phone_referent'], $_POST['mail_referent'], $_POST['contact_tracked_structure_referent'], $_POST['signature_referent'], $_POST['first_date_signature_referent']);

                }

                if(isset($_POST['second_date_signature_referent'])) {
                    
                    $addReferentSecondSignature = addReferentSecondSignature($_POST['contact_type_referent'], $_POST['firstname_referent'], $_POST['name_referent'], $_POST['structure_referent'], $_POST['tasks_structure_referent'], $_POST['tel_referent'], $_POST['phone_referent'], $_POST['mail_referent'], $_POST['contact_tracked_structure_referent'], $_POST['signature_referent'], $_POST['second_date_signature_referent']);

                }

            }

            if(isset($_POST['first_action_referent']) && isset($_POST['date_first_action_referent']) && isset($_POST['object_first_action_referent'])) {

                $addReferentFirstAcion = addReferentFirstAcion($_POST['contact_type_referent'], $_POST['firstname_referent'], $_POST['name_referent'], $_POST['structure_referent'], $_POST['tasks_structure_referent'], $_POST['tel_referent'], $_POST['phone_referent'], $_POST['mail_referent'], $_POST['contact_tracked_structure_referent'], $_POST['first_action_referent'], $_POST['date_first_action_referent'], $_POST['object_first_action_referent']);

            }


        } else {

            $addReferent = addReferent($_POST['contact_type_referent'], $_POST['firstname_referent'], $_POST['name_referent'], $_POST['structure_referent'], $_POST['tasks_structure_referent'], $_POST['tel_referent'], $_POST['phone_referent'], $_POST['mail_referent'], $_POST['contact_tracked_structure_referent']);

        }


    }

}


require 'Views/indexViewAdmin.php';

require 'Views/Components/footerAdmin.php'

?>