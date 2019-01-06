 <?php

include('db.php');
include("function.php");

if(isset($_POST["user_id"]))
{
 $image = get_image_name($_POST["user_id"]);
 if($image != '')
 {
  unlink("upload/" . $image);
 }
 $statement = $connection->prepare(
  "DELETE FROM product WHERE id = :product_id"
 );
 $result = $statement->execute(
  array(
   ':product_id' => $_POST["user_id"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}



?>
   