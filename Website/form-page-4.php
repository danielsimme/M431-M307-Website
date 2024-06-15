<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_SESSION['name'];
    $surname = $_SESSION['surname'];
    $country = $_SESSION['country'];
    $gender = $_SESSION['gender'];
    $company = $_SESSION['company'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $options = $_SESSION['options'];
    $message = $_SESSION['message'];
    $meeting = $_SESSION['meeting'];
    $website = $_SESSION['website'];
    $person = $_SESSION['person'];
    $budgetRange = $_SESSION['budgetRange'];

    // File upload handling
    $file = '';
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an actual image or fake image
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            // Check file size (5MB max)
            if ($_FILES["file"]["size"] <= 5000000) {
                // Allow certain file formats
                if ($fileType == "jpg" || $fileType == "png" || $fileType == "jpeg" || $fileType == "gif") {
                    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                        $file = $target_file; // Store the path to the uploaded file
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                } else {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }
            } else {
                echo "Sorry, your file is too large.";
            }
        } else {
            echo "File is not an image.";
        }
    }

    $sql = "INSERT INTO form_data (name, surname, country, gender, company, email, phone, options, message, meeting, website, person, budgetRange, file) 
            VALUES ('$name', '$surname', '$country', '$gender', '$company', '$email', '$phone', '$options', '$message', '$meeting', '$website', '$person', '$budgetRange', '$file')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Your form has been submitted, we will contact you soon!');
                window.location.href = 'confirmation.html';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    session_destroy();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Form</title>
</head>

<body>
    <header>
        <div class="logo">dandrew</div>
        <div class="nav-container">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="form-page-1.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="title-section">
        <h1>CONTACT <span>US</span></h1>
    </div>
    <div class="projects-section">
        <ul class="compass">
            <li class="compassitem"><a href="form-page-1.php">1</a></li>
            <li class="compassitem"><a href="form-page-2.php">2</a></li>
            <li class="compassactive">3</li>
        </ul>
        <form method="POST" action="form-page-4.php" id="contactForm" enctype="multipart/form-data">
            <div class="projects-section">
                <h2>PLEASE SUBMIT YOUR FORM</h2>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts.js"></script>
    <footer>
        <div class="social-icons">
            <a href="https://x.com" target="_blank">
                <img src="Icons/Twitter.svg" alt="Twitter">
            </a>
            <a href="https://instagram.com" target="_blank">
                <img src="Icons/Instagram.svg" alt="Instagram">
            </a>
            <a href="https://youtube.com" target="_blank">
                <img src="Icons/Youtube.svg" alt="YouTube">
            </a>
            <a href="https://linkedin.com" target="_blank">
                <img src="Icons/LinkedIn.svg" alt="LinkedIn">
            </a>
            <a href="https://facebook.com" target="_blank">
                <img src="Icons/Facebook.svg" alt="Facebook">
            </a>
        </div>
        <div class="footer-logo">dandrew</div>
    </footer>
</body>

</html>