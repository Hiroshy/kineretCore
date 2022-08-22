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
          <li class="breadcrumb-item active">Customer zone        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading mb-3">Customer zone</h1>
          <div><p class="text-muted">You can use the navbar-modal link or this page for customers' sign in.</p></div>
        </div>
      </div>
    </section>
    <!-- customer login-->
    <section class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="card">
              <div class="card-header py-4 px-5">
                <h5 class="mb-0">Login</h5>
              </div>
              <div class="card-body p-5">
                <p class="lead">Already our customer?</p>
                <p class="text-muted text-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>
                <hr class="my-4">
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders" method="get">
                  <div class="form-group">
                    <label class="form-label" for="emailLogin">Email</label>
                    <input class="form-control" id="emailLogin" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="passwordLogin">Password</label>
                    <input class="form-control" id="passwordLogin" type="password">
                  </div>
                  <button class="btn btn-dark" type="submit"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="card">
              <div class="card-header py-4 px-5">
                <h5 class="mb-0">New account</h5>
              </div>
              <div class="card-body p-5">
                <p class="lead">Not our registered customer yet?</p>
                <p class="text-muted text-sm">With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted text-sm">If you have any questions, please feel free to <a href="contact">contact us</a>, our customer service center is working for you 24/7.</p>
                <hr class="my-4">
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders" method="get">
                  <div class="form-group">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" id="name" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="emailSignup">Email</label>
                    <input class="form-control" id="emailSignup" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="passwordSignup">Password</label>
                    <input class="form-control" id="passwordSignup" type="password">
                  </div>
                  <button class="btn btn-dark" type="submit"><i class="far fa-user mr-2"></i>Register                                </button>
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