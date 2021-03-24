<!-- Our-Product-Page -->
<div class="bgImages opacityLayer" style="background-image: url(assets/img/Kong/KONG1.jpg); background-position: 50% 50%; background-size: cover">
    <div class="container">
        <div class="cell-view tableCellVH2">
            <div class="emptySpace100 emptySpace-md50"></div>
            <div class="emptySpace115 emptySpace-md50"></div>
            <div class="row">
                <!-- Our-Prodicts-Title -->
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="big titleShortcode">
<!--                        <h3 class="h3">Sweet And Delicious</h3>-->
                        <h2 class="h1">Flavours</h2>
<!--                        <div class="emptySpace5"></div>-->
<!--                        <p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem </p>-->
                    </div>
                </div>
            </div>
            <div class="emptySpace50"></div>
        </div>
    </div>
</div>
<div class="bgBlack">
    <div class="container">
        <div class="emptySpace50"></div>
        <div class="grid">
            <?php foreach ($Flavors as $row) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3 element-item Muffins">
                <div class="normall contentShortcode">
                    <a href="#"><h4 class="h4"><?php echo $row->flavour_name ?></h4></a>
                    <div class="emptySpace-xs15 emptySpace25"></div>
                    <a class="imgLayer" href="#"><img class="imgShortcode" src="<?php echo base_url() ?>/assets/img/Flavour/<?php echo $row->flavour_img ?>" alt></a>
                    <div class="emptySpace5"></div>
                    <p><?php echo $row->flavour_description ?></p>
                    <div class="emptySpace-xs15 emptySpace20"></div>
                    <div class="sweetPrice" style="font-size: 20px !important;"><?php echo $row->flavour_price ?></div>
                    <div class="emptySpace-xs30 emptySpace45"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="emptySpace130 emptySpace-xs40 backgroundBlack"></div>
<div class="footerSeparator"></div>
<div class="emptySpace50 emptySpace-xs30 backgroundBlack"></div>