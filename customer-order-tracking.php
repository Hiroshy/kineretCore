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
          <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
          <li class="breadcrumb-item active">Customer zone        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading mb-3">Track your order</h1>
          <div><p class="text-muted mb-0">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p></div>
        </div>
      </div>
    </section>
    <!-- customer login-->
    <section class="pb-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="card">
              <div class="card-body p-5">
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-order.html" method="get">
                  <div class="form-group">
                    <label class="form-label" for="orderId">Order ID</label>
                    <input class="form-control" id="orderId" type="text" aria-describedby="orderIdHelp"><small id="orderIdHelp" class="form-text text-muted">Found in your order confirmation email.</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="email">Billing email</label>
                    <input class="form-control" id="email" type="email" aria-describedby="emailHelp"><small id="emailHelp" class="form-text text-muted">Email you used during checkout.</small>
                  </div>
                  <button class="btn btn-dark" type="submit"><i class="fa fa-map-marked mr-2"></i> Track</button>
                </form>
              </div>
            </div>
          </div>
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