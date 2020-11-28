<?php /* Template Name: About */  ?>

<?php get_header(); ?>

<div class="about-parralax-wrapper vh-100">
<?php get_template_part('template-parts/component', 'banner'); ?>


<section id="meet" class="fl w-100 pt5 pb6 bg-custom-green">
      <div class= "meet-container flex flex-wrap flex-nowrap-l justify-center">
        <div id="about-portrait-wrapper" class="portrait-wrapper mr4-l hidden">
          <img src="<?php echo get_bloginfo('template_directory') ?>/images/molly_portrait.jpg" id="bio-portrait" />
        </div>
        <div class="bio mid-gray w-90 w-30-l hidden pv5 ph3">
          <h4 class="f3 droid lh-solid fw6">Why Isn't This Working</h4>
          <hr class="mw4 ba bw1 b--compliment_bright">
          <div class="bio-body-wrapper mt4" >
            <p class="f4 edmondsans mb3 lh-copy">Lorem sipsum dolor sit amet consectetur adipisicing elit. Voluptatem tempora maiores necessitatibus quas dolor harum? Tempore, repellendus iusto. Officia inventore, quisquam qui adipisci commodi aperiam aliquam quod laudantium. Nulla, nam.</p>
            <p class="f4 edmondsans mb3 lh-copy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae ratione tempore accusamus vel. Ab mollitia incidunt eligendi quo provident, neque molestias maiores iste ratione atque eius odit, reiciendis deleniti?
            </p>
            <p class="f4 edmondsans lh-copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, porro ratione consequuntur inventore ipsum similique nam fugiat saepe delectus at ducimus aut provident quo, voluptatibus culpa minima molestias earum pariatur.</p>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>
</div>