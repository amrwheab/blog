<?php
include_once './includes/templates/header.php';

?>

<div id="addpostcontain" class="container">
  <div style="padding: 10px 0 30px;">
    <h5 style="margin-bottom: 20px;">إضافة مقال</h5>
    <form action="./" method="POST" id="addpostform">
    <input type="hidden" name="userid" value="<?php echo $user['id']; ?>">
    <input type="hidden" id="postcontent" name="postcontent">
    <input type="hidden" id="postcatid" name="postcatid">
      <div style="margin-bottom: 10px;">
        <label for="posttitle">عنوان المقال</label>
        <input id="posttitle" type="text" class="validate" name="posttitle" required>
      </div>
      <div style="margin-bottom: 10px;">
        <label for="poster">صورة المقال الأساسية</label>
        <div class="file-field input-field">
          <div class="btn blue">
            <span>Img</span>
            <input id="postposter" type="file" name="postposter" accept="image/*" required>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>
      <div style="margin-bottom: 10px;">
        <label for="postcategory">نوع المقال</label>
      <div class="input-field">
        <input type="text" id="postcategory" name="postcategory" class="autocomplete">
      </div>
      </div>
      <div style="margin-bottom: 10px;">
        <label for="editor" style="display: inline-block;margin-bottom: 10px;">محتوى المقال</label>
        <textarea id="editor" name="postbody" required>
          هنا محتوى المقال
        </textarea>
      </div>
      <input id="addpost" type="submit" class="btn blue" value="اضافة المقال">
    </form>
  </div>
</div>

<?php include_once './includes/templates/footer.php'; ?>