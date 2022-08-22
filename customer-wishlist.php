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
        <ol class="breadcrumb pl-0 pt-5">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Wishlist        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Wishlist</h1>
          <div><p class="lead text-muted mb-0">You have 3 items in your wishlist.</p></div>
        </div>
      </div>
    </section>
    <!-- Wishlist Section-->
    <div class="container pb-6">
      <div class="row">
        <div class="col-lg-8 col-xl-9">
          <div class="cart mb-5 mb-lg-0">
            <div class="cart-body">
              <!-- Product-->
              <div class="cart-item">
                <div class="row d-flex align-items-center text-left text-md-center">
                  <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times"></i></a><a class="d-md-none" href="#">
                      <svg class="svg-icon w-2rem h-2rem mt-2 mr-5 float-right">
                        <use xlink:href="#add-to-cart-1"> </use>
                      </svg></a>
                    <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."></a>
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
                            <div class="badge p-lg-2 badge-primary-light">In Stock</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-none d-md-block text-center"> <a class="mt-4 mt-md-0 text-primary" href="#">
                          <svg class="svg-icon w-2rem h-2rem">
                            <use xlink:href="#add-to-cart-1"> </use>
                          </svg></a>
                      </div>
                      <div class="col-1 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                          <svg class="svg-icon w-2rem h-2rem mt-2">
                            <use xlink:href="#close-1"> </use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="cart-item">
                <div class="row d-flex align-items-center text-left text-md-center">
                  <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times"></i></a><a class="d-md-none" href="#">
                      <svg class="svg-icon w-2rem h-2rem mt-2 mr-5 float-right">
                        <use xlink:href="#add-to-cart-1"> </use>
                      </svg></a>
                    <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."></a>
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
                            <div class="badge p-lg-2 badge-danger-light">Out of stock</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-none d-md-block text-center"> 
                      </div>
                      <div class="col-1 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                          <svg class="svg-icon w-2rem h-2rem mt-2">
                            <use xlink:href="#close-1"> </use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="cart-item">
                <div class="row d-flex align-items-center text-left text-md-center">
                  <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times"></i></a><a class="d-md-none" href="#">
                      <svg class="svg-icon w-2rem h-2rem mt-2 mr-5 float-right">
                        <use xlink:href="#add-to-cart-1"> </use>
                      </svg></a>
                    <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."></a>
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
                            <div class="badge p-lg-2 badge-info-light">Being restocked</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 d-none d-md-block text-center"> 
                      </div>
                      <div class="col-1 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                          <svg class="svg-icon w-2rem h-2rem mt-2">
                            <use xlink:href="#close-1"> </use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Customer Sidebar-->
        <div class="col-xl-3 col-lg-4 mb-5">
          <div class="customer-sidebar card border-0"> 
            <div class="customer-profile"><a class="d-inline-block" href="#"><img class="img-fluid rounded-circle customer-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/avatar/avatar-0.jpg" alt=""></a>
              <h5>Jane Doe</h5>
              <p class="text-muted text-sm mb-0">Los Angeles, CA</p>
            </div>
            <nav class="list-group customer-nav"><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-orders"><span>
                  <svg class="svg-icon svg-icon-heavy mr-2">
                    <use xlink:href="#paper-bag-1"> </use>
                  </svg>Orders</span>
                <div class="badge badge-pill badge-dark font-weight-normal px-3">5</div></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-account"><span>
                  <svg class="svg-icon svg-icon-heavy mr-2">
                    <use xlink:href="#male-user-1"> </use>
                  </svg>Profile</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-addresses"><span>
                  <svg class="svg-icon svg-icon-heavy mr-2">
                    <use xlink:href="#real-estate-1"> </use>
                  </svg>Addresses</span></a><a class="active list-group-item d-flex justify-content-between align-items-center" href="customer-wishlist"><span>
                  <svg class="svg-icon svg-icon-heavy mr-2">
                    <use xlink:href="#heart-1"> </use>
                  </svg>Wishlist</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-login"><span>
                  <svg class="svg-icon svg-icon-heavy mr-2">
                    <use xlink:href="#exit-1"> </use>
                  </svg>Log out</span></a>
            </nav>
          </div>
        </div>
        <!-- /Customer Sidebar-->
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