<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $m_name = $_POST['m_name'];
   $m_price = $_POST['m_price'];

   $m_exp_date = $_POST['m_exp_date']; 

   $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, exp_date) VALUES('$m_name', '$m_price', '$m_exp_date')") or die('query failed');

   if($insert_query){
      $message[] = 'medicine add succesfully';
   }else{
      $message[] = 'could not add the medicine';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:admin.php');
      $message[] = 'medicine has been deleted';
   }else{
      header('location:admin.php');
      $message[] = 'medicine could not be deleted';
   };
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   
    

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header.php'; ?>

<div class="container">

<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>add a new medicine</h3>
   <input type="text" name="m_name" placeholder="enter the medicine name" class="box" required>
   <input type="number" name="m_price" min="0" placeholder="enter the medicine price" class="box" required>
   <input type="date" name="m_exp_date" min="0" class="box" required>

   <input type="submit" value="add the medicine" name="add_product" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>

         <th>product name</th>
         <th>product price</th>

         <th>action</th>
         <th>expiry date </th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>
         <tr>
            <td><?php echo $row['name']; ?></td>
            <td>BDT<?php echo $row['price']; ?>/-</td>
            <td>
               <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
            
            </td>
            <td><?php echo $row['exp_date']; ?></td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>


</section>

</div>


</body>
</html>