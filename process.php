<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);

    echo "
        <h2>Registration Successful!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>Date of Birth:</strong> $dob</p>
    ";
} else {
    echo "<p style='color: red;'>Invalid Request</p>";
}
?>
