<?php
if (isset($_POST['submit'])) {
    $phoneNumber = $_POST['phone'];

    // Validate phone number: exactly 10 digits
    if (!preg_match('/^\d{10}$/', $phoneNumber)) {
        echo "Enter a valid phone number";
        exit;
    }

    // If validation passes, display the details
    echo "Student registered successfully!<br>";
    echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
    echo "Branch: " . htmlspecialchars($_POST['branch']) . "<br>";
    echo "Age: " . htmlspecialchars($_POST['age']) . "<br>";
    echo "Phone Number: " . htmlspecialchars($phoneNumber) . "<br>";
} else {
    echo "Please submit the form.";
}
?>
