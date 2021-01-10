<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.png" />
  <title>GYM Management System</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="css/style.css">

  <style>
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-size: cover;
      background-size: 100% 100%;
    }


    .login-box {
      width: 280px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #333;
    }

    .login-box h1 {
      float: left;
      font-size: 40px;
      border-bottom: 6px solid #4caf50;
      margin-bottom: 30px;
      padding: 13px 0
    }

    .textbox {
      width: 100%;
      overflow: hidden;
      font-size: 20px;
      padding: 8px 0;
      margin: 8px 0;
      border-bottom: 1px solid #4caf50;
    }

    .textbox i {
      width: 26px;
      float: left;
      text-align: center;
    }

    .textbox input {
      border: none;
      outline: none;
      background: none;
      color: #333;
      font-size: 18px;
      width: 80%;
      float: left;
      margin: 0 10px;
    }

    .btn {
      width: 100%;
      background: none;
      border: 2px solid #4caf50;
      color: #000;
      padding: 5px;
      font-size: 18px;
      cursor: pointer;
      margin: 12px 0
    }
  </style>


</head>

<body>

  <div class="login-box">
    <form action="" method="post">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fa fa-user"></i>
        <input type="text" name="username" placeholder="Username" required autocomplete="off">
      </div>

      <div class="textbox">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required autocomplete="off">
      </div>

      <input type="submit" name="submit" class="btn" value="Log In">

    </form>

  </div>

</body>

</html>