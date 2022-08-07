<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Employee</title>
  <link rel="stylesheet" href="styleemployee.css">
</head>

<body>
  <div class="login-box">
    <form action="newEmployee-save.php" method="POST">
      <h2>New Employee</h2>
      <div class="user-box">
        <input type="text" name=" name" placeholder="Username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="your image" name="eImage" required>
        <label>your image</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Phone" name="ePhone" required>
        <label>Phone</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Address" name="eAddress" required>
        <label>Address</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Email" name="eEmail" required>
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Department ID" name="departID" required>
        <label>Department ID</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Basic Salary" name="eSalary" required>
        <label>Basic Salary</label>
      </div>
      <button type="submit">
        submit
      </button>
      <button>
        back
      </button>
    </form>
  </div>
</body>

</html>