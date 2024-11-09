<?php 
include('../db_board_conn.php');

if (isset($_GET['id'])){
    $id=$_GET['id'];

    $query="SELECT * FROM user_item WHERE `item_id`=:id";

    $statment=$connection->prepare($query);
    $statment->bindParam(':id',$id,PDO::PARAM_INT);
    $statment->execute();

    $item=$statment->fetch(PDO::FETCH_ASSOC);
    // print_r($user);

}

if (isset($_POST['UPDATE_items'])) {
    $des= $_POST['des'];
    $image = $_POST['image'];
    $number = $_POST['num'];
    $category = $_POST['category'];
    $id=$_POST['id'];


    $query="UPDATE `user_item` SET 
                `item_description` = :item_description, 
                `item_image` = :item_image, 
                `item_total_number` = :item_total_number ,
                `category_id`= :category_id WHERE `item_id` = :item_id";

    $statment=$connection->prepare($query);
    $statment->bindParam('item_description',$des);
    $statment->bindParam('item_image',$image);
    $statment->bindParam('item_total_number',$number);
    $statment->bindParam('category_id',$category);
    $statment->bindParam('item_id',$id);

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
    value=<?php echo $item['item_id']??'';?>>  

    <label for="des">Description</label><br>
    <input type="text" name="des" placeholder="Enter your Description" value=<?php echo $item['item_description']??'';?> required>
    <br><br>

    <label for="image">Image URL</label><br>
    <input type="text" name="image" placeholder="Enter your Image URL" value=<?php echo $item['item_image']??'';?> required>
    <br><br>

    <label for="num">Total Number</label><br>
    <input type="number" name="num" placeholder="Enter your Number" value=<?php echo $item['item_total_number']??'';?> required>
    <br><br>

    <label for="category">Category id</label><br>
    <input type="number" name="category" placeholder="Enter your Number" value=<?php echo $item['category_id']??'';?> required>
    <br><br>
    
    <input type="submit" value="Update Item" name="UPDATE_items">
</form>


</body>
</html>
