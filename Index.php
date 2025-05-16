<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mobile Banking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: #f2f2f2;
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      width: 90%;
      max-width: 320px;
    }
    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #005baa;
    }
    .login-box input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .login-box button {
      background: #005baa;
      color: white;
      border: none;
      padding: 10px;
      width: 100%;
      border-radius: 6px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <form class="login-box" action="login.php" method="POST">
    <h2>Mobile Banking</h2>
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Login</button>
  </form>
</body>
</html>
