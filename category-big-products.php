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
    <div class="container-fluid container-fluid-px py-6">
      <div class="row">
        <!-- Grid -->
        <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
          <!-- Hero Content-->
          <div class="hero-content pb-5">
            <h1>Jackets and tops</h1>
            <div class="row">   
              <div class="col-xl-8"><p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>                </div>
            </div>
          </div>
          <!-- Breadcrumbs -->
          <ol class="breadcrumb undefined">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Shop                                   </li>
          </ol>
          <header class="product-grid-header">
            <div class="mr-3 mb-3">
               Showing <strong>1-12 </strong>of <strong>158 </strong>products</div>
            <div class="mr-3 mb-3"><span class="mr-2">Show</span><a class="product-grid-header-show active" href="#">12    </a><a class="product-grid-header-show " href="#">24    </a><a class="product-grid-header-show " href="#">All    </a>
            </div>
            <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-2">Sort by</span>
              <select class="selectpicker" name="sort" id="form_sort" data-style="btn-selectpicker border-0" title="">
                <option value="sortBy_0">Default     </option>
                <option value="sortBy_1">Popularity     </option>
                <option value="sortBy_2">Rating     </option>
                <option value="sortBy_3">Newest first     </option>
              </select>
            </div>
          </header>
          <div class="row">
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0987188250_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0987188250_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">White Tee</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0950354513_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0950354513_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Black blouse</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-primary">Sale</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/5161335400_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/5161335400_2_3_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">College jacket</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0027211800_1_2_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0027211800_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Carrot-fit jeans</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0144074800_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0144074800_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Striped T-Shirt</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0693492802_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0693492802_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Short top</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-dark">Sold out</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0364326148_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0364326148_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Ethnic Sweater</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0931168712_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0931168712_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Beige</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/1000962306_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/1000962306_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Skull Tee</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0915494643_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0915494643_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Trucker jacket</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0907168607_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0907168607_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Blouse</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/5806513505_1_2_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/5806513505_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Shirt</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0987188250_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0987188250_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">White Tee</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-primary">Sale</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/5161335400_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/5161335400_2_3_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">College jacket</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0950354513_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0950354513_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Black blouse</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0931168712_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0931168712_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Beige</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0144074800_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0144074800_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Striped T-Shirt</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0693492802_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0693492802_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Short top</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-dark">Sold out</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0364326148_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0364326148_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Ethnic Sweater</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0931168712_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0931168712_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Beige</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/1000962306_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/1000962306_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Skull Tee</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0915494643_1_1_1.jpg" alt="product"/><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/0915494643_2_1_1.jpg" alt="product"/></div></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Trucker jacket</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
          </div>
          <nav class="d-flex justify-content-center mb-5 mt-3" aria-label="page navigation">
            <ul class="pagination">
              <li class="page-item"><a class="page-arrow" href="#" aria-label="Previous"><span aria-hidden="true"> 
                    <svg class="svg-icon page-icon">
                      <use xlink:href="#angle-left-1"> </use>
                    </svg></span><span class="sr-only">Previous</span></a></li>
              <li class="page-item active"><a class="page-link" href="#">1       </a></li>
              <li class="page-item"><a class="page-link" href="#">2       </a></li>
              <li class="page-item"><a class="page-link" href="#">3       </a></li>
              <li class="page-item"><a class="page-link" href="#">4       </a></li>
              <li class="page-item"><a class="page-link" href="#">5 </a></li>
              <li class="page-item"><a class="page-arrow" href="#" aria-label="Next"><span aria-hidden="true"> 
                    <svg class="svg-icon page-icon">
                      <use xlink:href="#angle-right-1"> </use>
                    </svg></span><span class="sr-only">Next     </span></a></li>
            </ul>
          </nav>
        </div>
        <!-- Sidebar-->
        <div class="sidebar col-xl-3 col-lg-4 pr-xl-5 order-lg-1">
          <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-toggle="collapse" href="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">Product Categories<span class="block-toggler-icon"></span></a>
            <div class="expand-lg collapse" id="categoriesMenu" role="menu">
              <h5 class="sidebar-heading d-none d-lg-block">Category  </h5>
              <div class="sidebar-icon-menu mt-4 mt-lg-0"> 
                <div class="sidebar-icon-menu-item active" data-toggle="collapse" data-target="#subcategories_0" aria-expanded aria-controls="subcategories_0" role="menuitem"> 
                  <div class="d-flex align-items-center">
                    <svg class="svg-icon sidebar-icon">
                      <use xlink:href="#trousers-1"> </use>
                    </svg><a class="sidebar-icon-menu-link font-weight-bold mr-2" href="#">Trousers</a><span class="sidebar-icon-menu-count"> 120</span>
                  </div>
                  <div class="collapse show" id="subcategories_0">
                    <ul class="sidebar-icon-menu sidebar-icon-submenu">
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Lorem ipsum   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Dolor   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Sit amet   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Donec vitae   </a></li>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-icon-menu-item" data-toggle="collapse" data-target="#subcategories_1" aria-controls="subcategories_1" role="menuitem"> 
                  <div class="d-flex align-items-center">
                    <svg class="svg-icon sidebar-icon">
                      <use xlink:href="#suit-1"> </use>
                    </svg><a class="sidebar-icon-menu-link font-weight-bold mr-2" href="#">Jackets</a><span class="sidebar-icon-menu-count"> 55</span>
                  </div>
                  <div class="collapse" id="subcategories_1">
                    <ul class="sidebar-icon-menu sidebar-icon-submenu">
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Lorem ipsum   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Dolor   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Sit amet   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Donec vitae   </a></li>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-icon-menu-item" data-toggle="collapse" data-target="#subcategories_2" aria-controls="subcategories_2" role="menuitem"> 
                  <div class="d-flex align-items-center">
                    <svg class="svg-icon sidebar-icon">
                      <use xlink:href="#shirt5-1"> </use>
                    </svg><a class="sidebar-icon-menu-link font-weight-bold mr-2" href="#">T-Shirts</a><span class="sidebar-icon-menu-count"> 33</span>
                  </div>
                  <div class="collapse" id="subcategories_2">
                    <ul class="sidebar-icon-menu sidebar-icon-submenu">
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Sit amet   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Donec vitae   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Lorem ipsum   </a></li>
                      <li class="sidebar-icon-submenu-item"><a class="sidebar-icon-submenu-link link-animated link-animated-light" href="#">Dolor   </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-toggle="collapse" href="#priceFilterMenu" aria-expanded="false" aria-controls="priceFilterMenu">Filter by price<span class="block-toggler-icon"></span></a>
            <div class="expand-lg collapse" id="priceFilterMenu">
              <h5 class="sidebar-heading d-none d-lg-block">Price  </h5>
              <div class="mt-4 mt-lg-0" id="slider-snap"> </div>
              <div class="nouislider-values">
                <div class="min">From $<span id="slider-snap-value-lower"></span></div>
                <div class="max">To $<span id="slider-snap-value-upper"></span></div>
                <input class="slider-snap-input" type="hidden" name="pricefrom" id="slider-snap-input-lower" value="40">
                <input class="slider-snap-input" type="hidden" name="priceto" id="slider-snap-input-upper" value="110">
              </div>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-toggle="collapse" href="#brandFilterMenu" aria-expanded="true" aria-controls="brandFilterMenu">Filter by brand<span class="block-toggler-icon"></span></a>
            <!-- Brand filter menu - this menu has .show class, so is expanded by default-->
            <div class="expand-lg collapse show" id="brandFilterMenu">
              <h5 class="sidebar-heading d-none d-lg-block">Brands </h5>
              <form class="mt-4 mt-lg-0" action="#"> 
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand0" type="checkbox" name="clothes-brand" checked>
                    <label class="custom-control-label" for="brand0">Calvin Klein <small>(18)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand1" type="checkbox" name="clothes-brand" checked>
                    <label class="custom-control-label" for="brand1">Levi Strauss <small>(30)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand2" type="checkbox" name="clothes-brand">
                    <label class="custom-control-label" for="brand2">Hugo Boss <small>(120)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand3" type="checkbox" name="clothes-brand">
                    <label class="custom-control-label" for="brand3">Tomi Hilfiger <small>(70)</small></label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="brand4" type="checkbox" name="clothes-brand">
                    <label class="custom-control-label" for="brand4">Tom Ford  <small>(110)</small></label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0"> <a class="d-lg-none block-toggler" data-toggle="collapse" href="#sizeFilterMenu" aria-expanded="false" aria-controls="sizeFilterMenu">Filter by size<span class="block-toggler-icon"></span></a>
            <!-- Size filter menu-->
            <div class="expand-lg collapse" id="sizeFilterMenu"> 
              <h5 class="sidebar-heading d-none d-lg-block">Size </h5>
              <form class="mt-4 mt-lg-0" action="#">  
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="size0" type="radio" name="size" checked>
                    <label class="custom-control-label" for="size0">Small</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="size1" type="radio" name="size">
                    <label class="custom-control-label" for="size1">Medium</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="size2" type="radio" name="size">
                    <label class="custom-control-label" for="size2">Large</label>
                  </div>
                </div>
                <div class="form-group mb-1">
                  <div class="custom-control custom-radio">
                    <input class="custom-control-input" id="size3" type="radio" name="size">
                    <label class="custom-control-label" for="size3">X-Large</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="sidebar-block px-3 px-lg-0"><a class="d-lg-none block-toggler" data-toggle="collapse" href="#colourFilterMenu" aria-expanded="false" aria-controls="colourFilterMenu">Filter by colour<span class="block-toggler-icon"></span></a>
            <!-- Size filter menu-->
            <div class="expand-lg collapse" id="colourFilterMenu">
              <h5 class="sidebar-heading d-none d-lg-block">Colour </h5>
              <div class="mt-4 mt-lg-0"> 
                <ul class="list-inline mb-0 colours-wrapper">
                  <li class="list-inline-item">
                    <label class="btn-colour" for="colour_sidebar_Blue" style="background-color: #668cb9" data-allow-multiple> </label>
                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Blue" id="colour_sidebar_Blue">
                  </li>
                  <li class="list-inline-item">
                    <label class="btn-colour" for="colour_sidebar_White" style="background-color: #fff" data-allow-multiple> </label>
                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_White" id="colour_sidebar_White">
                  </li>
                  <li class="list-inline-item">
                    <label class="btn-colour" for="colour_sidebar_Violet" style="background-color: #8b6ea4" data-allow-multiple> </label>
                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Violet" id="colour_sidebar_Violet">
                  </li>
                  <li class="list-inline-item">
                    <label class="btn-colour" for="colour_sidebar_Red" style="background-color: #dd6265" data-allow-multiple> </label>
                    <input class="input-invisible" type="checkbox" name="colour" value="value_sidebar_Red" id="colour_sidebar_Red">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- /Sidebar end-->
      </div>
    </div>
    <!-- Sidebar Cart Modal-->
    <div class="modal fade modal-right" id="sidebarCart" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content sidebar-cart-content">
          <div class="modal-header border-0">
            <button class="close modal-close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
          <div class="modal-body px-5 sidebar-cart-body">
            <!-- Empty cart snippet-->
            <!-- In case of empty cart - display this snippet + remove .d-none-->
            <div class="d-none text-center mb-5">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light mb-4 text-muted">
                <use xlink:href="#retail-bag-1"> </use>
              </svg>
              <p>Your cart is empty </p>
            </div>
            <!-- Empty cart snippet end-->
            <div class="sidebar-cart-product-wrapper custom-scrollbar">
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer sidebar-cart-footer shadow">
            <div class="w-100">
              <h5 class="mb-4">Subtotal: <span class="float-right">$465.32</span></h5><a class="btn btn-outline-dark btn-block mb-3" href="cart">View cart</a><a class="btn btn-dark btn-block" href="checkout">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar Modal Right-->
    <div class="modal fade modal-right" id="sidebarRight" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button class="close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
          <div class="modal-body px-5 pb-5">
            <div>
              <h5 class="mb-5" data-aos="zoom-in" data-aos-delay="50">Varkala</h5>
              <ul class="nav flex-column mb-5">
                <li class="nav-item active"><a class="nav-link pl-0" href="#">Home </a></li>
                <li class="nav-item"><a class="nav-link pl-0" href="#">Link</a></li>
                <li class="nav-item"><a class="nav-link pl-0 disabled" href="#">Disabled</a></li>
                <li class="nav-item dropdown"><a class="nav-link pl-0 dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-target="#sidebarSubmenu" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">Dropdown link</a>
                  <div class="collapse" id="sidebarSubmenu">
                    <ul class="nav flex-column ml-3">
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Action</a></li>
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Another action</a></li>
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Something else here                </a></li>
                    </ul>
                  </div>
                </li>
              </ul>
              <ul class="list-inline mb-4">
                <li class="list-inline-item mr-2"><i class="fab fa-facebook-f"> </i></li>
                <li class="list-inline-item mr-2"><i class="fab fa-twitter"> </i></li>
                <li class="list-inline-item mr-2">
                  <svg class="svg-icon mr-2">
                    <use xlink:href="#calls-1"> </use>
                  </svg>020-800-456-747
                </li>
              </ul>
              <p class="text-sm text-muted mb-0">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Modal    -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button class="close close-absolute" type="button" data-dismiss="modal" aria-label="Close">
            <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <div class="modal-body p-5">
            <ul class="nav list-inline" role="tablist">
              <li class="list-inline-item"><a class="nav-link nav-link-lg active" data-toggle="tab" href="#loginModalTabLogin" role="tab" id="loginModalLinkLogin" aria-controls="loginModalTabLogin" aria-selected="true">Login</a></li>
              <li class="list-inline-item"><a class="nav-link nav-link-lg" data-toggle="tab" href="#loginModalTabRegister" role="tab" id="loginModalLinkRegister" aria-controls="loginModalTabRegister" aria-selected="false">Register</a></li>
            </ul>
            <hr class="mb-3">
            <div class="tab-content">
              <div class="tab-pane active fade show px-3" id="loginModalTabLogin" role="tabpanel" aria-labelledby="loginModalLinkLogin">
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders" method="get">
                  <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="text">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label class="form-label" for="loginPassword"> Password</label>
                      </div>
                      <div class="col-auto"><a class="form-text small" href="#">Forgot password?</a></div>
                    </div>
                    <input class="form-control" name="loginPassword" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="loginRemember" type="checkbox">
                      <label class="custom-control-label text-muted" for="loginRemember"> <span class="text-sm">Remember me for 30 days</span></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-outline-dark" type="submit"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
                  </div>
                </form>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR">
                <div class="text-center">
                  <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                  <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google</span></button>
                </div>
              </div>
              <div class="tab-pane fade px-3" id="loginModalTabRegister" role="tabpanel" aria-labelledby="loginModalLinkRegister">
                <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit.                                            </p>
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders" method="get">
                  <div class="form-group">
                    <label class="form-label" for="registerName">Name</label>
                    <input class="form-control" id="registerName" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="registerEmail">Email</label>
                    <input class="form-control" id="registerEmail" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="registerPassword">Password</label>
                    <input class="form-control" id="registerPassword" type="password">
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-block btn-outline-dark" type="submit"><i class="far fa-user mr-2"></i>Register                       </button>
                  </div>
                </form>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR CONNECT WITH">
                <div class="text-center">
                  <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                  <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google                                      </span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Quickview Modal    -->
    <div class="modal fade quickview" id="quickView" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <button class="close close-absolute close-rotate" type="button" data-dismiss="modal" aria-label="Close">
            <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <div class="modal-body quickview-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="detail-carousel">
                  <div class="product-badge badge badge-primary">Fresh</div>
                  <div class="product-badge badge badge-dark">Sale</div>
                  <div class="swiper-container quickview-slider" id="quickViewSlider">
                    <!-- Additional required wrapper-->
                    <div class="swiper-wrapper">
                      <!-- Slides-->
                      <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-1-gray.jpg" alt="Modern Jacket 1"></div>
                      <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-2-gray.jpg" alt="Modern Jacket 2"></div>
                      <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-3-gray.jpg" alt="Modern Jacket 3"></div>
                      <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-4-gray.jpg" alt="Modern Jacket 4"></div>
                      <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-5-gray.jpg" alt="Modern Jacket 5"></div>
                    </div>
                  </div>
                  <div class="swiper-thumbs" data-swiper="#quickViewSlider">
                    <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-1-gray.jpg" alt="Modern Jacket 0"></button>
                    <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-2-gray.jpg" alt="Modern Jacket 1"></button>
                    <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-3-gray.jpg" alt="Modern Jacket 2"></button>
                    <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-4-gray.jpg" alt="Modern Jacket 3"></button>
                    <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-5-gray.jpg" alt="Modern Jacket 4"></button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 p-lg-5">
                <h2 class="mb-4 mt-4 mt-lg-1">Push-up Jeans</h2>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                  <ul class="list-inline mb-2 mb-sm-0">
                    <li class="list-inline-item h4 font-weight-light mb-0">$65.00</li>
                    <li class="list-inline-item text-muted font-weight-light"> 
                      <del>$90.00</del>
                    </li>
                  </ul>
                  <div class="d-flex align-items-center text-sm">
                    <ul class="list-inline mr-2 mb-0">
                      <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                      <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                      <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                      <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                      <li class="list-inline-item mr-0"><i class="fa fa-star text-gray-300"></i></li>
                    </ul><span class="text-muted text-uppercase">25 reviews</span>
                  </div>
                </div>
                <p class="mb-4 text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                <form id="buyForm_modal" action="#">
                  <div class="row">
                    <div class="col-sm-6 col-lg-12 detail-option mb-4">
                      <h6 class="detail-option-heading">Size <span>(required)</span></h6>
                      <select class="selectpicker" name="size" data-style="btn-selectpicker">
                        <option value="value_0">Small</option>
                        <option value="value_1">Medium</option>
                        <option value="value_2">Large</option>
                      </select>
                    </div>
                    <div class="col-sm-6 col-lg-12 detail-option mb-5">
                      <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                      <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0_modal"> Hoodie
                        <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0_modal" required>
                      </label>
                      <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_1_modal"> College
                        <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1_modal" required>
                      </label>
                    </div>
                  </div>
                  <div class="input-group w-100 mb-4">
                    <input class="form-control form-control-lg detail-quantity" name="items" type="number" value="1">
                    <div class="input-group-append flex-grow-1">
                      <button class="btn btn-dark btn-block" type="submit"> <i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-6"><a href="#"> <i class="far fa-heart mr-2"></i>Add to wishlist </a></div>
                    <div class="col-6 text-right">
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-2"><a class="text-dark text-hover-primary" href="#"><i class="fab fa-facebook-f"> </i></a></li>
                        <li class="list-inline-item"><a class="text-dark text-hover-primary" href="#"><i class="fab fa-twitter"> </i></a></li>
                      </ul>
                    </div>
                  </div>
                  <ul class="list-unstyled">
                    <li><strong>Category:</strong> <a class="text-muted" href="#">Jeans</a></li>
                    <li><strong>Tags:</strong> <a class="text-muted" href="#">Leisure</a>, <a class="text-muted" href="#">Elegant</a></li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <footer>
      <!-- Services block-->
      <div class="py-5 py-lg-6 bg-gray-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6 py-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#delivery-time-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-sm mb-1">Free shipping &amp; return</h6>
                <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#money-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-sm mb-1">Money back guarantee</h6>
                <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#special-price-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-sm mb-1">Best prices</h6>
                <p class="text-muted font-weight-light text-sm mb-0">Always the best prices</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#customer-support-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-sm mb-1">020-800-456-747</h6>
                <p class="text-muted font-weight-light text-sm mb-0">24/7 Available Support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 text-muted"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-5 pr-lg-5 pr-xl-6 mb-5 mb-lg-0">
              <h6 class="text-dark letter-spacing-1 mb-4">Be in touch</h6>
              <p class="text-sm mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
              <form action="#" id="newsletter-form">
                <div class="input-group input-group-underlined mb-3">
                  <input class="form-control form-control-underlined" type="email" placeholder="Your Email Address" aria-label="Your Email Address">
                  <div class="input-group-append ml-0">
                    <button class="btn btn-underlined text-gray-700 py-0" type="button"> 
                      <svg class="svg-icon w-2rem h-2rem">
                        <use xlink:href="#envelope-1"> </use>
                      </svg>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-7">      
              <div class="row">                
                <div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-toggle="collapse" href="#footerMenu0" aria-expanded="false" aria-controls="footerMenu0">Shop<span class="block-toggler-icon"></span></a>
                  <!-- Footer collapsible menu-->
                  <div class="expand-lg collapse" id="footerMenu0">
                    <h6 class="text-dark letter-spacing-1 mb-4 d-none d-lg-block">Shop</h6>
                    <ul class="list-unstyled text-sm pt-2 pt-lg-0">
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">For Women</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">For Men</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Stores</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Our Blog</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Shop</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-toggle="collapse" href="#footerMenu1" aria-expanded="false" aria-controls="footerMenu1">Company<span class="block-toggler-icon"></span></a>
                  <!-- Footer collapsible menu-->
                  <div class="expand-lg collapse" id="footerMenu1">
                    <h6 class="text-dark letter-spacing-1 mb-4 d-none d-lg-block">Company</h6>
                    <ul class="list-unstyled text-sm pt-2 pt-lg-0">
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Login</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Register</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Wishlist</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Our Products</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Checkouts</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-toggle="collapse" href="#footerMenu2" aria-expanded="false" aria-controls="footerMenu2">Your account<span class="block-toggler-icon"></span></a>
                  <!-- Footer collapsible menu-->
                  <div class="expand-lg collapse" id="footerMenu2">
                    <h6 class="text-dark letter-spacing-1 mb-4 d-none d-lg-block">Your account</h6>
                    <ul class="list-unstyled text-sm pt-2 pt-lg-0">
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Login</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Register</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Wishlist</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Our Products</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Checkouts</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 font-weight-light text-muted">
        <div class="container">
          <div class="row align-items-center text-sm text-gray-500">
            <div class="col-lg-4 text-center text-lg-left">
              <p class="mb-lg-0">&copy; 2020 Your company.  All rights reserved.</p>
            </div>
            <div class="col-lg-8">
              <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-lg-right">
                <li class="list-inline-item"> <a class="text-reset" href="#">Terms &amp; Conditions </a></li>
                <li class="list-inline-item"> <a class="text-reset" href="#">Privacy &amp; cookies </a></li>
                <li class="list-inline-item"> <a class="text-reset" href="#">Accessibility </a></li>
                <li class="list-inline-item"> <a class="text-reset" href="#">Customer Data Promise </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer end-->
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to Bootstrapious website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.01205608.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/varkala-clothes.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/img/shape/blob-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/swiper/js/swiper.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- AOS - AnimationOnScroll-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/aos/aos.js"></script>
    <!-- Custom Scrollbar-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom-scrollbar-init.f148089f.js"></script>
    <!-- Smooth scroll-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/object-fit-images/ofi.min.js"></script>
    <!-- NoUI Slider (price slider)-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/nouislider/nouislider.min.js"></script>
    <script>
      var snapSlider = document.getElementById('slider-snap');
      
      noUiSlider.create(snapSlider, {
      	start: [ 40, 110 ],
      	snap: false,
      	connect: true,
          step: 1,
      	range: {
      		'min': 0,
      		'max': 250
      	}
      });
      var snapValues = [
      	document.getElementById('slider-snap-value-lower'),
      	document.getElementById('slider-snap-value-upper')
      ];
      var inputValues = [
      	document.getElementById('slider-snap-input-lower'),
      	document.getElementById('slider-snap-input-upper')
      ];
      snapSlider.noUiSlider.on('update', function( values, handle ) {
      	snapValues[handle].innerHTML = values[handle];
      });        
      
      snapSlider.noUiSlider.on('change', function( values, handle ) {
          inputValues[handle].value = values[handle];
      });        
      
    </script>
    <!-- Some theme config-->
    <script>
      var options = {
          navbarExpandPx: 992
      }
      
    </script>
    <!-- Main Theme files-->
    <script src="js/sliders-init.1db6fb07.js"></script>
    <script src="js/theme.fe2c17cd.js"></script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/varkala/1-2/category-big-products by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 02:43:02 GMT -->
</html>