<!--modal cart-->
<div class="modal fade modal-right" id="sidebarCart" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content sidebar-cart-content">
            <div class="modal-header border-0">
                <button class="close modal-close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5 sidebar-cart-body">
                <!-- Empty cart snippet-->
                <!-- In case of empty cart - display this snippet + remove .d-none-->
                <div class="d-none text-center mb-5">
                    <svg class="svg-icon w-3rem h-3rem svg-icon-light mb-4 text-muted">
                        <use xlink:href="#retail-bag-1"></use>
                    </svg>
                    <p>Your cart is empty</p>
                </div>
                <!-- Empty cart snippet end-->
                <div class="sidebar-cart-product-wrapper custom-scrollbar">
                    <!-- cart item-->
                    <div class="navbar-cart-product">
                        <div class="d-flex align-items-center">
                            <a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/srednie_ps2rh-170.jpg" alt="..." /></a>
                            <div class="w-100">
                                <a class="close" href="#">
                                    <i class="fas fa-times"></i>
                                </a>
                                <div class="pl-3">
                                    <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cart item-->
                    <div class="navbar-cart-product">
                        <div class="d-flex align-items-center">
                            <a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/srednie_ps2rh-170.jpg" alt="..." /></a>
                            <div class="w-100">
                                <a class="close" href="#">
                                    <i class="fas fa-times"></i>
                                </a>
                                <div class="pl-3">
                                    <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cart item-->
                    <div class="navbar-cart-product">
                        <div class="d-flex align-items-center">
                            <a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/srednie_ps2rh-170.jpg" alt="..." /></a>
                            <div class="w-100">
                                <a class="close" href="#">
                                    <i class="fas fa-times"></i>
                                </a>
                                <div class="pl-3">
                                    <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cart item-->
                    <div class="navbar-cart-product">
                        <div class="d-flex align-items-center">
                            <a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/srednie_ps2rh-170.jpg" alt="..." /></a>
                            <div class="w-100">
                                <a class="close" href="#">
                                    <i class="fas fa-times"></i>
                                </a>
                                <div class="pl-3">
                                    <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cart item-->
                    <div class="navbar-cart-product">
                        <div class="d-flex align-items-center">
                            <a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/srednie_ps2rh-170.jpg" alt="..." /></a>
                            <div class="w-100">
                                <a class="close" href="#">
                                    <i class="fas fa-times"></i>
                                </a>
                                <div class="pl-3">
                                    <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- cart item-->
                    <div class="navbar-cart-product">
                        <div class="d-flex align-items-center">
                            <a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="/img/product/srednie_ps2rh-170.jpg" alt="..." /></a>
                            <div class="w-100">
                                <a class="close" href="#">
                                    <i class="fas fa-times"></i>
                                </a>
                                <div class="pl-3">
                                    <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer sidebar-cart-footer shadow">
                <div class="w-100">
                    <h5 class="mb-4">Subtotal: <span class="float-right">$465.32</span></h5>
                    <a class="btn btn-outline-dark btn-block mb-3" href="cart">Ver carrito</a><a class="btn btn-dark btn-block" href="checkout">Pagar</a>
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
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body px-5 pb-5">
                <div>
                    <h5 class="mb-5" data-aos="zoom-in" data-aos-delay="50">
                      <?= $app['business'];?>
                    </h5>
                    <ul class="nav flex-column mb-5">
                        <li class="nav-item active"><a class="nav-link pl-0" href="<?= $app["address"]["peru"][1] ?>"> <i class="fas fa-map-signs"></i> <?= $app["address"]["peru"][0] ?></a></li>
                        <li class="nav-item"><a class="nav-link pl-0" href="mailto:<?= $mi_email ?>"> <i class="fas fa-envelope"></i> <?= $mi_email?></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link pl-0 dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-target="#sidebarSubmenu" data-toggle="collapse" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-headset"></i> Comunícate</a>
                            <div class="collapse" id="sidebarSubmenu">
                                <ul class="nav flex-column ml-3">
                                    <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
                                    <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fas fa-phone-alt"></i> Llamada</a></li>
                                    <li class="nav-item"><a class="nav-link pl-0" href="#"><i class="fas fa-video"></i> Videollamada</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline mb-4">
                        <li class="list-inline-item mr-2">
                            <a class="text-reset text-hover-primary" href="<?= $app['facebook']?>" target="new"><i class="fab fa-facebook-f"> </i></a>
                        </li>
                        <li class="list-inline-item mr-2">
                            <a class="text-reset text-hover-primary" href="<?= $app['twitter']?>" target="new"><i class="fab fa-twitter"> </i></a>
                        </li>
                        <li class="list-inline-item mr-4">
                            <a class="text-reset text-hover-primary" href="<?= $app['youtube']?>" target="new"><i class="fab fa-youtube"> </i></a>
                        </li>
                        <li class="list-inline-item mr-2">
                            <i class="fas fa-phone-alt"></i>
                            <a class="alert-link" href="tel:<?= $mi_number ?>"><?= $mi_number ?></a>
                        </li>
                    </ul>
                    <p class="text-sm text-muted mb-0">
                        Somos una empresa dedicada a la<strong> venta e importación de equipos de laboratorio</strong> , Contamos con el s<strong>ervicio de mantenimiento Preventivo</strong> , <strong>Correctivo</strong> ,
                        <strong>Calibración y certificación Metrologica</strong> .
                    </p>
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
                <i class="fas fa-times"></i>
            </button>
            <div class="modal-body p-3">
                <ul class="nav list-inline" role="tablist">
                    <li class="list-inline-item"><a class="nav-link nav-link-lg active" data-toggle="tab" href="#loginModalTabLogin" role="tab" id="loginModalLinkLogin" aria-controls="loginModalTabLogin" aria-selected="true">Login</a></li>
                    <li class="list-inline-item">
                        <a class="nav-link nav-link-lg" data-toggle="tab" href="#loginModalTabRegister" role="tab" id="loginModalLinkRegister" aria-controls="loginModalTabRegister" aria-selected="false">Register</a>
                    </li>
                </ul>
                <hr class="mb-3" />
                <div class="tab-content">
                    <div class="tab-pane active fade show px-3" id="loginModalTabLogin" role="tabpanel" aria-labelledby="loginModalLinkLogin">
                        <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders" method="get">
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" id="email" type="text" />
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label" for="loginPassword"> Password</label>
                                    </div>
                                    <div class="col-auto"><a class="form-text small" href="#">Forgot password?</a></div>
                                </div>
                                <input class="form-control" name="loginPassword" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password" />
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="loginRemember" type="checkbox" />
                                    <label class="custom-control-label text-muted" for="loginRemember"> <span class="text-sm">Remember me for 30 days</span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-outline-dark" type="submit"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
                            </div>
                        </form>
                        <hr class="my-3 hr-text letter-spacing-2" data-content="OR" />
                        <div class="text-center">
                            <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                            <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google</span></button>
                        </div>
                    </div>
                    <div class="tab-pane fade px-3" id="loginModalTabRegister" role="tabpanel" aria-labelledby="loginModalLinkRegister">
                        <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit.</p>
                        <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders" method="get">
                            <div class="form-group">
                                <label class="form-label" for="registerName">Name</label>
                                <input class="form-control" id="registerName" type="text" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="registerEmail">Email</label>
                                <input class="form-control" id="registerEmail" type="text" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="registerPassword">Password</label>
                                <input class="form-control" id="registerPassword" type="password" />
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-block btn-outline-dark" type="submit"><i class="far fa-user mr-2"></i>Register</button>
                            </div>
                        </form>
                        <hr class="my-3 hr-text letter-spacing-2" data-content="OR CONNECT WITH" />
                        <div class="text-center">
                            <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                            <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google </span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
