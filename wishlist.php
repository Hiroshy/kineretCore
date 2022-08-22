<?php include("admin_idkpa/model/store_info.class.php") ?>
<!DOCTYPE html>
<html lang="<?= $app['lenguage']; ?>">
  <head>
    <?php include("parts/head/gmanager.php") ?>
    <title><?= $app['store_name']; ?></title>
    <?php include("parts/head/meta.php") ?>
    <?php include("parts/head/link.php") ?>
  </head>
  <body>
    <?php include("parts/body/gmanager.php") ?>
    <!-- navbar-->
    <?php include("parts/body/navbar.php") ?>
    <!-- Hero Section-->
    <section class="hero py-6">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0  pt-5">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Wishlist        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Wishlist</h1>
          <div><p class="lead text-muted">You have 3 items in your wishlist. See a version of this template for <a href="customer-wishlist">signed-in customer</a>.</p></div>
        </div>
      </div>
    </section>
    <!-- Wishlist Section-->
    <div class="container pb-6">
      <div class="cart">
        <div class="cart-body">
          <!-- Product-->
          <div class="cart-item">
            <div class="row d-flex align-items-center text-left text-md-center">
              <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
                <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="/img/product/srednie_ps2rh-170.jpg" alt="..."></a>
                  <div class="cart-title text-left"><a class="text-dark" href="detail-1"><strong>Skull Tee</strong></a><br><span class="text-muted text-sm">Size: Large</span><br><span class="text-muted text-sm">Colour: Green</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-7 mt-4 mt-md-0">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <div class="row">
                      <div class="col-6 d-md-none text-muted">Price per item</div>
                      <div class="col-6 col-md-12 text-right text-md-center">$65.00</div>
                    </div>
                  </div>
                  <div class="col-md-3"> 
                    <div class="row">
                      <div class="col-6 d-md-none text-muted">Status </div>
                      <div class="col-6 col-md-12 text-right text-md-left"> 
                        <div class="badge p-lg-2 badge-primary">In Stock</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"> <a class="btn btn-outline-dark mt-4 mt-md-0" href="#">Add to cart</a>
                  </div>
                  <div class="col-2 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                      <svg class="svg-icon w-3rem h-3rem svg-icon-light">
                        <use xlink:href="#close-1"> </use>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="cart-item">
            <div class="row d-flex align-items-center text-left text-md-center">
              <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
                <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="/img/product/srednie_ps2rh-170.jpg" alt="..."></a>
                  <div class="cart-title text-left"><a class="text-dark" href="detail-1"><strong>Transparent Blouse</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-7 mt-4 mt-md-0">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <div class="row">
                      <div class="col-6 d-md-none text-muted">Price per item</div>
                      <div class="col-6 col-md-12 text-right text-md-center">$55.00</div>
                    </div>
                  </div>
                  <div class="col-md-3"> 
                    <div class="row">
                      <div class="col-6 d-md-none text-muted">Status </div>
                      <div class="col-6 col-md-12 text-right text-md-left"> 
                        <div class="badge p-lg-2 badge-danger">Out of stock</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                  </div>
                  <div class="col-2 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                      <svg class="svg-icon w-3rem h-3rem svg-icon-light">
                        <use xlink:href="#close-1"> </use>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="cart-item">
            <div class="row d-flex align-items-center text-left text-md-center">
              <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
                <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="/img/product/srednie_ps2rh-170.jpg" alt="..."></a>
                  <div class="cart-title text-left"><a class="text-dark" href="detail-1"><strong>White Tee</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-7 mt-4 mt-md-0">
                <div class="row align-items-center">
                  <div class="col-md-2">
                    <div class="row">
                      <div class="col-6 d-md-none text-muted">Price per item</div>
                      <div class="col-6 col-md-12 text-right text-md-center">$55.00</div>
                    </div>
                  </div>
                  <div class="col-md-3"> 
                    <div class="row">
                      <div class="col-6 d-md-none text-muted">Status </div>
                      <div class="col-6 col-md-12 text-right text-md-left"> 
                        <div class="badge p-lg-2 badge-dark">Being restocked</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"> 
                  </div>
                  <div class="col-2 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                      <svg class="svg-icon w-3rem h-3rem svg-icon-light">
                        <use xlink:href="#close-1"> </use>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <?php include("parts/body/footer.php") ?>
    <!-- Modales-->
    <?php include("parts/body/modal.php") ?>
    <!-- scripts-->
    <?php include("parts/body/scripts.php") ?>
  </body>
</html>