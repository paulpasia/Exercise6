<?php
$users = [
    "Raizen" => "vidal123",
    "Joerieleto" => "junior123",
    "Paul" => "pasia123",
    "Migs" => "sepina123",
    "Kc" => "fesarit123"
];

// Check if 'name' and 'password' are set in the POST request
if (isset($_POST['name']) && isset($_POST['password'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Validate the user against the predefined users array
    if (array_key_exists($name, $users) && $users[$name] === $password) {
        // If valid, return 'success' (this will trigger the redirection in JavaScript)
        echo "success";
    } else {
        // If invalid, return an error message
        echo "Invalid name or password!";
    }
} else {
    echo "Please provide both name and password!";
}
?>
