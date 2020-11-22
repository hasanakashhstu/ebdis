<?php
 include("php/dbconn.php");
 function randomPassword() {
     $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
     $pass = array();
     $alphaLength = strlen($alphabet) - 1;
     for ($i = 0; $i < 8; $i++) {
         $n = rand(0, $alphaLength);
         $pass[] = $alphabet[$n];
     }
     return implode($pass);
   }
  if(isset($_POST['form-submit']))
{
  $user = mysqli_real_escape_string($conn,$_POST['user']);
  $pidn = mysqli_real_escape_string($conn,$_POST['pidn']);
  $contact = mysqli_real_escape_string($conn,$_POST['contact']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password=randomPassword();
  $company = mysqli_real_escape_string($conn,$_POST['company']);
  $address = mysqli_real_escape_string($conn,$_POST['address']);


    $sql = "INSERT INTO user (user_name,PIDN,contact_number,email_address,password,company_name,company_address) VALUES ('$user','$pidn','$contact','$email','$password','$company','$address')";
    $run = mysqli_query($conn,$sql);
    if($run){
 include("php/mailer.php");
    }
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EBIDS</title>
  <style>
/* form stylesheet */
form {
      width: 60%;
      border: 1px solid black;
      margin: 0 auto;
    }

    .form-inline {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    }

    .form-inline label {
      margin: 5px 10px 5px 0;
    }

    .form-inline input {
      vertical-align: middle;
      margin: 5px 10px 5px 0;
      padding: 10px;
      background-color: #fff;
      border: 1px solid #ddd;
    }

    .form-inline button {
      padding: 10px 20px;
      background-color: dodgerblue;
      border: 1px solid #ddd;
      color: white;
      cursor: pointer;
    }

    .form-inline button:hover {
      background-color: royalblue;
    }

    @media (max-width: 800px) {
      .form-inline input {
        margin: 10px 0;
      }

      .form-inline {
        flex-direction: column;
        align-items: stretch;
      }
    }
  </style>

</head>
<body>
      <form class="form-inline" id="" action="" method="post">
    <table>
      <tr>
        <td>
          <label for="user">User name:</label>
          <input type="text" id="user" name="user" required>
        </td>
        </tr>
      <tr>
        <td>
          <label for="pidn">Personal ID Number (PIDN):</label>
          <input type="text" id="pidn" name="pidn" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="contact">Contact Number:</label>
          <input type="text" id="contact" name="contact" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="company">Company Name:</label>
          <input type="text" id="company" name="company">
        </td>
      </tr>
      <tr>
        <td>
          <label for="address">Company Address:</label>
          <input type="text" id="address" name="address">
        </td>
      </tr>
        <tr>
          <td>
            <button type="submit" name="form-submit" class="button">
              Submit
            </button>
          </td>
        </tr>
    </table>

  </form>
</body>
</html>
