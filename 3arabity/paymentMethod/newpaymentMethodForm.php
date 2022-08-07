<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Payment_Method</title>
  <link rel="stylesheet" href="stylepaymentMethod.css">
</head>

<body>
  <div class="login-box">
    <form action="newPayment_Method-save.php" method="POST">
      <h1>New Payment_Method</h1>
      <div class="user-box">
        <input type="text" placeholder="Payment_Method Name" name="Payment_MethodName" required>
        <label>Payment_Method Name</label>
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