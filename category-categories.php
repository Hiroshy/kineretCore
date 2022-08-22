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
    <div class="container py-6">
      <!-- Breadcrumbs -->
      <ol class="breadcrumb undefined">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Shop                                   </li>
      </ol>
      <!-- Hero Content-->
      <div class="hero-content pb-5">
        <h1>Ladies</h1>
        <div class="row">   
          <div class="col-xl-8"><p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>   </div>
        </div>
      </div>
      <!-- Grid -->
      <div class="products-grid ">
        <div class="row">
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-jackets-2.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Jackets</a><span class="text-sm text-muted ml-2">40</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-coats.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Coats</a><span class="text-sm text-muted ml-2">20</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-dresses.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Dresses</a><span class="text-sm text-muted ml-2">15</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-overalls.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Overalls</a><span class="text-sm text-muted ml-2">10</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-skirts.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Skirts</a><span class="text-sm text-muted ml-2">33</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-shirts.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Shirts</a><span class="text-sm text-muted ml-2">12</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-shoes.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Shoes</a><span class="text-sm text-muted ml-2">1</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-bags.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Bags</a><span class="text-sm text-muted ml-2">1</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
          <!-- category-->
          <div class="col-sm-6 col-lg-4 mb-5">
            <div class="card-scale" data-aos="zoom-in">
              <div class="img-scale-container mb-3"><img class="img-fluid img-scale" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-bijoutery-2.jpg" alt=""/></div>
              <h5> <a class="stretched-link text-reset" href="category-full">Bijoutery</a><span class="text-sm text-muted ml-2">1</span>                        </h5>
            </div>
          </div>
          <!-- /category end                        -->
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