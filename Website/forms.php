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

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            max-width: 60%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        textarea {
            height: 100px;
        }

        button {
            padding: 10px 20px;
            background-color: #d9d9d9;
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #adadad;
        }

        @media (max-width: 768px) {

            /* Styles for tablets */
            .container {
                max-width: 80%;
            }
        }

        @media (max-width: 576px) {

            /* Styles for smartphones */
            .container {
                max-width: 90%;
            }
        }
    </style>

    <title>Form</title>
</head>

<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form id="contactForm">

            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" id="email" name="email" placeholder="name@email.com" required>
            </div>


            <div class="form-group">
                <div class="form-group">
                    <label for="phone">Phone Number (Swiss):</label><br>
                    <input type="tel" id="phone" placeholder="041 079 123 45 67" name="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}">
                </div>

                <script>
                    // Function to automatically add spaces to the phone number input
                    document.getElementById('phone').addEventListener('input', function(e) {
                        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
                        e.target.value = !x[2] ? x[1] : x[1] + ' ' + x[2] + (x[3] ? ' ' + x[3] + (x[4] ? ' ' + x[4] + (x[5] ? ' ' + x[5] : '') : '') : '') + (x[6] ? ' ' + x[6] + (x[7] ? ' ' + x[7] : '') : '');
                    });
                </script>

            </div>

            <div class="form-group">
                <label for="options">Regarding</label>
                <select id="options" name="options" required>
                    <option value="">Select Option</option>
                    <option value="option1">Job Offer</option>
                    <option value="option2">Question Regarding Assets</option>
                    <option value="option3">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" required>
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company">
            </div>

            <button type="submit">Submit</button>

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>