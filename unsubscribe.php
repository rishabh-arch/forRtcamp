<?php
    require_once 'databaseConnection.php';
    $unsubscribeErr=$fnameErr=$firstname=$lastname=$emailId="";
    if(isset($_POST['unsbscribe'])){
        //Updating element
        $fname = $_POST['fname'] ;
        $lname = $_POST['lname'] ;
        $email = $_POST['email'] ;     
        
        $check=$mysqli->query("SELECT * FROM visitor_det WHERE fname='$fname' AND lname='$lname' AND email='$email'");
        if(mysqli_num_rows($check) == 1)
        {
            // sanitizing data SQL injection              
            $update=$mysqli->query("UPDATE visitor_det SET action='stop' WHERE email='$email' AND fname='$fname' AND lname='$lname'");
            if($update){
                echo "<h1> Thank You! </h1>";
                return;
            }
        }else{
            $unsubscribeErr="You enter wrong details.";
            echo"<h4>In case you not remember your name or email then go to your email inbox and check there for your details.</h4>";
        }
            
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
                <th colspan="3">
                    <h4>XKCD Comics</h4>
                </th>
            </tr>
            <tr>
                <th>
                    <div>
                    <label>First Name</label>
                    </div> 
                </th>
                <th>
                    <input type="text"  name="fname" oninput="this.value = this.value.replace(/[^A-Za-z.]/g, '').replace(/(\..*)\./g, '$1');"
                    placeholder="Enter first name" value="<?php echo $firstname;?>" required>
                </th>
                <th>
                    <span>
                        <?php echo $unsubscribeErr;?>
                    </span>
                </th>
            </tr>
            <tr>
                <th>
                    <div>
                    <label>Last Name</label>
                    </div> 
                </th>
                <th>
                    <input type="text"  name="lname" oninput="this.value = this.value.replace(/[^A-Za-z.]/g, '').replace(/(\..*)\./g, '$1');"
                    placeholder="Enter last name" value="<?php echo $lastname;?>" required>
                </th>
                <th>
                    <span>
                        <?php echo $unsubscribeErr;?>
                    </span>
                </th>
            </tr>
            <tr>
                <th>
                    <div>
                    <label>Email ID</label>
                    </div> 
                </th>
                <th>
                    <input type="email"name="email" placeholder="Enter your email id" value="<?php echo $emailId;?>" required>
                </th>
                <th>
                    <span>
                        <?php echo $unsubscribeErr;?>
                    </span>
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Please click <strong > Unsubscribe</strong> for<br> remove your account from receiving mail from XKCD Comics.</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="unsbscribe">UNSUBSCRIBE</button>
                </td>
            </tr>
        </table>        
    </form>
</body>

</html>
