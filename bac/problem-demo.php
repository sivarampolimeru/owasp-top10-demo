<?php

// Dummy database of users and their roles
$users = array(
    "user1" => "regular",
    "user2" => "admin"
);

// Dummy database of sensitive data accessible only by admins
$sensitive_data = array(
    "admin_data" => "Super secret admin data"
);

// Function to render the dashboard based on user role
function renderDashboard($username) {
    global $users, $sensitive_data;

    if (array_key_exists($username, $users)) {
        $role = $users[$username];
        if ($role === "admin") {
            echo "Welcome, $username! Here's the admin dashboard:<br>";
            //echo $sensitive_data["admin_data"];
        } else {
            echo "Welcome, $username! Here's the regular user dashboard.";
        }
    } else {
        echo "User not found.";
    }
}

// Check if username is provided in the URL parameter
if (isset($_GET["username"])) {
    $username = $_GET["username"];
    renderDashboard($username);
} else {
    echo "Please provide a username.";
}
?>
