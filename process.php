<?php

$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}

if (empty($_POST['superheroAlias'])) {
    $errors['superheroAlias'] = 'Superhero alias is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;    
    $data['message'] = 'Success!';
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['birth_date'] = $_POST['birth_date'];
    $data['superheroAlias'] = $_POST['superheroAlias'];
}

echo json_encode($data);

?>