<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        <?php if(isset($_SESSION['tasks'])) : ?>
            var tasksFromSession = <?php echo json_encode($_SESSION['tasks']); ?>;
        <?php else : ?>
            var tasksFromSession = []; // Set tasksFromSession to an empty array if $_SESSION['tasks'] is not set
        <?php endif; ?>
        console.log(tasksFromSession[0]);
    </script>
    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Font Awesome -->
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Cairo:wght@300&family=Jomhuria&display=swap" rel="stylesheet">
    
    <title>End  </title>
    <style>

        body {
            direction: rtl;
            height: 100%;
        }

        h1 {
            display: block;
            text-align: right;
            margin: 30px;
        }

        header {
            height: 150px;
            position: relative;
            padding: 30px 88px 80px;
            display: flex;
        }


    </style>
</head>
<body>
    <header>
        <a href="#" class="ic icon-logo">
            <img src="../images/mansak1.jpg" alt="KapeTann Logo">
        </a>
        
        <div class="backspace">
            <a href="../home.php">
                <img src="../images/backspace.png" class="" alt="KapeTann Logo">
            </a>
        </div>
    </header>
    <div class="hero-image8"> </div>


    <div class="main-content">

    <?php
    // Retrieve the parameter value from the URL
    $parameterValue = isset($_GET['param']) ? $_GET['param'] : '';

    // Style for the h1 tag
    $style = 'position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);';

    // Display the parameter value as an h1 tag with the specified style
    echo "<h1 style=\"$style\">$parameterValue</h1>";
    ?>


  


    

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



    <script src="../checkScript.js"></script>

</body>

</html>