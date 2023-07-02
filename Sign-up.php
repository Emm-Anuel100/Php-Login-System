
<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="NFTS investment site">
   <meta name="author" content="Crypto invest">
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

   <title>KRYPTIP | sign up</title>

    <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
   <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
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
                        <a href="index.html" class="logo">
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
      <form action="Sign_up_action.php" method="POST" id="sign-in" onsubmit='return validate()'>
         <h2>Create A New Kryptip Account</h2><br>
         <fieldset>
            <input type="text" name="username" id="name" required="" placeholder="Username">
         </fieldset>
         <fieldset>
            <input type="email" name="email" id="email" required="" placeholder="Email">
         </fieldset>
         <fieldset>
            <input type="password" name="password" id="password1" required="" placeholder="Password (8 characters minimum)">
         </fieldset>
         <fieldset>
            <input type="password" id="password2" required="" placeholder="Comfirm password">
         </fieldset>
         <fieldset>
            <input type="checkbox" id="checked" required="">
          <span>I agree to the <a href="#">Terms of service</a> and <a href="#">Privacy policy</a></span>
         </fieldset>
         <fieldset>
            <input type="checkbox" name="notify" id="checked" value="notify">
          <span>Notify me about new features on Kryptip</span>
         </fieldset>
         <span>already have an account? <a href="Sign-in.php">Login</a></span>
         <fieldset>
            <button type="submit">sign up</button>
         </fieldset>
      </form>
    </div>
      
  
    <script src="./form_validate.js"></script>
</body>
</html>