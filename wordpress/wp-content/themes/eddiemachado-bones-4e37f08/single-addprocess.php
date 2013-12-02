<div>
  <? $process = pods('process');
  echo $process->form();
  ?>
</div>


 <? if ($post->post_author == $current_user->ID) 
            echo '<li><a href="#">add process</a></li>';
           ?>

           
<? if ($post->post_author == $current_user->ID) {
 echo '<div id="add_process">';
  $process = pods('process');
 echo $process->form();
 echo '</div>'; }
 ?>