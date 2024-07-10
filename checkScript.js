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