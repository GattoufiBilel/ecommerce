<?php
//Connextion vers BD
include "../Config/connect.php" ;
include "../Controller/categories.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



</head>

<body>

    <!-- debut navbar-->
    <?php
     include "../inc/header.php" ;
   ?>
    <!-- fin nav bar -->
    <!-- fin nav bar -->


    <!-- formulaire registre -->

    <div class="col-8 m-5">
        <h1 class="text-center"> Connexion</h1>
        <form action="../Controller/connexion.php"  method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="mp" class="form-control" id="exampleInputPassword1">
            </div>

            <input type="submit" name="verif" class="btn btn-primary" value="connexion" />

        </form>
    </div>

    <!-- fin forms registre  -->


    <!-- footer-->
    <?php
        include "../inc/footer.php";
    ?>
    <!-- fin footer -->

    <!-- fin footer -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"> </script>
</html>
