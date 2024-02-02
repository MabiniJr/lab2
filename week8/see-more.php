<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIF Background Page</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: url('DSouls.gif') center/cover no-repeat fixed;
        }

        /* Add additional styling for your content */
        h1, h2 {
            color: white;
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s ease forwards;
        }

        h3 {
            color: white;
            text-align: center;
            cursor: pointer;
            text-decoration: underline;
        }

        /* Keyframes for the fadeIn animation */
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0); /* Move back to the original position */
            }
        }
    </style>
</head>

<body>
    <div class="background-container">
        <!-- Your content goes here -->
        <h1>Hello Ashen One!</h1>
        <h2>What do you mean "Forms"?</h2>
        <h3 onclick="redirectToForms()">Why don't you click this?</h3>
    </div>

    <script>
        function redirectToForms() {
            window.location.href = 'forms.php';
        }
    </script>
</body>

</html>
