<?php
// Get form input
$name = $_POST['name'];
$age = $_POST['age'];

// Prepare user data
$newUser = [
    "name" => $name,
    "age" => $age
];

// Load existing data
$file = 'data.json';
if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);
} else {
    $data = [];
}

// Add new user
$data[] = $newUser;

// Save updated data
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

// Redirect back to index
header("Location: index.php");
exit;
?>
