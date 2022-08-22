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
        <ol class="breadcrumb pl-0 ">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="customer-orders">Orders</a></li>
          <li class="breadcrumb-item active">Order #1735        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Order #1735</h1>
          <div><p class="lead text-muted">Order #1735 was placed on <strong>22/06/2013</strong> and is currently <strong>Being prepared</strong>.</p><p class="text-muted">If you have any questions, please feel free to <a href="contact">contact us</a>, our customer service center is working for you 24/7.</p></div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9">
            <div class="cart">
              <div class="cart-wrapper">
                <div class="cart-header">
                  <div class="row">
                    <div class="col-6">Item</div>
                    <div class="col-2 text-center">Price</div>
                    <div class="col-2 text-right">Quantity</div>
                    <div class="col-2 text-right">Total</div>
                  </div>
                </div>
                <div class="cart-body">
                  <!-- Product-->
                  <div class="cart-item">
                    <div class="row d-flex align-items-center text-center">
                      <div class="col-6">
                        <div class="d-flex align-items-center"><a href="detail"><img class="cart-item-img" src="/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."></a>
                          <div class="cart-title text-left"><a class="text-dark" href="detail"><strong>Skull Tee</strong></a><br><span class="text-muted text-sm">Size: Large</span><br><span class="text-muted text-sm">Colour: Green</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">$65.00</div>
                      <div class="col-2">4
                      </div>
                      <div class="col-2 text-center">$260.00</div>
                    </div>
                  </div>
                  <!-- Product-->
                  <div class="cart-item">
                    <div class="row d-flex align-items-center text-center">
                      <div class="col-6">
                        <div class="d-flex align-items-center"><a href="detail"><img class="cart-item-img" src="/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."></a>
                          <div class="cart-title text-left"><a class="text-dark" href="detail"><strong>Transparent Blouse</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">$55.00</div>
                      <div class="col-2">3
                      </div>
                      <div class="col-2 text-center">$165.00</div>
                    </div>
                  </div>
                  <!-- Product-->
                  <div class="cart-item">
                    <div class="row d-flex align-items-center text-center">
                      <div class="col-6">
                        <div class="d-flex align-items-center"><a href="detail"><img class="cart-item-img" src="/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."></a>
                          <div class="cart-title text-left"><a class="text-dark" href="detail"><strong>White Tee</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">$55.00</div>
                      <div class="col-2">3
                      </div>
                      <div class="col-2 text-center">$165.00</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row my-5">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5 class="mb-0">Order Summary</h5>
                  </div>
                  <div class="card-body">
                    <p class="text-muted text-sm mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                    <table class="table card-text">
                      <tr>
                        <th class="py-4">Order Subtotal </th>
                        <td class="py-4 text-right text-muted">$390.00</td>
                      </tr>
                      <tr>
                        <th class="py-4">Shipping and handling</th>
                        <td class="py-4 text-right text-muted"> $10.00</td>
                      </tr>
                      <tr>
                        <th class="py-4">Tax</th>
                        <td class="py-4 text-right text-muted">$0.00</td>
                      </tr>
                      <tr>
                        <th class="py-4">Total</th>
                        <td class="py-4 text-right h3 font-weight-normal">$400.00</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="mb-0"> Invoice address</h5>
                  </div>
                  <div class="card-body p-4">
                    <p class="card-text text-muted">John Brown<br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p>
                  </div>
                </div>
                <div class="card mb-5"> 
                  <div class="card-header">
                    <h5 class="mb-0">Shipping address</h5>
                  </div>
                  <div class="card-body p-4">
                    <p class="card-text text-muted">John Brown<br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Customer Sidebar-->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="customer-sidebar card border-0"> 
              <div class="customer-profile"><a class="d-inline-block" href="#"><img class="img-fluid rounded-circle customer-image" src="/img/avatar/avatar-0.jpg" alt=""></a>
                <h5>Jane Doe</h5>
                <p class="text-muted text-sm mb-0">Los Angeles, CA</p>
              </div>
              <nav class="list-group customer-nav"><a class="active list-group-item d-flex justify-content-between align-items-center" href="customer-orders"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#paper-bag-1"> </use>
                    </svg>Orders</span>
                  <div class="badge badge-pill badge-light font-weight-normal px-3">5</div></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-account"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#male-user-1"> </use>
                    </svg>Profile</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-addresses"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#real-estate-1"> </use>
                    </svg>Addresses</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-wishlist"><span>
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
    </section>
    <!-- Footer-->
    <?php include("parts/body/footer.php") ?>
    <!-- Modales-->
    <?php include("parts/body/modal.php") ?>
    <!-- scripts-->
    <?php include("parts/body/scripts.php") ?>
  </body>
</html>