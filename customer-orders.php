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
          <li class="breadcrumb-item active">Orders        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Your orders</h1>
          <div><p class="text-muted">Your orders in one place.</p></div>
        </div>
      </div>
    </section>
    <section class="pb-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9">
            <table class="table table-hover table-responsive-md">
              <thead class="bg-light">
                <tr>
                  <th class="py-4 pl-4 text-sm border-0">Order #</th>
                  <th class="py-4 text-sm border-0">Date</th>
                  <th class="py-4 text-sm border-0">Total</th>
                  <th class="py-4 text-sm border-0">Status</th>
                  <th class="py-4 text-sm border-0">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="pl-4 py-5 align-middle"># 1735</th>
                  <td class="py-5 align-middle">22/6/2017</td>
                  <td class="py-5 align-middle">$150.00</td>
                  <td class="py-5 align-middle"><span class="badge badge-info-light">Being prepared</span></td>
                  <td class="py-5 align-middle"><a class="btn btn-outline-dark btn-sm" href="customer-order">View</a></td>
                </tr>
                <tr>
                  <th class="pl-4 py-5 align-middle"># 1734</th>
                  <td class="py-5 align-middle">7/5/2017</td>
                  <td class="py-5 align-middle">$150.00</td>
                  <td class="py-5 align-middle"><span class="badge badge-warning-light">Action needed</span></td>
                  <td class="py-5 align-middle"><a class="btn btn-outline-dark btn-sm" href="customer-order">View</a></td>
                </tr>
                <tr>
                  <th class="pl-4 py-5 align-middle"># 1730</th>
                  <td class="py-5 align-middle">30/9/2016</td>
                  <td class="py-5 align-middle">$150.00</td>
                  <td class="py-5 align-middle"><span class="badge badge-success-light">Received</span></td>
                  <td class="py-5 align-middle"><a class="btn btn-outline-dark btn-sm" href="customer-order">View</a></td>
                </tr>
                <tr>
                  <th class="pl-4 py-5 align-middle"># 1705</th>
                  <td class="py-5 align-middle">22/6/2016</td>
                  <td class="py-5 align-middle">$150.00</td>
                  <td class="py-5 align-middle"><span class="badge badge-danger-light">Cancelled</span></td>
                  <td class="py-5 align-middle"><a class="btn btn-outline-dark btn-sm" href="customer-order">View</a></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Customer Sidebar-->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="customer-sidebar card border-0"> 
              <div class="customer-profile"><a class="d-inline-block" href="#"><img class="img-fluid rounded-circle customer-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/avatar/avatar-0.jpg" alt=""></a>
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