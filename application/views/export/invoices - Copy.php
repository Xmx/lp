<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>PVM SĄSKAITA FAKTŪRA Serija LP Nr. <?php echo $invoice->nr; ?></title>
<style type="text/css">

body
{
	font-family:Arial;
	font-size:12px;
}

.auto-style1 {
	width:910px;
	text-align: center;
	float:left;
	font-size: 16px;
	font-weight:bold;
}
.newStyle1 {
	width:910px;
	font-family: Arial;
	font-size: 16px;
	font-weight: bold;
	text-align: center;
	padding-top: 10px;
}

.pad10 { display:block; padding: 10px 0px 0px 0px; }
.newStyle2 {
height:50px;
}
.auto-style3 {
	font-size: 15px;
}
.auto-style4 {
	font-size: 13px;
}
.auto-style5 {
	font-size: 14px;
}
.auto-style6 {
	border-style: solid;
	border-width: 1px;
	border-collapse: collapse;
}
.auto-style7 {
	font-size: 13px;
	text-align: center;
}
.auto-style8 {
	text-align: center;
}
.auto-style9 {
	text-align: right;
}
.auto-style10 {
	margin-left: 58px;
}
.newStyle3 {
	border-bottom-style: dotted;
	border-bottom-width: thin;
}
.auto-style11 {
	padding: 1px;
	text-align: center;
	border-left-color: #A0A0A0;
	border-right-color: #C0C0C0;
	border-top-color: #A0A0A0;
	border-bottom-color: #C0C0C0;
}
.auto-style12 {
	border-left-color: #A0A0A0;
	border-right-color: #C0C0C0;
	border-top-color: #A0A0A0;
	border-bottom-color: #C0C0C0;
	padding: 1px;
}
</style>
</head>

<body>
<div class="newStyle2">
	<div class="auto-style1">
		<span>PVM SĄSKAITA FAKTŪRA</span>
	</div>
	<div class="auto-style1">
		<span>Serija LP Nr. <?php echo $invoice->nr; ?></span>
	</div>
	<div style="padding-top: 20px;" class="auto-style1">
		<span><?php echo date('Y.m.d',strtotime($invoice->data)); ?></span>
	</div>

</div>
<br/>

<div style="width:910px; padding-top:50px;">
<table style="width: 800px" align="center">
	<tr>
		<td colspan="2" class="auto-style3"><strong>PARDAVĖJAS</strong></td>
		<td colspan="3" class="auto-style3"><strong>PIRKĖJAS</strong></td>
	</tr>
	<tr>
		<td colspan="2" class="auto-style3" style="height: 23px"><strong>UAB &quot;LP poligrafija&quot;</strong></td>
		<td colspan="3" class="auto-style3" style="height: 23px"><strong><?php echo $company->company; ?></strong></td>
	</tr>
	<tr class="auto-style4">
		<td colspan="2" class="auto-style5">S. Žukausko g. 49, LT-09131 Vilnius</td>
		<td colspan="3" class="auto-style5"><?php echo $company->adresas; ?></td>
	</tr>
	<tr>
		<td style="width: 145px" class="auto-style5">Įmonės kodas:</td>
		<span class="auto-style5">
		<td style="width: 251px">300596756</td>
		<td style="width: 158px">Įmonės kodas:</span></td>
		<td class="auto-style5" colspan="2"><?php echo $company->imones_kodas; ?></td>
	</tr>
	<tr>
		<td style="width: 145px" class="auto-style5">PVM mokėtojo kodas:</td>
		<span class="auto-style5">
		<td style="width: 251px">LT100003166917</td>
		<td style="width: 158px">PVM kodas:</span></td>
		<td class="auto-style5" colspan="2"><?php echo $company->pvm_kodas; ?></td>
	</tr>
	<tr>
		<td style="width: 145px" class="auto-style5">Bankas:</td>
		<td style="width: 251px" class="auto-style5">AB DnB Bankas</td>
		<td style="width: 158px">&nbsp;</td>
		<td class="auto-style5" colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 145px" class="auto-style5">Banko kodas:</td>
		<td style="width: 251px" class="auto-style5">40100</td>
		<td style="width: 158px">&nbsp;</td>
		<td class="auto-style5" colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 145px" class="auto-style5">Atsiskaitomoji sąskaita:</td>
		<td style="width: 251px" class="auto-style5">LT614010042501196373</td>
		<td style="width: 158px" class="auto-style5"><strong>Sąskaitą apmokėti 
		iki:</strong></td>
		<td class="auto-style5">&nbsp;</td>
		<td class="auto-style5"><strong><?php echo date('Y.m.d',strtotime($invoice->pabaiga)); ?></strong></td>
	</tr>
</table>
</div>
<div style="width:910px; padding-top:20px;">

	<table class="auto-style6" style="width: 800px" border="1" align="center">
		<tr>
			<td class="auto-style7" rowspan="2" style="width: 50px"><strong>Nr.</strong></td>
			<td class="auto-style8" rowspan="2" style="width: 397px"><strong>
			Pozicija</strong></td>
			<td class="auto-style8" colspan="2"><strong>Užsakymo informacija</strong></td>
			<td class="auto-style8" rowspan="2" style="width: 50px"><strong>Kiekis, 
			1000vnt.</strong></td>
			<td class="auto-style8" rowspan="2" style="width: 40px"><strong>Kaina, Lt</strong></td>
			<td class="auto-style8" rowspan="2"><strong>Suma, Lt</strong></td>
		</tr>
		<tr>
			<td class="auto-style8" style="width: 77px"><strong>Data</strong></td>
			<td class="auto-style8" style="width: 73px"><strong>Kiekis</strong></td>
		</tr>
		<?php $i = 1; foreach($orders as $order) { ?>
		<tr>
			<td style="width: 50px" class="auto-style8"><?php echo $i; ?></td>
			<td style="width: 397px"><?php echo $order->x.'x'.$order->y; ?> / <?php echo $order->pavadinimas; ?></td>
			<td style="width: 77px" class="auto-style8"><?php echo date('Y.m.d',strtotime($order->data)); ?></td>
			<td style="width: 73px" class="auto-style8"><?php echo $order->kiekis; ?></td>
			<td style="width: 50px" class="auto-style8"><?php echo $order->kiekis; ?></td>
			<td class="auto-style9" style="width: 40px"><?php $vnt = number_format($order->vnt,2); echo str_replace('.', ',',$vnt); ?></td>
			<td class="auto-style9"><?php $kaina = number_format($order->kaina,2); echo str_replace('.', ',',$kaina); ?></td>
		</tr>
		<?php $i++; } ?>

	</table>

</div>
<div style="width:910px">

	<table class="auto-style10" style="width: 800px">
		<tr>
			<td>&nbsp;</td>
			<td class="auto-style9" style="width: 631px"><strong>Suma be PVM:</strong></td>
			<td class="auto-style9"><?php $sum = number_format($invoice->suma,2); echo str_replace('.', ',',$sum); ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="auto-style9" style="width: 631px"><strong>PVM suma (21%):</strong></td>
			<td class="auto-style9"><?php $pvm = number_format(($invoice->suma*0.21),2); echo str_replace('.', ',',$pvm); ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td class="auto-style9" style="width: 631px"><strong>Bendra Suma:</strong></td>
			<td class="auto-style9"><strong><?php $sum_pvm = number_format($invoice->suma+($invoice->suma*0.21),2); echo str_replace('.', ',',$sum_pvm); ?></strong></td>
		</tr>
	</table>

</div>
<div style="width:910px">

	<table style="width: 800px" align="center">
		<tr>
			<td style="width: 46px">&nbsp;</td>
			<td>Suma žodžiais:</td>
		</tr>
		<tr>
			<td style="width: 46px">&nbsp;</td>
			<td><?php echo $invoice->suma_z; ?>.</td>
		</tr>
	</table>

</div>
<div style="width:910px; padding-top:75px;">

	<table style="width: 800px" align="center">
		<tr>
			<td style="width: 47px">&nbsp;</td>
			<td class="newStyle3" style="width: 546px">Sąskaitą išrašė:<span style="padding-left:100px;">Projektų vadovas Artūras Dovydaitis</span></td>
			<td>&nbsp;</td>
			
		</tr>
		<tr>
			<td style="width: 47px">&nbsp;</td>
			<td style="width: 546px" class="auto-style11"><sup>(pareigos, 
			vardas, pavardė, parašas)</sup></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 47px">&nbsp;</td>
			<td class="newStyle3" style="width: 546px">Prekes išdavė:</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 47px; height: 19px;"></td>
			<td style="width: 546px; height: 19px;" class="auto-style8"><sup>
			<span class="auto-style12">(</span><span class="auto-style12">pareigos, 
			vardas, pavardė, parašas)</span></sup></td>
			<td style="height: 19px"></td>
		</tr>
		<tr><td style="width: 47px; height: 21px;"></td>
			<td class="newStyle3" style="width: 546px; height: 21px;">Prekes gavau:</td>
			<td style="height: 21px"></td>
		</tr>
		<tr>
			<td style="width: 47px">&nbsp;</td>
			<td style="width: 546px" class="auto-style11"><sub>(pareigos, 
			vardas, pavardė, parašas)</sub></td>
			<td>&nbsp;</td>
		</tr>
	</table>

</div>
<div style="width:910px; padding-top:75px;">

	<table style="width: 800px" align="center">
		<tr>
			<td style="width: 414px"><img alt="" src="<?php echo URL::base().'theme/img/export/logo.png'; ?>" /></td>
			<td class="auto-style9">UAB &quot;LP poligrafija&quot;, S. Žukausko g. 49, 
			LT-09131 Vilnius<br />
			Tel: +370 633 200400, e-mail: poligrafija@lp-poligrafija.lt</td>
		</tr>
	</table>

</div>
</body>


</html>
