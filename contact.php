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
    <section class="hero hero-image light-overlay" data-parallax="scroll" data-image-src="img/photo/maarten-deckers-0-frPETzEVs-unsplash.jpg" data-speed="0.5" data-position-x="center" data-position-y="center">
      <div class="container overlay-content">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0 text-dark">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Contact        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Contact</h1>
        </div>
      </div>
    </section>
    <section class="py-6">
      <div class="container">       
        <div class="row">
          <div class="col-md-4 text-center text-md-left mb-4 mb-md-0">
            <h4>Address</h4>
            <p class="text-muted">13/25 New Avenue<br>New Heaven, 45Y 73J<br>England, <strong>Great Britain</strong></p>
          </div>
          <div class="col-md-4 text-center text-md-left mb-4 mb-md-0">
            <h4>Call center</h4>
            <p class="text-muted">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p class="text-muted"><strong>+33 555 444 333</strong></p>
          </div>
          <div class="col-md-4 text-center text-md-left">
            <h4>Electronic support</h4>
            <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
            <ul class="list-unstyled text-muted">
              <li>info@varkala.com</li>
              <li>support@varkala.com</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-gray-200 position-relative overflow-hidden">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 px-0">
            <div id="map" style="height: 100%; min-height: 500px;"></div>
          </div>
          <div class="col-lg-6 py-6 px-lg-5 px-xl-6">
            <h2 class="display-3 font-weight-bold text-gray-600 mb-5">Our stores</h2>
            <div class="row py-4 border-bottom">
              <div class="col-6 col-md-3 font-weight-bold align-self-center">
                <h4 class="mb-0">New York</h4>
              </div>
              <div class="col-6 col-md-3 text-sm">13/25 New Avenue, New Heaven, 45Y 73J</div>
              <div class="col-6 col-md-3 text-sm">564546 54566 54</div>
              <div class="col-6 col-md-3 text-sm">email@email.com</div>
            </div>
            <div class="row py-4 border-bottom">
              <div class="col-6 col-md-3 font-weight-bold align-self-center">
                <h4 class="mb-0">London</h4>
              </div>
              <div class="col-6 col-md-3 text-sm">13/25 New Avenue, New Heaven, 45Y 73J</div>
              <div class="col-6 col-md-3 text-sm">564546 54566 54</div>
              <div class="col-6 col-md-3 text-sm">email@email.com</div>
            </div>
            <div class="row py-4 border-bottom">
              <div class="col-6 col-md-3 font-weight-bold align-self-center">
                <h4 class="mb-0">Paris</h4>
              </div>
              <div class="col-6 col-md-3 text-sm">13/25 New Avenue, New Heaven, 45Y 73J</div>
              <div class="col-6 col-md-3 text-sm">564546 54566 54</div>
              <div class="col-6 col-md-3 text-sm">email@email.com</div>
            </div>
            <div class="row py-4">
              <div class="col-6 col-md-3 font-weight-bold align-self-center">
                <h4 class="mb-0">Tokyo</h4>
              </div>
              <div class="col-6 col-md-3 text-sm">13/25 New Avenue, New Heaven, 45Y 73J</div>
              <div class="col-6 col-md-3 text-sm">564546 54566 54</div>
              <div class="col-6 col-md-3 text-sm">email@email.com</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-6">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h5 class="display-2 font-weight-bold mb-4 mb-lg-5" style="line-height: 1;">Get in touch  </h5>
            <ul class="list-inline h3 mb-6 mb-lg-0">
              <li class="list-inline-item mr-4"><a href="#"><i class="fab fa-facebook-f"> </i></a></li>
              <li class="list-inline-item mr-4"><a href="#"><i class="fab fa-twitter">                                      </i></a></li>
              <li class="list-inline-item mr-4"><a href="#"><i class="fab fa-instagram">                                      </i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 col-xl-6 ml-auto">
            <form class="form" id="contact-form" method="post" action="https://demo.bootstrapious.com/varkala/1-2/contact.php"></form>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="form-label" for="nameContact">Your firstname *</label>
                  <input class="form-control form-control-underlined" type="text" name="nameContact" id="name" required="required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="form-label" for="surnameContact">Your lastname *</label>
                  <input class="form-control form-control-underlined" type="text" name="surnameContact" id="surname" required="required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="emailContact">Your email *</label>
              <input class="form-control form-control-underlined" type="email" name="emailContact" id="email" required="required">
            </div>
            <div class="form-group">
              <label class="form-label" for="messageContact">Your message for us *</label>
              <textarea class="form-control form-control-underlined" rows="4" name="messageContact" id="message" required="required"></textarea>
            </div>
            <button class="btn btn-outline-primary mt-3" type="submit">Send message                    </button>
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