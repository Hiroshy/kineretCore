
<header class="header-absolute">
<div class="container-fluid bg-dark text-light p-2">
    <p class="mute text-center m-0">
        <i class="fas fa-truck-loading"></i> &nbsp; Por nuestro octavo aniversario todos nuestros artículos tienen 30% de descuento.  <i class="fas fa-truck"></i>
    </p>
</div>
<div class="top-bar text-sm bg-transparent py-3">
    <div class="container-fluid px-lg-5 py-3">
        <div class="row align-items-center">
            <div class="col-md-4 d-none d-md-block">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-2">
                        <a class="text-reset text-hover-primary" href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook-f"> </i></a>
                    </li>
                    <li class="list-inline-item mr-2">
                        <a class="text-reset text-hover-primary" href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fab fa-twitter"> </i></a>
                    </li>
                    <li class="list-inline-item mr-2">
                        <a class="text-reset text-hover-primary" href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="list-inline-item mr-2">
                        <a class="text-reset text-hover-primary" href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li class="list-inline-item mr-4">
                        <a class="text-reset text-hover-primary" href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item mr-2">
                        <svg class="svg-icon mr-2">
                            <use xlink:href="#calls-1"> </use>
                        </svg>020-800-456-747
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4 text-left text-md-center">
                <p class="mb-0">
                    <!--lema 2--->
                </p>
            </div>
            <div class="col-sm-6 col-md-4 d-none d-sm-flex justify-content-end">
                <div class="dropdown border-right px-3">
                    <a class="topbar-link" id="langsDropdown" href="#" data-toggle="tooltip" data-placement="bottom" title="Modo Nocturno">
                        <i class="fas fa-moon"></i> <i class="fas fa-sun"></i>
                    </a>
                </div>

                <!-- Language Dropdown-->

                <select onchange="doGTranslate(this);" class="form-select bg-transparent" id="selectLenguage">
                    <option value="">Select Language</option>
                    <option value="es|en">English</option>
                    <option value="es|fr">French</option>
                    <option value="es|iw">Hebrew</option>
                    <option value="es|pt">Portuguese</option>
                    <option value="es|ru">Russian</option>
                    <option value="es|es" selected>Spanish</option>
                </select>

                <div id="google_translate_element2"></div>
                
                <div class="dropdown border-right px-3">
                    <a class="dropdown-toggle topbar-link" id="countryDropdown" href="#" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Perú
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="countryDropdown">
                        <a class="dropdown-item" href="#">EE.UU</a>
                        <a class="dropdown-item" href="#">ESPAÑA</a>
                        <a class="dropdown-item" href="#">ISRAEL</a>
                    </div>
                </div>
                <!-- Currency Dropdown-->
                <div class="dropdown pl-3 ml-0">
                    <a class="dropdown-toggle topbar-link" id="currencyDropdown" href="#" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        PEN
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="currencyDropdown">
                        <a class="dropdown-item" href="#">USD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Top Bar End-->
<nav class="navbar navbar-expand-lg bg-transparent border-0 shadow-0 navbar-light px-lg-5 " id="megamenuILD">
        <a class="navbar-brand" href="/"><?= $app['business'];?></a>
        <ul class="list-inline mb-0 d-block d-lg-none">
            <li class="list-inline-item mr-3">
                <a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#loginModal">
                    <i class="fas fa-user"></i>
                </a>
            </li>
            <li class="list-inline-item mr-3">
                <a class="text-dark text-hover-primary position-relative" href="wishlist">
                    <i class="fas fa-heart"></i>
                    <div class="navbar-icon-badge">3</div>
                </a>
            </li>
            <li class="list-inline-item position-relative mr-3">
                <a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#sidebarCart">
                    <i class="fas fa-shopping-bag"></i>
                    <div class="navbar-icon-badge">5</div>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mt-3 mt-lg-0">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="homeDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&nbsp;Clientes</a>
                    <div class="dropdown-menu" aria-labelledby="homeDropdown">
                        <a class="dropdown-item" href="/">Home 1 - Fashion </a><a class="dropdown-item" href="index-3">Home 2 - Fashion </a>
                        <a class="dropdown-item" href="index-4">Home 3 - Design <span class="badge badge-primary-light ml-1">New</span> </a>
                        <a class="dropdown-item" href="index-5">Home 4 - Design <span class="badge badge-primary-light ml-1">New</span> </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="shopDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empleados</a>
                    <div class="dropdown-menu py-0" aria-labelledby="shopDropdown" data-min-width="750px" data-translate-x="-50px">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 p-lg-5">
                                <h6 class="dropdown-header h6 pl-lg-0">Shop pages</h6>
                                <a class="dropdown-item pl-lg-0" href="category-full">Full width </a><a class="dropdown-item pl-lg-0" href="category-full-sidebar">Full width with category menu </a>
                                <a class="dropdown-item pl-lg-0" href="category-big-products">Full width with big products </a><a class="dropdown-item pl-lg-0" href="category-boxed">Fixed width </a>
                                <a class="dropdown-item pl-lg-0" href="category-sidebar">Fixed width & sidebar </a>
                                <a class="dropdown-item pl-lg-0" href="category-masonry">Fixed width & masonry layout<span class="badge badge-primary-light ml-1">New</span> </a>
                                <a class="dropdown-item pl-lg-0" href="category-categories">Subcategories </a>
                            </div>
                            <div class="col-lg-4 col-sm-6 p-lg-5">
                                <h6 class="dropdown-header h6 pl-lg-0">Product pages</h6>
                                <a class="dropdown-item pl-lg-0" href="detail-1">Product with sticky info </a><a class="dropdown-item pl-lg-0" href="detail-2">Product with background </a>
                                <a class="dropdown-item pl-lg-0" href="detail-3">Product standard </a>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block"><img class="bg-image" src="/img/product/kyle-loftus-596319-unsplash-cropped.jpg" alt="" /></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="iconsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marcas</a>
                    <div class="dropdown-menu py-lg-0" aria-labelledby="iconsDropdown" data-min-width="800px">
                        <div class="row py-lg-10 px-4">
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5">
                                <a class="text-reset" href="category-categories">
                                    <img src="/img/marcas/memert.jpg" class="img-fluid" alt="" />
                                    <h6>Memert</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5">
                                <a class="text-reset" href="category-categories">
                                    <img src="/img/marcas/radwag.jpg" class="img-fluid" alt="" />
                                    <h6>Radwag</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#shirt5-1"></use>
                                    </svg>
                                    <h6>Onyx</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#shirt1-1"></use>
                                    </svg>
                                    <h6>Shirts</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#pullover-1"></use>
                                    </svg>
                                    <h6>Pullovers</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#scarf-1"></use>
                                    </svg>
                                    <h6>Scarfs</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5">
                                <a class="text-reset" href="category-categories">
                                    <img src="/img/memert.png" class="img-fluid" alt="" />
                                    <h6>Memert</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#underwear1-1"></use>
                                    </svg>
                                    <h6>Underwear</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#watch-1"></use>
                                    </svg>
                                    <h6>Watches</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#portfolio-1"></use>
                                    </svg>
                                    <h6>Bags</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#cap-1"></use>
                                    </svg>
                                    <h6>Caps</h6>
                                </a>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0">
                                <a class="text-reset" href="category-categories">
                                    <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                                        <use xlink:href="#bowtie-1"></use>
                                    </svg>
                                    <h6>Accessories</h6>
                                </a>
                            </div>
                        </div>
                        <div class="p-3 bg-primary text-center text-sm d-none d-lg-block">
                            <p class="mb-0">
                                Para este verano utiliza el código ILD-09ANDU , para obtener 20% de DSCTO
                            </p>
                        </div>
                    </div>
                </li>
                <!-- Megamenu-->
                <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Categorias</a>
                    <div class="dropdown-menu megamenu px-4 px-lg-5 py-lg-5" data-translate-x="-50%">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <img class="img-fluid mb-3 d-none d-lg-block" src="/img/blog/christopher-campbell-28571-unsplash.jpg" alt="" />
                                <!-- Megamenu list-->
                                <h6>Laboratorio</h6>
                                <ul class="megamenu-list list-unstyled">
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="/">Home 1 - Fashion </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="index-3">Home 2 - Fashion </a></li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="index-4">Home 3 - Design <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="index-5">Home 4 - Design <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                </ul>
                                <!-- Megamenu list-->
                                <h6>Industrias</h6>
                                <ul class="megamenu-list list-unstyled mb-lg-0">
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-full">Full width </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-full-sidebar">Full width with category menu </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-big-products">Full width with big products </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-boxed">Fixed width </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-sidebar">Fixed width & sidebar </a></li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="category-masonry">Fixed width & masonry layout<span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-categories">Subcategories </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <img class="img-fluid mb-3 d-none d-lg-block" src="/img/blog/ian-dooley-347962-unsplash.jpg" alt="" />
                                <!-- Megamenu list-->
                                <h6>Salud</h6>
                                <ul class="megamenu-list list-unstyled">
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="cart">Shopping cart </a></li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="checkout1">Checkout - Five steps <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="checkout">Checkout - Single-page </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="checkout-confirmed">Checkout - confirmed </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="wishlist">Wishlist </a></li>
                                </ul>
                                <!-- Megamenu list-->
                                <h6>Educación</h6>
                                <ul class="megamenu-list list-unstyled mb-lg-0">
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="detail-1">Product with sticky info </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="detail-2">Product with background </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="detail-3">Product standard </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <img class="img-fluid mb-3 d-none d-lg-block" src="/img/blog/ian-dooley-347942-unsplash.jpg" alt="" />
                                <!-- Megamenu list-->
                                <h6>Pesaje</h6>
                                <ul class="megamenu-list list-unstyled">
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="blog">Blog </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="blog-masonry">Blog - Masonry </a></li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="post">Post </a></li>
                                </ul>
                                <!-- Megamenu list-->
                                <h6>Metrología</h6>
                                <ul class="megamenu-list list-unstyled">
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="about">About - Company <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="about-2">About v.2 - Person <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="faq">F.A.Q. <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item"><a class="megamenu-list-link" href="contact">Contact </a></li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="privacy">Privacy policy <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <img class="img-fluid mb-3 d-none d-lg-block" src="/img/blog/photo-1534126511673-b6899657816a.jpg" alt="" />
                                <!-- Megamenu list-->
                                <h6>Gobernación</h6>
                                <ul class="megamenu-list list-unstyled mb-lg-0">
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="customer-login">Login/sign up<span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="customer-orders">Orders <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="customer-order">Order detail <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="customer-order-tracking">Order tracking <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="customer-addresses">Addresses <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="customer-account">Profile <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                    <li class="megamenu-list-item">
                                        <a class="megamenu-list-link" href="customer-wishlist">Wishlist <span class="badge badge-primary-light ml-1">New</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- /Megamenu end-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="docsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contacta</a>
                    <div class="dropdown-menu" aria-labelledby="homeDropdown">
                        <a class="dropdown-item" href="docs/index">Introduction </a><a class="dropdown-item" href="docs/directory-structure">Directory structure </a><a class="dropdown-item" href="docs/gulp">Gulp </a>
                        <a class="dropdown-item" href="docs/customizing-css">Customizing CSS </a><a class="dropdown-item" href="docs/credits">Credits </a><a class="dropdown-item" href="docs/changelog">Changelog </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="docs/components-bootstrap">Bootstrap </a><a class="dropdown-item" href="docs/components-theme">Theme </a>
                    </div>
                </li>
            </ul>
            <form id="searchTerm" class="d-lg-flex ml-auto mr-lg-5 mr-xl-6 my-4 my-lg-0" action="#">
                <div class="input-group input-group-underlined">
                    <input id="querySearch" class="form-control form-control-underlined pl-3" type="text" placeholder="Buscar" aria-label="Search" aria-describedby="button-search" value="<?php if(isset($_GET['query'])){echo $_GET['query'];} ?>"/>
                    <div class="input-group-append ml-0">
                        <button id="microphon" class="btn btn-underlined py-0" id="button-search" type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Dime algo">
                            <i class="fas fa-microphone"></i>
                        </button>
                        <button class="btn btn-underlined py-0" id="button-search" type="button" >
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="list-inline mb-0 d-none d-lg-block">
                <li class="list-inline-item mr-3">
                    <a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#loginModal">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
                <li class="list-inline-item mr-3">
                    <a class="text-dark text-hover-primary position-relative" href="wishlist">
                        <i class="fas fa-heart"></i>
                        <div class="navbar-icon-badge">3</div>
                    </a>
                </li>
                <li class="list-inline-item position-relative mr-3">
                    <a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#sidebarCart">
                        <i class="fas fa-shopping-bag"></i>
                        <div class="navbar-icon-badge">5</div>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#sidebarRight">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    </header>