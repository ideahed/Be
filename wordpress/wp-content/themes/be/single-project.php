<? get_header(); ?>
<? if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$project_type = pods_field('project', false, 'project_type');
 // echo '<pre>'.print_r($process, true).'</pre>'; ?>
 <div id="container">
  <div id="project_header">
    <nav>
      <ul id="project_nav"> <!-- Get Custom Post Type: Project -->
        <li>Be</li>
        <li><a href="#">the brief</a></li>  <!-- Dynamic Menu - use Post_type: Process Point in Pods -->
        <li><a href="#">the challenge</a></li> <!-- Dynamic Menu - use Post_type: Process Point in Pods  -->
        <li><a href="#">the solution</a></li> <!-- Dynamic Menu - use Post_type: Process Point in Pods  -->
        <li><a href="#">the results</a></li> <!-- Dynamic Menu - use Post_type: Process Point in Pods  -->
      </ul>
      <div id="project_creator"><? the_author(); ?>
        <div id="follow_creator"></div>
        <div id="share_creator"></div>
      </div> <!-- dynamic - based on post author -->
    </div> <!-- project-header -->
    <div id="project_content"> 
      <div id="project_title"><? ?></div> <!-- Dynamic - use "The Title WP Function" -->
      <h1 id='project_title'> <? echo the_title(); ?></h1>
      <div id="project_type"><? echo $project_type[0]; ?> </div> <!-- Project Pod Custom Field Project_Type -->
      <div id="metric_bar"> <!-- consider using sprite for icons -->
        <div>Views</div> <!-- dynamic - view count -->
        <div>Appreciatons</div> <!-- dynamic - likes count -->
        <div>Comments</div> <!-- dynamic - comment count -->
        <div>Shares</div> <!-- dynamic - share count -->
      </div> <!-- metric bar -->
      <div id='project_detail'>
        <? $args = array('post_type'=>'process','posts_per_page'=>-1);
        $processes = get_posts($args);
        foreach($processes as $process): ?>
      <!-- <? /*echo '<pre>'.print_r($process,true).'</pre>'; */ ?> -->
        <div id="project_slideshow"> <!-- use guid for src in img tag use post_excerpt for caption -->
          <? $args = array('post_type'=>'attachment', 'post_parent'=> $process->ID, 'posts_per_page'=>-1);
          $attachments = get_posts($args);
          foreach($attachments as $attachment): ?>
            <? // echo '<pre>'.print_r($attachments,true).'</pre>'; ?>
          <nav id="slideshow_nav"></nav>
        <? endforeach; ?>
      </div> <!-- project slideshow -->
      <div id="caption"></div>
      <div><p><? the_content();?> </p></div>
    </div>  <!-- Process Pod Content  -->
    <div id= "project_materials">Materials / Tools
      <a href="#"><? the_terms( $process->ID, 'materials'); ?></a>
      <a href="#">Plaster"</a>
      <a href="#">"High Density Foam"</a>
      <a href="#">CNC Mill"</a>
      <a href="#">Vacuum Form"</a>
      <a href="#">ZCORP 3D PRINTER"</a>
    </div> <!-- dynamic - based on post tags-->
  </div>
  <nav id="project_share_nav">
    <ul>
      <li>Share</li>
      <li>Comment</li>
      <li>Appreciate</li>
    </ul> 
  </nav>

</div> <!-- project-content -->
<? endforeach; ?>

</div>
<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<? get_footer(); ?>
