<!-- Our-Contacts-Page -->
<div class="bgImages opacityLayer" style="background-image: url(assets/img/Kong/KONG1.jpg); background-position: 50% 50%; background-size: cover">
    <div class="container">
        <div class="cell-view tableCellVH2">
            <div class="emptySpace100 emptySpace-md50"></div>
            <div class="emptySpace115 emptySpace-md50"></div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- Our-Contacts-Title -->
                    <div class="big titleShortcode">
                        <h3 class="h3">Get In Touch</h3>
                        <h2 class="h1">Our Contacts</h2>
                        <div class="emptySpace5"></div>
                        <p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem </p>
                    </div>
                </div>
            </div>
            <div class="emptySpace50"></div>
        </div>
    </div>
</div>
<div class="bgWhite">
    <div class="container">
        <div class="emptySpace-xs60 emptySpace130"></div>
        <div class="row">
            <!--  Contacts-1 -->
            <div class="col-sm-4">
                <div class="big contactShortcode">
                    <a class="contacts spin spin2"> <img src="<?php echo base_url() ?>/assets/img/contacts-icon.png" alt></a>
                    <div class="emptySpace15"></div>
                    <p>244 5th Avenue. Suite 1735i</p>
                    <p>New York, N.Y.</p>
                    <p>USA, 10001</p>
                </div>
            </div>
            <!--  Contacts-2 -->
            <div class="col-sm-4">
                <div class="emptySpace-xs30"></div>
                <div class="big contactShortcode">
                    <a class="contacts spin spin2"><img src="<?php echo base_url() ?>/assets/img/contacts-icon2.png" alt> </a>
                    <div class="emptySpace20"></div>
                    <a class="contactPhone" href="tel:5557858965">555. 785.8965</a>
                    <a class="contactPhone" href="tel:5558974321">555. 897.4321</a>
                </div>
            </div>
            <!--  Contacts-3 -->
            <div class="col-sm-4">
                <div class="emptySpace-xs30"></div>
                <div class="big contactShortcode">
                    <a class="contacts spin spin2"> <img src="<?php echo base_url() ?>/assets/img/contacts-icon3.png" alt></a>
                    <div class="emptySpace15"></div>
                    <a class="contactPhone" href="mailto:office@invisio.com">office@invisio.com</a>
                    <a class="contactPhone" href="mailto:cakes@invisio.com">cakes@invisio.com</a>
                </div>
            </div>
        </div>
        <div class="emptySpace-xs50 emptySpace105"></div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <!-- Contacts-Title -->
                <div class="big titleShortcode3">
                    <h2 class="h2">Got Some Questions?</h2>
                    <div class="emptySpace20"></div>
                    <p>Please, feel yourself comfortable to fill in our contact form</p>
                </div>
            </div>
        </div>
        <div class="emptySpace-xs40 emptySpace85"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form onsubmit="return submitForm();" action="./" method="post" name="contactform" id="contact-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="contactsInput" type="text" required name="name" placeholder="Full Name*">
                        </div>
                        <div class="col-sm-6">
                            <div class="emptySpace-xs20"></div>
                            <input class="contactsInput" type="email" required name="email" placeholder="Email*">
                        </div>
                    </div>
                    <div class="emptySpace20"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="contactsInput" type="text" required name="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="emptySpace20"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea class="contactsInput textArea" required name="message" cols="30" rows="5" placeholder="Message..."></textarea>
                        </div>
                    </div>
                    <div class="emptySpace30"></div>
                    <div class="btnAlign">
                        <button class="button style-2 size-2" type="submit">Submit Message</button>
                    </div>
                    <p class="requestSuccess normall"></p>
                </form>
            </div>
        </div>

    </div>
</div>
<div class="emptySpace-xs60 emptySpace130"></div>

<!-- Map -->
<div id="map-canvas" data-lat="34.0151244" data-lng="-118.4729871" data-zoom="15"></div>
<div class="addresses-block">
    <a class="marker" data-lat="34.0151244" data-lng="-118.4729871" data-string="1. Here is some address or email or phone or something else..."></a>
</div>
<div class="emptySpace-xs30 emptySpace50"></div>