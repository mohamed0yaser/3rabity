<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Payment_Method</title>
  <link rel="stylesheet" href="stylepaymentMethod.css">
</head>

<body>
  <div class="login-box">
    <form action="editPayment_Method-save.php" method="post">
      <h1>Edit Payment_Method</h1>
      <div class="user-box">
        <input type="text" placeholder="ID Payment_Method" name="idPayment_Method" required>
        <label>ID Payment_Method</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter New Payment_Method Name" name="Name" required>
        <label>Enter New Payment_Method Name</label>
      </div>
      <button type="submit" name="save_bt">save</button>
      <a href="#">back</a>
    </form>
  </div>