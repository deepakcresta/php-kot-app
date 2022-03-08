<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOT SYSTEM</title>
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  </head>
  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    
    .header{
      display:flex;
      align-items:center;
      justify-content:space-around;
      height:60px;
    }

    .nav-links{
      display:flex;
      justify-content:space-around;
    }

    .nav-links li{
      list-style:none;
      text-decoration:none;
      margin-right:60px;
    }

    .nav-links li a{
      text-decoration:none;
      font-family:poppins;
    }

    .login-buttons{
      display:flex;
      justify-content:space-around;
    }

    .login,.signup{
      margin-left:40px;
      text-decoration:none;
      background:#333;
      color:white;
      padding:5px 10px 5px 10px;
      border-radius:5px;
    }

   
    
  </style>
<body>

<!-- Heder part start -->
  <nav class="header">
       <div class="logo">
           <h4>KOT</h4>
       </div>
      
          <ul class="nav-links">
            <li><a href="body.php">Home</a></li>
            <li><a href="menu-items.php">Menu</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Project</a></li>
          </ul>

        <div class="login-buttons">
            <a href = "login.php" class="login">Login</a>
            <a href = "signup.php" class="signup" >Sign Up</a>
            
        </div>
   </nav> 
<!-- Header part end -->


</body>
</html>