<?php
include('../db_board_conn.php');

if (isset($_GET['id'])){
    $id=$_GET['id'];
    echo $id;
    $query="SELECT * FROM user_table WHERE `user_id`=:id";

    $statment=$connection->prepare($query);
    $statment->bindParam(':id',$id,PDO::PARAM_INT);
    $statment->execute();

    $user=$statment->fetch(PDO::FETCH_ASSOC);
    print_r($user);



if(isset($_POST['update_user'])){
    $fname=$_POST['myName'];
    $email=$_POST['myemail'];
    $mobile=$_POST['mymobile'];
    $address=$_POST['myadd'];
    $id=$_POST['id'];

    $query="UPDATE user_table SET `user_name`=:user_name,`user_email`=:user_email,`user_mobile`=:user_mobile,`user_address`=:user_address WHERE `user_id`=:user_id";
    $statment=$connection->prepare($query);
    $statment->bindParam(':user_name',$fname);
    $statment->bindParam(':user_email',$email);
    $statment->bindParam(':user_mobile',$mobile);
    $statment->bindParam(':user_address',$address);
    $statment->bindParam(':user_id',$id);

    // $statment->execute();
if($statment->execute()){
    echo "update successfully";
}else{
echo "failed of update data";
}

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
   
<form action="" method="post">

     

    <label for="myname">User Name</label><br>
    <input type="text" name="myName" placeholder="Enter your name" value=<?php echo $user['user_name']??'';?> required>
    <br><br>

    <label for="mymobile">User Mobile</label><br>
    <input type="text" name="mymobile" placeholder="Enter your mobile phone" value=<?php echo $user['user_mobile']??'';?> required>
    <br><br>
    
    <label for="myemail">User Email</label><br>
    <input type="email" name="myemail" placeholder="Enter your email" value=<?php echo $user['user_email']??'';?> required>
    <br><br>

    <label for="myadd">User Address</label><br>
    <input type="text" name="myadd" placeholder="Enter your address" value=<?php echo $user['user_address']??'';?> required>
    <br><br>
    
    <input type="submit" value="Update" name="update_user">
</form>

</body>
</html>