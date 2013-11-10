<? get_header(); ?>
<? if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$project_type = pods_field('project', false, 'project_type');
 // echo '<pre>'.print_r($process, true).'</pre>'; ?>
 <div id="container">
  <div id="project_header">
    <nav>
      <? $args = array('post_type'=>'process','posts_per_page'=>-1, 'orderby'=>'post_date', 'order'=>'ASC');
        $processes = get_posts($args);
        foreach($processes as $process):
        // echo '<pre>'.print_r($process,true).'</pre>'; ?>
      <ul id="project_nav"> <!-- Get Custom Post Type: Project -->
        <li>Be</li>
        <li><a href="<? echo get_permalink( $process->ID);?>"><? echo $process->post_title ?></a></li>
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
        <!-- <? //echo '<pre>'.print_r($process,true).'</pre>'; ?> -->
        <div id="project_slideshow"> <!-- use guid for src in img tag use post_excerpt for caption -->
          <? $args = array('post_type'=>'attachment', 'post_parent'=> $process->ID, 'posts_per_page'=>-1);
          $attachments = get_posts($args);
          foreach($attachments as $attachment): ?>
          <!-- <? // echo '<pre>'.print_r($attachments,true).'</pre>'; ?> -->
        <? endforeach; ?>
      </div> <!-- project slideshow -->
      <div id="caption"></div>
      <div><? echo $process->post_title ?> </div>
      <div><p><? echo $process->post_content ?></p></div><!-- Process Pod Content  -->
    </div>  
    <div id= "project_materials">
      <h3>Materials / Tools</h3>
      <? $process_materials = wp_get_object_terms($process->ID, 'material');
      $process_tools = wp_get_object_terms($process->ID, 'tool');
      echo '<ul>';
      foreach($process_materials as $material){
        echo '<li><a href="'.get_term_link($material->slug, 'material').'">'.$material->name.'</a></li>';
      }
      foreach($process_tools as $tool){
        echo '<li><a href="'.get_term_link($tool->slug, 'tool').'">'.$tool->name.'</a></li>'; 
      }
      echo '</ul>'; ?>
    </div> <!-- project materials - pulled from custom taxonomy in pods -->
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
