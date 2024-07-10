<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>اليوم الحادي عشر</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function() {
        // User email from session (in real implementation, this should be securely passed from the server)
        var userEmail = "<?php echo $_SESSION['email']; ?>";

        // Call the PHP script and pass the dateDay value
        $.get('../php/retrieveManasek.php', { dateDay: 'الحادي' }, function(data) {
            // Parse the JSON response
            var manasek = JSON.parse(data);

            // Dynamically generate and display the checklist
            var checklistDiv = $('#checklist');
            manasek.forEach(function(item) {
                var itemId = item.M_ID; // Use the Manasek ID as the checkbox ID
                var html = '<input type="checkbox" id="' + itemId + '" data-id="' + itemId + '" disabled onchange="itemChecked(this)">'+
                          '<label for="' + itemId + '">' + item.Name + '</label> <span>' + item.Description + '</span><br>';
                checklistDiv.append(html);
            });

            // enable the first checkbox and disable the others 

            checkCheckboxes();
            $('#checklist input[type="checkbox"]:first').prop('disabled', false);

            // Retrieve user_manasek records associated with the current user
        });

           // Function to check checkboxes based on user_manasek records
           function checkCheckboxes() {
          // Retrieve user_manasek records associated with the current user
          $.get('../php/retrieveUserManasek.php', { userEmail: userEmail }, function(data) {
              // Parse the JSON response
              var userManasek = JSON.parse(data);

              // Iterate over user_manasek records
              userManasek.forEach(function(record) {
                  var manasekId = record.M_ID;

                  // Check if the checkbox exists
                  var checkbox = $('#' + manasekId);
                  if (checkbox.length > 0) {
                      // Mark the checkbox as checked
                      checkbox.prop('checked', true);
                      
                      // Remove the onchange attribute
                      checkbox.removeAttr('onchange');

                      // Get the ID of the next checkbox
                      var nextCheckboxId = manasekId + 1;

                      // Enable the next checkbox
                      var nextCheckbox = $('#' + nextCheckboxId);
                      if (nextCheckbox.length > 0) {
                          nextCheckbox.prop('disabled', false);
                      }
                  }
              });
          });
      }



    });
    
 

    // Function to handle checkbox change event
  function itemChecked(checkbox) {
      if (checkbox.checked) {
          // Get Manasek ID from data attribute
          var manasekId = $(checkbox).data('id');
          var userEmail = "<?php echo $_SESSION['email']; ?>";

          // Send AJAX request to insert data into user_manasek table
          $.post('../php/insertUserManasek.php', {
              userEmail: userEmail,
              manasekId: manasekId
          }, function(response) {
              console.log(response);
              // Handle the response if needed
              
              // Get the ID of the next checkbox
              var nextCheckboxId = manasekId + 1;

              // Enable the next checkbox
              var nextCheckbox = $('#' + nextCheckboxId);
              if (nextCheckbox.length > 0) {
                  nextCheckbox.prop('disabled', false);
              }
          });
      }
  }



    // Example function for checkbox change even
    </script>

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
<body id="eighth">
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
      <h1 class="amiri-bold">اليوم الحادي عشر من ذي الحجة</h1>


      <div class="checklist" id="checklist">
        <!-- Dynamically generated checklist items will be appended here -->
      </div>

  


    <a href="tenth_day.php" style="display: inline-block;margin-right: 70%;">
        <button type="button" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>السابق</button>
    </a>
    <a href="twelvth_day.php" style="display: inline-block;">
        <button type="button" class="btn btn-secondary btn-rounded" data-mdb-ripple-init>التالي</button>
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
    <!-- MDB -->
    



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"> </script>
 
</body>

</html>