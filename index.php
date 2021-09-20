<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #DC7633;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>WELCOME TO</h3>
                  <h1>PEOPLE'S BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/peopless.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #E05926;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #E05926;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #E05926;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        Copyright &copy 2021. Made by <b><a href="https://www.linkedin.com/in/nandita-sharma-2000?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BYOVMPKt%2BQ%2F2VVv%2B3M9EcTg%3D%3D"<b>Nandita Sharma</b></a>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
