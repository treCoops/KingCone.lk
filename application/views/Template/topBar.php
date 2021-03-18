<div class="container">
    <div class="row">
        <a class="logo" href="<?php echo base_url('Home') ?>"><img src="<?php echo base_url('assets') ?>/img/Kong/logo.png" alt></a>
        <div class="mobileWrapper">
            <nav>
                <ul class="leftMenu">
                    <?php if($content == 'home'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Home') ?>">Home</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Home') ?>">Home</a></li>
                    <?php } ?>

                    <?php if($content == 'products'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Products') ?>">Products</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Products') ?>">Products</a></li>
                    <?php } ?>

                    <?php if($content == 'milestones'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Milestones') ?>">Milestones</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Milestones') ?>">Milestones</a></li>
                    <?php } ?>

                </ul>
                <ul class="RightMenu">
                    <?php if($content == 'partners'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Partners') ?>">Partners</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Partners') ?>">Partners</a></li>
                    <?php } ?>

                    <?php if($content == 'about'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('About') ?>">About</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('About') ?>">About</a></li>
                    <?php } ?>

                    <?php if($content == 'contact'){ ?>
                        <li><a class="headerActive" href="<?php echo base_url('Contact') ?>">Contact</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('Contact') ?>">Contact</a></li>
                    <?php } ?>
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