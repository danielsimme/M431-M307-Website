<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['option'] = $_POST['option'];
    $_SESSION['person'] = $_POST['person'];
    $_SESSION['meeting'] = $_POST['meeting'];
    $_SESSION['budgetrange'] = $_POST['budgetrange'];
    $_SESSION['message'] = $_POST['message'];
    header("Location: form-page-4.php");
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
            <li class="compassitem"><a href="form-page-2.php">2</a></li>
            <li class="compassactive">3</li>
        </ul>
        <form method="POST" action="form-page-3.php" id="contactForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="options">Regarding</label>
                <select id="options" name="options" required>
                    <option value="">Select Option</option>
                    <option value="Job Offer" <?= isset($_SESSION['options']) && $_SESSION['options'] == 'Job Offer' ? 'selected' : '' ?>>Job Offer</option>
                    <option value="Question Regarding Assets" <?= isset($_SESSION['options']) && $_SESSION['options'] == 'Question Regarding Assets' ? 'selected' : '' ?>>Question Regarding Assets</option>
                    <option value="Other" <?= isset($_SESSION['options']) && $_SESSION['options'] == 'Other' ? 'selected' : '' ?>>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="person">Select a person to contact</label>
                <select id="person" name="person" required>
                    <option value="">Select Person</option>
                    <option value="Daniel" <?= isset($_SESSION['person']) && $_SESSION['person'] == 'Daniel' ? 'selected' : '' ?>>Daniel</option>
                    <option value="Andrew" <?= isset($_SESSION['person']) && $_SESSION['person'] == 'Andrew' ? 'selected' : '' ?>>Andrew</option>
                </select>
            </div>
            <div class="form-group">
                <input type="checkbox" id="meeting" name="meeting" <?= isset($_SESSION['meeting']) && $_SESSION['meeting'] ? 'checked' : '' ?>>
                <label for="meeting">I want to have a meeting</label>
            </div>
            <div class="form-group">
                <label for="budgetRange">Select Your Budget Range: <span id="budgetRangeValue">$100 - $10,000</span></label>
                <input type="range" class="form-range" min="100" max="10000" step="100" id="budgetRange" name="budgetRange" value="10000">
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" required><?= isset($_SESSION['message']) ? $_SESSION['message'] : '' ?></textarea>
            </div>
            <div class="form-group">
                <label for="file">Upload File</label>
                <input type="file" id="file" name="file" accept="image/*">
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