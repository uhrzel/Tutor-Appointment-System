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
            height: 200px;
            border: 8px solid transparent;
            border-top-color: #3498db;
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

        #messenger-box {
            display: none;
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #ok-button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #ok-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div id="messenger-box">
        <p>This website is not responsive. Please use the desktop site for a better experience.</p>
        <button id="ok-button" onclick="stopLoader()">OK</button>
    </div>

    <div id="loader-container">
        <img id="loader-img" src="./img/logo.png" alt="Loader">
    </div>


    <script>
        if (/Mobi/.test(navigator.userAgent)) {

            setTimeout(function() {
                document.getElementById('messenger-box').style.display = 'block';
            }, 2000);
        } else {

            setTimeout(function() {
                window.location.href = 'landing_page.php';
            }, 5000);
        }

        function stopLoader() {
            document.getElementById('loader-container').style.display = 'none';
            window.location.href = 'landing_page.php';
        }
    </script>
</body>

</html>