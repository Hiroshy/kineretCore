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
          <li class="breadcrumb-item active">Order confirmed        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Order confirmed</h1>
          <div><div role="alert" class="d-flex align-items-center alert alert-success"><svg class="svg-icon w-3rem h-3rem svg-icon-light flex-shrink-0 mr-3"><use xlink:href="#checked-circle-1"> </use></svg>Your order is confirmed</div></div>
        </div>
      </div>
    </section>
    <!-- Order confirmed-->
    <section class="pb-6">
      <div class="container">
        <p class="lead">Thank you, Julie. Your order is confirmed.</p>
        <p class="lead mb-5">Your order hasn't shipped yet but we will send you ane email when it does. </p>
        <p class="mb-6"><a class="btn btn-outline-dark" href="customer-order">View or manage your order</a></p>
        <div class="p-5 bg-gray-100">
          <div class="row">
            <div class="col-6 col-lg-3 mb-5 mb-lg-0">
              <div class="text-sm text-uppercase text-muted mb-3">Order no.</div><span class="h5">2019</span>
            </div>
            <div class="col-6 col-lg-3 mb-5 mb-lg-0">
              <div class="text-sm text-uppercase text-muted mb-3">Date</div><span class="h5">Oct 21, 2019</span>
            </div>
            <div class="col-6 col-lg-3">
              <div class="text-sm text-uppercase text-muted mb-3">Total</div><span class="h5">$450               </span>
            </div>
            <div class="col-6 col-lg-3">
              <div class="text-sm text-uppercase text-muted mb-3">Shipping</div><span class="h5">DHL          </span>
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