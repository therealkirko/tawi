<header class="main-header">                  
    <div class="container-fluid rel-div">
        <div class="col-lg-4 col-sm-8">
            <div class="main-logo">
                <a href="index.html"> <img alt="" src="{{ asset("img/logo/main-logo.png") }}" />  </a>
                <span class="medium-font">ORGANIC STORE</span>
            </div>
        </div>

        <div class="col-lg-6 responsive-menu">  
            <div class="responsive-toggle fa fa-bars"> </div>
            <nav class="fix-navbar" id="primary-navigation">            
                <ul class="primary-navbar">                                                
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Home</a>                                            
                        <ul class="dropdown-menu">    
                            <li><a href="index.html"> Home 1 </a></li> 
                            <li><a href="index-2.html"> Home 2 </a></li> 
                            <li><a href="index-3.html"> Home 3 </a></li>
                            <li><a href="index-4.html"> Home 4 </a></li>
                        </ul>
                    </li> 
                    <li><a href="about-us.html">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Shop</a>                                            
                        <ul class="dropdown-menu">    
                            <li><a href="shop-1.html"> shop </a></li> 
                            <li><a href="shop-2.html"> shop 2 </a></li> 
                            <li><a href="shop-single.html"> shop single </a></li>  
                            <li><a href="my-account.html"> my account </a></li> 
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Blog</a>
                        <ul class="dropdown-menu">    
                            <li><a href="blog.html"> blog </a></li>
                            <li><a href="blog-single.html"> blog single </a></li>                  
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Pages</a>
                        <ul class="dropdown-menu"> 
                            <li><a href="404.html"> Error Page </a></li>  
                            <li><a href="coming-soon.html"> Coming Soon </a></li>  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu</a>
                                <ul class="dropdown-menu">  
                                    <li><a href="#">Sub Menu 1</a></li>
                                    <li><a href="#">Sub Menu 2</a></li>    
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Sub Menu 3</a>
                                        <ul class="dropdown-menu">  
                                            <li><a href="#">Sub Menu 4</a></li>
                                            <li><a href="#">Sub Menu 5</a></li> 
                                            <li><a href="#">Sub Menu 6</a></li> 
                                        </ul>
                                    </li> 
                                </ul>
                            </li> 
                        </ul>
                    </li>
                </ul>                           
            </nav>
        </div>

        <div class="col-lg-2 col-sm-4 cart-megamenu">
            <div class="cart-hover">
                <a href="#"> <img alt="" src="{{ asset("img/icons/cart-icon.png") }}" /> </a>
                <span class="cnt crl-bg">2</span> <span class="price">$2.170.00</span>
                <ul class="pop-up-box cart-popup">
                    <li class="cart-list">
                        <div class="cart-img"> <img src="{{ asset("img/extra/cart-sm-1.jpg") }}" alt=""> </div>
                        <div class="cart-title">
                            <div class="fsz-16">
                                <a href="#"> <span class="light-font"> organic </span>  <strong>almonds</strong></a>
                                <h6 class="sub-title-1">DRY FRUITS</h6>
                            </div>
                            <div class="price"> 
                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                            </div>
                        </div>
                        <div class="close-icon"> <i class="fa fa-close clr-txt"></i> </div>
                    </li>

                    <li class="cart-list">
                        <div class="cart-img"> <img src="{{ asset("img/extra/cart-sm-2.jpg") }}" alt=""> </div>
                        <div class="cart-title">
                            <div class="fsz-16">
                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper</strong></a>
                                <h6 class="sub-title-1">VEGETABLES</h6>
                            </div>
                            <div class="price"> 
                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                            </div>
                        </div>
                        <div class="close-icon"> <i class="fa fa-close clr-txt"></i> </div>
                    </li>

                    <li class="cart-list">
                        <div class="cart-img"> <img src="{{ asset("img/extra/cart-sm-3.jpg") }}" alt=""> </div>
                        <div class="cart-title">
                            <div class="fsz-16">
                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                <h6 class="sub-title-1">VAGETABLES</h6>
                            </div>
                            <div class="price"> 
                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                            </div>
                        </div>
                        <div class="close-icon"> <i class="fa fa-close clr-txt"></i> </div>
                    </li>

                    <li class="cart-list sub-total">
                        <div class="pull-left"> 
                            <strong>Subtotal</strong>
                        </div>
                        <div class="pull-right"> 
                            <strong class="clr-txt">$150.00</strong>
                        </div>
                    </li>
                    <li class="cart-list buttons">
                        <div class="pull-left"> 
                            <a href="cart.html" class="theme-btn-sm-2">View Cart</a>
                        </div>
                        <div class="pull-right"> 
                            <a href="checkout.html" class="theme-btn-sm-3"> Checkout </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mega-submenu">

                <span class="nav-trigger">
                    <a class="menu-toggle" href="#"> <img src="{{ asset("img/icons/menu.png") }}" alt="" /> </a>
                </span>
                <div class="mega-dropdown-menu">
                    <a class="menu-toggle fa fa-close" href="#">  </a>
                    <div class="slider-mega-menu">
                        <div class="menu-block">
                            <div class="menu-caption">                                                               
                                <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Fruits</strong> </h2>
                                <ul class="sub-list">
                                    <li> <a href="#">Banana</a> </li>
                                    <li> <a href="#">Water Melon </a> </li>
                                    <li> <a href="#">Blackberry </a> </li>
                                    <li> <a href="#">Plume</a> </li>
                                    <li> <a href="#">Orange</a> </li>
                                    <li> <a href="#">Lemon</a> </li>
                                    <li> <a href="#">Pineapple</a> </li>
                                    <li> <a href="#">Apple</a> </li>
                                    <li> <a href="#">Kiwi</a> </li>
                                </ul>
                                <h2 class="title"> <a href="#" class="clr-txt"> All Fruits </a> </h2>
                            </div>
                            <div class="menu-img">
                                <img alt="" src="{{ asset("img/extra/menu-1.png") }}" />
                            </div>
                        </div>  
                        <div class="menu-block">
                            <div class="menu-caption">                                                               
                                <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Vegetables</strong> </h2>
                                <ul class="sub-list">
                                    <li> <a href="#">Cabbage</a> </li>
                                    <li> <a href="#">Garlic </a> </li>
                                    <li> <a href="#">Onion </a> </li>
                                    <li> <a href="#">Plume</a> </li>
                                    <li> <a href="#">Carrot</a> </li>
                                    <li> <a href="#">Papper</a> </li>
                                    <li> <a href="#">Mushrome</a> </li>
                                    <li> <a href="#">Apple</a> </li>
                                    <li> <a href="#">Kiwi</a> </li>
                                </ul>
                                <h2 class="title"> <a href="#" class="clr-txt"> All Vegetables </a> </h2>
                            </div>
                            <div class="menu-img">
                                <img alt="" src="{{ asset("img/extra/menu-2.png") }}" />
                            </div>
                        </div>  
                        <div class="menu-block">
                            <div class="menu-caption">                                                               
                                <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Dread Juices</strong> </h2>
                                <ul class="sub-list">
                                    <li> <a href="#">Banana Juice</a> </li>
                                    <li> <a href="#">Water Melon Juice</a> </li>
                                    <li> <a href="#">Blackberry Juice</a> </li>
                                    <li> <a href="#">Plume Juice</a> </li>
                                    <li> <a href="#">Orange Juice</a> </li>
                                    <li> <a href="#">Lemon Juice</a> </li>
                                    <li> <a href="#">Pineapple Juice</a> </li>
                                    <li> <a href="#">Apple Juice</a> </li>
                                    <li> <a href="#">Kiwi Juice</a> </li>
                                </ul>
                                <h2 class="title"> <a href="#" class="clr-txt"> All Dread juices </a> </h2>
                            </div>
                            <div class="menu-img">
                                <img alt="" src="{{ asset("img/extra/menu-3.png") }}" />
                            </div>
                        </div>  
                        <div class="menu-block">
                            <div class="menu-caption">                                                               
                                <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Juices</strong> </h2>
                                <ul class="sub-list">
                                    <li> <a href="#">Banana Juice</a> </li>
                                    <li> <a href="#">Water Melon Juice</a> </li>
                                    <li> <a href="#">Blackberry Juice</a> </li>
                                    <li> <a href="#">Plume Juice</a> </li>
                                    <li> <a href="#">Orange Juice</a> </li>
                                    <li> <a href="#">Lemon Juice</a> </li>
                                    <li> <a href="#">Pineapple Juice</a> </li>
                                    <li> <a href="#">Apple Juice</a> </li>
                                    <li> <a href="#">Kiwi Juice</a> </li>
                                </ul>
                                <h2 class="title"> <a href="#" class="clr-txt"> All Fresh Juices </a> </h2>
                            </div>
                            <div class="menu-img">
                                <img alt="" src="{{ asset("img/extra/menu-1.png") }}" />
                            </div>
                        </div>  
                        <div class="menu-block">
                            <div class="menu-caption">                                                               
                                <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Breads</strong> </h2>
                                <ul class="sub-list">
                                    <li> <a href="#">Banana</a> </li>
                                    <li> <a href="#">Water Melon </a> </li>
                                    <li> <a href="#">Blackberry </a> </li>
                                    <li> <a href="#">Plume</a> </li>
                                    <li> <a href="#">Orange</a> </li>
                                    <li> <a href="#">Lemon</a> </li>
                                    <li> <a href="#">Pineapple</a> </li>
                                    <li> <a href="#">Apple</a> </li>
                                    <li> <a href="#">Kiwi</a> </li>
                                </ul>
                                <h2 class="title"> <a href="#" class="clr-txt"> All Fresh Bread </a> </h2>
                            </div>
                            <div class="menu-img">
                                <img alt="" src="{{ asset("img/extra/menu-5.png") }}" />
                            </div>
                        </div>  
                        <div class="menu-block">
                            <div class="menu-caption">                                                               
                                <h2 class="menu-title"> <span class="light-font"> Fresh </span>  <strong>Tea</strong> </h2>
                                <ul class="sub-list">
                                    <li> <a href="#">Cabbage</a> </li>
                                    <li> <a href="#">Garlic </a> </li>
                                    <li> <a href="#">Onion </a> </li>
                                    <li> <a href="#">Plume</a> </li>
                                    <li> <a href="#">Carrot</a> </li>
                                    <li> <a href="#">Papper</a> </li>
                                    <li> <a href="#">Mushrome</a> </li>
                                    <li> <a href="#">Apple</a> </li>
                                    <li> <a href="#">Kiwi</a> </li>
                                </ul>
                                <h2 class="title"> <a href="#" class="clr-txt"> All Freash Tea </a> </h2>
                            </div>
                            <div class="menu-img">
                                <img alt="" src="{{ asset("img/extra/menu-6.png") }}" />
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="responsive-toggle fa fa-bars"> </div>
        </div>

    </div>  
</header>