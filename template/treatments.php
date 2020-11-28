<?php /* Template Name: Treatments */  ?>

<?php get_header(); ?>

<div class="about-parralax-wrapper vh-100">
<?php get_template_part('template-parts/component-banner', 'treatments'); ?>
<section id="service-page-info" class="fl pv6 ph5 ph7-l w-100-l bg-near-white">
    <div class="service-info-container flex flex-wrap w-100-l">
   	 <ul class="w-100-l">
          <?php 
            $mypod = pods('treatment');
            $mypod->find('name ASC');
          ?>
          <?php while ( $mypod->fetch() ) : ?>
            <?php
              // set variables
              $name = $mypod->field('name');
              $content = $mypod->field('content'); 
              $picture = $mypod->field('treatment_pic');
            ?>
  		<li class="row mb6">
    			<div class="image">
            <?php 
                 echo pods_image($mypod->field('treatment_pic')['ID'], $size = 'medium');
           ?>
   			 </div>
   			 <div class="text lh-copy edmondsans f4">
				  <h3 class="b mb3 f3 dark-gray"><?php echo $name ?></h3>
    				  <p>
					<?php echo $content ?>
				  </p>
    			</div> 
 		 </li>
          <?php endwhile; ?>
	</ul>
    </div>
</section>

<?php get_footer(); ?>
</div>