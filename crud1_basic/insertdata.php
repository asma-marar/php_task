<?php
require('mydb.php');

if(isset($_POST['add_customer'])){
    $name = $_POST['myName'];
    //echo $name;
    $email=$_POST['myemail'];
    $password=$_POST['mypass'];

    $query="INSERT INTO `main`( `name_of_user`, `email_of_user`, `password_of_user`) VALUES (:name_user,:email_user,:password_user)";
    $statment=$connection->prepare($query);

    $data=[
        'name_user' => $name,
        'email_user' => $email,
        'password_user' => $password
    ];

    $statment->execute($data);
    header('location:index.php?message=user add sucessfully');

}
?>