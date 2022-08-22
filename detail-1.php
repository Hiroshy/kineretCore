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
    <section>
      <div class="container-fluid px-xl-7 pt-5 pb-3 pb-lg-6">
        <div class="d-block" id="addToCartAlert">
          <div class="mb-4 mb-lg-5 alert alert-success" role="alert">
            <div class="d-flex align-items-center pr-3">
              <svg class="svg-icon d-none d-sm-block w-3rem h-3rem svg-icon-light flex-shrink-0 mr-3">
                <use xlink:href="#checked-circle-1"> </use>
              </svg>
              <p class="mb-0">Push-up jeans have been added to your cart. <br class="d-inline-block d-lg-none"><a href="cart" class="text-reset text-decoration-underline ml-lg-3">View Cart</a></p>
            </div>
            <button class="close close-absolute close-centered opacity-10 text-inherit" type="button" data-dismiss="alert" aria-label="Close">
              <svg class="svg-icon w-2rem h-2rem">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
        </div>
        <ul class="breadcrumb undefined">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="category-full">Jeans</a></li>
          <li class="breadcrumb-item active">Push-up Jeans            </li>
        </ul>
        <div class="row">
          <div class="col-lg-6 col-xl-7 pt-4 order-2 order-lg-1 photoswipe-gallery"><a class="d-block mb-4" href="img/product/detail-3-gray.jpg" data-caption="Push-up Jeans 1 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-3-gray.jpg"><img class="img-fluid" src="/img/product/detail-3-gray.jpg" alt="Push-up Jeans 1"></div></a><a class="d-block mb-4" href="img/product/detail-1-gray.jpg" data-caption="Push-up Jeans 2 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-1-gray.jpg"><img class="img-fluid" src="/img/product/detail-1-gray.jpg" alt="Push-up Jeans 2"></div></a><a class="d-block mb-4" href="img/product/detail-2-gray.jpg" data-caption="Push-up Jeans 3 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-2-gray.jpg"><img class="img-fluid" src="/img/product/detail-2-gray.jpg" alt="Push-up Jeans 3"></div></a><a class="d-block mb-4" href="img/product/detail-4-gray.jpg" data-caption="Push-up Jeans 4 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-4-gray.jpg"><img class="img-fluid" src="/img/product/detail-4-gray.jpg" alt="Push-up Jeans 4"></div></a><a class="d-block mb-4" href="img/product/detail-5-gray.jpg" data-caption="Push-up Jeans 5 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-5-gray.jpg"><img class="img-fluid" src="/img/product/detail-5-gray.jpg" alt="Push-up Jeans 5"></div></a><a class="d-block mb-4" href="img/product/detail-6.jpg" data-caption="Push-up Jeans 6 - Caption text" data-toggle="photoswipe" data-width="1200" data-height="1200"> 
              <div data-toggle="zoom" data-image="img/product/detail-6.jpg"><img class="img-fluid" src="/img/product/detail-6.jpg" alt="Push-up Jeans 6"></div></a>
          </div>
          <div class="col-lg-6 col-xl-4 pt-4 order-1 order-lg-2 ml-lg-auto">
            <div class="sticky-top" style="top: 100px;">
              <h1 class="mb-4">Push-up Jeans</h1>
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
              <div class="col-md-5"><img class="img-fluid" src="/img/product/detail-3.jpg" alt=""></div>
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
                  <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="/img/avatar/person-1.jpg" alt="Han Solo"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Han Solo</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                    </div>
                    <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="/img/avatar/person-2.jpg" alt="Luke Skywalker"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Luke Skywalker</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                    </div>
                    <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="/img/avatar/person-3.jpg" alt="Princess Leia"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Princess Leia</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                    </div>
                    <p class="text-muted">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img class="review-image" src="/img/avatar/person-4.jpg" alt="Jabba Hut"><span class="text-uppercase text-muted">Dec 2018</span></div>
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
    <section class="py-5">
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
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
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
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
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
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
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
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
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
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
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
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
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
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
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
              </div>
              <!-- similar item slide-->
              <div class="swiper-slide">
                <!-- product-->
                <div>
                  <div class="product">
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
    <!-- Footer-->
    <?php include("parts/body/footer.php") ?>
    <!-- Modales-->
    <?php include("parts/body/modal.php") ?>
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
    <script src="/core/jquery/jquery.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="/core/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="/core/swiper/js/swiper.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="/core/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- AOS - AnimationOnScroll-->
    <script src="/core/aos/aos.js"></script>
    <!-- Custom Scrollbar-->
    <script src="/core/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom-scrollbar-init.f148089f.js"></script>
    <!-- Smooth scroll-->
    <script src="/core/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="/core/object-fit-images/ofi.min.js"></script>
    <!-- PhotoSwiper gallery-->
    <script src="/core/photoswipe/photoswipe.min.js"></script>
    <script src="/core/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="js/photoswipe-init.ee6f4f5e.js"></script>
    <!-- Image Zoom plugin-->
    <script src="/core/jquery-zoom/jquery.zoom.min.js"></script>
    <!-- Some theme config-->
    <script>
      var options = {
          navbarExpandPx: 992
      }
      
    </script>
    <!-- Main Theme files-->
    <script src="js/sliders-init.1db6fb07.js"></script>
    <script src="js/theme.fe2c17cd.js"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/0ce30eaf4c.js" crossorigin="anonymous"></script>
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

<!-- Mirrored from demo.bootstrapious.com/varkala/1-2/detail-1 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 02:43:11 GMT -->
</html>