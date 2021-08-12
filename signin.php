<?php 
  include_once 'includes/templates/header.php';
  if (isset($_SESSION['user'])) {
    header('location:./');
  }
  $email = '';
  $password = '';
  
  $emailError = false;
  $passwordError = false;
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM user WHERE email = ?';
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $email);
    $stmt->execute();
    $user = $stmt->fetch();
    if ($user) {
      if (password_verify($password, $user['passwordHash'])) {
        $_SESSION['user'] = $user['email'];
        header('location:./');
      } else {
        $passwordError = true;
      }
    } else {
      $emailError = true;
    }
  }
?>

<div class="container">
  <h4>تسجيل الدخول</h4>
  <?php
  if ($emailError) {
    echo '<p class="red white-text password-wrong">البريد الالكترونى غير صحيح</p>';
  }
  if ($passwordError) {
    echo '<p class="red white-text password-wrong">كلمة السر غير صحيحة</p>';
  }
  ?>
  <div class="row">
    <form class="col s12 m10 right" style="padding: 30px 0;" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" value="<?php echo $email ?>" required>
          <label for="email">البريد الالكترونى</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password" value="<?php echo $password ?>" required minlength="6">
          <label for="password">كلمة السر</label>
        </div>
      </div>
      <input type="submit" class="btn blue" value="تسجيل الدخول">
    </form>
  </div>
</div>

<?php include_once 'includes/templates/footer.php'; ?>