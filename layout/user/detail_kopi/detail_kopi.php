<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jual Kopi | Jaya Kopi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="../../../asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../asset/css/normalize/normalize.css">
    <link rel="stylesheet" href="../../../asset/css/sl-mp.min.css">
    <link rel="stylesheet" href="../../../asset/css/css-layout/detail_kopi/detail_kopi.css">
  </head>
  <body>
    <div class="wrapper-background-image">
      <nav class="navbar navbar-default ">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-kopi" aria-expanded="false"></button>
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <a href="../../../index.php" class="navbar-brand">Kopi Jaya</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse float-right" id="navbar-collapse-alat-kopi">
            <ul class="nav navbar-nav list">
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Biji Kopi<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../biji-kopi/kopi.php">Semua Kopi</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alat Kopi<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../alat_kopi.php">Semua Alat Kopi</a></li>
                  <li><a href="#">Dripper</a></li>
                  <li><a href="#">Espresso Maker</a></li>
                  <li><a href="#">French Press</a></li>
                  <li><a href="#">Grinder</a></li>
                  <li><a href="#">Kettle</a></li>
                  <li><a href="#">Paper Filter</a></li>
                  <li><a href="#">Scale</a></li>
                  <li><a href="#">Server</a></li>
                </ul>
              </li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Tentang Kami</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <main class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 img-zoom-container card" onmouseover="imageZoom('myimage', 'myresult')" onmouseleave="hideImage()">
            <img id="myimage" src="../../../asset/img/alat_kopi/v60.jpg" alt="v60">
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="content-coffe">
              <div id="myresult" class="img-zoom-result"></div>
              <h1><b>Hario V60 Dripper White 01</b></h1>
              <h3>Rp. 100000</h3>
              <br>
              <br>
              <h3><b>Spesifikasi</b></h3>
              <br>
              <p class="font-size-spesifikasi">
                Material : High Quality Heat Resistant Plastic
                <br>
                Dimensi (PxLxT) : 10.5 x 10 x 8.2 cm
                <br>
                Berat : 95 gram
                <br>
                Ukuran : 1 ~ 2 Cups
                <br>
                Cocok untuk pemakaian <a href="#">Hario Paper Filter ukuran 01</a>
                <br>
                Brand : Hario
                <br>
                Made in Japan
              </p>
              <form class="" action="#" method="post">
                <div class="quantity">
                  <b>Qty</b>
                  <div class="quantity-inner">
                    <button class="minus" onclick="lessQty()" type="button">
                      <span class="glyphicon glyphicon-menu-down"></span>
                    </button>
                    <input type="text" step="1" min="1" max="20" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]" inputmode="numeric" class="qty" id="quantity_product">
                    <button class="plus" onclick="addQty()" type="button">
                      <span class="glyphicon glyphicon-menu-up"></span>
                    </button>
                    <button type="submit" name="add-to-cart" class="submit-product-to-cart btn btn-primary">Beli</button>
                  </div>
                </div>
              </form>
              <div class="product-meta">
                <span class="suku-wrapper">
                  <b>SKU :</b>
                  <span class="sku">Alat Kopi-316</span>
                </span>
                <span class="posted-in">
                  <b>Categories</b>
                  <span>
                    <a href="#">Jual Alat Kopi</a>|
                    <a href="#">Dripper</a>
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container tabs">
        <div class="row">
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#description" data-toggle="tab" role="tab">Description</a></li>
            <li><a href="#product_review" data-toggle="tab" role="tab">Product Review</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="description">
              <p>Marones Coffee Arabika Specialty Puntang adalah kopi arabika specialty hasil roastingan dari coffee roaster Marones dengan biji kopi arabika grade specialty yang pasca panennya diproses secara semi washed.</p>
            </div>
            <div class="tab-pane fade" id="product_review">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <h2>Related Product</h2>
          <div class="col-xs-12 col-md-4 sl-p0">
            <div class="img-content">
              <img src="" alt="">
            </div>
            <div class="description-content">
              <h2>Konak Coffee Fine Robusta</h2>
              <br>
              <br>
              <h5>Rp49000 - Rp14000</h5>
              <a href="#">
                <span type="button">Beli</span>
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 sl-p0">
            <div class="img-content">
              <img src="" alt="">
            </div>
            <div class="description-content">
              <h2>Konak Coffee Fine Robusta</h2>
              <br>
              <br>
              <h5>Rp49000 - Rp14000</h5>
              <a href="#">
                <span type="button">Beli</span>
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 sl-p0">
            <div class="img-content">
              <img src="" alt="">
            </div>
            <div class="description-content">
              <h2>Konak Coffee Fine Robusta</h2>
              <br>
              <br>
              <h5>Rp49000 - Rp14000</h5>
              <a href="#">
                <span type="button">Beli</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script type="text/javascript" src="../../../asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../asset/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../../asset/js/user/detail_kopi/detail_kopi.js"></script>
  </body>
</html>
