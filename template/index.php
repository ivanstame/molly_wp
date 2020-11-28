<?php get_header(); ?>

  <section id="hero" class="fl w-100 h-75-l h-40 relative">
      <div class="side-advertisement bg-logo-color ">
        <h1 class="white f0 edmondsans">Heading For Sales Pitch</h1>
        <h2 class="near-white f3">contact now for a consultation and start feeling your best today</h2>
      </div>
      <video playsinline autoplay muted loop poster="" id="bgvid" class="">
        <source src="<?php echo get_bloginfo('template_directory') ?>/images/video/athletic_woman_stretch.mp4" type="video/mp4">
      </video>
    </section>

    <section id="meet" class="fl w-100 bg-light-washed-green pt5 pb6">
      <div class="meet-container flex flex-wrap flex-nowrap-l justify-center pt5">
        <div class="bio mr3 mid-gray w-90 w-40-l hidden pv5 ph3">
          <h4 class="f3 droid lh-solid fw6">Optimizing Your Performance Through Chiropractic Excellence</h4>
          <hr class="mw4 ba bw1 b--compliment_bright">
          <div class="bio-body-wrapper mt4" >
            <p class="f4 edmondsans mb3 lh-copy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem tempora maiores necessitatibus quas dolor harum? Tempore, repellendus iusto. Officia inventore, quisquam qui adipisci commodi aperiam aliquam quod laudantium. Nulla, nam.</p>
            <p class="f4 edmondsans mb3 lh-copy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae ratione tempore accusamus vel. Ab mollitia incidunt eligendi quo provident, neque molestias maiores iste ratione atque eius odit, reiciendis deleniti?
            </p>
            <p class="f4 edmondsans lh-copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, porro ratione consequuntur inventore ipsum similique nam fugiat saepe delectus at ducimus aut provident quo, voluptatibus culpa minima molestias earum pariatur.</p>
          </div>
        </div>
        <div id="portrait-wrapper" class="portrait-wrapper mr4-l hidden">
          <img src="<?php echo get_bloginfo('template_directory') ?>/images/molly_portrait.jpg" id="bio-portrait" />
        </div>
      </div>
    </section>

    <section id="services" class="fl w-100 pt6 pb6 bg-muted-logo-color">
    <h2 class="tc mb5 mb6-l f2 droid dark-gray ttu ">Services and Treatments</h2>
      <div class="services-container w-70 flex flex-wrap justify-center center">

          <?php 
            $mypod = pods('service');
            $mypod->find('name ASC');
          ?>
          <?php while ( $mypod->fetch() ) : ?>
            <?php
              // set variables
              $name = $mypod->field('name');
              $content = $mypod->field('content'); 
              $icon = $mypod->field('service_icon');
            ?>
        <article class="mw6 center bg-white br0 pa3 pa4-ns mv3 ba b--black-10 hidden">
          <div class="tc mb4">
            <img src="<?php echo $icon ?>" class="br-100 h3 w3 dib mb3">
            <h1 class="f3 droid mid-gray b"><?php echo $name ?></h1>
            <hr class="mw4 ba bw1 b--compliment_bright">
          </div>
          <p class="lh-copy measure center f4 edmondsans black-70">
            <?php echo $content ?>
          </p>
        </article>
          <?php endwhile; ?>
      </div>
    </section>

    <section id="payment" class="fl w-100 pt6 pb6 bg-light-washed-green">
      <h2 class="tc droid f2 mb5 mb6-l ttu dark-gray">Payment</h2>
      <div class="payment-container flex justify-center w-100">
        <div class="payment-inf-card-wrapper w-60-l w-60-m w-90 tc hidden">
          <div class="color-box ph4 bg-btn-color mw5-l pv4 v-mid dib mb4 mb6-l mr4-l">
            <p class="v-mid tc droid b ttu white f3 lh-copy">Here's some text about payment</p>
          </div>
          <div class="payment-details bg-white mw6 pa4 dib hidden tl">
            <h4 class="droid f3 dark-gray mb4">Insurance Info</h4>
            <p class="edmondsans f4 dark-gray lh-copy mb2">Payment will be due at time of service by any major credit or debit card, including American Express, or your FSA or HSA cards as Chiropractic care is a qualified expense.
            </p>
            <p class="edmondsans f4 dark-gray lh-copy">
              The office does not bill insurance directly, however you may request an itemized receipt to send into your insurance company for reimbursement, which will also help you hit your deductible each year. 
            </p>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?> 
