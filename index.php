<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kimpai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css"> <!--test git change -->
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

                <a class="navbar-brand" href="#">Thaioffset</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link main" aria-current="page" href="#">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register" href="#">สมัครสมาชิก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inventory" href="#">รายการสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cart" href="#">ตะกร้าสินค้า</a>
                    </li>
                </ul>
              <div class="auth-buttons">
                <div class="d-flex gap-2">
                    <button
                      type="button"
                      class="btn btn-warning btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#registerModel">
                      register
                    </button>   
                </div>
                <div class="d-flex gap-2">
                    <button
                      type="button"
                      class="btn btn-primary btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#loginModel">
                      login
                    </button>   
                </div>
              </div>
                <div class="modal fade" id="registerModel" tabindex="-1">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">สมัครสมาชิก</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body register-body">
                        <?php include "register-form.php"; ?>
                      </div>
                      <div class="modal-footer register-footer">
                        <button type="cencel" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-success" form="registerForm">บันทึกข้อมูล</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="loginModel" tabindex="-1">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">   
                      <div class="modal-header">
                        <h5 class="modal-title">เข้าสู่ระบบ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body"></div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="button" class="btn btn-success">เข้าสู่ระบบ</button>
                      </div>
                    </div>
                  </div>
                </div>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators -->
    <div class="carousel-indicators">
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
         class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
         aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
         aria-label="Slide 3"></button>
    </div>

  <!-- Slides -->
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="Picture/Kimpai1.jpg" class="d-block w-100" alt="Slide 1">
        </div>

        <div class="carousel-item">
            <img src="Picture/Kimpai2.jpg" class="d-block w-100" alt="Slide 2">
        </div>

        <div class="carousel-item">
            <img src="Picture/Kimpai3.jpg" class="d-block w-100" alt="Slide 3">
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>

<div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col">
    <div class="product-card h-100">
      <div class="product-image">
        <img src="Picture/Computer1.jpg" alt="">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Gaming PC Set</h5>
        <p class="card-text">
          คอมพิวเตอร์สำหรับเล่นเกมและทำงานประสิทธิภาพสูง
        </p>

        <!-- ราคา + ปุ่ม -->
        <div class="mt-auto">
          <div class="price">฿29,900</div>
          <a href="product-detail.html" class="btn btn-primary w-100 btn-sm mt-2">
            รายละเอียดสินค้า
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="product-card h-100">
      <div class="product-image">
        <img src="Picture/Mouse1.jpg" alt="">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Gaming Mouse RGB</h5>
        <p class="card-text">
          เมาส์เกมมิ่งไฟ RGB ตอบสนองไว
        </p>

        <div class="mt-auto">
          <div class="price">฿1,290</div>
          <a href="product-detail.html" class="btn btn-primary w-100 btn-sm mt-2">
            รายละเอียดสินค้า
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="product-card h-100">
      <div class="product-image">
        <img src="Picture/Computer2.jpg" alt="">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Gaming PC RGB</h5>
        <p class="card-text">
          ชุดคอม RGB สำหรับเกมเมอร์
        </p>

        <div class="mt-auto">
          <div class="price">฿25,900</div>
          <a href="product-detail.html" class="btn btn-primary w-100 btn-sm mt-2">
            รายละเอียดสินค้า
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="product-card h-100">
      <div class="product-image">
        <img src="Picture/Mouse2.jpg" alt="">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Wireless Mouse</h5>
        <p class="card-text">
          เมาส์ไร้สาย ใช้งานสะดวก
        </p>

        <div class="mt-auto">
          <div class="price">฿890</div>
          <a href="product-detail.html" class="btn btn-primary w-100 btn-sm mt-2">
            รายละเอียดสินค้า
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="product-card h-100">
      <div class="product-image">
        <img src="Picture/Monitor.jpg" alt="">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Gaming Monitor 24"</h5>
        <p class="card-text">
          จอเกมมิ่ง 144Hz ภาพลื่น
        </p>

        <div class="mt-auto">
          <div class="price">฿6,900</div>
          <a href="product-detail.html" class="btn btn-primary w-100 btn-sm mt-2">
            รายละเอียดสินค้า
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="product-card h-100">
      <div class="product-image">
        <img src="Picture/Mouse3.jpg" alt="">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Gaming Mouse Pro</h5>
        <p class="card-text">
          เมาส์เกมมิ่งสำหรับแข่งขัน
        </p>

        <div class="mt-auto">
          <div class="price">฿1,590</div>
          <a href="product-detail.html" class="btn btn-primary w-100 btn-sm mt-2">
            รายละเอียดสินค้า
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <div class="row align-items-start">

      <!-- ซ้าย: ข้อมูล -->
      <div class="col-md-5">
        <h5>ติดต่อเรา</h5>

        <p>
          โรงงาน 3706/6 ซอยราษฎร์อุทิศ 1 ถนนพระราม 3<br>
          แขวงบางโคล่ เขตบางคอแหลม<br>
          กรุงเทพมหานคร 10120
        </p>

        <p>
          โทรศัพท์: 02-683-8401-9
        </p>

        <h6 class="mt-3">เวลาทำการ</h6>
        <p>
          จันทร์–ศุกร์ : 8:30 - 17:00 น.
        </p>
      </div>

      <div class="col-md-7">
        <div class="map-box">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.4307582603983!2d100.5183666750955!3d13.692340998667392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e298a83e55a2a9%3A0x7ebc1d9f376aac04!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5hOC4l-C4ouC4reC5iuC4reC4n-C5gOC4i-C4lyDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2sth!4v1770086303740!5m2!1sth!2sth"
            loading="lazy"
            allowfullscreen>
          </iframe>
        </div>
      </div>

    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
