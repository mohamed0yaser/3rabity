<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New City</title>
  <link rel="stylesheet" href="stylecity.css">
</head>

<body>
  <div class="login-box">
    <form action="cities-save.php" method="POST">
      <h2>New City</h2>
      <div class="user-box">
        <input type="text" placeholder="Enter City Name" name="cityName" required>
        <label>Enter City Name</label>
      </div>
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        submit
      </button>
      <button type="reset">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <a href="#"> back</a>
      </button>
    </form>
  </div>
</body>

</html>