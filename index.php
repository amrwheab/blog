<?php include_once 'includes/templates/header.php'; ?>

<div class="header">
  <div class="container">
    <div class="row">
      <div class="col s12 m8 right content">
        <h1>بلوج هو مكان للكتابة والقراءة والتواصل</h1>
        <p>من السهل النشر عن اى موضوع والتواصل مع الآخرين</p>
        <?php
          if (!isset($_SESSION['user'])) {
            echo '<a class="waves-effect waves-light btn blue" href="./signup.php">التسجيل</a>';
          }
        ?>
      </div>
    </div>
  </div>
</div>

<div class="daily">
  <div class="container">
    <div class="row">
      <div class="col s12 m7 right">
        <div class="daily-story">
          <span class="log">قصة اليوم</span>
          <div class="img-contain">
            <a href="#">
              <img src="./layout/img/daily.jpg" alt="">
            </a>
          </div>
          <div class="daily-story-body">
            <p class="h3 blue-text">كيف تبني دولة؟ درس بسمارك الذي لم يفهمه العرب</p>
            <p class="summary">تمثل نشأة ألمانيا واحدة من حلقات التاريخ المهمة. كيف استطاع «شارلمان» توحيد القبائل الجرمانية حتى جاء «بسمارك» وأسس الإمبراطورية الألمانية؟</p>
            <div class="author">
              <a href="#">
                <img src="./layout/img/author.jpg" style="width: 50px;height: 50px;border-radius: 50%;" alt="">
                <span style="font-size: 1.2rem;margin-right: 12px;">سامح رفعت</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m5 left">
        <div class="daily-story">
          <span class="log">الأحدث</span>
          <div class="img-contain">
            <a href="#">
              <img src="./layout/img/recent.jpg" alt="">
            </a>
          </div>
          <div class="daily-story-body">
            <h5 class="blue-text">سيرة سياسية مختصرة: تونس من الاستقلال حتى ثورة الياسمين</h5>
            <p class="summary" style="font-size: 1.1rem;">في 20 مارس/ آذار عام 1956 حصلت تونس على إعلان رسمي باستقلالها بعد حماية فرنسية دامت لـ 75 عامًا. ولاحقًا فازت قوائم الحزب الحر الدستوري الجديد بكافة مقاعد المجلس التأسيسي. بعد أقل من شهر تشكلت حكومة جديد بقيادة الحبيب بورقيبة الذي عاد لتوّه من المنفى. وفي 25 يوليو/ تموز 1957 أُعلنت الجمهورية وألغيت…</p>
            <div class="author">
              <a href="#">
                <img src="./layout/img/author.jpg" style="width: 50px;height: 50px;border-radius: 50%;" alt="">
                <span style="font-size: 1.2rem;margin-right: 12px;">سامح رفعت</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="cat-trend">
  <div class="container">
    <div class="row">
      <div class="col m4 s12 right">
        <div class="categories">
          <h4>الاقسام</h4>
          <a href="#" class="btn-flat blue-text">فن وأدب</a>
          <a href="#" class="btn-flat blue-text">القضية الفلسطينية</a>
          <a href="#" class="btn-flat blue-text">معرفة</a>
          <a href="#" class="btn-flat blue-text">تيارات وحركات</a>
          <a href="#" class="btn-flat blue-text">رياضة</a>
          <a href="#" class="btn-flat blue-text">علوم وتقنية</a>
        </div>
      </div>
      <div class="col m8 s12 left">
        <div class="trends">
          <h4>شائع</h4>
          <div class="row">
            <div class="col s12 m6">
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
            <div class="col s12 m6">
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
    </div>
  </div>
</div>

<div class="last">
  <div class="container">
    <h4>نرشح لك</h4>
    <div class="row">
      <div class="col s12 m4">
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
      <div class="col s12 m4">
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
      <div class="col s12 m4">
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
      <div class="col s12 m4">
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
      <div class="col s12 m4">
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
      <div class="col s12 m4">
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

<?php include_once 'includes/templates/footer.php'; ?>