<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
    <title>خدمة العملاء</title>
    <style>
          body {
            background-image: url('images/heg.png');
            background-size: cover; /* Adjust based on your need: contain, cover, or specific dimensions */
            background-repeat: no-repeat; /* Avoid tiling of the image */
            background-position: center; /* Center the image */
            /* Optional: background color as a fallback */
            background-color: rgba(255, 255, 255, 0.8); /* Slightly opaque white */
            direction: rtl;
            height: 1000px;
        }
        header{
            height:150px;
            position: relative; 
            padding: 0 200px 20px;
            display: flex;
        }

    </style>
</head>
<body>
<header>
    <a href="#" class="ic icon-logo">
        <img src="images/mansak1.jpg" alt="KapeTann Logo">
    </a>
    
    <div class="backspace">
        <a href="home.php">
            <img src="images/backspace.png" class="" alt="KapeTann Logo">
        </a>
    </div>
</header>

<div class="main-content">
    <div  class="contactContainer">
        <h1>خدمة العملاء</h1>
        <form action="action_page.php">
      
          <label for="fname">الاسم</label>
          <input type="text" id="fname" name="firstname" placeholder="اكتب اسمك">
      
          <label for="email">الايميل</label>
          <input type="text" id="lname" name="email" placeholder="اكتب ايميلك">
      
          <label for="country">إختر دولة</label>
          <select id="country" name="country">
            <option value="australia">السعودية</option>
            <option value="canada">الكويت</option>
            <option value="usa">قطر</option>
            <option value="usa">أخرى</option>

          </select>
      
          <label for="subject">الاستفسار</label>
          <textarea id="subject" name="subject" placeholder="أكتب استفسارك هنا" style="height:200px"></textarea>
      
          <input class="contactsubmit" type="submit" value="ارسل">
      
        </form>
    </div>

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
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"> </script>
</body>

</html>