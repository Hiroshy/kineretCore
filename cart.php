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
          <li class="breadcrumb-item active">Shopping cart        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content">
          <h1 class="hero-heading">Shopping cart</h1>
          <div><p class="lead text-muted">You have 3 items in your cart.</p> <p class="lead text-muted">For the checkout, you can use either a <a href="checkout1">Multiple pages checkout</a> or have everything on a <a href="checkout">single page</a>.</p></div>
        </div>
      </div>
    </section>
    <!-- Shopping Cart Section-->
    <section>
      <div class="container">
        <div class="row mb-5"> 
          <div class="col-lg-8 pr-xl-5">
            <div class="cart mb-5">
              <div class="cart-body">
                <!-- Product-->
                <div class="cart-item">
                  <div class="row d-flex align-items-center text-left text-md-center">
                    <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
                      <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."></a>
                        <div class="cart-title text-left"><a class="text-dark link-animated" href="detail-1"><strong>Skull Tee</strong></a><br><span class="text-muted text-sm">Size: Large</span><br><span class="text-muted text-sm">Colour: Green</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-7 mt-4 mt-md-0">
                      <div class="row align-items-center">
                        <div class="col-md-3">
                          <div class="row">
                            <div class="col-6 d-md-none text-muted">Price per item</div>
                            <div class="col-6 col-md-12 text-right text-md-center">$65.00</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row align-items-center">
                            <div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
                            <div class="col-5 col-sm-3 col-md-12">
                              <div class="d-flex align-items-center">
                                <div class="btn btn-items btn-items-decrease">-</div>
                                <input class="form-control text-center border-0 border-md input-items" type="text" value="4">
                                <div class="btn btn-items btn-items-increase">+</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3"> 
                          <div class="row">
                            <div class="col-6 d-md-none text-muted">Total price </div>
                            <div class="col-6 col-md-12 text-right text-md-center">$260.00</div>
                          </div>
                        </div>
                        <div class="col-2 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                            <svg class="svg-icon w-2rem h-2rem svg-icon-light">
                              <use xlink:href="#close-1"> </use>
                            </svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div class="cart-item">
                  <div class="row d-flex align-items-center text-left text-md-center">
                    <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
                      <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."></a>
                        <div class="cart-title text-left"><a class="text-dark link-animated" href="detail-1"><strong>Transparent Blouse</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-7 mt-4 mt-md-0">
                      <div class="row align-items-center">
                        <div class="col-md-3">
                          <div class="row">
                            <div class="col-6 d-md-none text-muted">Price per item</div>
                            <div class="col-6 col-md-12 text-right text-md-center">$55.00</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row align-items-center">
                            <div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
                            <div class="col-5 col-sm-3 col-md-12">
                              <div class="d-flex align-items-center">
                                <div class="btn btn-items btn-items-decrease">-</div>
                                <input class="form-control text-center border-0 border-md input-items" type="text" value="3">
                                <div class="btn btn-items btn-items-increase">+</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3"> 
                          <div class="row">
                            <div class="col-6 d-md-none text-muted">Total price </div>
                            <div class="col-6 col-md-12 text-right text-md-center">$165.00</div>
                          </div>
                        </div>
                        <div class="col-2 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                            <svg class="svg-icon w-2rem h-2rem svg-icon-light">
                              <use xlink:href="#close-1"> </use>
                            </svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Product-->
                <div class="cart-item">
                  <div class="row d-flex align-items-center text-left text-md-center">
                    <div class="col-12 col-md-5"><a class="cart-remove close mt-3 d-md-none" href="#"><i class="fa fa-times">                                                                                   </i></a>
                      <div class="d-flex align-items-center"><a href="detail-1"><img class="cart-item-img" src="/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."></a>
                        <div class="cart-title text-left"><a class="text-dark link-animated" href="detail-1"><strong>White Tee</strong></a><br><span class="text-muted text-sm">Size: Medium</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-7 mt-4 mt-md-0">
                      <div class="row align-items-center">
                        <div class="col-md-3">
                          <div class="row">
                            <div class="col-6 d-md-none text-muted">Price per item</div>
                            <div class="col-6 col-md-12 text-right text-md-center">$55.00</div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="row align-items-center">
                            <div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
                            <div class="col-5 col-sm-3 col-md-12">
                              <div class="d-flex align-items-center">
                                <div class="btn btn-items btn-items-decrease">-</div>
                                <input class="form-control text-center border-0 border-md input-items" type="text" value="3">
                                <div class="btn btn-items btn-items-increase">+</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3"> 
                          <div class="row">
                            <div class="col-6 d-md-none text-muted">Total price </div>
                            <div class="col-6 col-md-12 text-right text-md-center">$165.00</div>
                          </div>
                        </div>
                        <div class="col-2 d-none d-md-block text-center"><a class="cart-remove text-muted" href="#"> 
                            <svg class="svg-icon w-2rem h-2rem svg-icon-light">
                              <use xlink:href="#close-1"> </use>
                            </svg></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-between flex-column flex-lg-row mb-5 mb-lg-0"><a class="btn btn-link text-muted" href="category-full"><i class="fa fa-chevron-left"></i> Continue Shopping</a><a class="btn btn-link text-primary" href="#"><i class="fa fa-sync"></i> Update cart                                  </a></div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5"> 
              <div class="card-header">
                <h6 class="mb-0">Order Summary</h6>
              </div>
              <div class="card-body py-4">
                <p class="text-muted text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                <table class="table card-text">
                  <tr>
                    <th class="py-4">Order Subtotal </th>
                    <td class="py-4 text-right text-muted">$390.00</td>
                  </tr>
                  <tr>
                    <th class="py-4">Shipping and handling</th>
                    <td class="py-4 text-right text-muted"> $10.00</td>
                  </tr>
                  <tr>
                    <th class="py-4">Tax</th>
                    <td class="py-4 text-right text-muted">$0.00</td>
                  </tr>
                  <tr>
                    <th class="pt-4">Total</th>
                    <td class="pt-4 text-right h3 font-weight-normal">$400.00</td>
                  </tr>
                </table>
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
    <!-- Some theme config-->
    <script>
      var options = {
          navbarExpandPx: 992
      }
      
    </script>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/0ce30eaf4c.js" crossorigin="anonymous"></script>

    <!-- Main Theme files-->
    <script src="js/sliders-init.1db6fb07.js"></script>
    <script src="js/theme.fe2c17cd.js"></script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/varkala/1-2/cart by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 02:43:12 GMT -->
</html>