<?php
    session_start();
    require_once 'config.php';  
    if(isset($_POST['goToVerify'])){
        header("location:verifyEmail.php");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rtCamp Asssignment</title>
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <th colspan="2">
          <p>XKCD Comics</p>
        </th>
      </tr>
      <tr>
        <th colspan="2">
          <p><strong>Thank you..!</strong></p>
        </th>
      </tr>
      <tr>
        <th colspan="2">
          <?php
            echo "<p class='text-primary display-3 text-wrap fw-bold'> ---" . $_SESSION['fname']." ". $_SESSION['lname'].  "---</p>";
          ?>
        </th>
      </tr>
      <tr>
        <td colspan="2">
        <p ><strong>Please check your email for OTP</strong>.Click <strong>Continue </strong>to go next page</p>

        </td>
      </tr>
      <tr>
        <th colspan="2">
        <button  type="submit" name="goToVerify">Continue</button>
        </th>
      </tr>
    </table>
  </form>
</body>
</html>
