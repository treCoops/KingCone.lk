<!-- Our-blog-Page -->
<div class="bgImages opacityLayer" style="background-image: url(assets/img/Kong/KONG2.jpg); background-position: 50% 50%; background-size: cover;">
    <div class="container">
        <div class="cell-view tableCellVH2">
            <div class="emptySpace100 emptySpace-md50"></div>
            <div class="emptySpace115 emptySpace-md50"></div>
            <div class="row">
                <!-- Our-Blog-Title -->
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="big titleShortcode">
                        <h3 class="h3">Read And Join</h3>
                        <h2 class="h1">Our Blog</h2>
                        <div class="emptySpace5"></div>
                        <p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem </p>
                    </div>
                </div>
            </div>
            <div class="emptySpace50"></div>
        </div>
    </div>
</div>


<div class="bgImages opacityLayer" style="background-image: url(assets/img/Kong/KONG2.jpg); background-position: 50% 50%; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="emptySpace-xs60 emptySpace120"></div>
            <!-- Sweet-History-Title -->
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="big titleShortcode">
                    <h5 class="h5">Moments Of</h5>
                    <div class="emptySpace15"></div>
                    <h2 class="h2 bottomLine">Our Sweet History</h2>
                    <div class="emptySpace35"></div>
                    <p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam.</p>
                </div>
                <div class="emptySpace55 emptySpace-xs30"></div>
            </div>
        </div>

        <div class="row">
            <?php $a=1; foreach ($Milestones as $row) { ?>
            <?php if($a % 2 == 0){ ?>
            <div class="timeLineShortcode2">
                <div class="flexWrapper2">
                    <div class="imgTimeLineWrapper">
                        <a class="imgLayer" href="#"><img class="imgShortcode2" src="<?php echo base_url()?>/assets/img/Milestone/<?php echo $row->milestone_image; ?>" alt></a>
                    </div>
                    <div class="emptySpace-xs20"></div>
                    <div class="normall contentTimeLineWrapper">
                        <a href="#"><h4 class="h4"><?php echo $row->milestone_title; ?></h4></a>
                        <div class="emptySpace15"></div>
                        <p><?php echo $row->milestone_description; ?></p>
                    </div>
                </div>
                <div class="monthWrapper">
                    <h4 class="h4 historyMonth"><?php echo $row->milestone_date; ?></h4>
                </div>
            </div>
            <?php } else { ?>
            <div class="timeLineShortcode2">
                <div class="flexWrapper2">
                    <div class="imgTimeLineWrapper rotateRight">
                        <a class="imgLayer" href="#"><img class="imgShortcode2" src="<?php echo base_url()?>/assets/img/Milestone/<?php echo $row->milestone_image; ?>" alt></a>
                    </div>
                    <div class="emptySpace-xs20"></div>
                    <div class="normall contentTimeLineWrapper rotateLeft">
                        <a href="#"><h4 class="h4"><?php echo $row->milestone_title; ?></h4></a>
                        <div class="emptySpace15"></div>
                        <p><?php echo $row->milestone_description; ?></p>
                    </div>
                </div>
                <div class="monthWrapper">
                    <h4 class="h4 historyMonth"><?php echo $row->milestone_date; ?></h4>
                </div>
            </div>
            <?php } $a++; } ?>

            <div class="emptySpace95 emptySpace-xs60"></div>
        </div>
    </div>
</div>

<div class="emptySpace-xs60 emptySpace95 backgroundBlack"></div>