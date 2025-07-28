@extends('layouts.app')

<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Basic validation
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If no errors, process the form (e.g., send email or save to database)
    if (empty($errors)) {
        // For demonstration, we'll just display a success message
        $success = "Thank you, $name! Your message has been received.";
        // In a real application, you might send an email or save to a database here
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .success {
            color: green;
            font-size: 1em;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    @section('title', 'About Us')

@section('content')
    @section('title')
    <h1>Contact Us</h1>
    
    <?php if (isset($success)): ?>
        <p class="success"><?php echo $success; ?></p>
    <?php endif; ?>
    
    <?php if (!empty($errors)): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5"><?php echo isset($message) ? $message : ''; ?></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>