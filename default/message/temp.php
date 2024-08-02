<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Send Message to Students</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <form id="messageForm">
        <label>Select Class:</label>
        <select id="classSelect" name="class_id">
            <!-- Populate this dropdown dynamically using AJAX -->
        </select>

        <label>Select Subject:</label>
        <select id="subjectSelect" name="subject_id">
            <!-- Populate this dropdown dynamically using AJAX -->
        </select>

        <label>Message:</label>
        <textarea name="message"></textarea>

        <input type="submit" value="Send Message">
    </form>

    <div id="messageResponse"></div>

    <script>
        $(document).ready(function(){
            // Populate the class dropdown on page load
            $.ajax({
                type: "GET",
                url: "get_classes.php",
                success: function(data){
                    $("#classSelect").html(data);
                }
            });

            // When the class dropdown changes, update the subject dropdown
            $("#classSelect").change(function(){
                var classId = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "get_subjects.php",
                    data: {class_id: classId},
                    success: function(data){
                        $("#subjectSelect").html(data);
                    }
                });
            });

            // Handle form submission
            $("#messageForm").submit(function(event){
                event.preventDefault();

                // Get form data
                var formData = $(this).serialize();

                // Send the message
                $.ajax({
                    type: "POST",
                    url: "send_message.php",
                    data: formData,
                    success: function(response){
                        $("#messageResponse").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>



