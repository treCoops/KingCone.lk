<!-- Services-Page -->
<div class="bgImages opacityLayer" style="background-image: url(assets/img/Kong/KONG1.jpg); background-position: 50% 50%; background-size: cover">
    <div class="container">
        <div class="cell-view tableCellVH2">
            <div class="emptySpace100 emptySpace-md50"></div>
            <div class="emptySpace115 emptySpace-md50"></div>
            <div class="row">
                <!-- Our-Services-Title -->
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="big titleShortcode">
                        <h2 class="h1">Our Partners</h2>
                        <div class="emptySpace5"></div>
                        <p>The best partnerships are not dependent on a mere common goal but on a shared path of equality, desire and passion.</p>
                        <p style="color: goldenrod">Where we go one, we go all!</p>
                    </div>
                </div>
            </div>
            <div class="emptySpace50"></div>
        </div>
    </div>
</div>
<div class="footerSeparator"></div>
<div class="bgBlack">
    <div class="container">
        <div class="emptySpace70 emptySpace-xs30 backgroundBlack"></div>
        <div class="grid">
            <?php foreach ($Partners as $row) { ?>
                <div class="col-sm-6 col-md-4 col-lg-3 element-item Muffins">
                    <div class="normall contentShortcode">
                        <a href="#"><h4 class="h4"><?php echo $row->partner_name ?></h4></a>
                        <div class="emptySpace-xs15 emptySpace25"></div>
                        <a class="imgLayer" href="#"><img class="imgShortcode" src="<?php echo base_url() ?>/assets/img/Partner/<?php echo $row->partner_image ?>" alt></a>
                        <div class="emptySpace5"></div>
                        <p><?php echo $row->partner_description ?></p>
                        <div class="emptySpace-xs15 emptySpace20"></div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="emptySpace-xs60 emptySpace120"></div>
    </div>
</div>

<div class="footerSeparator"></div>
<div class="emptySpace50 emptySpace-xs30 backgroundBlack"></div>
