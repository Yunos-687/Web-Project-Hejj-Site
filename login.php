


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <!-- Custom CSS File Link -->


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
    rel="stylesheet"
    />

    <style>
    body {
    background-image: url('images/heg.png');
    background-size: cover; /* Adjust based on your need: contain, cover, or specific dimensions */
    background-repeat: no-repeat; /* Avoid tiling of the image */
    background-position: center; /* Center the image */
    /* Optional: background color as a fallback */
    background-color: rgba(255, 255, 255, 0.8); /* Slightly opaque white */
}
    </style>
</head>
<body>
    <header>
        
        <!-- Add your left icon here -->
        
       
        </a>
        <h2></h2>
        <a href="#" class="ic">
            <img src="images/mansak1.jpg" class="icon-right" alt="KapeTann Logo">
        </a>
       
</header>




<div class="form-container">
    <form action="login_process.php" method="post" >
       <h3>تسجيل دخول</h3>
       <input type="email" name="email" placeholder="ادخل اسم المستخدم " required class="box">
       <input type="password" name="password" placeholder="ادخل كلمة  المرور " required class="box">

        <?php if(isset($error)): ?>
            <p style="color: red; font-size: 15px"><?php echo $error; ?></p>
        <?php endif; ?>

       <input type="submit" name="submit" value="login  " class="btn btn-lg btn-primary">
       <p><a href="register.php">مستخدم جديد</a></p>
    </form>
 </div>
 
 <footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-2 pb-0">
    <!-- Section: Social media -->
    <section class="mb-2">
      <!-- Facebook -->
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->


  <!-- Copyright -->
</footer>






 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>