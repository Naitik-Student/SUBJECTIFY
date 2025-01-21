<?php
// Database configuration
$host = 'localhost';
$db_name = 'subjectify_db';
$username = 'root'; // Default username for XAMPP
$password = ''; // Default password for XAMPP

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Function to register a new user
function registerUser($username, $email, $password) {
    global $pdo;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->execute();
}

// Function to login a user
function loginUser($email, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['password'])) {
        return true; // Login successful
    }
    return false; // Login failed
}

// Function to get questions based on subject and difficulty
function getQuestions($subject, $difficulty) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM questions WHERE subject = :subject AND difficulty = :difficulty");
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':difficulty', $difficulty);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
