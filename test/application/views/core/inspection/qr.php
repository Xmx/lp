<div class="column grid_12">
<?php
for($i = 1;$i <= 5;$i++)
{
?>
<div class="grid_2" style="padding-top:20px;"><img src="<?php echo URL::base().'qr/'.$i.'.png'; ?>"><p><?php echo $i.'. QR kodas'; ?></p></div>
<?php
}
?>
</div>