<?php
session_start();

// Check if the user is logged in (assuming you store email in session after successful login)
if (isset($_SESSION['email'])) {
    // Check if session activity timestamp is set
    if (isset($_SESSION['last_activity'])) {
        // Calculate time difference between current time and last activity
        $inactive_time = time() - $_SESSION['last_activity'];

        // Check if user has been inactive for 10 minutes (600 seconds)
        if ($inactive_time > 600) {
            // Destroy the session and log the user out
            session_unset();
            session_destroy();
            header("Location: login.php"); // Redirect to login page
            exit();
        }
    }

    // Update session activity timestamp
    $_SESSION['last_activity'] = time();

    // User is still active, continue with page processing
} else {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Your page content here
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
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


</head>
<body>
    <header>
        
        <!-- Add your left icon here -->
        
       
        <div class="navbar"> 
            <div class="bton">
              <a href="contact.php">

                <button class="btn1" type="button" >خدمة العملاء</button>
              </a>
            <a href="mansak.php">
            <button  type="button" >مَنٌِسَك </button>

            </a>
            
            </div>
        

          <div class="dropdown">
            <img src="images/ln.png" alt="Dropdown" class="dropdown-icon">
            <div class="dropdown-content" id="dropdownContent">
              <a href="#">العربيه</a>
              <a href="#">الإنجليزيه</a>
             
            </div>

            
          </div>
          <div class="dropdown">
            <img src="images/call.png" alt="Dropdown" class="dropdown-icon2">
            <div class="dropdown-content2" id="dropdownContent2">
              <a href="#">الهلال الاحمر (997)</a>
              <a href="#">الدوريات الأمنية(999)</a>

            </div>
          </div>
          <div class="dropdown">
            <img src="images/op.png" alt="Dropdown" class="dropdown-icon1">
            <div class="dropdown-content1" id="dropdownContent1">
              <a href="logout.php">تسجيل الخروج</a>
              <a href="register.php">إنشاء حساب</a>
              <a href="mansak.php">منسك</a>
              <a href="contact.php">خدمة العملاء</a>
            </div>
          </div>
        </div>
            
           
       
          <a href="#" class="ic icon-logo">
              <img src="images/mansak1.jpg" alt="KapeTann Logo">
          </a>
          
    
</header>
<video autoplay muted loop id="video-bg">
    <source src="vid.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
<div class="tx">
<div class="tex">موقع للحج والعمرة يساعد المسلمين في تنظيم وتسهيل رحلتهم، وتوفير معلومات مفصلة عن مناسك الحج والعمرة، وتوجيه الحجاج والمعتمرين خلال رحلتهم بتقديم خرائط للمواقيت وشرح . الحج والعمرة، كما نوفر خاصية المتابعة إتمام كل المناسك منسك من مناسك الحج والعمرة بالترتيب لسهولة التنظيم</div>

</div>
<div class="btns"> 
    <a href="ommrah.php">

      <button class="btn1" type="button" >العمره </button>
    </a>
    <a href="haj.php">

      <button class="btn2"type="button" > الحج</button>
    </a>
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
 
    <script>

        document.addEventListener("DOMContentLoaded", function() {
          var dropdownIcon = document.querySelector('.dropdown-icon');
          var dropdownContent = document.querySelector('.dropdown-content');

          dropdownIcon.addEventListener('mouseenter', function() {
            dropdownContent.style.display = 'block';
          });

          dropdownIcon.addEventListener('mouseleave', function() {
            dropdownContent.style.display = 'none';
          });

          dropdownContent.addEventListener('mouseenter', function() {
            dropdownContent.style.display = 'block';
          });

          dropdownContent.addEventListener('mouseleave', function() {
            dropdownContent.style.display = 'none';
          });
        });

        document.addEventListener("DOMContentLoaded", function() {
          var dropdownIcon = document.querySelector('.dropdown-icon1');
          var dropdownContent = document.querySelector('.dropdown-content1');

          dropdownIcon.addEventListener('mouseenter', function() {
            dropdownContent.style.display = 'block';
          });

          dropdownIcon.addEventListener('mouseleave', function() {
            dropdownContent.style.display = 'none';
          });

          dropdownContent.addEventListener('mouseenter', function() {
            dropdownContent.style.display = 'block';
          });

          dropdownContent.addEventListener('mouseleave', function() {
            dropdownContent.style.display = 'none';
          });
        });
        document.addEventListener("DOMContentLoaded", function() {
          var dropdownIcon = document.querySelector('.dropdown-icon2');
          var dropdownContent = document.querySelector('.dropdown-content2');

          dropdownIcon.addEventListener('mouseenter', function() {
            dropdownContent.style.display = 'block';
          });

          dropdownIcon.addEventListener('mouseleave', function() {
            dropdownContent.style.display = 'none';
          });

          dropdownContent.addEventListener('mouseenter', function() {
            dropdownContent.style.display = 'block';
          });

          dropdownContent.addEventListener('mouseleave', function() {
            dropdownContent.style.display = 'none';
          });
        });

    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Check if the full name is set in the session
        var fullName = "<?php echo isset( $_SESSION['fullName']) ?  $_SESSION['fullName']: ''; ?>";
        
        // Update the content of the accountName div with the full name
        if (fullName !== '') {
            $(".accountName").text("Hello " + fullName);
        }
    });
</script>

</body>

</html>