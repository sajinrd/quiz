<script type="text/javascript">
$(document).ready(function(){
  $("#home").click(function(){
  	$("#tkm").show();
    $("#regular").hide();

  });
   $("#away").click(function(){
  $("#regular").show();
  $("#tkm").hide();
  });
});
</script>
<div class="container">
<table class="table" id="regular" style="margin-top:60px">
<thead>
<tr>
	<th class="Dagger">Rank </th>
	<th class="Dagger">Name</th>
	<th class="Dagger">Level</th>
	<th class="Dagger">College</th>
</tr>
</thead>
<tbody>
<?php if($reg!=FALSE): ?>
<?php foreach ($reg as $user): ?>
<?php if($user['name']!=''&&$user['name']!=NULL):?>
<tr>
<td><?php echo $user['rank'];?> </td>
<td><?php
if($user['rank']>$nop)
 echo $user['name'];
else
 echo "########" ;?></td>
<td><?php echo $user['level'] ?></td>
<td><?php
if($user['rank']>$nop)
 echo $user['college'];
else
 echo "########"; ?></td>
</tr>
<?php endif;?>
<?php endforeach ?>
<?php endif; ?>
</tbody>
</table>




<table class="table" id="tkm" style="margin-top:60px; display:none">
<thead>
<tr>
	<th>Rank </th>
	<th>Name</th>
	<th>Level</th>
</tr>
</thead>
<tbody>
<?php if($tkm!=FALSE): ?>
<?php foreach ($tkm as $user): ?>
<?php if($user['name']!=''&&$user['name']!=NULL):?>
<tr>
<td><?php echo $user['rank'];?> </td>
<td><?php
if($user['rank']>$nop)
 echo $user['name'];
else
 echo "########" ;?></td>
<td><?php echo $user['level'] ?></td>
</tr>
<?php endif;?>
<?php endforeach ?>
<?php endif; ?>
</tbody>
</table>
</div>
</div>
