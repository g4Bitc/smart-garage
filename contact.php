<?php
// Optional PHP demo file.
// GitHub Pages does not run PHP. Use this only on a PHP-supported host like cPanel, XAMPP, WAMP, or LAMP.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
        echo "<h1>Thank you, {$name}!</h1>";
        echo "<p>Your Smart Garage message has been received.</p>";
        echo "<p><strong>Email:</strong> {$email}</p>";
        echo "<p><strong>Message:</strong> {$message}</p>";
        echo "<p><a href='contact.html'>Go back</a></p>";
    } else {
        echo "<h1>Invalid form submission</h1>";
        echo "<p>Please go back and fill in all fields correctly.</p>";
    }
} else {
    header('Location: contact.html');
    exit;
}
?>
