<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JakartaTimes - Home</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav class="navbar">
        <h2>Jakarta<span>Times</span></h2>
        <a href="home-page.php">Home</a>
        <a href="about-page.html">About</a>
        <div class="dropdown">
            <button class="dropbtn">Categories</button>
            <div class="dropdown-content">
                <a href="#tech">Tech</a>
                <a href="#health">Health</a>
                <a href="#entertainment">Entertainment</a>
            </div>
        </div> 
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    </nav>
    <section class="home-content">
        <a href="#trending">Trending</a>
        <a href="#featured">Featured</a>
    </section>
    <main class="container">
        <div class="news-content">
            <img src="../asset/tech-qatar.jpeg" alt="Qatar World Cup" width="120px" height="90px">
            <h3>How fast the 5G Internet is on 2022 Qatar World Cup?</h3>
        </div>
        <div class="news-content">
            <img src="../asset/entertainment-cinta-laura.jpeg" alt="Cinta Laura" width="120px" height="90px">
            <h3>Cinta Laura's Interpretation of Mothers Day</h3>
        </div>
        <div class="news-content">
            <img src="../asset/health-egg.jpeg" alt="Egg" width="120px" height="90px">
            <h3>Egg Consumption Limit for People with Diabetes</h3>
        </div>
    </main>
    <footer>
        <h4>JakartaTimes &copy; 2023</h4>
    </footer>
</body>
</html>