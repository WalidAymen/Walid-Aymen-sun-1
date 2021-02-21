<?php 
$devData=[
    [
      'name' => 'ahmed hamdy',
       'job' => 'front-end',
      'experience' => 3
     ],
  
     [
         'name' => 'mohammed shaker',
         'job' => 'back-end',
         'experience' => 2
     ],
  
     [
         'name' => 'ali hasan',
         'job' => 'full-stack',
         'experience' => 4
     ],
 ];
 
?>
<?php 
foreach ($devData as $dev) { //catch the sub array ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$dev['name'] ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$dev['job'] ?></h6>
    <p class="card-text"><?=$dev['experience']."years of experience <hr>" ?></p>
  </div>
</div>
<?php } ?>