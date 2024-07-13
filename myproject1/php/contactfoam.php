<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
$to='ahmadshaukat328@gmail.com';
$subject='Customer Qurey';
$name=$_POST['name'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$message_customer=$_POST['message'];
$message="Message" . $message_customer . "\nName" . $name ."\nemail". $email;
$headers = "From: ahmadshaukat328@gmail.com\r\n";
if (mail($to, $subject, $message, $headers))
{
    echo"message sent successfully";
}
else
{
    echo"error";
}
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        /* Basic styling for demonstration */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 1em;
        }
        .form-group textarea {
            resize: vertical; /* Allow vertical resizing of textarea */
            min-height: 150px; /* Minimum height for better UX */
        }
        .form-group button {
            background-color: #FA991C;
            color: #1C768F;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 20px;
            margin-bottom: 20px;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s, color 0.3s;;
        }
        .form-group button:hover {
            background-color: #032539;
            color: #FBF3F2;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Contact Us</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
