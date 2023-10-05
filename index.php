<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <link rel="icon" type="image/png" href="./img/logo.png" />
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        #loader-container {
            position: relative;
        }

        #loader-img {
            width: 200px;
            /* Set the width of your image */
            height: 200px;
            /* Set the height of your image */
            border: 8px solid transparent;
            /* Set the border width and initial color */
            border-top-color: #3498db;
            /* Set the initial border color */
            border-radius: 50%;
            animation: spin 2s linear infinite, changeBorderColor 4s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes changeBorderColor {
            0% {
                border-top-color: #3498db;
            }

            25% {
                border-top-color: #e74c3c;
            }

            50% {
                border-top-color: #2ecc71;
            }

            75% {
                border-top-color: #f39c12;
            }

            100% {
                border-top-color: #3498db;
            }
        }
    </style>
</head>

<body>
    <img id="loader-img" src="./img/logo.png" alt="Loader">

    <script>
        // Wait for 10 seconds and then redirect to login.php
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 5000);
    </script>
</body>

</html>