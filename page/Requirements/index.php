<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="/assets/css/req.css" />
        <link rel="icon" href="/assets/img/qwe.png" type="image/x-icon">

  <title>Ad-Task-2</title>

</head>
<body>
  <header>
    <div class="container">
     
      <nav class="nav1">
        <ul>
          <li><a href="../../index.php">About Me</a></li>
          <li><a href="index.php">AD-Task-2</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">

<h1 style="text-align: center; margin: 40px 0 20px;">Arrays</h1>
<div class="info-wrapper" style="margin-top: 20px;">
  <div class="info-box">
    <?php
      $hobbies = ["Playing Sports", "Dancing", "Web Designing", "Watching Anime", "Exploring Tech", "Traveling"];
      foreach ($hobbies as $hobby) {
          echo "<p>💡 $hobby</p>";
      }
    ?>
  </div>
  <div class="info-image">
    <img src="/assets/img/array.png" alt="Hobbies Image" />
  </div>
</div>
<h1 style="text-align: center; margin: 40px 0 20px;">Dictionaries</h1>
<div class="info-wrapper" style="margin-top: 20px;">
  <div class="info-box">
    <?php
      $skills = [
        "HTML" => "Expert",
        "CSS" => "Advanced",
        "PHP" => "Intermediate",
        "JavaScript" => "Intermediate",
        "MySQL" => "Basic"
      ];
      foreach ($skills as $skill => $level) {
          echo "<p>🛠️ <strong>$skill:</strong> $level</p>";
      }
    ?>
  </div>
  <div class="info-image">
    <img src="/assets/img/Diction.png" alt="Skills Image" />
  </div>
</div>
<h1 style="text-align: center; margin: 40px 0 20px;">🔧 Using Functions</h1>
<div class="info-wrapper" style="margin-top: 20px;">
  <div class="info-box">
    <?php

      function greetStudent($name) {
          return "Hello, $name! 👋 Welcome to AD-Task-2.";
      }

      function calculateGPA($grades) {
          $total = array_sum($grades);
          $count = count($grades);
          return $count > 0 ? round($total / $count, 2) : 0;
      }

      // Call the functions
      $studentName = "Quervie";
      $grades = [1.5, 1.75, 2.0, 1.25];

      echo "<p>" . greetStudent($studentName) . "</p>";
      echo "<p>📊 Calculated GPA: <strong>" . calculateGPA($grades) . "</strong></p>";
    ?>
  </div>
  <div class="info-image">
    <img src="/assets/img/Funct.png" alt="Function Image" />
  </div>
</div>
<h1 style="text-align: center; margin: 40px 0 20px;">🧩 Fragmentation</h1>
<div class="info-wrapper" style="margin-top: 20px;">
  <div class="info-box">
    <?php
      include_once '../../components/fragments.php';

      echo getQuote();
      echo "<h3 style='margin-top: 20px;'>📚 Languages I Use</h3>";
      echo getLanguages();
    ?>
  </div>
  <div class="info-image">
    <img src="/assets/img/frag.png" alt="Fragmentation Image" />
  </div>
</div>

  </div>

  <footer>
    <div class="footer-container">
      <p>&copy; 2025 Quervie Manrique. All rights reserved.</p>
      <p>Follow me on
        <a href="https://www.facebook.com/kervimanrique/" target="_blank">
          <img src="../../assets/img/facebook.png" alt="Facebook" class="social-icon" />
        </a>
        <a href="https://www.instagram.com/qrvi146/" target="_blank">
          <img src="../../assets/img/instagram.png" alt="Instagram" class="social-icon" />
        </a>
        <a href="https://ph.linkedin.com/in/quervie-manrique-9863a928b" target="_blank">
          <img src="../../assets/img/linkedin.png" alt="LinkedIn" class="social-icon" />
        </a>
      </p>
      <p>Contact: manriquequervie@gmail.com</p>
    </div>
  </footer>
</body>
<script src="/assets/js/script.js"></script>

</html>