<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>Body</title>
</head>
    <style>
        
.menu-body{
  position: relative;
  display:flex; 
  flex-direction:column;
}


.menu{
  width:400px;
  box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
  position:absolute;
  margin-top:50px;
  margin-left:90px;
}

.menu-image img{
  height: 282.5px;
  border-radius:5px;

}


.card-text{
  background-color:white;
}

.card-title{
  text-align:center;
  font-size:40px;
  font-family:"Varela Round",sans-serif;
  color:#0d6efd;
}

.card-link{
  /* margin-left:80px; */
}

.card-link b{
  font-family:"Varela Round",sans-serif;
  color:#0d6efd;
  font-size:20px;
  margin:50px;
  cursor:pointer;

}

.card-link i{
  width:20px;
  border:1px solid green;
  margin:50px;
}
    </style>
<body>
    
<?php
    include("header.php")
?>
<div class="menu-body">

<img class="image-fluid" id = "home-image" src="https://i.pinimg.com/originals/33/ef/8b/33ef8b9c0b902154a6cd4103a21275ef.jpg" alt="image">

<!-- menu clickable bar -->
  <div class="menu">
    <div class="menu-image">
      <a href="menu-items.php">
        <img src="https://cdn.pixabay.com/photo/2018/03/07/18/42/menu-3206749_960_720.jpg" alt="cardimage" class="card-image">
      </a>
    </div>
    <div class="card-text">
      <h3 class="card-title">Order your favourite food</h3>
      <p class="card-link">
        <b>Check the menu</b>
        <a href="menu-items.php">
          <i class="fa-solid fa-chevron-right"></i>
        </a>
      </p>
    </div>
  </div>

</div> 

</body>
</html>