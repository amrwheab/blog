<?php
include_once './includes/templates/header.php';
if (!isset($_SESSION['user'])) {
  header('location: ./');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['userimg']['name'])) {
    include_once './includes/functions/uploadingFile.php';
    $upload = uploadingFile('userimg', false);
    if ($upload) {
      $self = explode('/', $_SERVER['PHP_SELF']);
      $removeself = end($self);
      $uri = str_replace('/' . $removeself, '', $_SERVER['PHP_SELF']);
      $deleteCurrent = str_replace(strtolower(current(explode('/', $_SERVER['SERVER_PROTOCOL']))) . '://' . $_SERVER['HTTP_HOST'] . $uri, '.', $user['img']);
      unlink($deleteCurrent);
      $settingquery = 'UPDATE user SET img = ?';
      $settingstmt = $conn->prepare($settingquery);
      $settingstmt->bindParam(1, $upload);
      if ($settingstmt->execute()) {
        header('location: setting.php');
      }
    } else {
      echo '<p class="red white-text password-wrong">حدث خطأ ما</p>';
    }
  } else {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $intro = $_POST['intro'];
    $aboutyou = $_POST['aboutyou'];

    $modquery = 'UPDATE user SET 
                    firstName = :first_name,
                    lastName = :last_name,
                    mobile = :mobile,
                    email = :email,
                    intro = :intro,
                    profile = :aboutyou';
    $modstmt = $conn->prepare($modquery);
    $modstmt->bindParam(':first_name', $first_name);
    $modstmt->bindParam(':last_name', $last_name);
    $modstmt->bindParam(':mobile', $mobile);
    $modstmt->bindParam(':email', $email);
    $modstmt->bindParam(':intro', $intro);
    $modstmt->bindParam(':aboutyou', $aboutyou);

    if ($modstmt->execute()) {
      header('location:setting.php');
    }
  }
}
?>
<div class="container">
  <h4>تغيير الصورة الشخصية</h4>
  <img style="max-width: 200px;max-height: 200px;" src="<?php echo $user['img'] ?>" alt="">
  <div class="row">
    <div class="col s12 m8 l6 right">
      <form method="POST" enctype="multipart/form-data">
        <div class="file-field input-field">
          <div class="btn blue">
            <span>اختار الصورة</span>
            <input type="file" name="userimg">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <input type="submit" value="التأكيد" class="btn blue">
      </form>

    </div>
  </div>
  <div class="divider"></div>
  <h4>تحديث البيانات</h4>
  <div class="row">
    <form class="col s12 m10 right" style="padding: 30px 0;" method="POST">
      <div class="row">
        <div class="input-field col s6 right">
          <input id="first_name" type="text" class="validate" name="first_name" value="<?php echo $user['firstName'] ?>" required>
          <label for="first_name">الاسم الاول</label>
        </div>
        <div class="input-field col s6 right">
          <input id="last_name" type="text" class="validate" name="last_name" value="<?php echo $user['lastName'] ?>" required>
          <label for="last_name">الاسم الاخير</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" value="<?php echo $user['email'] ?>" required>
          <label for="email">البريد الالكترونى</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="mobile" type="text" class="validate" name="mobile" value="<?php echo $user['mobile'] ?>" required>
          <label for="mobile">الهاتف</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="intro">نبذة بسيطة عنك</label>
          <textarea id="intro" class="materialize-textarea" style="height: 100px;" name="intro" required maxlength="255"><?php echo $user['intro'] ?></textarea>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="aboutyou">تحدث عن نفسك</label>
          <textarea id="aboutyou" class="materialize-textarea" style="height: 200px;" name="aboutyou" required><?php echo $user['profile'] ?></textarea>
        </div>
      </div>
      <input type="submit" class="btn blue" value="التاكيد">
    </form>
  </div>
</div>

<?php include_once './includes/templates/footer.php'; ?>