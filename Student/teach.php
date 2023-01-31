<?php session_start();
$conn = pg_connect("host=localhost dbname=project user=postgres password=postgres") or die("Unable to connect to database");
$a="SELECT * FROM mentor_register";
$e= pg_query($conn, $a);
if (pg_num_rows($e) > 0) {
  while ($row = pg_fetch_array($e)) {
    $_SESSION['tname'] = $row['name'];
    $_SESSION['tid'] = $row['tid'];
    }
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Student DashBoard</title>
    <link rel="stylesheet" href="style1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="https://fontawesome.com/icons/"/>
</head>
  <body>
    <div class="container">
    <nav>
    <ul>
        <li><a href="#" class="logo">
        <img src="/Project/Student/icon.jpg">
        <span class="nav-item">DashBoard</span>
        </a></li>

     <li><a href="/Project/Home/home.html">
     <i class="fas fa-home"></i>
     <span class="nav-item">Home</span>
     </a></li>

  <li><a href="/Project/profile/index.php">
  <i class="fas fa-users"></i>
  <span class="nav-item">Profile</span>
  </a></li>

  <li><a href="/Project/chat/Groupchat.html">
  <i class="fas fa-comment"></i>
  <span class="nav-item">Messages</span>
  </a></li>

  <li><a href="/Project/Notice/notice.php">
  <i class="fas fa-bell"></i>
  <span class="nav-item">Announcement</span>
  </a></li>


  <li><a href="/Project/Resource/download.php">
  <i class="fas fa-rocket"></i>
  <span class="nav-item">View Resources</span>
  </a></li>

  <li><a href="/Project/QA/index.php">
  <i class="fas fa-comments"></i>
  <span class="nav-item">Q and A</span>
  </a></li>


  <li><a href="/Project/Home/logout.php">
  <i class="fas fa-sign-out-alt"></i>
  <span class="nav-item">Logout</span>
  </a></li>

  </ul>
  </nav>

  <section class="main">
  <div class="main-top">
  <h1>Skills</h1>
  <i class="fas fa-users-cog">&nbsp<?php echo $_SESSION['temail']; ?></i>
  </div>

  <div class="main-skills">

    <div class="card">
    <i class="fas fa-laptop-code"></i>
  <h3>Web Development</h3>
  <p>Join over 1 million students.</p>
   <button>Get Started</button>
  </div>

    <div class="card">
    <i class="fab fa-wordpress"></i>
  <h3>WordPress</h3>
  <p>Join over 5 lakh students.</p>
   <button>Get Started</button>
  </div>

    <div class="card">
    <i class="fas fa-palette"></i>
  <h3>Graphic Design</h3>
  <p>Join over 8 lakh students.</p>
   <button>Get Started</button>
  </div>

    <div class="card">
    <i class="fab fa-app-store-ios"></i>
  <h3>IOS Development</h3>
  <p>Join over 4 lakh students.</p>
   <button>Get Started</button>
  </div>
   </div>

  <section class="main-course">
    <h1>My Courses</h1>
  <div class="course-box">
    <ul>
      <li>In Progress</li>
      <li>Explore</li>
      <li>Incoming</li>
      <li>Finished</li>
    </ul>


    <div class="course">

    <div class="box">
      <h3>HTML</h3>
      <p>70% -progress</p>
      <button>Continue<button>
      <a href="/Project/Student/HTML/index.html">
      <i class="fab fa-html5 html"></i>
      </a>
      </div>
    

     <div class="box">
      <h3>CSS</h3>
      <p>80% -progress</p>
      <button>Continue<button>
      <a href="/Project/Student/CSS/index.html">
        <i class="fab fa-css3-alt css"></i>
      </a>
      </div>

      <div class="box">
      <h3>JavaScript</h3>
      <p>40% -progress</p>
      <button>Continue<button>
      <a href="/Project/Student/JS/index.html">
        <i class="fab fa-js-square js"></i>
      </a>
        </div>

      </div>
      </div>

  </section>
  </section>

  </div>
  </body>
  </html>
