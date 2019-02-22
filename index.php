<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaya Kopi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/normalize/normalize.css">
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <header>
      <div class="nav-wrapper">
        <div class="container-fluid">
          <div class="row top-header">
            <div class="col-sm-12 col-md-12">
              <div class="wrapper-header">
                <h1 style="color:white">Jaya Kopi</h1>
                <a href="layout/user/user-creat/sign_in/sign_in.php" class="signin">Sign In</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <nav class="navbar navbar-default m0">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#burger-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse collapse-list" id="burger-menu">
              <ul class="nav navbar-nav list">
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Biji Kopi<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="layout/user/biji-kopi/kopi.php">Semua Biji Kopi</a></li>
                    <li><a href="#">Arabika</a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alat Kopi<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="layout/user/alat_kopi/alat_kopi.php">Semua Alat Kopi</a></li>
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
    </header>
    <main class="content">
      <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide max" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="asset/img/kopi.jpg" alt="dvd">
          </div>
          <div class="item">
            <img src="asset/img/kopi.jpg" alt="harddisk">
          </div>
          <div class="item">
            <img src="asset/img/kopi.jpg" alt="motherboard">
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="container mt50">
        <div class="row">
          <div class="col-xs-6 col-md-4">
            <div class="row">
              <div class="col-xs-6 col-md-3">
                <div class="img">
                  <img src="asset/img/coffee-bag.svg" alt="coffe-bag" class="img-responsive">
                </div>
              </div>
              <div class="col-xs-6 col-md-9">
                <div class="description">
                  <b>Banyak Pilihan Kopi</b>
                  <p>Temukan berbagai pilihan kopi favorit dari banyak roaster di Indonesia.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="row">
              <div class="col-xs-6 col-md-3">
                <div class="img">
                  <img src="asset/img/shopping-bag.svg" alt="free-delivery" class="img-responsive">
                </div>
              </div>
              <div class="col-xs-6 col-md-9">
                <div class="description">
                  <b>One Stop Shopping Coffee</b>
                  <p>Bisa beli kopi dari berbagai roaster dan alat kopi di satu tempat.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-md-4">
            <div class="row">
              <div class="col-xs-6 col-md-3">
                <div class="img">
                  <img src="asset/img/free-delivery-1.svg" alt="shopping-bag">
                </div>
              </div>
              <div class="col-xs-6 col-md-9">
                <div class="description">
                  <b>Free Delivery</b>
                  <p>Gratis ongkos kirim setiap pembelian kopi, tanpa mininum pembelian.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container m">
        <div class="row wrapper-option">
          <div class="col-xs-12 col-md-12">
            <div class="wrapper-content">
              <h1 class="center"><b>Pilih Kopi Favoritmu</b></h1>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <select class="width" name="">
                  <option value="">-- Pilih Origin --</option>
                  <option value="">Sumatera Utara</option>
                  <option value="">Sumatera Barang</option>
                  <option value="">Sumatera Selatan</option>
                </select>
              </div>
              <div class="col-xs-12 col-md-6">
                <select class="width" name="">
                  <option value="">-- Pilih Tipe Kopi --</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container m">
        <div class="wrapper-jualkopi">
          <h1 class="center"><b>Jual Kopi Online</b></h1>
          <h4 class="center">Temukan biji kopi hasil roastingan favoritmu disini!</h4>
        </div>
      </div>
      <div class="container m card">
        <div class="row">
          <div class="col-xs-12 col-md-3">

          </div>
          <div class="col-xs-12 col-md-9">
            <div class="row">
              <div class="col-xs-12 col-md-12">
                <div class="row">
                  <div class="col-xs-12 col-md-4  pb20">
                    <div class="hover">
                      <div class="hover-image">
                        <img src="asset/img/kopi.jpg" alt="kopi" class="image">
                      </div>
                      <div class="overlay">
                        <div class="row">
                          <div class="col-xs-12 col-md-12">
                            <h3><a href="layout/user/detail_kopi/detail_kopi.php">Kopi Lanang Sumatera Utara</a></h3>
                          </div>
                          <div class="col-xs-12 col-md-12">
                            <p>Bintang</p>
                          </div>
                          <div class="col-xs-12 col-md-12">
                            <p>Harga</p>
                          </div>
                          <div class="col-xs-12 col-md-12">
                            <div class="wrapper-link">
                              <a href="#"><b>Beli</b></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-4  pb20">
                    <img src="asset/img/kopi.jpg" alt="">
                  </div>
                  <div class="col-xs-12 col-md-4  pb20">
                    <img src="asset/img/kopi.jpg" alt="">
                  </div>
                  <div class="col-xs-12 col-md-4  pb20">
                    <img src="asset/img/kopi.jpg" alt="">
                  </div>
                  <div class="col-xs-12 col-md-4  pb20">
                    <img src="asset/img/kopi.jpg" alt="">
                  </div>
                  <div class="col-xs-12 col-md-4  pb20">
                    <img src="asset/img/kopi.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container m">
        <div class="row">
          <h1 class="center"><b>Alat Kopi Favorit</b></h1>
          <h4 class="center">Temukan alat kopi favorit di Jayakopi.com</h4>
        </div>
      </div>
      <div class="container card">
        <div class="row">
          <div class="col-xs-12 col-md-9">
            <div class="row">
              <div class="col-xs-12 col-md-4  pb20">
                <img src="asset/img/kopi.jpg" alt="">
              </div>
              <div class="col-xs-12 col-md-4  pb20">
                <img src="asset/img/kopi.jpg" alt="">
              </div>
              <div class="col-xs-12 col-md-4  pb20">
                <img src="asset/img/kopi.jpg" alt="">
              </div>
              <div class="col-xs-12 col-md-4  pb20">
                <img src="asset/img/kopi.jpg" alt="">
              </div>
              <div class="col-xs-12 col-md-4  pb20">
                <img src="asset/img/kopi.jpg" alt="">
              </div>
              <div class="col-xs-12 col-md-4  pb20">
                <img src="asset/img/kopi.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-3">

          </div>
        </div>
      </div>
    </main>

    <footer>
      <div class="container color-gray">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <h1>Informasi</h1>
            <p class="border"></p>
            <ul>
              <li><a href="#">Tentang Jaya Kopi</a></li>
              <li><a href="#">Partnership</a></li>
              <li><a href="#">Pengiriman dan Pengembalian barang</a></li>
              <li><a href="#">Frequently Asked Questions</a></li>
              <li><a href="#">Syarat dan Ketentuan</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Konfirmasi Pembayaran</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-4">
            <h1>Blog</h1>
            <p class="border"></p>
            <ul>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-4">
            <h1>Pembayaran</h1>
            <p class="border"></p>

          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-9">
            <div class="copy-right">
              <h5>Jaya Kopi &copy; 2019. Made Ahmad Syahputra</h5>
            </div>
          </div>
          <div class="col-xs-12 col-md-3">
            <div class="faq-wrapper">
              <a href="#">FAQ | Syarat dan Ketentuan</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
