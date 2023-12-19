<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $appointmentDate = $_POST["appointmentDate"];
    $appointmentTime = $_POST["appointmentTime"];

    // You can perform further validation/sanitization here

    // Send an email or save data to a database (replace this with your actual logic)
    $to = "ceo@vrddhiimpex.com";
    $subject = "New Form Submission";
    $emailBody = "Name: $name\nEmail: $email\nMessage: $message\nAppointment Date: $appointmentDate\nAppointment Time: $appointmentTime";
    
    // Assuming a simple email sending function
    mail($to, $subject, $emailBody);

    // Respond to the AJAX request
    echo "success";
} else {
    // Handle non-POST requests appropriately
    http_response_code(405); // Method Not Allowed
    echo "Method Not Allowed";
}
?>
