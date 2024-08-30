<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <link rel="icon" type="image/png" href="/pictures/logo.png">
  <style>
    body {
      font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url(/pictures/panel_4.jpg);
      background-size: cover;
    }
    .container {
      text-align: center;
    }
    input[type="email"] {
      width: 300px;
      height: 40px;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 0 10px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }
    button {
      width: 320px;
      height: 40px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .footer {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Forgot Password</h1>
    <h4 class="information-text">Enter your registered email to reset your password.</h4>
    <form action="/forgot-password" method="post">
      <input type="email" name="user_email" id="user_email" required>
      <p><label for="username">Email</label></p>
      <button type="submit">Reset Password</button>
    </form>
  </div>
</body>
</html>