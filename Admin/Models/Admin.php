<?php


function addingBeneficiariesChildren($firstname_beneficiaries, $name_beneficiaries, $gender_beneficiaries, $birthdate_beneficiaries, $tel_beneficiaries, $phone_beneficiaries, $email_beneficiaries, $department_beneficiaries, $city_beneficiaries, $address_beneficiaries, $family_beneficiaries, $children_beneficiaries, $entry_date_beneficiaries, $structure_referent_beneficiaries, $password_beneficiaries) {

    $db = dbConnect();

    $addingBeneficiariesChildren = $db->prepare('INSERT INTO beneficiaries(firstname_beneficiaries, name_beneficiaries, gender_beneficiaries, birthdate_beneficiaries, tel_beneficiaries, phone_beneficiaries, email_beneficiaries, department_beneficiaries, city_beneficiaries, address_beneficiaries, family_beneficiaries, children_beneficiaries, entry_date_beneficiaries, structure_referent_beneficiaries, password_beneficiaries, created_at) VALUES(:firstname_beneficiaries, :name_beneficiaries, :gender_beneficiaries, :birthdate_beneficiaries, :tel_beneficiaries, :phone_beneficiaries, :email_beneficiaries, :department_beneficiaries, :city_beneficiaries, :address_beneficiaries, :family_beneficiaries, :children_beneficiaries, :entry_date_beneficiaries, :structure_referent_beneficiaries, :password_beneficiaries, :created_at)');

    $passwordHash = password_hash($password_beneficiaries, PASSWORD_DEFAULT);

    date_default_timezone_set('Europe/Paris');

    $addingBeneficiariesChildren->execute([
        'firstname_beneficiaries' => $firstname_beneficiaries,
        'name_beneficiaries' => $name_beneficiaries,
        'gender_beneficiaries' => $gender_beneficiaries,
        'birthdate_beneficiaries' => $birthdate_beneficiaries,
        'email_beneficiaries' => $email_beneficiaries,
        'password_beneficiaries' => $passwordHash,
        'phone_beneficiaries' => $phone_beneficiaries,
        'tel_beneficiaries' => $tel_beneficiaries,
        'department_beneficiaries' => $department_beneficiaries,
        'city_beneficiaries' => $city_beneficiaries,
        'address_beneficiaries' => $address_beneficiaries,
        'family_beneficiaries' => $family_beneficiaries,
        'children_beneficiaries' => $children_beneficiaries,
        'entry_date_beneficiaries' => $entry_date_beneficiaries,
        'structure_referent_beneficiaries' => $structure_referent_beneficiaries,
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($addingBeneficiariesChildren->errorInfo()));

    return $addingBeneficiariesChildren;

}

function addingBeneficiaries($firstname_beneficiaries, $name_beneficiaries, $gender_beneficiaries, $birthdate_beneficiaries, $tel_beneficiaries, $phone_beneficiaries, $email_beneficiaries, $department_beneficiaries, $city_beneficiaries, $address_beneficiaries, $family_beneficiaries, $entry_date_beneficiaries, $structure_referent_beneficiaries, $password_beneficiaries) {

    $db = dbConnect();
    
    $addingBeneficiaries = $db->prepare('INSERT INTO beneficiaries(firstname_beneficiaries, name_beneficiaries, gender_beneficiaries, birthdate_beneficiaries, tel_beneficiaries, phone_beneficiaries, email_beneficiaries, department_beneficiaries, city_beneficiaries, address_beneficiaries, family_beneficiaries, entry_date_beneficiaries, structure_referent_beneficiaries, password_beneficiaries, created_at) VALUES(:firstname_beneficiaries, :name_beneficiaries, :gender_beneficiaries, :birthdate_beneficiaries, :tel_beneficiaries, :phone_beneficiaries, :email_beneficiaries, :department_beneficiaries, :city_beneficiaries, :address_beneficiaries, :family_beneficiaries, :entry_date_beneficiaries, :structure_referent_beneficiaries, :password_beneficiaries, :created_at)');


    $passwordHash = password_hash($password_beneficiaries, PASSWORD_DEFAULT);

    date_default_timezone_set('Europe/Paris');

    $addingBeneficiariesChildren->execute([
        'firstname_beneficiaries' => $firstname_beneficiaries,
        'name_beneficiaries' => $name_beneficiaries,
        'gender_beneficiaries' => $gender_beneficiaries,
        'birthdate_beneficiaries' => $birthdate_beneficiaries,
        'email_beneficiaries' => $email_beneficiaries,
        'password_beneficiaries' => $passwordHash,
        'phone_beneficiaries' => $phone_beneficiaries,
        'tel_beneficiaries' => $tel_beneficiaries,
        'department_beneficiaries' => $department_beneficiaries,
        'city_beneficiaries' => $city_beneficiaries,
        'address_beneficiaries' => $address_beneficiaries,
        'family_beneficiaries' => $family_beneficiaries,
        'entry_date_beneficiaries' => $entry_date_beneficiaries,
        'structure_referent_beneficiaries' => $structure_referent_beneficiaries,
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($addingBeneficiariesChildren->errorInfo()));

    return $addingBeneficiaries;

}

function addingStructureOther($name_structure, $nature_structure,$vocation_structure,$department_structure,$city_structure,$adress_structure,$tel_structure,$mail_structure,$website_structure,$other_structure){
    $db= dbConnect();

    $addingStructureOther = $db->prepare('INSERT INTO structure(name_structure,nature_structure, vocation_structure, department_structure, city_structure, adress_structure, tel_structure, mail_structure, website_structure, other_structure, created_at) VALUES(:name_structure,:nature_structure, :vocation_structure, :department_structure, :city_structure, :adress_structure, :tel_structure, :mail_structure, :website_structure, :other_structure, :created_at)');
    
    date_default_timezone_set('Europe/Paris');
    
    $addingStructureOther->execute([
        'name_structure'=> $name_structure,
        'nature_structure'=>$nature_structure,
        'vocation_structure'=>$vocation_structure,
        'department_structure'=>$department_structure,
        'city_structure'=>$city_structure,
        'adress_structure'=>$adress_structure,
        'tel_structure'=>$tel_structure,
        'mail_structure'=>$mail_structure,
        'website_structure'=>$website_structure,
        'other_structure'=>$other_structure,
        'created_at'=> date('Y-m-d H:i:s'),
    ]) or die(print_r($addingStructureOther->erroInfo()));

        return $addingStructureOther;

}

function addingStructure($name_structure, $nature_structure,$vocation_structure,$department_structure,$city_structure,$adress_structure,$tel_structure,$mail_structure,$website_structure){
    $db= dbConnect();

    $addingStructure = $db->prepare('INSERT INTO structure(name_structure, nature_structure, vocation_structure, department_structure, city_structure, adress_structure, tel_structure, mail_structure, website_structure, created_at) VALUES(:name_structure,:nature_structure, :vocation_structure, :department_structure, :city_structure, :adress_structure, :tel_structure, :mail_structure, :website_structure, :created_at)');
    
    date_default_timezone_set('Europe/Paris');
    
    $addingStructure->execute([
        'name_structure'=> $name_structure,
        'nature_structure'=>$nature_structure,
        'vocation_structure'=>$vocation_structure,
        'department_structure'=>$department_structure,
        'city_structure'=>$city_structure,
        'adress_structure'=>$adress_structure,
        'tel_structure'=>$tel_structure,
        'mail_structure'=>$mail_structure,
        'website_structure'=>$website_structure,
        'created_at'=> date('Y-m-d H:i:s'),
    ]) or die(print_r($addingStructure->erroInfo()));

        return $addingStructure;

}

function addReferent($contact_type_referent, $firstname_referent, $name_referent, $structure_referent, $tasks_structure_referent, $tel_referent, $phone_referent, $mail_referent, $contact_tracked_structure_referent) {

    $db = dbConnect();

    $addReferent = $db->prepare('INSERT INTO referent(contact_type_referent, ')


}