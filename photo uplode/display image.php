<?php require_once("cranact.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style All/display_image.css">

</head>

<body>
    <?php


    if ($connect == true) {





        $select = "SELECT  descripttion, photo_name, image FROM photo_uplode";

        $select_conf = mysqli_query($connect, $select);
if ($select_conf==true) {
    # code...
}
        while ($select_array = mysqli_fetch_array($select_conf)) {
            $descripttion =  $select_array["descripttion"];
            $photo_name =  $select_array["photo_name"];
            $image =  $select_array["image"];






    ?>
  
    <div class="card">
        <div class="card_name">
            <h3><?php echo $photo_name ?></h3>

            <img width="150px" height="200px" src="uplodeing imase/<?php echo $image ?>" alt="<?php echo $image ?>">

        </div>
        <div class="card_title">
            <span> <?php echo $descripttion ?></span>
        </div>
    </div>

<?php 


}
   }  ?>



</body>

</html>