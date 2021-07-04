<?php
require('connect.php');
require('session.php');

if (isset($_POST['btnlogin'])) {
  $con = openCon();
  $email = trim($_POST['email']);
  $pass = trim($_POST['pass']);
  $h_pass = password_hash($pass, PASSWORD_DEFAULT);

  if ($pass == ''){
    ?>
    <script type="text/javascript">
      alert("Password is missing!");
      window.location = "../../index.php";
    </script>
    <?php
  } else{
  //create some sql statement             
    $sql = "SELECT * FROM  `users` u INNER JOIN `user_accounts` ua ON u.`user_id` = ua.`user_id` WHERE u.`email` = '$email'";

    $result = mysqli_query($con, $sql);

    if ($result){
      //get the number of results based n the sql statement
      $numrows = mysqli_num_rows($result);
  
      //check the number of result, if equal to one   
      //IF theres a result
      if ($numrows > 0) {
          //store the result to a array and passed to variable found_user
          $found_user  = mysqli_fetch_array($result);

          //fill the result to session variable
          $_SESSION['USER_ID']  = $found_user['user_account_id'];
          $_SESSION['FIRST_NAME'] = $found_user['first_name'];
          $_SESSION['LAST_NAME']  =  $found_user['last_name'];
          $_SESSION['MIDDLE_NAME']  =  $found_user['middle_name'];
          $_SESSION['FB_LINK']  =  $found_user['fb_link'];
          $_SESSION['CONTACT_NUM']  =  $found_user['c_num'];
          $_SESSION['STREET']  =  $found_user['street'];
          $_SESSION['BARANGAY']  =  $found_user['barangay'];
          $_SESSION['CT_MUN']  =  $found_user['ct_mun'];
          $_SESSION['PROVINCE']  =  $found_user['province'];
          $_SESSION['ZIP_CODE']  =  $found_user['zip_code'];
          $_SESSION['EMAIL']  =  $found_user['email'];
          
          $passMatch = password_verify($pass, $found_user['password']);
          if($passMatch){
            header("Location: ../../core/home.php");
          } else {
            ?><script type="text/javascript">
            alert('Username or Password Not Found! Please contact your administrator.');
            window.location = "../../index.php";
            </script>
            <?php
          }
      } else {
      //IF theres no result
        ?><script type="text/javascript">
          alert("Username or Password Not Found! Please contact your administrator.");
          window.location = "../../index.php";
        </script>
        <?php
      }
    } else {
      die("Table Query failed: " );
    }
        
  }       
} 
 
?>