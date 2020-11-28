<?php /* Template Name: Location */  ?>

<?php get_header(); ?>

<div class="about-parralax-wrapper vh-100">
<?php get_template_part('template-parts/component-banner', 'location'); ?>


<section id="location-section" class="fl w-100 pt5 pb6 bg-custom-green ph5 ph7-l pv6">

    <div id="map-wrapper">
        <div id="map"></div>
    </div>
    <div id="location-info-wrapper">
        <div id="address-wrapper" class="info-item mb4">
            <h2 class="droid mid-gray ttu b f3 mb3">Address</h2>
            <p class="f4 lh-copy mid-gray edmondsans">
                <span class="b">Massage Heights</span> <br>
                5555 Some Street Lane<br>
                Newport Beach, CA 92678
                
            </p>
        </div>
        <div id="hours-wrapper" class="info-item mb4">
            <h2 class="droid mid-gray ttu b f3 mb3">Hours</h2>
            <ul class="f4 lh-copy mid-gray edmondsans">
                <li>Saturday: 10am - 6pm</li>
                <li>Sunday: 10am - 2pm</li>
            </ul>
        </div>
        <div id="pricing-wrapper" class="info-item mb4">
            <h2 class="droid mid-gray ttu b f3 mb3">Pricing</h2>
            <ul class="f4 lh-copy mid-gray edmondsans">
                <li>Adjustments: $40</li>
                <li>Consultation: $30</li>
            </ul>
        </div>
        <div id="booking-wrapper">
            <iframe frameborder='0' height='28' scrolling='no' src="https://mollyclairedc.janeapp.com/embed/book_online" width='177'></iframe>
        </div>
    </div>

</section>


<?php get_footer(); ?>
<script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDllCStFUUnmHNpeKDEP0j_cLEF4o1Ztro&callback=initMap">
</script>
</div>