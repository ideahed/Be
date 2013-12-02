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
          if ($i == 0) { echo '<span class="BEICON"</span>'; }
          else { echo $process->post_title; }
          echo '</a></li>'; 
        } ?>
        <? if ($post->post_author == $current_user->ID) 
            echo '<li><a href="#add_process_section">add process</a></li>';
           ?>
      </ul>
    </nav>
    <div id='project_info'>  
      <ul>
        <li><h1 id='project_title'> <? echo the_title(); ?></h1></li>
        <li id="project_type"><? echo $project_type[0]; ?> </li>
        <li class="ViewsIcon"><span>1600</span></li> <!-- dynamic - view count -->
        <li class="LikeIcon"><span>200</span> </li><!-- dynamic - likes count -->
        <li class="CommentIcon"><span>20</span> </li> <!-- dynamic - comment count -->
        <li class="ShareIcon"><span>200 </li> <!-- dynamic - share count -->
      </ul>  <!-- project header --> 
    </div> 
    <div id="project_creator"><? the_author(); ?>
      <div id="follow_creator"></div>
      <div id="share_creator"></div>
    </div> <!-- dynamic - based on post author -->
  </div> <!-- project header -->



  <? foreach($processes as $process): ?>
  <div class='project_detail'>
    <a id="<? echo $process->post_name;?>"></a>
    <!-- / echo '<pre>'.print_r($process,true).'</pre>'; -->
    <!-- <? //echo '<pre>'.print_r($process,true).'</pre>'; ?> -->
    <div class="project_slideshow"> 
       <div class="cycle-slideshow"> 
        <div class='cycle-pager'></div>
        <!-- use guid for src in img tag use post_excerpt for caption -->
      <? $args = array('post_type'=>'attachment', 'post_parent'=> $process->ID, 'posts_per_page'=>-1);
      $attachments = get_posts($args);


      foreach($attachments as $attachment){
       //echo '<pre>'.print_r($attachment,true).'</pre>'; 
      $image = wp_get_attachment_image_src($attachment->ID, 'full');
         $aspect_ratio = $image[1] / $image[2];
         if ($aspect_ratio <= 1)
           echo '<img src="'.$image[0].'" class="portrait">';
         else 
           echo '<img src="'.$image[0].'" class="landscape"'; 
       } ?>
         
       </div> <!-- cycle-slideshow -->

    </div> <!-- project slideshow -->
  
  <div class="caption">
    <div class="process_point"><? echo $process->post_title; ?> </div>
    <div><p><? echo $process->post_content; ?></p></div><!-- Process Pod Content  -->  

  </div> <!-- caption -->
  <div class= "project_materials">
    <h3>MATERIALS / TOOLS</h3>
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
  <? if ( is_user_logged_in() ) {
     echo '<nav class="project_share_nav">
        <ul>
          <a href="#"><li class="ShareIcon"></li></a>
          <a href="#"><li class="CommentIcon"></li></a>
          <a href="#"><li class="LikeIcon"></li></a>
        </ul> 
      </nav>';}
   else { 
    echo '<nav class="project_share_nav">
      <ul>
        <a href="#"><li>Share</li></a>
        <a href="#"><li>Comment</li></a>
        <a href="#"><li>Appreciate</li></a>
      </ul>
     </nav>';}
    ?> 
<div class="edit_section">
  <? if ($post->post_author == $current_user->ID) 
      echo '<a href="#" class="edit_process">edit</a>'; 
   ?> 

   <div class="edit_process_form">
    <? $process = pods('process, $id');
    echo $process->form();  ?>
   </div>
</div> 
</div> <!-- project detail --> 

<? endforeach; ?>
<div id="add_process_section">
<? if ($post->post_author == $current_user->ID) {
 echo '<div id="add_process">';
  $process = pods('process');
 echo $process->form();
 echo '</div>'; }
 ?>
 </div>


</div> <!-- project-content -->