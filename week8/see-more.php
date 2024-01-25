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
        h1 {
            color: white;
            text-align: center;
            padding-top: 100px;
        }

        h2 {
          color: white;
          text-align: center;
          padding-top: 100px;
      }
    </style>
</head>

<body>
    <div class="background-container">
        <!-- Your content goes here -->
        <h1>Hello Ashen One!</h1>
        <h2>What do you mean there's "more"?</h2>
    </div>
</body>

</html>
