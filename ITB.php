<?php
 include("php/dbconn.php");

  if(isset($_POST['form-submit']))
{
  $tenderID = mysqli_real_escape_string($conn,$_POST['tenderID']);
  $bidID = mysqli_real_escape_string($conn,$_POST['bidID']);
  $cost = mysqli_real_escape_string($conn,$_POST['cost']);
  $duration = mysqli_real_escape_string($conn,$_POST['duration']);
  $warranty = mysqli_real_escape_string($conn,$_POST['warranty']);



    $sql = "INSERT INTO itb (tenderID,bidID,cost,duration,warranty) VALUES ('$tenderID ','$bidID','$cost','$duration','$warranty')";
    $run = mysqli_query($conn,$sql);
    if($run){
      header("refresh:0;url=ITB.php");
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

    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    /* table stylesheet */
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

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
  <?php
   include("php/dbconn.php");

   if(!$conn){
    die(mysqli_error());
   }
   mysqli_select_db($conn,"tender");
   $results = mysqli_query($conn,"SELECT TenderID,Tender_Title,Sector,Scope,Description FROM tender ");
echo "  <table>
    <tr>
      <th>TenderID</th>
      <th>Tender Title</th>
      <th>Sector</th>
      <th>Scope</th>
      <th>Description</th>
      <th>Click to Bid</th>
    </tr>";

    while($row = mysqli_fetch_array($results) ){

    	   echo"<tr>";
    	   echo "<td>".$row['TenderID']."</td>";
         echo "<td>".$row['Tender_Title']."</td>";
         echo "<td>".$row['Sector']."</td>";
         echo "<td>".$row['Scope']."</td>";
         echo "<td>".$row['Description']."</td>";
        echo' <td>
           <input type="radio" name="bid" id="9002">
         </td>';
    }
echo"  </td>
  </tr>
</table>";
 ?>

<br><br>

<form class="form-inline" id="" action="" method="post">
    <table>
      <tr>
        <td>
          <label for="tenderID">Tender ID Number (tenderID):</label>
          <input type="text" id="tenderID" name="tenderID">
        </td>
        </tr>
      <tr>
        <td>
          <label for="bidID">Bid ID Number (bidID):</label>
          <input type="text" id="bidID" name="bidID">
        </td>
      </tr>
      <tr>
        <td>
          <label for="cost">Cost:</label>
          <input type="text" id="cost" placeholder="Enter tender bid price" name="cost">
        </td>
      </tr>
      <tr>
        <td>
          <label for="duration">Duration:</label>
          <input type="text" id="duration" placeholder="Enter project duration" name="duration">
        </td>
      </tr>
      <tr>
        <td>
          <label for="warranty">Warranty:</label>
          <input type="text" id="warranty" placeholder="Enter warranty period" name="warranty">
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

  <h3 style="text-align: center; text-decoration: underline;">Interest To Bid (ITB) Form</h3>

</body>
</html>
