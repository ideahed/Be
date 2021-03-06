<? get_header(); ?>
<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <? echo '<pre>'.print_r($post, true).'</pre>'; ?>
<div id="container">
  <div id="parallax_project_header">
    <nav>
      <ul id="project_nav"> - <!-- Get Custom Post Type: Project -->
        <li>Be</li>
        <li><a href="#">the brief</a></li>  <!-- Dynamic Menu - use Post_type: Process Point in Pods -->
        <li><a href="#">the challenge</a></li> <!-- Dynamic Menu - use Post_type: Process Point in Pods  -->
        <li><a href="#">the solution</a></li> <!-- Dynamic Menu - use Post_type: Process Point in Pods  -->
        <li><a href="#">the results</a></li> <!-- Dynamic Menu - use Post_type: Process Point in Pods  -->
      </ul>
      <div id="project_creator">
        <div id="follow_creator"></div>
        <div id="share_creator"></div>
      </div> <!-- dynamic - based on post author -->
    </div> <!-- project-header -->

























      <div id="project_content"><!-- get_posts: process
        <div id="project_title"><? ?></div> <!-- Dynamic - use "The Title WP Function" -->
        <h2 id="project_title"><?the_title();?></h2>
        <h3 id="project_type"><? $post->project_type ?>
          <div id="project_category"></div> <!-- dynamic - not sure what this should be -->
          <div id="metric_bar"> <!-- consider using sprite for icons -->
            <div>Views</div> <!-- dynamic - view count -->
            <div>Appreciatons</div> <!-- dynamic - likes count -->
            <div>Comments</div> <!-- dynamic - comment count -->
            <div>Shares</div> <!-- dynamic - share count -->
          </div> <!-- metric bar -->
          <div id="project_slideshow">
            <nav id="slideshow_nav"></nav>
          </div> <!-- dynamic - based on post featured image -->
          <div id="process_point_title"></div>  <!-- based on Single_Post_title -->
          <p></p> <!-- dynamic - based on the_content -->
          <div id= "project_materials">Materials / Tools
            <a href="#">Extruded Acrylic"</a>
            <a href="#">Plaster"</a>
            <a href="#">"High Density Foam"</a>
            <a href="#">CNC Mill"</a>
            <a href="#">Vacuum Form"</a>
            <a href="#">ZCORP 3D PRINTER"</a>
          </div> <!-- dynamic - based on post tags-->
          <nav id="project_share_nav">
            <ul>
              <li>Share</li>
              <li>Comment</li>
              <li>Appreciate</li>
            </ul> 
          </nav>

        </div> <!-- project-content -->
      </div>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
  <? get_footer(); ?>
