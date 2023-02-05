<?php require_once("cranact.php")?>

<?php


if (isset($_REQUEST["pra"]). isset($_REQUEST["file_Name"]) .isset($_FILES["file"]) ) {


  $descripttion =  $_REQUEST["pra"];
  $photo_name =    $_REQUEST["file_Name"];
  $file =  $_FILES["file"];



     $file_name = $file["name"];
     $tmp_name = $file["tmp_name"];

//get user photo then photo name change used for rendom name  
    $random_name =  rand(0,1111111111111); //photo rendom name 
    $file_name_fixt = $random_name.$file_name;
     move_uploaded_file($tmp_name, "uplodeing image/$file_name_fixt"); uplodeing set folder , 
     header("Location:display image.php");


     if ($connect==true) {

      



      $insrt = "INSERT INTO photo_uplode(descripttion, photo_name, image) 
                VALUES ('$descripttion',   '$photo_name', '$file_name_fixt')"; //file  uplod 


     $conf =  mysqli_query($connect, $insrt);

     if ($conf == true) {
      header("Location:display image.php");

     }else{
echo " file database not uplodeing, check your code"
}}  
} else{
echo " file Request problems. check your code"
}



?>