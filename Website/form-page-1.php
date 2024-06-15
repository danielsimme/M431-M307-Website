<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['company'] = $_POST['company'];
    header("Location: form-page-2.php");
    exit();
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
            <li class="compassactive">1</li>
            <li class="compassitem"><a href="form-page-2.php">2</a></li>
            <li class="compassitem"><a href="form-page-3.php">3</a></li>
        </ul>
        <form method="POST" action="form-page-1.php" id="contactForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" value="<?= isset($_SESSION['surname']) ? $_SESSION['surname'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" value="<?= isset($_SESSION['company']) ? $_SESSION['company'] : '' ?>">
            </div>
            <button type="submit">Next</button>
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