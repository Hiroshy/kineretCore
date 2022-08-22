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
    <section class="bg-gray-300 detail-background">
      <div class="container">
        <div class="d-block" id="addToCartAlert">
          <div class="mb-4 mb-lg-5 alert alert-success" role="alert">
            <div class="d-flex align-items-center pr-3">
              <svg class="svg-icon d-none d-sm-block w-3rem h-3rem svg-icon-light flex-shrink-0 mr-3">
                <use xlink:href="#checked-circle-1"> </use>
              </svg>
              <p class="mb-0">Push-up jeans have been added to your cart. <br class="d-inline-block d-lg-none"><a href="cart.html" class="text-reset text-decoration-underline ml-lg-3">View Cart</a></p>
            </div>
            <button class="close close-absolute close-centered opacity-10 text-inherit" type="button" data-dismiss="alert" aria-label="Close">
              <svg class="svg-icon w-2rem h-2rem">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 order-2 order-lg-1">
            <div class="detail-carousel">
              <div class="product-badge badge badge-primary">Fresh</div>
              <div class="product-badge badge badge-dark">Sale</div>
              <div class="swiper-container detail-slider photoswipe-gallery" id="detailSlider">
                <!-- Additional required wrapper-->
                <div class="swiper-wrapper">
                  <!-- Slides-->
                  <div class="swiper-slide">                       <a class="btn btn-photoswipe" href="img/product/detail-3-gray.jpg" data-caption="Push-up Jeans 1 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
                      <svg class="svg-icon svg-icon-heavy">
                        <use xlink:href="#expand-1"> </use>
                      </svg></a>
                    <div data-toggle="zoom" data-image="img/product/detail-3-gray.jpg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-3-gray.jpg" alt="Push-up Jeans 0"></div>
                  </div>
                  <div class="swiper-slide">                       <a class="btn btn-photoswipe" href="img/product/detail-1-gray.jpg" data-caption="Push-up Jeans 2 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
                      <svg class="svg-icon svg-icon-heavy">
                        <use xlink:href="#expand-1"> </use>
                      </svg></a>
                    <div data-toggle="zoom" data-image="img/product/detail-1-gray.jpg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-1-gray.jpg" alt="Push-up Jeans 1"></div>
                  </div>
                  <div class="swiper-slide">                       <a class="btn btn-photoswipe" href="img/product/detail-2-gray.jpg" data-caption="Push-up Jeans 3 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
                      <svg class="svg-icon svg-icon-heavy">
                        <use xlink:href="#expand-1"> </use>
                      </svg></a>
                    <div data-toggle="zoom" data-image="img/product/detail-2-gray.jpg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-2-gray.jpg" alt="Push-up Jeans 2"></div>
                  </div>
                  <div class="swiper-slide">                       <a class="btn btn-photoswipe" href="img/product/detail-4-gray.jpg" data-caption="Push-up Jeans 4 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
                      <svg class="svg-icon svg-icon-heavy">
                        <use xlink:href="#expand-1"> </use>
                      </svg></a>
                    <div data-toggle="zoom" data-image="img/product/detail-4-gray.jpg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-4-gray.jpg" alt="Push-up Jeans 3"></div>
                  </div>
                  <div class="swiper-slide">                       <a class="btn btn-photoswipe" href="img/product/detail-5-gray.jpg" data-caption="Push-up Jeans 5 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
                      <svg class="svg-icon svg-icon-heavy">
                        <use xlink:href="#expand-1"> </use>
                      </svg></a>
                    <div data-toggle="zoom" data-image="img/product/detail-5-gray.jpg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-5-gray.jpg" alt="Push-up Jeans 4"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-thumbs" data-swiper="#detailSlider">
              <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-3-gray.jpg" alt="Push-up Jeans 0"></button>
              <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-1-gray.jpg" alt="Push-up Jeans 1"></button>
              <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-2-gray.jpg" alt="Push-up Jeans 2"></button>
              <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-4-gray.jpg" alt="Push-up Jeans 3"></button>
              <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-5-gray.jpg" alt="Push-up Jeans 4"></button>
            </div>
          </div>
          <div class="col-lg-5 pl-lg-4 order-1 order-lg-2">
            <ul class="breadcrumb undefined">
              <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
              <li class="breadcrumb-item"><a href="category-full.html">Tops and Jackets</a></li>
              <li class="breadcrumb-item active">Modern Jacket           </li>
            </ul>
            <h1 class="h2 mb-4">Push-up Jeans  </h1>
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
            <form id="buyForm" action="#">
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
                  <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0"> Hoodie
                    <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0" required>
                  </label>
                  <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_1"> College
                    <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1" required>
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
    </section>
    <section class="mt-5">
      <div class="container">
        <ul class="nav nav-tabs flex-column flex-sm-row" role="tablist">
          <li class="nav-item"><a class="nav-link detail-nav-link active" data-toggle="tab" href="#description" role="tab">Description</a></li>
          <li class="nav-item"><a class="nav-link detail-nav-link" data-toggle="tab" href="#additional-information" role="tab">Additional Information</a></li>
          <li class="nav-item"><a class="nav-link detail-nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
        </ul>
        <div class="tab-content py-4">
          <div class="tab-pane fade show active px-3" id="description" role="tabpanel">
            <div class="row">
              <div class="col-md-7">
                <h5>About</h5>
                <p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                <p class="text-muted">He must have tried it a hundred times, shut his eyes so that he wouldn't have to look at the floundering legs, and only stopped when he began to feel a mild, dull pain there that he had never felt before.</p>
                <h5>You will love</h5>
                <ul class="text-muted"> 
                  <li>He must have tried it a hundred times</li>
                  <li>shut his eyes so that he wouldn't have to look</li>
                  <li>at the floundering legs, and only stopped</li>
                </ul>
              </div>
              <div class="col-md-5"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-3.jpg" alt=""></div>
            </div>
          </div>
          <div class="fade tab-pane" id="additional-information" role="tabpanel">
            <div class="row">
              <div class="col-lg-6">
                <table class="table text-sm">
                  <tbody>
                    <tr>
                      <th class="font-weight-normal border-0">Product #</th>
                      <td class="text-muted border-0">Lorem ipsum dolor sit amet</td>
                    </tr>
                    <tr>
                      <th class="font-weight-normal ">Available packaging</th>
                      <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit</td>
                    </tr>
                    <tr>
                      <th class="font-weight-normal ">Weight</th>
                      <td class="text-muted ">dolor sit amet</td>
                    </tr>
                    <tr>
                      <th class="font-weight-normal ">Sunt in culpa qui</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-lg-6">
                <table class="table text-sm">
                  <tbody>
                    <tr>
                      <th class="font-weight-normal border-0">Weight</th>
                      <td class="text-muted border-0">dolor sit amet                           </td>
                    </tr>
                    <tr>
                      <th class="font-weight-normal ">Sunt in culpa qui</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet                           </td>
                    </tr>
                    <tr>
                      <th class="font-weight-normal ">Product #</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet                           </td>
                    </tr>
                    <tr>
                      <th class="font-weight-normal ">Available packaging</th>
                      <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit                           </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="reviews" role="tabpanel">
            <div class="row mb-5">
              <div class="col-lg-10 col-xl-9">
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/avatar/person-1.jpg" alt="Han Solo"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Han Solo</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                    </div>
                    <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/avatar/person-2.jpg" alt="Luke Skywalker"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Luke Skywalker</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                    </div>
                    <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/avatar/person-3.jpg" alt="Princess Leia"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Princess Leia</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                    </div>
                    <p class="text-muted">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/avatar/person-4.jpg" alt="Jabba Hut"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Jabba Hut</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                    </div>
                    <p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.     </p>
                  </div>
                </div>
                <div class="py-5 px-3">
                  <h5 class="mb-4">Leave a review</h5>
                  <form class="mb-4 form" id="reviewForm" method="post" action="https://demo.bootstrapious.com/varkala/1-2/contact.php">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="form-label" for="name">Your name *</label>
                          <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" required="required">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="form-label" for="rating">Your rating *</label>
                          <select class="custom-select focus-shadow-0" name="rating" id="rating">
                            <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</option>
                            <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; (4/5)</option>
                            <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; (3/5)</option>
                            <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; (2/5)</option>
                            <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; (1/5)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="emailReview">Your email *</label>
                      <input class="form-control" type="email" name="email" id="emailReview" placeholder="Enter your  email" required="required">
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="reviewReview">Review text *</label>
                      <textarea class="form-control" rows="4" name="review" id="reviewReview" placeholder="Enter your review" required="required"></textarea>
                    </div>
                    <button class="btn btn-outline-dark" type="submit">Post review</button>
                  </form>
                  <p class="text-muted text-sm"><span class="badge badge-info">Note</span> This form shows usage of the classic Bootstrap form controls, not their underlined variants. You can choose whichever variant you want.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5 bg-gray-100">
      <div class="container">
        <h5 class="mb-4">You might also like these</h5>
        <div class="position-relative">
          <!-- Similar Items Slider-->
          <div class="swiper-container similar-slider">
            <div class="swiper-wrapper pb-5">
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3">
                      <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">White Tee</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3"><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Black blouse</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3">
                      <div class="product-badge badge badge-primary">Sale</div><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">College jacket</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3"><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Carrot-fit jeans</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3"><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Striped T-Shirt</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3"><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Short top</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3">
                      <div class="product-badge badge badge-dark">Sold out</div><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Ethnic Sweater</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3"><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Beige</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
                    <div class="product-image mb-md-3"><a href="detail-1.html">
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
                      <h3 class="text-base mb-1"><a class="text-dark" href="detail-1.html">Skull Tee</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                      <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                    </div>
                  </div>
                </div>
                <!-- /product   -->
              </div>
            </div>
            <div class="swiper-pagination">   </div>
          </div>
          <div class="swiper-outside-nav align-with-products">
            <div class="swiper-button-prev" id="similarPrev"></div>
            <div class="swiper-button-next" id="similarNext"></div>
          </div>
        </div>
      </div>
    </section>
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
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1.html"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1.html">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer sidebar-cart-footer shadow">
            <div class="w-100">
              <h5 class="mb-4">Subtotal: <span class="float-right">$465.32</span></h5><a class="btn btn-outline-dark btn-block mb-3" href="cart.html">View cart</a><a class="btn btn-dark btn-block" href="checkout.html">Checkout</a>
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
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders.html" method="get">
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
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders.html" method="get">
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
                <h1 class="h2 mb-4">Push-up Jeans  </h1>
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
          ajax.open("GET.html", path, true);
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
    <!-- PhotoSwiper gallery-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/photoswipe/photoswipe.min.js"></script>
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="js/photoswipe-init.ee6f4f5e.js"></script>
    <!-- Image Zoom plugin-->
    <script src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/vendor/jquery-zoom/jquery.zoom.min.js"></script>
    <!-- Some theme config-->
    <script>
      var options = {
          navbarExpandPx: 992
      }
      
    </script>
    <!-- Main Theme files-->
    <script src="js/sliders-init.1db6fb07.js"></script>
    <script src="js/theme.fe2c17cd.js"></script>
    <!-- Root element of PhotoSwipe. Must have class pswp.-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <!--
      Background of PhotoSwipe.
      It's a separate element as animating opacity is faster than rgba().
      -->
      <div class="pswp__bg"></div>
      <!-- Slides wrapper with overflow:hidden.-->
      <div class="pswp__scroll-wrap">
        <!--
        Container that holds slides.
        PhotoSwipe keeps only 3 of them in the DOM to save memory.
        Don't modify these 3 pswp__item elements, data is added later on.
        -->
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <!-- Controls are self-explanatory. Order can be changed.-->
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
            <!-- element will get class pswp__preloader--active when preloader is running-->
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center text-center"></div>
          </div>
        </div>
      </div>
    </div>
  </body>

<!-- Mirrored from demo.bootstrapious.com/varkala/1-2/detail-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 02:43:12 GMT -->
</html>