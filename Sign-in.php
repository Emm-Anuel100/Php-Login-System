
<?php
  session_start();

  if (isset($_SESSION['id'])) {
      header("Location: index.php");
  }

  //*****  include connection file  *****//
  include_once('conn.php');
  
  if (isset($_POST['email'])) {

      $email    = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']); 
      
        $query  = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)) {
              //*****  Verifies if password matches already hashed password in database *****//
            if (password_verify($password, $row['password'])) {
                $_SESSION['id'] = $row['id'];
                //*****  redirect to index page  *****//
                header("Location: index.php");
            }else{
                ?>
                <script lang="javascript" type="text/javascript">
                  alert("Password provided is invalid");
                </script>
                <?php
            }    
          }
        }else{
          ?>
          <script lang="javascript" type="text/javascript">
            alert("Email provided is invalid");
          </script>
          <?php 
        } 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Kryptip investment site">
   <meta name="author" content="Crypto invest">
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

   <title>KRYPTIP | sign in</title>

    <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
   <link rel="stylesheet" href="assets/css/sign-in.css">
</head>

<body>
   
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                          KRYPTIP
                        </a>
                        <!-- ***** Logo End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
  
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
       
       <img src="./assets/images/Background.png" alt="" id="bg_img">
   </section>
    <!-- ***** Main Banner Area End ***** -->
 
    
    <div class="form-section">
      <form action="Sign-in.php" method="POST" id="sign-in">
        <h2>Login And Start Earning</h2><br>
         <fieldset>
            <input type="email" name="email" id="email" required="" placeholder="Email">
         </fieldset>
         <fieldset>
            <input type="password" name="password" id="password" required="" placeholder="Password">
         </fieldset>
         <span>don't have an account? <a href="Sign-up.php">sign up</a></span>
         <fieldset>
            <button type="submit" name="login">Login</button>
         </fieldset>
      </form>

    </div>
</body>
</html>
