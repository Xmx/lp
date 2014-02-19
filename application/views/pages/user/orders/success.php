<?php if(isset($menu)) echo $menu; header( "refresh:5;url=" );?>
<div class="row">
			<div class="column grid_12 header-bg">
				<span class="header-title">Užsakymo teikimas</span>
			</div>
		</div>
		<div class="row">
			<div class="column grid_12 triangle">
			</div>
		</div>
<div class="row">
	<div class="column grid_12" style="text-align:center;">
		<h1>Užsakymas priimtas</h1>
		<p>Būsite perkelti po <span id="counter">3</span> sec.</p>
		<p>arba spauskite <a href="<?php echo URL::base().'user/orders'; ?>">čia</a></p>
	</div>
</div>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
    	clearInterval(timer);
        window.location.href = '/user/orders';
    }
    if (parseInt(i.innerHTML)>0) i.innerHTML = parseInt(i.innerHTML)-1;
}
var timer = setInterval(function(){ countdown(); },1000);
</script>