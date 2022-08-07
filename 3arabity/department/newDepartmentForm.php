<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Department</title>
  <link rel="stylesheet" href="styledepartment.css">
</head>

<body>
  <div class="login-box">
    <form action="newDepartment-save.php" method="POST">
      <h2>New Department</h2>
      <div class="user-box">
        <input type="text" placeholder="Enter Department Name" name="departmentName" required>
        <label>Enter Department Name</label>
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