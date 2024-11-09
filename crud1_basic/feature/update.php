<?php
require('../mydb.php');
?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];;

    $query="SELECT * FROM `main` WHERE  `id_of_user`=:id";

    $statment=$connection->prepare($query);
    $statment->bindParam(':id',$id,PDO::PARAM_INT);
    $statment->execute();

    $user=$statment->fetch(PDO::FETCH_ASSOC);
    //print_r($user);

}

?>


<?php 
if(isset($_POST['update_customer'])){
    $name=$_POST['myName'];
    $email=$_POST['myemail'];
    $pass=$_POST['mypass'];
    $id=$_POST['id'];
    //echo $name, $email, $pass;

    $query="UPDATE `main` SET `name_of_user`=:name_user,`email_of_user`=:email_user,`password_of_user`=:password_user WHERE `id_of_user`=:id_user";

    $statment=$connection->prepare($query);

    $statment->bindParam('name_user',$name);
    $statment->bindParam('email_user',$email);
    $statment->bindParam('password_user',$pass);
    $statment->bindParam('id_user',$id);



    //statment of excute
    if($statment->execute()){
        echo "update successfully";
    }else{
        echo "failed of update data";
    }


}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">

<input type="hidden"  name="id" id="id" aria-describedby="id"
value=<?php echo $user['id_of_user']??''?>>


    <label for="myName">User Name</label><br>
    <input type="text" name="myName" placeholder="enter your name" value=<?php echo $user['name_of_user']??''?>>
    <br>
    <br>
    
    <label for="myemail">User Email</label><br>
    <input type="email" name="myemail" placeholder="enter your email" value=<?php echo $user['email_of_user']??''?>>
    <br>
    <br>

    <label for="mypass">User Password</label><br>
    <input type="password" name="mypass" placeholder="enter your password" value=<?php echo $user['password_of_user']??''?>>
    <br>
    <br>
    <input type="submit" value="Update" name="update_customer" >
    
    <br><br> 
</form>
</body>
</html>