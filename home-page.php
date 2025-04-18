<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   
<section class ="container-fluid aboutbg text-center">
        <div class = "container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>


            <div class ="blocker"></div>
        </div> <!-- container -->
    
    <section class ="container-fluid articlesbg">
        <div class ="container">
            <h3 class="text-center">LATEST ARTICLES</h3>
            <div class ="row">

            <div class ="col-md-4">
            <img class="img-fluid" src ="http://170.187.231.66/~mesh2/wp-content/themes/starter_for_josh_site/images/port1.jpg" alt="woman">
            <h4 class = "article-title">A PORTRAIT</h4>
            <p class ="date">Friday,November 10. 2030</p>
            <p class="aticle-body">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.</p>
            <a class = "readmore" href="">CONTINUE READING</a>
            </div><!-- column1 -->

            <div class ="col-md-4">
              <img class="img-fluid" src ="http://170.187.231.66/~mesh2/wp-content/themes/starter_for_josh_site/images/port2.jpg" alt="woman">
              <h4 class = "article-title">A PORTRAIT</h4>
              <p class ="date">Friday,November 10. 2030</p>
              <p class="aticle-body">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.</p>
              <a class = "readmore" href="">CONTINUE READING</a>
              </div><!-- column2 -->

              <div class ="col-md-4">
                <img class="img-fluid" src ="http://170.187.231.66/~mesh2/wp-content/themes/starter_for_josh_site/images/port3.jpg" alt="woman">
                <h4 class = "article-title">A PORTRAIT</h4>
                <p class ="date">Friday,November 10. 2030</p>
                <p class="aticle-body">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.</p>
                <a class = "readmore" href="">CONTINUE READING</a>
                </div><!-- column4 -->

            </div><!-- row -->

        </div><!-- container -->

    </section>

    <?php get_footer();?>   