<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Network | Login</title>
</head>
<body>
  <h1>Social Network</h1>
  <h2>Login</h2>
  <form action="/login" method="post">
    <div>
      <label for="username">username : </label>
      <input type="text" id="username" name="username">
    </div>
    <br>
    <div>
      <label for="password">password : </label>
      <input type="password" id="password" name="password">
    </div>
    <br>
    <div>
      <input type="submit" value="submit">
    </div>
  </form>
  <br>
  <a href="/register">If you don't have an account register here!</a>
</body>
</html>