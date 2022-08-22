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
      <!-- Breadcrumbs -->
      <ol class="breadcrumb undefined">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active">Shop       </li>
      </ol>
      <!-- Hero Content-->
      <div class="hero-content mb-6">
        <h1>Jackets and tops</h1>
        <div class="row">   
          <div class="col-xl-8"><p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>      </div>
        </div>
      </div>
      <div class="row">
        <!-- Grid -->
        <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
          <div class="product-grid-header">
            <div class="mr-3 mb-3">
               Showing <strong>1-12 </strong>of <strong>158 </strong>products</div>
            <div class="mr-3 mb-3"><span class="mr-2">Show</span><a class="product-grid-header-show active" href="#">12    </a><a class="product-grid-header-show " href="#">24    </a><a class="product-grid-header-show " href="#">All    </a>
            </div>
            <div class="mr-3 mb-3">
              <button class="btn btn-link text-dark pl-0 dropdown-toggle text-decoration-none" data-toggle="collapse" data-target="#productFilter" aria-expanded="false" aria-controls="productFilter">Filter</button>
            </div>
            <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-2">Sort by</span>
              <select class="selectpicker" name="sort" id="form_sort" data-style="btn-selectpicker border-0" title="">
                <option value="sortBy_0">Default                   </option>
                <option value="sortBy_1">Popularity                   </option>
                <option value="sortBy_2">Rating                   </option>
                <option value="sortBy_3">Newest first                   </option>
              </select>
            </div>
            <div class="collapse w-100" id="productFilter">
              <div class="py-4 mb-5">
                <div class="row">
                  <div class="col-sm-6 col-xl-3 mb-3">
                    <h6 class="text-dark">Brand</h6>
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
                  </div>
                  <div class="col-sm-6 col-xl-3 mb-3">
                    <h6 class="text-dark">Size </h6>
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
                  </div>
                  <div class="col-sm-6 col-xl-3 mb-3">
                    <h6 class="text-dark">Price  </h6>
                    <div id="slider-snap"></div>
                    <div class="nouislider-values mb-4">
                      <div class="min">From $<span id="slider-snap-value-lower"></span></div>
                      <div class="max">To $<span id="slider-snap-value-upper"></span></div>
                      <input class="slider-snap-input" type="hidden" name="pricefrom" id="slider-snap-input-lower" value="40">
                      <input class="slider-snap-input" type="hidden" name="priceto" id="slider-snap-input-upper" value="110">
                    </div>
                    <h6 class="text-dark">Colour </h6>
                    <ul class="list-inline mb-0 colours-wrapper">
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Blue" style="background-color: #668cb9"> </label>
                        <input class="input-invisible" type="checkbox" name="colour" value="value_Blue" id="colour_Blue">
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_White" style="background-color: #fff"> </label>
                        <input class="input-invisible" type="checkbox" name="colour" value="value_White" id="colour_White">
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Violet" style="background-color: #8b6ea4"> </label>
                        <input class="input-invisible" type="checkbox" name="colour" value="value_Violet" id="colour_Violet">
                      </li>
                      <li class="list-inline-item">
                        <label class="btn-colour" for="colour_Red" style="background-color: #dd6265"> </label>
                        <input class="input-invisible" type="checkbox" name="colour" value="value_Red" id="colour_Red">
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-xl-3 mb-3">
                    <h6 class="text-dark">Tags</h6>
                    <div class="form-group mb-1">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="tag0" type="checkbox" name="tags" checked>
                        <label class="custom-control-label" for="tag0">Modern <small>(5)</small></label>
                      </div>
                    </div>
                    <div class="form-group mb-1">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="tag1" type="checkbox" name="tags">
                        <label class="custom-control-label" for="tag1">Trendy <small>(5)</small></label>
                      </div>
                    </div>
                    <div class="form-group mb-1">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="tag2" type="checkbox" name="tags">
                        <label class="custom-control-label" for="tag2">Smart <small>(5)</small></label>
                      </div>
                    </div>
                    <div class="form-group mb-1">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="tag3" type="checkbox" name="tags">
                        <label class="custom-control-label" for="tag3">Casual <small>(5)</small></label>
                      </div>
                    </div>
                    <div class="form-group mb-1">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="tag4" type="checkbox" name="tags">
                        <label class="custom-control-label" for="tag4">Formal <small>(5)</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-link d-flex align-items-center pl-0 ml-n3"> 
                  <svg class="svg-icon w-3rem h-3rem mr-n1">
                    <use xlink:href="#close-1"> </use>
                  </svg>Clear all filters
                </button>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- product-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0987188250_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0987188250_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0950354513_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0950354513_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-primary">Sale</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/5161335400_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/5161335400_2_3_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0027211800_1_2_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0027211800_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0144074800_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0144074800_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0693492802_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0693492802_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-dark">Sold out</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0364326148_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0364326148_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0931168712_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0931168712_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/1000962306_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/1000962306_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0915494643_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0915494643_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0907168607_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0907168607_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/5806513505_1_2_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/5806513505_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0987188250_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0987188250_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-primary">Sale</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/5161335400_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/5161335400_2_3_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0950354513_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0950354513_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0931168712_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0931168712_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0144074800_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0144074800_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0693492802_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0693492802_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-dark">Sold out</div><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0364326148_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0364326148_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0931168712_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0931168712_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/1000962306_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/1000962306_2_1_1.jpg" alt="product"/></div></a>
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
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1">
                    <div class="product-swap-image"><img class="img-fluid product-swap-image-front" src="/img/product/0915494643_1_1_1.jpg" alt="product"/><img class="img-fluid" src="/img/product/0915494643_2_1_1.jpg" alt="product"/></div></a>
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
        </div>
        <!-- /Sidebar end-->
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