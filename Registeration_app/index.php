<?php
require_once('./model/fields.php');
require_once('./model/validate.php');

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('email', 'Must be a valid email address.');
$fields->addField('password', 'Must be at least 6 characters.');
$fields->addField('verify');
$fields->addField('first_name', "Must be unique name");
$fields->addField('last_name', "Must be Required");


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':
        $email = '';
        $password = '';
        $verify = '';
        $firstName = '';
        $lastName = '';
       
        
        include 'view/sign_up.php';
        break;
    case 'register':
       
        $email = trim(filter_input(INPUT_POST, 'email'));
        $password = filter_input(INPUT_POST, 'password');
        $verify = filter_input(INPUT_POST, 'verify');
        $firstName = trim(filter_input(INPUT_POST, 'first_name'));
        $lastName = trim(filter_input(INPUT_POST, 'last_name'));
      

        
        $validate->email('email', $email);
        $validate->password('password', $password);
        $validate->verify('verify', $password, $verify);
        $validate->text('first_name', $firstName);
        $validate->text('last_name', $lastName);

        
        if ($fields->hasErrors()) {
            include './view/sign_up.php';
        } else {
            include("./view/success.php");
        }
        break;
    case 'sign_up':
        include("./view/sign_up.php");
        break;
}
?>