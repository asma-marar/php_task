<?php 
include('../db_board_conn.php');

if (isset($_GET['id'])){
    $id=$_GET['id'];

    $query="SELECT * FROM category WHERE `category_id`=:id";

    $statment=$connection->prepare($query);
    $statment->bindParam(':id',$id,PDO::PARAM_INT);
    $statment->execute();

    $category=$statment->fetch(PDO::FETCH_ASSOC);
    // print_r($user);

}

if (isset($_POST['UPDATE_category'])) {
    $categoryN = $_POST['categoryname'];
    $categoryD = $_POST['categorydescription'];
    $id=$_POST['id'];


    $query="UPDATE `category` SET `category_name`= :category_name,`category_description`=:category_description WHERE `category_id` = :category_id ";

    $statment=$connection->prepare($query);
    $statment->bindParam('category_name',$categoryN);
    $statment->bindParam('category_description',$categoryD);
    
    $statment->bindParam('category_id',$id);

    // $statment->execute();
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
    <title>Items List</title>
</head>
<body>

<form action="" method="post">

    <input type="hidden"  name="id" 
    value=<?php echo $category['category_id']??'';?>>  

    <label for="categoryname">Category Name</label><br>
    <input type="text" name="categoryname" placeholder="Enter your category name" value=<?php echo $category['category_name']??'';?> required>
    <br><br>

    <label for="categorydescription">Category Description</label><br>
    <input type="text" name="categorydescription" placeholder="Enter your Image URL" value=<?php echo $category['category_description']??'';?> required>
    <br><br>

    
    <input type="submit" value="Update" name="UPDATE_category">
</form>


</body>
</html>
