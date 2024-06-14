<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    header("Location: form-page-3.php");
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font import -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
        <h1>ALL OUR <span>PROJECTS</span></h1>
    </div>
    <div class="projects-section">
        <ul class="compass">
            <li class="compassitem">1</li>
            <li class="compassactive">2</li>
            <li class="compassitem">3</li>
        </ul>
        <form method="POST" action="form-page-2.php" id="contactForm">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" placeholder="name@email.com" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number (Swiss):</label><br>
                <input type="tel" id="phone" name="phone" placeholder="079 123 45 67" pattern="[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" required>
            </div>
            <button type="submit">Next</button>
        </form>

        <script>
            document.getElementById('phone').addEventListener('input', function(e) {
                var value = e.target.value.replace(/\D/g, '');
                var formattedValue = value;

                if (value.length > 3) {
                    formattedValue = value.slice(0, 3) + ' ' + value.slice(3);
                }
                if (value.length > 6) {
                    formattedValue = value.slice(0, 3) + ' ' + value.slice(3, 6) + ' ' + value.slice(6);
                }
                if (value.length > 8) {
                    formattedValue = value.slice(0, 3) + ' ' + value.slice(3, 6) + ' ' + value.slice(6, 8) + ' ' + value.slice(8);
                }

                e.target.value = formattedValue;
            });
        </script>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>