<?php
    session_start();
    if(!isset($_SESSION['username'])){
    header('location:login.php');
    }
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"/> -->
    <link rel="stylesheet" href="styleNew.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<header class="text-gray-600 body-font">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl"><h4 class = log-name>Welcome <?php echo $_SESSION['username']; ?></h4></span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
          <ul>
            <li><a href="#" class="Home">Home</a></li>
            <li><a href="#" class="About">About</a></li>
            <li><a href="#" class="Service">Service</a></li>
            <li><a href="#" class="Contect">Contact</a></li>
          </ul>
        </nav>
        <li><a href="logout.php" class="logout">LOGOUT</a></li>
    
  </div>
</header>
    <div class="container">
        <!-- <h1 class="status"></h1> -->
        <!-- <form action="#">
          <input type="text" name="lat" id="lat">
          <input type="text" name="lat" id="lat">
        </form> -->
        <button class="find-state">Delect Location</button>
    </div>
    <h1>Post Request</h1>
    <form action = "connection.php" method = "post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>

      <label for="mobile">Mobile Number:</label>
      <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      

      <input type="submit" value="Post">
      <input type="button" value="Cancel" onclick="location.href='index.html';">
    </form>
    <script src="main.js"></script>
</body>
</html>