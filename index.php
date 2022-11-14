<?php 
    require('top.php');
    
?>

<style>
    .slider__fixed--height{
        background-color: aqua;
    }
    .cr__btn a{
        background: none;
    }
    .slider__activation__wrap .owl-nav div
    {
        background-color: blueviolet;
    }
</style>
<div class="body__overlay"></div>
        
<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">

        <!-- Start Single Slide -->
        <div class="single__slide slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">

                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>new collection 2022</h2>
                                <h1>Mac Book Pro 15</h1>
                                <div class="cr__btn">
                                    <a href="cart.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/macbook_pro 15.jpg" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->

        <!-- Start Single Slide -->
        <div class="single__slide slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>new collection 2022</h2>
                                <h1>Asus</h1>
                                <div class="cr__btn">
                                    <a href="cart.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/asus.jpg" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->

         <!-- Start Single Slide -->
         <div class="single__slide slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>new collection 2022</h2>
                                <h1>Dell Chromebook</h1>
                                <div class="cr__btn">
                                    <a href="cart.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/dell chromebook.jpg" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->


          <!-- Start Single Slide -->
          <div class="single__slide slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>new collection 2021</h2>
                                <h1>Hp Pavillion</h1>
                                <div class="cr__btn">
                                    <a href="cart.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/Hp.jpg" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        

    </div>
</div>
<!-- Start Slider Area -->


<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Popular now</h2>
                    <p>Recently added new generation laptops are right here.</p>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
					<?php
						$get_product= get_product($con,4);
						foreach($get_product as $list){
					?>
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product.php?id=<?php echo $list['id']?>">
                                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="product images">
                                </a>
                            </div>

                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')">
                                    <i class="icon-heart icons"></i></a></li>


                                </ul>
                            </div>
                                    
                            <div class="fr__product__inner">
                                <h4><a href="product.php"><?php echo $list['name']?></a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">Rs.<?php echo $list['mrp']?></li>
                                    <li><?php echo $list['price']?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->


<!-- Start Product Area -->
<section class="ftr__product__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Recommended</h2>
                    <p>Maximum customer choosed these product as the best product.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product__wrap clearfix">


                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product.php">
                                <img src="images/product/Iphone/apple.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.php"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="./product.php">Mac Book 7</a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">Rs.155000</li>
                                <li>Rs.145000</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->


                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product.php">
                                <img src="images/product/asus/asus.jpg" style="height: 170px;" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.php"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.php"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="./product.php">Asus</a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">Rs.120000</li>
                                <li>Rs.110000</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->


                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product.php">
                                <img src="images/product/dell/dell.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.php"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="product.php">Dell</a></h4>
                                <ul class="fr__pro__prize">
                                <li class="old__prize">Rs.200000</li>
                                <li>Rs.190000</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Category -->


                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product.php">
                                <img src="images/product/acer/acer.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.php"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="product.php">Acer</a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">Rs.105000</li>
                                <li>Rs.95000</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- End Single Category -->
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product.php">
                                <img src="images/product/hp/hp.jpeg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.php"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="product.php">Hp</a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">Rs.125000</li>
                                <li>Rs.105000</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- End Single Category -->
                <!-- Start Single Category -->
                <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                    <div class="category">
                        <div class="ht__cat__thumb">
                            <a href="product.php">
                                <img src="images/product/Msi/msi.jpg" alt="product images">
                            </a>
                        </div>
                        <div class="fr__hover__info">
                            <ul class="product__action">
                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                <li><a href="cart.php"><i class="icon-handbag icons"></i></a></li>

                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="fr__product__inner">
                            <h4><a href="product.php">Msi</a></h4>
                            <ul class="fr__pro__prize">
                                <li class="old__prize">Rs.195000</li>
                                <li>Rs.185000</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- End Single Category -->
                
            </div>
        </div>
    </div>
</section>
<!-- End Product Area -->



<?php require('footer.php')?>        