<?php
require('config.php');

    $target_dir = "assets/img/product-img/";
    $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["productImage"]["tmp_name"]);
      if($check !== false) {
        $uploadOk = 1;
      } else {
        echo '<script>alert("File is not an image")</script>';
        $uploadOk = 0;
      }

      $brandName = $_REQUEST['brandName'];
      $genericName = $_REQUEST['genericName'];
      $dosageStrength = $_REQUEST['dosageStrength'];
      $dosageForm = $_REQUEST['dosageForm'];
      $drugAdministration = $_REQUEST['drugAdministration'];
      $stockQuantity = $_REQUEST['stockQuantity'];
      $price = $_REQUEST['price'];
      $manufacturer = $_REQUEST['manufacturerName'];
      $category = $_REQUEST['category'];
      $condition = $_REQUEST['condition'];

      mysqli_query($con, "ALTER TABLE product AUTO_INCREMENT=51;") or die(mysql_error());
      $sql = "INSERT INTO product( BrandName, GenericName, DosageStrength, DosageForm, DrugAdministration, StockQuantity, Price, ManufacturerID, CategoryID, in_stock) VALUES('$brandName', '$genericName', '$dosageStrength', '$dosageForm', '$drugAdministration', '$stockQuantity', '$price', '$manufacturer', '$category', 1);";
      $result= mysqli_query($con, $sql) or die(mysql_error());
      
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo '<script>alert("Sorry, file already exists.")</script>';
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo '<script>alert("Sorry, your file was not uploaded.")</script>';

    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
        echo '<script>alert("Success")</script>';
        header("Location: admin-products.php");
      } else {
      echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
      }
    }
?>