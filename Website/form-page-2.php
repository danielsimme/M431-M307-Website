<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['website'] = $_POST['website'];
    header("Location: form-page-3.php");
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
            <li class="compassitem"><a href="form-page-1.php">1</a></li>
            <li class="compassactive">2</li>
            <li class="compassitem"><a href="form-page-3.php">3</a></li>
        </ul>
        <form method="POST" action="form-page-2.php" id="contactForm">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="079 123 45 67" pattern="[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" value="<?= isset($_SESSION['phone']) ? $_SESSION['phone'] : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="website">Your Website</label>
                <input type="url" id="website" name="website" placeholder="https://www.example.com" value="<?= isset($_SESSION['website']) ? $_SESSION['website'] : '' ?>">
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