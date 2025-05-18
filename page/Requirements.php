<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="/assets/css/req.css" />
        <link rel="icon" href="/assets/img/qwe.png" type="image/x-icon">

  <title>Ad-Task-1</title>

</head>
<body>
  <header>
    <div class="container">
     
      <nav class="nav1">
        <ul>
          <li><a href="../index.php">About Me</a></li>
          <li><a href="../page/Requirements.php">AD-Task-1</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <h1 style="text-align: center; margin-bottom: 20px;">Declaration</h1>
    <div class="info-wrapper">
      <div class="info-box">
        <?php
          $name = "Quervie Manrique";
          $course = "BSIT";
          $year = 3;
          $isGraduating = false;

          echo "<h2>👨‍🎓 Student Info</h2>";
          echo "<p><strong>Name:</strong> $name</p>";
          echo "<p><strong>Course:</strong> $course</p>";
          echo "<p><strong>Year:</strong> $year</p>";
        ?>
        <p><strong>Status:</strong> <span id="status-text"><?php echo $isGraduating ? "🎓 Graduating" : "📚 Still Studying"; ?></span></p>
        <button id="statusButton" onclick="toggleStatus()" style="margin-top: 15px; padding: 10px 20px; border-radius: 10px; background: #8e44ad; color: white; border: none; cursor: pointer;">
          Switch to Graduating
        </button>
      </div>

      <div class="info-image">
        <img src="/assets/img/declaration.png" alt="Code Screenshot" />
      </div>
    </div>

    <h1 style="text-align: center; margin-bottom: 20px;">Conditional</h1>
<div id="graduation-section" class="info-wrapper" style="display: none; margin-top: 20px;">

      <div class="info-box">
        <h2>🎉 Graduation Section</h2>
        <p>Congratulations on reaching this milestone!</p>
        <p>You've shown dedication, resilience, and passion.</p>
        <p>Wishing you great success in your next chapter! 🚀</p>
      </div>
      <div class="info-image">
        <img src="/assets/img/grad.png" alt="Graduation Image" />
</div>
    </div>
    <h1 style="text-align: center; margin-bottom: 20px;">Looping</h1>
<div class="info-wrapper" style="margin-top: 20px;">
<div class="info-box">
      <h2>📅 Academic Years</h2>
      <?php
$years = ["1st Year", "2nd Year", "3rd Year", "4th Year"];
foreach ($years as $yr) {
        echo "<p>✔️ Completed: $yr</p>";
}
      ?>
</div>
<div class="info-image">
      <img src="/assets/img/looping.png" alt="Loop Image" />
    </div>
</div>

  </div>

  <footer>
    <div class="footer-container">
      <p>&copy; 2025 Quervie Manrique. All rights reserved.</p>
      <p>Follow me on
        <a href="https://www.facebook.com/kervimanrique/" target="_blank">
          <img src="../assets/img/facebook.png" alt="Facebook" class="social-icon" />
        </a>
        <a href="https://www.instagram.com/qrvi146/" target="_blank">
          <img src="../assets/img/instagram.png" alt="Instagram" class="social-icon" />
        </a>
        <a href="https://ph.linkedin.com/in/quervie-manrique-9863a928b" target="_blank">
          <img src="../assets/img/linkedin.png" alt="LinkedIn" class="social-icon" />
        </a>
      </p>
      <p>Contact: manriquequervie@gmail.com</p>
    </div>
  </footer>
</body>
<script src="/assets/js/script.js"></script>

</html>