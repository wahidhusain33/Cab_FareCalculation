<?php 
include 'array.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ced-Cab</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="index.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    
    <button class="btn btn-outline-success me-2" type="button">CedCab</button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Book a Ride</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Update Account</a></li>
            <li><a class="dropdown-item" href="#">Change Password</a></li>
            <li><a class="dropdown-item" href="#">New Account</a></li>
          </ul>
        </li>
        <a class="nav-link" href="#">Log Out</a>
      </div>
    </div>
  </div>
</nav>
<div id="container">
<div class="div1" id="div1">
    Pick your Destination
</div>
<div class="div1" id="div2">
    Choose from a range of Catergories and Prices
</div>
<div id="bookDiv">
   <span id="taxi">City Taxi</span>
   <span id="bor"></span>
  <span id='ad'> LET US DROP YOU !</span>

  <div id="formDiv1">
  
  <form action="" method="POST" id="form">
  <div class="input-group mb-3">
  <label class="input-group-text"
  for="pick">Pick Up</label>
  <select class="form-select" id="pick" class="pick"  name="pick">
    <option value="Pick_Location" selected>Location</option>

    <?php
    foreach(location as $key=>$val){
      ?>
      <option value='<?php echo $key ;?>'><?php echo $key ;?></option>
   <?php
    }
    ?>
  </select>
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="drop">Drop</label>
  <select class="form-select" id="drop" class="drop" name="drop">
    <option value="Drop_Location" selected>Location</option>
    <?php
    foreach(location as $key=>$val){
      ?>
      <option value='<?php echo $key ;?>'><?php echo $key ;?></option>
   <?php
    }
    ?>
  </select>
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text" for="sel">CAB Type</label>
  <select class="form-select" id="sel" name="cab">
    <option selected>Select Cab</option>

    <?php
    foreach( cabType as $key => $val){
      ?>

      <option value='<?php echo $val ?>'><?php echo $val ?></option>
      <?php
    }
    ?>
  </select>
  </div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Luggage</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="place" placeholder="In kg" name="luggage">
</div>

<div class="col-12">
    <input class="btn btn-primary" type="submit" id="submit" name='submit' value="Calculate Fare">
</div>

  </form>
  
  </div>
     </div>
</div>

<footer>
        <div class="main63">
            <p id="main611">Contact Info</p>
            <p><b>Phone</b><a href=""> 2484878</a><br>
                <b>Email</b><a href=""> cab@cedcab.com</a><br>
                <i class="fab fa-facebook" style="color:#4E943C; font-size:30px;margin-top:20px;"></i>
                <i class="fab fa-instagram" style="color:#4E943C; font-size:30px;margin-top:20px;margin-left:50px;"></i>
        </div>
</footer>

<div class="modal" tabindex="-1" role="dialog" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Booking Detail</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="changes">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>