<? get_header(); 
the_post();
//echo '<pre>'.print_r($post,1).'</pre>';
  // echo '<pre>'.print_r(pods_field('project',$post->ID,'processes'),true).'</pre>'; //returns all the processes associated with this project

?>
<? //if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$project_type = pods_field('project', $post->ID, 'project_type');
?>

<div id="project_content"> 
  <div id="project_header">
    <nav id="project_nav">
      <ul> <!-- Get Custom Post Type: Project -->
        <? 
              //$relationship = array('taxonomy' => 'relationship', 'field' => 'slug', 'terms'=> $project_name);
        $args = array('post_type'=>'process','posts_per_page'=>-1, 'meta_key' => 'project', 'meta_value' => $post->ID, 'orderby'=>'post_date', 'order'=>'ASC');
        $processes = get_posts($args);
               // echo '<pre>'.print_r($processes,true).'</pre>'; 
        foreach($processes as $i=>$process){
          echo '<li><a href="#'.$process->post_name.'">';
          if ($i == 0) { echo '<img src="'.FILES.'/library/images/sprites.png" class="BEICON" />'; }
          else { echo $process->post_title; }
          echo '</a></li>'; 
        } ?>
      </ul>
    </nav>
    <div id='project_info'>  
      <ul>
        <li><h1 id='project_title'> <? echo the_title(); ?></h1></li>
        <li id="project_type"><? echo $project_type[0]; ?> </li>
        <li><img src="<?=FILES; ?>/library/images/sprites.png" class="ViewsIcon"> 1600</li> <!-- dynamic - view count -->
        <li><img src="<?=FILES; ?>/library/images/sprites.png" class="LikeIcon"> 200 </li><!-- dynamic - likes count -->
        <li><img src="<?=FILES; ?>/library/images/sprites.png" class="CommentIcon"> 20 </li> <!-- dynamic - comment count -->
        <li><img src="<?=FILES; ?>/library/images/sprites.png" class="ShareIcon"> 200 </li> <!-- dynamic - share count -->
      </ul>  <!-- project header --> 
    </div> 
    <div id="project_creator"><? the_author(); ?>
      <div id="follow_creator"></div>
      <div id="share_creator"><img src="<? echo FILES;?>/images/sprites.png" class="ShareIcon"></div>
    </div> <!-- dynamic - based on post author -->
  </div> <!-- project header -->
  <? foreach($processes as $process): ?>
  <div class='project_detail'>
    <a id="<? echo $process->post_name;?>"></a>
    <!-- / echo '<pre>'.print_r($process,true).'</pre>'; -->
    <!-- <? //echo '<pre>'.print_r($process,true).'</pre>'; ?> -->
    <div class="project_slideshow cycle-slideshow"> <!-- use guid for src in img tag use post_excerpt for caption -->
      <? $args = array('post_type'=>'attachment', 'post_parent'=> $process->ID, 'posts_per_page'=>-1);
      $attachments = get_posts($args);
      foreach($attachments as $attachment): ?>
      <? //echo '<pre>'.print_r($attachment,true).'</pre>'; ?> 
      <? echo wp_get_attachment_image($attachment->ID, 'thumbnail'); ?>
      <? endforeach; ?>
    </div> <!-- project slideshow -->
  
  <div class="caption">
    <div><? echo $process->post_title; ?> </div>
    <div><p><? echo $process->post_content; ?></p></div><!-- Process Pod Content  -->  

  </div> <!-- caption -->
  <div class= "project_materials">
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
  <nav class="project_share_nav">
    <ul>
      <li><img src="<?=FILES; ?>/library/images/sprites.png" class="ShareIcon"></li>
      <li><img src="<?=FILES; ?>/library/images/sprites.png" class="LikeIcon"></li>
      <li><img src="<?=FILES; ?>/library/images/sprites.png" class="CommentIcon"></li>
    </ul> 
  </nav>
</div> <!-- project detail --> 
</div> <!-- project-content -->
<? endforeach; ?>
<? get_footer(); ?>
