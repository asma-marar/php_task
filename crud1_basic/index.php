<?php include 'mydb.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertdata.php" method="post">
    <label for="myname">User Name</label><br>
    <input type="text" name="myName" placeholder="enter your name">
    <br>
    <br>
    
    <label for="myemail">User Email</label><br>
    <input type="email" name="myemail" placeholder="enter your email">
    <br>
    <br>

    <label for="mypass">User Password</label><br>
    <input type="password" name="mypass" placeholder="enter your password">
    <br>
    <br>
    <input type="submit" value="Add" name="add_customer" >
    <!-- <button type="button">Edit</button>
    <button type="button">Delete</button><br><br> -->
    <br><br>
    <table>
        <thead>
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM `main` WHERE 1";
            $users=$connection->query($query);

            //to check if the table is empty or not 
            if($users->rowCount()==0){
                echo ("empty table");
            }else{
                foreach($users as $user){
                    echo " <tr>
                    <td>$user[id_of_user]</td>
                    <td>$user[name_of_user]</td>
                    <td>$user[email_of_user]</td>
                    <td>
                        <a href='./feature/update.php?id=$user[id_of_user]' class='btn'>Edit</a>                        
                        <a href='./feature/delete.php?id=$user[id_of_user]' class='btn'>Delete</a>
                        <br><br> 
                    </td>
                    </tr>
                    ";
                }
            }
            
            ?>
        </tbody>
    </table>
    </body>
</html>