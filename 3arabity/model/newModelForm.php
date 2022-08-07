<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Model</title>
  <link rel="stylesheet" href="stylemodel.css">
</head>

<body>
  <div class="login-box">
    <form action="newModel-save.php" method="POST">
      <h2>New Model</h2>
      <div class="user-box">
        <input type="text" placeholder="Enter Model Name" name="modelName" required>
        <label>Enter Model Name</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter Brand ID" name="brandId" required>
        <label>Enter Brand ID</label>
      </div>
      <button type="submit">
        submit
      </button>
      <button type="reset">
        <a href="#"> back</a>
      </button>
    </form>
  </div>
</body>

</html>