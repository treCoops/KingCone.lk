<?php

    $User_Session = $this->session->userdata('User_Session');
    if ($User_Session == null) {
        redirect(base_url('BLogin/notLoggedIn'));
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('Backend/Template/header'); ?>
</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php $this->load->view('Backend/Template/topbar'); ?>
    <!--  END NAVBAR  -->


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <?php $this->load->view('Backend/Template/sidebar'); ?>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <?php $this->load->view($content) ?>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <script>
                        let dt = new Date();
                        document.write(dt.getFullYear());
                    </script> <a target="_blank" href="#">KingKone.lk</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <?php $this->load->view('Backend/Template/footer'); ?>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>


