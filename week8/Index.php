<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nelson's Portfolio</title>
  <style>
    body {
      font-family: Trebuchet MS, sans-serif;
      background-image: url('bground.png');
      background-size: cover;
      background-position: center;
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 200vh;
    }

    header {
      position: relative;
      width: 23%;
      height: 20%;
      margin-top: 20px;
      align-items: center;
      text-align: center;
    }

    header img {
      width: 100%;
      max-width: 800px;
      display: block;
      border: 5px solid #f3a702;
      border-radius: 10px;
    }

    h1, h2, h3, p, strong {
      color: #000000;
    }

    section {
      background-color: rgba(241, 166, 5, 0.89);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      margin: 20px;
      width: 80%;
      display: none;
      opacity: 0;
      transition: opacity 0.5s ease;
    }

    .game-box {
      background-color: #e74c3c;
      color: white;
    }

    .project img {
      width: 20%;
      border: 5px solid #000000;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    footer {
      background-color: rgba(241, 166, 5, 0.89);
      padding: 10px;
      text-align: center;
      width: 100%;
    }

    #php-basics {
      background-color: rgba(241, 166, 5, 0.89);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      margin: 20px;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      width: 80%;
      margin: 20px 0;
      background-color: rgba(241, 166, 5, 0.877);
      border: 2px solid #f3a702;
      border-radius: 10px;
      padding: 20px;
    }

    button {
      font-size: 18px;
      font-family: Trebuchet MS, sans-serif;
      padding: 10px 20px;
      margin: 0 10px;
      cursor: pointer;
      background-color: #f3a702;
      color: rgb(0, 0, 0);
      border: 10px groove #f3a702;
      border-radius: 5px;
    }

    .timer {
      position: fixed;
      top: 10px;
      left: 10px;
      font-size: 18px;
      color: #ffffff;
    }

    @media (max-width: 768px) {
      section {
        width: 90%;
      }

      .button-container {
        width: 90%;
      }
    }

    @media (max-width: 480px) {
      section {
        width: 100%;
      }

      .button-container {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <header>
    <img src="full.jpg" alt="Header Image">
    <h1>Nelson Y. Mabini Jr</h1>
  </header>

  <!-- Button structure -->
  <div class="button-container">
    <button onclick="showAboutMe()">About Me</button>
    <button onclick="showMyGames()">My Games</button>
    <button onclick="seeMore()">See More</button>
  </div>

  <!-- Timer display -->
  <div class="timer" id="timer"></div>

  <section id="about-me">
    <h2>About Me</h2>
    <p style="font-size: 23px;">Welcome to my personal website! I am Nelson Jr. I enjoy playing lots of gacha games, so I'll showcase some of them here.</p>
  </section>

  <!-- Section for "My Games" -->
  <section id="my-games" class="game-box">
    <h2>My Games</h2>
    <div class="project">
      <a href="https://genshin.hoyoverse.com/en/" target="_blank">
        <img src="Gshin-icon.png" alt="Project Image">
      </a>
      <a href="https://www.arknights.global/" target="_blank">
        <img src="AK-icon.png" alt="Game Image 2">
      </a>
      <a href="https://hsr.hoyoverse.com/en-us/" target="_blank">
        <img src="SRail.png" alt="Game Image 2">
      </a>
    </div>
    <p style="font-size: 28px; font-weight: bold;">Click image to know more</p>
  </section>

  <footer>
    <p>Nelson Y. Mabini Jr. | Personal Website</p>
  </footer>

  <!-- PHP Section -->
  <section id="php-basics">
    <h2>PHP Basics</h2>
    <p>Welcome to the PHP Basics section! I'll show some examples</p>

    <h3>1. Variables</h3>
    <p>Variables in PHP are used to store data. Variable names start with a dollar sign ($) followed by the name.</p>
    <?php
    $name = "John";
    $age = 25;
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age;
    ?>

    <h3>2. Echo / Print</h3>
    <p>PHP has two main functions for outputting data: <code>echo</code> and <code>print</code>. Both are used to output strings.</p>
    <?php
    echo "Hello, World!<br>";
    print "This is a print statement.";
    ?>

    <h3>3. Data Types</h3>
    <p>PHP supports various data types including strings, integers, floats, booleans, arrays, and objects.</p>
    <?php
    $string = "Hello";
    $integer = 10;
    $float = 3.14;
    $boolean = true;
    echo "String: " . $string . "<br>";
    echo "Integer: " . $integer . "<br>";
    echo "Float: " . $float . "<br>";
    echo "Boolean: " . ($boolean ? "true" : "false");
    ?>

    <h3>4. Operators & Math</h3>
    <p>PHP supports a range of operators for performing arithmetic, comparison, and logical operations.</p>
    <?php
    $x = 10;
    $y = 5;
    echo "Addition: " . ($x + $y) . "<br>";
    echo "Subtraction: " . ($x - $y) . "<br>";
    echo "Multiplication: " . ($x * $y) . "<br>";
    echo "Division: " . ($x / $y) . "<br>";
    echo "Modulus: " . ($x % $y);
    ?>

    <h3>5. Conditionals</h3>
    <p>Conditional statements like <code>if</code>, <code>else</code>, and <code>elseif</code> are used to execute different code blocks based on different conditions.</p>
    <?php
    $time = date("H");
    if ($time < "12") {
      echo "Good morning!";
    } elseif ($time < "18") {
      echo "Good afternoon!";
    } else {
      echo "Good evening!";
    }
    ?>
  </section>

  <!-- JavaScript Section -->
  <script>
    // Function to show the "About Me" section and hide "My Games"
    function showAboutMe() {
      fadeOutAndHide('my-games');
      fadeIn('about-me');
    }

    
    function showMyGames() {
      fadeOutAndHide('about-me');
      fadeIn('my-games');
    }

    
    function seeMore() {
      window.open('see-more.php', '_blank');
    }

  
    function fadeOutAndHide(sectionId) {
      const section = document.getElementById(sectionId);
      section.style.opacity = 0;
      setTimeout(() => {
        section.style.display = 'none';
      }, 500); // Wait for the animation to complete
    }

    
    function fadeIn(sectionId) {
      const section = document.getElementById(sectionId);
      section.style.display = 'block';
      setTimeout(() => {
        section.style.opacity = 1;
      }, 10); 
    }

    // Timer function
    function myTimer() {
      const d = new Date();
      document.getElementById('timer').innerHTML = d.toLocaleTimeString();
    }

    setInterval(myTimer, 1000);
  </script>

</body>

</html>
