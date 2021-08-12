<?php
include_once './includes/templates/header.php';
if (isset($_GET['id'])) {
  $profile = false;
  $userquery = 'SELECT * FROM user WHERE id = ?';
  $userstmt = $conn->prepare($userquery);
  $userstmt->bindParam(1, $_GET['id']);
  $userstmt->execute();
  $visitedUser = $userstmt->fetch();
  if ($visitedUser) {
    if ( isset($_SESSION['user']) && ($visitedUser['email'] === $_SESSION['user'])) {
      $profile = true;
    }
  } else {
    header('location:./pagenotfound.php');
  }
} else {
  header('location:./pagenotfound.php');
}
?>
<div class="container">
  <div class="userheader">
    <div class="row">
      <div class="user-main s12 m8 l6">
        <div class="user-img">
          <img class="materialboxed" style="width: 100%;height: 100%;" src="<?php echo $visitedUser['img'] ?>" alt="">
        </div>
        <div>
          <h4 style="text-align: center;"><?php echo $visitedUser['firstName'] . ' ' . $visitedUser['lastName'] ?></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="userbody">
    <p><?php echo $visitedUser['intro'] ?></p>
    <h6 style="line-height: 1.5;">عدد المقالات: 3</h6>
    <h6 style="line-height: 1.5;"><?php echo 'تاريخ الانضمام: ' . date("d-m-Y", strtotime($visitedUser['registeredAt'])) ?></h6>
    <h6 style="line-height: 1.5;margin-bottom: 10px;"><?php echo 'آخر تسجيل: ' . date("d-m-Y", strtotime($visitedUser['lastLogin'])) ?></h6>
    <div class="divider"></div>
    <h5>نبذة تعريفيه</h5>
    <p><?php echo $visitedUser['profile'] ?></p>
    <div class="divider"></div>
    <h5 style="line-height: 1.7;"><?php echo 'مقالات ' . $visitedUser['firstName'] ?></h5>
    <div class="row">
      <div class="col s12 m4 right">
        <div class="card">
          <div class="card-image">
            <a href="#">
              <img src="https://cdn.ida2at.com/media/2021/04/%D8%B1%D8%B3%D9%85-%D9%8A%D8%B9%D9%88%D8%AF-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D8%B9%D8%A7%D9%85-1800%D9%85-%D9%84%D8%B4%D9%83%D9%84%D9%8D-%D8%AA%D8%AE%D9%8A%D9%84%D9%8A-%D9%84%D9%85%D8%AF%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%A5%D8%B3%D9%83%D9%86%D8%AF%D8%B1%D9%8A%D8%A9-%D8%A7%D9%84%D9%82%D8%AF%D9%8A%D9%85%D8%A9.jpg">
            </a>
          </div>
          <div class="card-content">
            <span class="card-title blue-text">الإسكندرية يسكنها اللئام: «هجاء المدن» في شعر العرب</span>
          </div>
        </div>
      </div>
      <div class="col s12 m4 right">
        <div class="card">
          <div class="card-image">
            <a href="#">
              <img src="https://cdn.ida2at.com/media/2021/04/%D8%B1%D8%B3%D9%85-%D9%8A%D8%B9%D9%88%D8%AF-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D8%B9%D8%A7%D9%85-1800%D9%85-%D9%84%D8%B4%D9%83%D9%84%D9%8D-%D8%AA%D8%AE%D9%8A%D9%84%D9%8A-%D9%84%D9%85%D8%AF%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%A5%D8%B3%D9%83%D9%86%D8%AF%D8%B1%D9%8A%D8%A9-%D8%A7%D9%84%D9%82%D8%AF%D9%8A%D9%85%D8%A9.jpg">
            </a>
          </div>
          <div class="card-content">
            <span class="card-title blue-text">الإسكندرية يسكنها اللئام: «هجاء المدن» في شعر العرب</span>
          </div>
        </div>
      </div>
      <div class="col s12 m4 right">
        <div class="card">
          <div class="card-image">
            <a href="#">
              <img src="https://cdn.ida2at.com/media/2021/04/%D8%B1%D8%B3%D9%85-%D9%8A%D8%B9%D9%88%D8%AF-%D8%A5%D9%84%D9%89-%D8%A7%D9%84%D8%B9%D8%A7%D9%85-1800%D9%85-%D9%84%D8%B4%D9%83%D9%84%D9%8D-%D8%AA%D8%AE%D9%8A%D9%84%D9%8A-%D9%84%D9%85%D8%AF%D9%8A%D9%86%D8%A9-%D8%A7%D9%84%D8%A5%D8%B3%D9%83%D9%86%D8%AF%D8%B1%D9%8A%D8%A9-%D8%A7%D9%84%D9%82%D8%AF%D9%8A%D9%85%D8%A9.jpg">
            </a>
          </div>
          <div class="card-content">
            <span class="card-title blue-text">الإسكندرية يسكنها اللئام: «هجاء المدن» في شعر العرب</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once './includes/templates/footer.php'; ?>