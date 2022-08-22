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
          <li class="breadcrumb-item active">Your profile        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Your profile</h1>
          <div><p class="lead text-muted">Maecenas sollicitudin. In rutrum. In convallis. Nunc tincidunt ante vitae massa. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Fusce dui leo, imperdiet in.</p></div>
        </div>
      </div>
    </section>
    <section class="pb-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-xl-9 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="mb-5">Change your password</h3>
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label" for="password_old">Old password</label>
                      <input class="form-control" id="password_old" type="password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label" for="password_1">New password</label>
                      <input class="form-control" id="password_1" type="password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-label" for="password_2">Retype new password</label>
                      <input class="form-control" id="password_2" type="password">
                    </div>
                  </div>
                </div>
                <div class="mt-4">
                  <button class="btn btn-dark" type="submit"><i class="far fa-save mr-2"></i>Change password</button>
                </div>
              </form>
            </div>
            <hr class="mb-5">
            <h3 class="mb-5">Personal details</h3>
            <form>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="firstname">Firstname</label>
                    <input class="form-control" id="firstname" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="lastname">Lastname</label>
                    <input class="form-control" id="lastname" type="text">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="company">Company</label>
                    <input class="form-control" id="company" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="street">Street</label>
                    <input class="form-control" id="street" type="text">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label" for="city">Company</label>
                    <input class="form-control" id="city" type="text">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label" for="zip">ZIP</label>
                    <input class="form-control" id="zip" type="text">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label" for="state">State</label>
                    <select class="form-control" id="state"></select>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label" for="country">Country</label>
                    <select class="form-control" id="country"></select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="phone">Telephone</label>
                    <input class="form-control" id="phone" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label" for="emailAccount">Email</label>
                    <input class="form-control" id="emailAccount" type="text">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="mt-4"></div>
              <button class="btn btn-dark" type="submit"><i class="far fa-save mr-2"></i>Save changes</button>
            </form>
          </div>
          <!-- Customer Sidebar-->
          <div class="col-xl-3 col-lg-4 mb-5">
            <div class="customer-sidebar card border-0"> 
              <div class="customer-profile"><a class="d-inline-block" href="#"><img class="img-fluid rounded-circle customer-image" src="/img/avatar/avatar-0.jpg" alt=""></a>
                <h5>Jane Doe</h5>
                <p class="text-muted text-sm mb-0">Los Angeles, CA</p>
              </div>
              <nav class="list-group customer-nav"><a class="list-group-item d-flex justify-content-between align-items-center" href="customer-orders"><span>
                    <svg class="svg-icon svg-icon-heavy mr-2">
                      <use xlink:href="#paper-bag-1"> </use>
                    </svg>Orders</span>
                  <div class="badge badge-pill badge-dark font-weight-normal px-3">5</div></a><a class="active list-group-item d-flex justify-content-between align-items-center" href="customer-account"><span>
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