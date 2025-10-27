<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "shafreenshahnaz@gmail.com";
    $subject = "Feedback from LearnEd Website";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo json_encode(array('status' => 'success', 'message' => 'Feedback sent successfully!'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Failed to send feedback. Please try again.'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request.'));
}
?>
