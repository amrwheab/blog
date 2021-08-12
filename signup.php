<?php 
  include_once 'includes/templates/header.php';
  if (isset($_SESSION['user'])) {
    header('location:./');
  }
  $first_name = '';
  $last_name = '';
  $email = '';
  $mobile = '';
  $password = '';
  $confirmpassword = '';
  $intro = '';
  $aboutyou = '';
  
  $emailError = false;
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $intro = $_POST['intro'];
    $aboutyou = $_POST['aboutyou'];

    if ($password === $confirmpassword) {
      $query = 'SELECT * from user WHERE email = ?';
      $stmt = $conn->prepare($query);
      $stmt->bindParam(1, $email);
      $stmt->execute();
      if ($stmt->fetch()) {
        $emailError = true;
      } else {
        $query = 'INSERT INTO user SET 
                    firstName = :first_name,
                    lastName = :last_name,
                    mobile = :mobile,
                    email = :email,
                    passwordHash = :passwordHash,
                    registeredAt = :registeredAt,
                    lastLogin = :lastLogin,
                    intro = :intro,
                    profile = :aboutyou';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passwordHash', password_hash($password, PASSWORD_DEFAULT));
        $stmt->bindParam(':registeredAt', date("Y-m-d H:i:s"));
        $stmt->bindParam(':lastLogin', date("Y-m-d H:i:s"));
        $stmt->bindParam(':intro', $intro);
        $stmt->bindParam(':aboutyou', $aboutyou);

        if ($stmt->execute()) {
          $_SESSION['user'] = $email;
          header('location:./');
        }
      }
    }
  }
?>

<div class="container">
  <h4>التسجيل</h4>
  <?php 
  if ($password !== $confirmpassword) {
    echo '<p class="red white-text password-wrong">Passwords doesn\'t equal</p>';
  }
  if ($emailError) {
    echo '<p class="red white-text password-wrong">Email is already exsist</p>';
  }
  ?>
  <div class="row">
    <form class="col s12 m10 right" style="padding: 30px 0;" method="POST">
      <div class="row">
        <div class="input-field col s6 right">
          <input id="first_name" type="text" class="validate" name="first_name" value="<?php echo $first_name ?>" required>
          <label for="first_name">الاسم الاول</label>
        </div>
        <div class="input-field col s6 right">
          <input id="last_name" type="text" class="validate" name="last_name" value="<?php echo $last_name ?>" required>
          <label for="last_name">الاسم الاخير</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" value="<?php echo $email ?>" required>
          <label for="email">البريد الالكترونى</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="mobile" type="text" class="validate" name="mobile" value="<?php echo $mobile ?>" required>
          <label for="mobile">الهاتف</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password" value="<?php echo $password ?>" required minlength="6">
          <label for="password">كلمة السر</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="confirmpassword" type="password" class="validate" name="confirmpassword" value="<?php echo $confirmpassword ?>" required minlength="6">
          <label for="confirmpassword">تأكيد كلمة السر</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="intro">نبذة بسيطة عنك</label>
          <textarea id="intro"  class="materialize-textarea" style="height: 100px;" name="intro" required maxlength="255"><?php echo $intro ?></textarea>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="aboutyou">تحدث عن نفسك</label>
          <textarea id="aboutyou"  class="materialize-textarea" style="height: 200px;" name="aboutyou" required><?php echo $aboutyou ?></textarea>
        </div>
      </div>
      <input type="submit" class="btn blue" value="التسجيل">
    </form>
  </div>
</div>

<?php include_once 'includes/templates/footer.php'; ?>