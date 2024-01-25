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
      justify-content: center;
      min-height: 100vh;
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
      background-color: #2c3e50;
      padding: 10px;
      text-align: center;
      width: 100%;
    }

    
    .button-container {
      display: flex;
      justify-content: space-between;
      width: 80%;
      margin: 20px 0;
      background-color: rgba(241, 166, 5, 0.877); 
      border: 2px solid #f3a702; /* Border color */
      border-radius: 10px; 
      padding: 20px; 
    }

    button {
      font-size: 18px;
      font-family: Trebuchet MS, sans-serif;
      padding: 10px 20px;
      margin: 0 10px;
      cursor: pointer;
      background-color: #f3a702; /* Button background color */
      color: rgb(0, 0, 0); /* Button text color */
      border: 10px groove #f3a702; 
      border-radius: 5px; 
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

  <section id="about-me">
    <h2>About Me</h2>
    <p style="font-size: 23px";>Welcome to my personal website! I am Nelson Jr. I enjoy playing lots of gacha games, so I'll showcase some of them here.</p>
  </section>

  <!-- Section for "My Games" -->
  <<section id="my-games" class="game-box">
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

  <section id="see-more">
    <h2>There is no more</h2>
    <p>Hello "Ashen One"</p>
  </section>

  <footer>
    <p>Nelson Y. Mabini Jr. | Personal Website</p>
  </footer>

  <!-- JavaScript Section -->
  <script>

    // Function to show the "About Me" section and hide "My Games"
    function showAboutMe() {
      document.getElementById('about-me').style.display = 'block';
      document.getElementById('my-games').style.display = 'none';
    }
  
    // Function to show "My Games" section and hide "About Me"
    function showMyGames() {
      document.getElementById('about-me').style.display = 'none';
      document.getElementById('my-games').style.display = 'block';
    
    }

    // Function to show "See More" section and hide "About Me"
    function seeMore() {
      window.open('see-more.php', '_blank');
  }
  </script>
</body>

</html>

