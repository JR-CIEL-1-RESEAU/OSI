<?php
session_start();

// Dummy credentials for demonstration
$valid_username = 'admin';
$valid_password = 'password123';

// Retrieve input from POST request
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {
    // Redirect to dashboard if credentials are valid
    header('Location: dashboard.php');
    exit;
} else {
    // Return to login page with an error
    echo '<p class="error">Identifiants inconnus. Veuillez réessayer.</p>';
    echo '<a href="index.html">Retour à la page de connexion</a>';
}
