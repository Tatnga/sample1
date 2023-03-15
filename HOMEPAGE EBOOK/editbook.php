<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Book</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="estyle.css">

</head>
<body>
   <?php
       if(isset($message)){
          foreach($message as $message){
             echo '<span class="message">'.$message.'</span>';
          }
       } 
    ?>

    <div class="container">


<div class="admin-product-form-container centered">

   <!--?php
      
      $select = mysqli_query($conn, "SELECT * FROM karte_upload WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?-->
   <form action="" method="post" enctype="multipart/form-data">
    <img src="Ebook.png" width="150px" class="center">
      <h3 class="title">Book Update</h3>
      <input type="text" class="box" name="product_name"placeholder="Enter the Book Name :">
      <input type="text" min="0" class="box" name="product_price"  placeholder="Enter Book Author :">
      <input type="text" min="0" class="box" name="product_description"placeholder="Enter Book Catalog genre :">
      <input type="text" min="0" class="box" name="product_specs" placeholder="Enter Book Publish Date :">
      <input type="text" min="0" class="box" name="product_specs" placeholder="Enter Book Quantity :">
      <p style="text-align:left;color:black;font-weight:bold;">Enter Book Image</p>
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <img src="../upload/<?php echo $row['image']; ?>" height="100" alt=""></td>
      <input type="submit" value="update" name="update_product" class="btn">
      <a href="bookinfo.php" class="btn">Go back!</a>
   </form>
</div>
</div>
        

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>



</body>
<style>
body{
  background-color: wheat;
}

  :root{
   --green:#27ae60;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.1rem solid var(--black);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

.btn{
   display: block;
   width: 100%;
   cursor: pointer;
   border-radius: .5rem;
   margin-top: 1rem;
   font-size: 1.7rem;
   padding:1rem 3rem;
   background: #547573;
   color:var(--white);
   text-align: center;
}

.btn:hover{
   background: var(--black);
}

.message{
   display: block;
   background: var(--bg-color);
   padding:1.5rem 1rem;
   font-size: 2rem;
   color:var(--black);
   margin-bottom: 2rem;
   text-align: center;
}

.container{
   max-width: 1200px;
   padding:2rem;
   margin:0 auto;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 35%;
}

.admin-product-form-container.centered{
   display: flex;
   align-items: center;
   justify-content: center;
   min-height: 100vh;
   
}

.admin-product-form-container form{
   max-width: 50rem;
   margin:0 auto;
   padding:2rem;
   border-radius: .5rem;
   background: var(--bg-color);
}

.admin-product-form-container form h3{
   text-transform: uppercase;
   color:var(--black);
   margin-bottom: 1rem;
   text-align: center;
   font-size: 2.5rem;
}

.admin-product-form-container form .box{
   width: 100%;
   border-radius: .5rem;
   padding:1.2rem 1.5rem;
   font-size: 1.7rem;
   margin:1rem 0;
   background: var(--white);
   text-transform: none;
}

.product-display{
   margin:2rem 0;
}

.product-display .product-display-table{
   width: 100%;
   text-align: center;
}

.product-display .product-display-table thead{
   background: var(--bg-color);
}

.product-display .product-display-table th{
   padding:1rem;
   font-size: 2rem;
}


.product-display .product-display-table td{
   padding:1rem;
   font-size: 2rem;
   border-bottom: var(--border);
}

.product-display .product-display-table .btn:first-child{
   margin-top: 0;
}

.product-display .product-display-table .btn:last-child{
   background: crimson;
}

.product-display .product-display-table .btn:last-child:hover{
   background: var(--black);
}

@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   .product-display{
      overflow-y:scroll;
   }

   .product-display .product-display-table{
      width: 80rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

}
</style>
</html>