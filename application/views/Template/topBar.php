<div class="container">
    <div class="row">
        <a class="logo" href="<?php echo base_url('Home') ?>"><img src="<?php echo base_url('assets') ?>/img/logo.png" alt></a>
        <div class="mobileWrapper">
<!--            <div class="headerLikeWrapper">-->
<!--                <div class="headerLike">-->
<!--                    <i class="fa fa-heart-o likeHear"></i>-->
                    <!-- HeaderSocial -->
<!--                    <div class="headerSocialWrapper">-->
<!--                        <a class="headerSocial  spin spin2" href="https://www.facebook.com" target="_blank"> <i class="fa fa-facebook headerSocialIcon headerF"></i></a>-->
<!--                        <div class="emptySpace5"></div>-->
<!--                        <a class="headerSocial spin spin2" href="https://twitter.com" target="_blank"><i class="fa fa-twitter headerSocialIcon headerTw"></i></a>-->
<!--                        <div class="emptySpace5"></div>-->
<!--                        <a class="headerSocial spin spin2" href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus headerSocialIcon headerGl"></i></a>-->
<!--                        <div class="emptySpace5"></div>-->
<!--                        <a class="headerSocial spin spin2" href="https://pinterest.com" target="_blank"> <i class="fa fa-pinterest-p headerSocialIcon headerPi"></i></a>-->
<!--                        <div class="emptySpace5"></div>-->
<!--                        <a class="headerSocial spin spin2" href="https://www.linkedin.com/" target="_blank"> <i class="fa fa-linkedin headerSocialIcon headerIn"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="headerScearch open-popup" data-rel="2">-->
<!--                <i class="fa fa-search headerSearchIcon"></i>-->
<!--            </div>-->
            <nav>
                <ul class="leftMenu">
                    <?php if($content == 'home'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Home') ?>">Home</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Home') ?>">Home</a></li>
                    <?php } ?>

                    <?php if($content == 'about'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('About') ?>">About</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('About') ?>">About</a></li>
                    <?php } ?>

                    <?php if($content == 'products'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Products') ?>">Products</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Products') ?>">About</a></li>
                    <?php } ?>
<!--                    <li>-->
<!--                        <a href="products.html">Products</a>-->
<!--                        <span class="drowDownIcon"></span>-->
<!--                        <ul class="dropDownMenu">-->
<!--                            <li><a href="products-detail.html">Product Detail</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                </ul>
                <ul class="RightMenu">
                    <?php if($content == 'services'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Services') ?>">Services</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Services') ?>">Services</a></li>
                    <?php } ?>

                    <?php if($content == 'blog'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Blog') ?>">Blog</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Blog') ?>">Blog</a></li>
                    <?php } ?>


                    <?php if($content == 'contact'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Contact') ?>">Contact</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Contact') ?>">Contact</a></li>
                    <?php } ?>

<!--                    <li>-->
<!--                        <a href="blog.html">Blog</a>-->
<!--                        <span class="drowDownIcon"></span>-->
<!--                        <ul class="dropDownMenu">-->
<!--                            <li><a href="blog2.html">Blog 2</a></li>-->
<!--                            <li><a href="blog3.html">Blog 3</a></li>-->
<!--                            <li><a href="blog-detail.html">Blog Detail</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="contacts.html">Contacts</a></li>-->
                </ul>
            </nav>
        </div>
        <div class="menuIcon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>