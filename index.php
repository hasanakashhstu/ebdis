<?php
 include("php/dbconn.php");


 if(isset($_POST['reset']))
 {
    header("refresh:0; url=index.php");
 }
if(isset($_POST['new_user']))
{
   header("refresh:0; url=register.php");
}
 if(isset($_POST['submit_log']))
 {
   $PIDN = mysqli_real_escape_string($conn,$_POST['PIDN']);
   $password = mysqli_real_escape_string($conn,$_POST['password']);
   $query ="select * from user where PIDN ='$PIDN ' and password='$password'";
   $run = mysqli_query($conn,$query);
   $count=mysqli_num_rows($run);

   if ($count>0)
     {
       header("refresh:0; url=index.php");
       $message = " You are logged In now...";
       echo "<script type='text/javascript'>alert('$message');</script>";
     }
   else
     {
       header("refresh:0; url=index.php");
       $message ="Incorrect UserName and Password combination...";
       echo "<script type='text/javascript'>alert('$message');</script>";

     }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style.css">

  <title>EBIDS</title>
</head>
<body>
  <div class="main-content">
    <header class="banner">
      <img class="banner__logo" src="img/logo.png" alt="logo">
    </header>
    <main>
      <div class="left-column">
        <a href="#"><img src="img/home.png" alt="home"></a>
        <a href="#"><img src="img/about.png" alt="about"></a>
        <a href="#"><img src="img/blog.png" alt="blog"></a>
        <a href="#"><img src="img/contact.png" alt="contact"></a>

        <h2 class="login-text">User Login</h2>
        <form action="" class="login-form"  id="" action="" method="post">

          <table>
            <tr>
              <td>
                <label for="pidn">PIDN:</label>
                <input type="text" id="PIDN" name="PIDN" >
              </td>
            </tr>
            <tr>
              <td>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" >
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" name="submit_log" class="button">
                  Submit
                </button>
                <button type="submit" name="reset" class="button">Reset</button>
                <button type="submit" name="new_user" class="button">New User</button>
              </td>
            </tr>
          </table>

        </form>

      </div>
      <div class="right-column">
        <br>
        <br>
        <h2>Electronics Bidding System (EBIDS)</h2>
        <br>
        <p>This is a brief description of the EBIDS system.</p>
        <p>This is a brief description of the EBIDS system.</p>
        <p>This is a brief description of the EBIDS system.</p>
        <p>This is a brief description of the EBIDS system.</p>
        <p>This is a brief description of the EBIDS system.</p>
        <p>This is a brief description of the EBIDS system.</p>
        <p>This is a brief description of the EBIDS system.</p>

        <br>
        <h2>Request fro Tender (RFT)</h2>
        <br>
        <p>This is a brief description of RFT.This is a brief description of RFT.This is a brief description of RFT.This is a brief description of RFT.This is a brief description of RFT.</p>

        <br>
        <h2>Interest to Bid (ITB)</h2>
        <br>
        <p>This is a brief description of ITB.This is a brief description of ITB.This is a brief description of ITB.This is a brief description of ITB.This is a brief description of ITB.</p>

        <img id="ad" src="img/giphy.gif" alt="ad">
      </div>
    </main>

    <footer class="footer">
      Copyright &#169; 2020 EBIDS pte Ltd
    </footer>
  </div>


</body>
</html>
