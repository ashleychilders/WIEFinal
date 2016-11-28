<?php

/* Template Name: Services Page */

get_header(); ?>

  <div class="container">
    <div class="row">
  <!-- BEGIN PAGE PHP -->
      <div class="tweleve columns">
        <h1>Our Services</h1>
        <p>At Slick's we offer a variety of services to cater to all of your
          automotive needs. Our main areas include: Auto Body Repair, Refinishing,
          and Mechanical Repair. Find more details about these services below.</p>
      </div>
    </div>
      <div class="row">
        <div class="four columns">
          <?php dynamic_sidebar('services-one'); ?>
        <h2>Auto Body Repair</h2>
        <p>Slick's is a full service auto body repair shop that has the skill,
          experience, and knowledge to repair both the inside and outside of your vehicle.
          We offer a written lifetime warranty on our services and will provide you with complete
          satisfaction. Whether you need work on the latest foreign and domestic models, full size
          truck or SUV, we do your repairs right the first time. For over 55 years, Peters Body Shop
          has been serving the Central Minnesota community and is a  preferred vendor for multiple local
          auto dealerships.</p>
        </div>
        <div class ="four columns">
          <?php dynamic_sidebar('services-two'); ?>
        <h2>Auto Body Refinishing</h2>
        <p>When it comes to paint, the smallest details can make a massive difference. Even the slightest
          cutting of a corner or the minutest imperfection can ruin the paint finish. Slick's
          requires the right tools, the right products, and the right professional. Whether refinishing is
          needed because of a collision or you are just looking to spruce up your ride, you can be sure that
          refinishing services through Slick's will be extraordinary.</p>
      </div>
      <div class="four columns">
          <?php dynamic_sidebar('services-three'); ?>
        <h2>Mechanical Repair</h2>
        <p>Repairing modern vehicles requires much more extensive knowledge than in the past because of computerized
          mechanical components and technological advances. New automobile features require specialized tools,
          and more importantly specialized training and knowledge to repair correctly. In an accident and normal wear and
          tear, it is important that your entire car is running smoothly. That is why Slick's has the ability to
          repair your vehicle’s mechanical system as well as its body and structure.</p>
        </div>
      </div>
      </div>

    <!-- End Section Container -->

    <!-- Begin Fooder -->
        <?php get_footer(); ?>
    <!-- End Footer -->
