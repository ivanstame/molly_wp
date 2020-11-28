<?php /* Template Name: FAQ */  ?>

<?php get_header(); ?>

<div class="about-parralax-wrapper vh-100">
<?php get_template_part('template-parts/component-banner', 'faq'); ?>
<section id="faq-section" class="fl pv6 ph5 ph7-l w-100-l bg-near-white">
    <dl class="mid-gray">
        <?php 
            $mypod = pods('FAQ');
            $mypod->find('name ASC');
        ?>
        <?php while ( $mypod->fetch() ) : ?>
            <?php
                // set variables
                $question = $mypod->field('name');
                $answer = $mypod->field('content'); 
            ?>
                <dt class="question f3 edmondsans b mb4 "><?php echo $question ?></dt>
                <dd class="f4 edmondsans mb5 lh-copy"><?php echo $answer ?></dd>
        <?php endwhile ?>
    </dl>
</section>

<?php get_footer(); ?>
</div>