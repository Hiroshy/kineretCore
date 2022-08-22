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
          <li class="breadcrumb-item active">Your addresses        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Your addresses</h1>
        </div>
      </div>
    </section>
    <section class="pb-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9 mb-5 mb-lg-0">
            <form action="#">
              <!-- Invoice Address-->
              <h3 class="mb-4"> Invoice address                    </h3>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="form-label" for="fullname_invoice">Full Name</label>
                  <input class="form-control" type="text" name="fullname_invoice" placeholder="Joe Black" id="fullname_invoice">
                </div>
                <div class="form-group col-md-6">
                  <label class="form-label" for="emailaddress_invoice">Email Address</label>
                  <input class="form-control" type="text" name="emailaddress_invoice" placeholder="joe.black@gmail.com" id="emailaddress_invoice">
                </div>
                <div class="form-group col-md-6">
                  <label class="form-label" for="street_invoice">Street</label>
                  <input class="form-control" type="text" name="street_invoice" placeholder="123 Main St." id="street_invoice">
                </div>
                <div class="form-group col-md-6">
                  <label class="form-label" for="city_invoice">City</label>
                  <input class="form-control" type="text" name="city_invoice" placeholder="City" id="city_invoice">
                </div>
                <div class="form-group col-md-6">
                  <label class="form-label" for="zip_invoice">ZIP</label>
                  <input class="form-control" type="text" name="zip_invoice" placeholder="Postal code" id="zip_invoice">
                </div>
                <div class="form-group col-md-6">
                  <label class="form-label" for="state_invoice">State</label>
                  <input class="form-control" type="text" name="state_invoice" placeholder="State" id="state_invoice">
                </div>
                <div class="form-group col-md-6">
                  <label class="form-label" for="phonenumber_invoice">Phone Number</label>
                  <input class="form-control" type="text" name="phonenumber_invoice" placeholder="Phone Number" id="phonenumber_invoice">
                </div>
                <div class="form-group col-12 mt-3">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="show-shipping-address" type="checkbox" name="clothes-brand">
                    <label class="custom-control-label align-middle" for="show-shipping-address" data-toggle="collapse" data-target="#shippingAddress">Use a different shipping address</label>
                  </div>
                </div>
              </div>
              <!-- /Invoice Address-->
              <!-- Shippping Address-->
              <div class="collapse" id="shippingAddress">
                <h3 class="my-4">Shipping address </h3>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label class="form-label" for="street_shipping">Street</label>
                    <input class="form-control" type="text" name="street_shipping" placeholder="123 Main St." id="street_shipping">
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="city_shipping">City</label>
                    <input class="form-control" type="text" name="city_shipping" placeholder="City" id="city_shipping">
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="zip_shipping">ZIP</label>
                    <input class="form-control" type="text" name="zip_shipping" placeholder="Postal code" id="zip_shipping">
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="state_shipping">State</label>
                    <input class="form-control" type="text" name="state_shipping" placeholder="State" id="state_shipping">
                  </div>
                  <div class="form-group col-md-6">
                    <label class="form-label" for="phonenumber_shipping">Phone Number</label>
                    <input class="form-control" type="text" name="phonenumber_shipping" placeholder="Phone Number" id="phonenumber_shipping">
                  </div>
                </div>
              </div>
              <!-- /Shipping Address-->
              <div class="form-group mt-4">
                <button class="btn btn-dark" type="submit"><i class="far fa-save mr-2"></i>Save changes</button>
              </div>
            </form>
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
                    </svg>Profile</span></a><a class="active list-group-item d-flex justify-content-between align-items-center" href="customer-addresses"><span>
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