
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    />
    <style>
      @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
     
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

.login-box {
    width: 300px;
    padding: 40px;
    position: absolute;
    /* background:lightgreen; */



    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;

}
.login-box h1{
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}

.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: green;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
  color:black;
}

.bottom a{
    margin-top:10px;
    text-decoration:none;
    color:red;
    font-weight:bold;
}
    </style>
  </head>
  <body>
    <?php
      include("header.php")
    ?>
    <form class="login-box">
      <h1>Sign Up</h1>
      <div class="textbox">
        <!-- <i class="fas fa-user"></i> -->
        <input type="email" placeholder="Enter your gmail" />
      </div>

      <div class="textbox">
        <!-- <i class="fas fa-lock"></i> -->
        <input type="password" placeholder="Password" />
      </div>

      <div class="textbox">
        <!-- <i class="fas fa-lock"></i> -->
        <input type="password" placeholder="Confirm Password" />
      </div>

      <div class="bottom">
          <a href="login.php">Already have an Account?</a>
          <input type="button" class="btn" value="Sign in" />

      </div>
    </form>
  </body>
</html>
