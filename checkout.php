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
          <li class="breadcrumb-item active">Checkout        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Checkout</h1>
          <div><p class="lead text-muted">Are you a returning customer? <a href="#">Login</a>.</p></div>
        </div>
      </div>
    </section>
    <!-- Checkout-->
    <div class="container pb-6">
      <div class="row">
        <div class="col-lg-7 pr-xl-6">
          <form action="https://demo.bootstrapious.com/varkala/1-2/checkout-confirmed">
            <h5 class="mb-5">Invoice address </h5>
            <div class="row"> 
              <div class="form-group col-md-6 mb-4">
                <label class="form-label" for="fullname_invoice">Full Name</label>
                <input class="form-control form-control-underlined pl-0" type="text" name="fullname_invoice" id="fullname_invoice">
              </div>
              <div class="form-group col-md-6 mb-4">
                <label class="form-label" for="emailaddress_invoice">Email Address</label>
                <input class="form-control form-control-underlined pl-0" type="text" name="emailaddress_invoice" id="emailaddress_invoice">
              </div>
              <div class="form-group col-md-6 mb-4">
                <label class="form-label" for="street_invoice">Street</label>
                <input class="form-control form-control-underlined pl-0" type="text" name="street_invoice" id="street_invoice">
              </div>
              <div class="form-group col-md-6 mb-4">
                <label class="form-label" for="city_invoice">City</label>
                <input class="form-control form-control-underlined pl-0" type="text" name="city_invoice" id="city_invoice">
              </div>
              <div class="form-group col-md-6 mb-4">
                <label class="form-label" for="zip_invoice">ZIP</label>
                <input class="form-control form-control-underlined pl-0" type="text" name="zip_invoice" id="zip_invoice">
              </div>
              <div class="form-group col-md-6 mb-4">
                <label class="form-label" for="state_invoice">State</label>
                <input class="form-control form-control-underlined pl-0" type="text" name="state_invoice" id="state_invoice">
              </div>
              <div class="form-group col-md-6 mb-4">
                <label class="form-label" for="phonenumber_invoice">Phone Number</label>
                <input class="form-control form-control-underlined pl-0" type="text" name="phonenumber_invoice" id="phonenumber_invoice">
              </div>
              <div class="form-group col-12 mt-3">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="show-shipping-address" type="checkbox" name="show-shipping-address" data-toggle="collapse" data-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress" role="button">
                  <label class="custom-control-label align-middle" for="show-shipping-address">Use a different shipping address</label>
                </div>
              </div>
              <!-- /Invoice Address-->
            </div>
            <!-- Shippping Address-->
            <div class="collapse" id="shippingAddress">
              <h5 class="my-4">Shipping address </h5>
              <div class="row">
                <div class="form-group col-md-6 mb-4">
                  <label class="form-label" for="street_shipping">Street</label>
                  <input class="form-control form-control-underlined pl-0" type="text" name="street_shipping" id="street_shipping">
                </div>
                <div class="form-group col-md-6 mb-4">
                  <label class="form-label" for="city_shipping">City</label>
                  <input class="form-control form-control-underlined pl-0" type="text" name="city_shipping" id="city_shipping">
                </div>
                <div class="form-group col-md-6 mb-4">
                  <label class="form-label" for="zip_shipping">ZIP</label>
                  <input class="form-control form-control-underlined pl-0" type="text" name="zip_shipping" id="zip_shipping">
                </div>
                <div class="form-group col-md-6 mb-4">
                  <label class="form-label" for="state_shipping">State</label>
                  <input class="form-control form-control-underlined pl-0" type="text" name="state_shipping" id="state_shipping">
                </div>
                <div class="form-group col-md-6 mb-4">
                  <label class="form-label" for="phonenumber_shipping">Phone Number</label>
                  <input class="form-control form-control-underlined pl-0" type="text" name="phonenumber_shipping" id="phonenumber_shipping">
                </div>
              </div>
            </div>
            <!-- /Shipping Address                            -->
          </form>
        </div>
        <div class="col-lg-5">
          <h5 class="mb-5">Order Summary</h5>
          <table class="table border-bottom border-dark mb-5">
            <tr class="text-sm">
              <th class="py-4 font-weight-normal text-muted">Skull Tee <span>x 4</span></th>
              <td class="py-4 text-right text-muted">$260.00</td>
            </tr>
            <tr class="text-sm">
              <th class="py-4 font-weight-normal text-muted">Transparent Blouse <span>x 3</span></th>
              <td class="py-4 text-right text-muted">$165.00</td>
            </tr>
            <tr class="text-sm">
              <th class="py-4 font-weight-normal text-muted">White Tee <span>x 3</span></th>
              <td class="py-4 text-right text-muted">$165.00</td>
            </tr>
            <tr>
              <th class="py-4 text-uppercase font-weight-normal text-sm align-bottom">Order Subtotal </th>
              <td class="py-4 text-right text-muted">$390.00</td>
            </tr>
            <tr>
              <th class="py-5 border-dark" colspan="2"> 
                <div class="mb-4">Shipping and handling</div>
                <div class="form-group mb-1 ml-4">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="shipping0" type="radio" name="shipping" checked>
                    <label class="custom-control-label text-sm font-weight-normal" for="shipping0">DHL $10            </label>
                  </div>
                </div>
                <div class="form-group mb-1 ml-4">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="shipping1" type="radio" name="shipping">
                    <label class="custom-control-label text-sm font-weight-normal" for="shipping1">Branch pickup $10            </label>
                  </div>
                </div>
              </th>
            </tr>
            <tr>
              <th class="py-4 text-uppercase font-weight-normal border-dark align-bottom">Total</th>
              <td class="py-4 text-right h3 font-weight-normal border-dark">$400.00</td>
            </tr>
            <tr>
              <th class="pt-5 pb-4 border-dark" colspan="2">            
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="payment0" type="radio" name="payment" checked>
                  <label class="custom-control-label text-sm font-weight-normal" for="payment0" data-toggle="collapse" data-target="#paymentinfo_0">Pay on delivery</label>
                </div>
                <div class="collapse show" id="paymentinfo_0" data-parent="table.table">
                  <div class="pt-4">
                    <p class="text-muted text-sm">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed in</p>
                  </div>
                </div>
              </th>
            </tr>
            <tr>
              <th class="py-4" colspan="2">            
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="payment1" type="radio" name="payment">
                  <label class="custom-control-label text-sm font-weight-normal" for="payment1" data-toggle="collapse" data-target="#paymentinfo_1">Card payment</label>
                </div>
                <div class="collapse" id="paymentinfo_1" data-parent="table.table">
                  <div class="pt-4">
                    <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit</p>
                  </div>
                </div>
              </th>
            </tr>
            <tr>
              <th class="pt-4 pb-5" colspan="2">            
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" id="payment2" type="radio" name="payment">
                  <label class="custom-control-label text-sm font-weight-normal" for="payment2" data-toggle="collapse" data-target="#paymentinfo_2">PayPal</label>
                </div>
                <div class="collapse" id="paymentinfo_2" data-parent="table.table">
                  <div class="pt-4">
                    <p class="text-muted text-sm">His room, a proper human room although a little too small, lay peacefully between its four familiar </p>
                  </div>
                </div>
              </th>
            </tr>
          </table>
          <p class="text-muted text-sm">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.</p>
          <p class="text-muted text-sm mb-5">I have read and agree to the website <a href="#">terms and conditions</a>. * </p><a class="btn btn-dark btn-block btn-lg mb-5" href="checkout-confirmed">Place order</a>
          <!-- this should be <button type="submit"> on your site-->
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