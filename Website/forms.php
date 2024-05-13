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
        .custom-button {
            background-color: #D9D9D9;
            border-color: #D9D9D9;
            color: black;
        }
    </style>

    <title>Form</title>
</head>

<body>
    <div class="container">
        <h1>Form</h1>
        <form>

            <!-- E-Mail Field -->
            <div class="mb-3">
                <label for="FormControlInput1" class="form-label">E-mail address</label>
                <input type="email" class="form-control" id="FormControlInput1" placeholder="name@example.com">
            </div>

            <!-- Textarea -->
            <div class="mb-3">
                <label for="FormControlTextarea1" class="form-label">Your Message</label>
                <textarea class="form-control" id="FormControlTextarea1" rows="3"></textarea>
            </div>

            <!-- Select Field -->
            <div>
                <label for="FormControlSelect1" class="form-label">Regarding</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Please choose one option</option>
                    <option value="1">Job offer</option>
                    <option value="2">Question regarding assets</option>
                    <option value="3">Other</option>
                </select>
            </div>

            <!-- Select Field -->
            <div class="mb-3">
                <label for="FormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="FormControlInput1" placeholder="name@example.com">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>