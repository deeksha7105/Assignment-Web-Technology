<?php
function clean($data) {
    return htmlspecialchars(trim($data));
}

$name = clean($_POST['name']);
$email = clean($_POST['email']);
$phone = clean($_POST['phone']);
$course = clean($_POST['course']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .result-box {
            width: 360px;
            margin: 80px auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.2);
        }
        .result-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .data {
            font-size: 16px;
            margin: 8px 0;
        }
        a {
            display: block;
            margin-top: 15px;
            text-align: center;
            text-decoration: none;
            color: #2575fc;
        }
    </style>
</head>
<body>

<div class="result-box">
    <h2>Registration Successful ✔</h2>

    <p class="data"><strong>Name:</strong> <?= $name ?></p>
    <p class="data"><strong>Email:</strong> <?= $email ?></p>
    <p class="data"><strong>Phone:</strong> <?= $phone ?></p>
    <p class="data"><strong>Course:</strong> <?= $course ?></p>

    <a href="index.html">Go Back</a>
</div>

</body>
</html>
