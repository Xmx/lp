<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="lt" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php if(isset($title)) echo $title; ?></title>

<style type="text/css">
.newStyle1 {
	border: 1px solid #000000;
	text-align:center;
}

table { border-collapse:collapse; }
}
.auto-style2 {
	font-size: x-small;
	font-weight: bold;
	text-align: center;
}
		TBODY { font-family:"Calibri"; font-size:x-small }
		 .auto-style3 {
	text-align: right;
}
		 </style>
</head>

<body>

<table style="width: 1300px">
	<tr>
		<td style="width: 21px">&nbsp;</td>
		<td style="width: 66px">&nbsp;</td>
		<td style="width: 186px">&nbsp;</td>
		<td style="width: 97px">&nbsp;</td>
		<td style="width: 95px">&nbsp;</td>
		<td style="width: 63px">&nbsp;</td>
		<td style="width: 132px">&nbsp;</td>
		<td colspan="5" rowspan="7"><FONT COLOR="#000000"><IMG SRC="<?php echo URL::base().'theme/img/export/'; ?>0170897001380401986_pavyzdine%20forma%20uzsakymams%202013_html_m4a979abc.jpg" WIDTH=282 HEIGHT=124 HSPACE=62 VSPACE=13></FONT></td>
		<td class="newStyle1" colspan="7"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Suvyniojimas ir i&scaron;kirtimas pagal schem&#261;: (A-rulonais i&scaron;orinis, B - rulonais vidinis, C-lapais)</FONT></td>
	</tr>

	<tr>
		<td style="width: 21px">&nbsp;</td>
			<TD HEIGHT=18 ALIGN=LEFT><B><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Klientas</FONT></B></TD>
			<TD ALIGN=LEFT><B><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $orders[0]->imone; ?></FONT></B></TD>
		<td style="width: 97px">&nbsp;</td>
			<TD ALIGN=LEFT style="width: 115px"><B><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Atsakingas asmuo</FONT></B></TD>
			<TD ALIGN=LEFT style="width: 115px"><?php $klientas = ORM::factory('users',$orders[0]->vartotojas); echo $klientas->name.' '.$klientas->surname; ?></TD>
		<td style="width: 132px">&nbsp;</td>
		<td class="newStyle1" rowspan="8" style="width: 35px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">
		Suvyniojimas:</FONT></td>
		<td class="newStyle1" rowspan="8" style="width: 33px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Pad&#279;tis rulone (1-4):</FONT></td>
		<td class="newStyle1" rowspan="8" style="width: 33px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">&Oslash;d, mm:</FONT></td>
		<td class="newStyle1" rowspan="8" style="width: 33px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">&Oslash;D, mm:</FONT></td>
		<td class="newStyle1" rowspan="8" style="width: 33px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">h1, mm:</FONT></td>
		<td class="newStyle1" rowspan="8" style="width: 33px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">B1, mm:</FONT></td>
		<td class="newStyle1" rowspan="8" style="width: 33px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Etike&#269;i&#371; kiekis rulone, vnt.:</FONT></td>
	</tr>
	<tr>
		<td style="width: 21px; height: 20px;"></td>
			<TD ALIGN=LEFT style="height: 20px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">kontaktai, rekvizitai</FONT></TD>
			<TD ALIGN=LEFT style="height: 20px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><BR></FONT></TD>
		<td style="width: 97px; height: 20px;"></td>
			<TD ALIGN=LEFT style="width: 115px; height: 20px;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">kontaktai</FONT></TD>
		<td style="width: 63px; height: 20px;"></td>
		<td style="width: 132px; height: 20px;"></td>
	</tr>
	<tr>
		<td style="width: 21px">&nbsp;</td>
		<td style="width: 66px">&nbsp;</td>
		<td style="width: 186px">&nbsp;</td>
		<td style="width: 97px">&nbsp;</td>
		<td style="width: 95px">&nbsp;</td>
		<td style="width: 63px">&nbsp;</td>
		<td style="width: 132px">&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 21px; height: 15px;"></td>
		<td style="width: 66px; height: 15px;"></td>
		<td style="width: 186px; height: 15px;" class="auto-style2"><FONT FACE="Verdana" COLOR="#000000">
		<strong>U&#382;sakymas</strong></FONT></td>
		<td style="width: 97px; height: 15px;"></td>
		<td style="width: 95px; height: 15px;"></td>
		<td style="width: 63px; height: 15px;"></td>
		<td style="width: 132px; height: 15px;"></td>
	</tr>
	<tr>
		<td style="width: 21px; height: 22px"></td>
		<td style="width: 66px; height: 22px"></td>
			<TD ALIGN=CENTER style="width: 186px"><FONT FACE="Verdana" COLOR="#000000"><?php echo date('Y-m-d',strtotime($orders[0]->data)); ?></FONT></TD>
		<td style="width: 97px; height: 22px"></td>
		<td style="width: 95px; height: 22px"></td>
		<td style="width: 63px; height: 22px"></td>
		<td style="width: 132px; height: 22px"></td>
	</tr>
	<tr>
		<td style="width: 21px; height: 79px"></td>
		<td style="width: 66px; height: 79px"></td>
		<td style="width: 186px; height: 79px"></td>
		<td style="width: 97px; height: 79px"></td>
		<td style="width: 95px; height: 79px"></td>
		<td style="width: 63px; height: 79px"></td>
		<td style="width: 132px; height: 79px"></td>
	</tr>
	<tr>
		<td class="newStyle1" rowspan="2" style="width: 21px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Nr.</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 66px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Maketo nr.</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 186px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Darbo pavadinimas</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 97px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Tipas</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 95px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Med&#382;iaga</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 63px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Dydis</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 132px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Spauda</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 65px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Folija</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 65px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Lakas</FONT></td>
		<td class="newStyle1" rowspan="2" style="width: 65px"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Klijai</FONT></td>
		<td class="newStyle1" colspan="2"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">U&#382;sakomas kiekis</FONT></td>
	</tr>
	<tr>
		<td class="newStyle1"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">Atve&#382;ti</FONT></td>
		<td class="newStyle1"><FONT FACE="Verdana" SIZE=1 COLOR="#000000">&#302; sand&#279;l&#303;</FONT></td>
	</tr>
<?php $i = 1; foreach ($orders as $order) { ?>
	<tr>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT=16 ALIGN=CENTER VALIGN=MIDDLE SDVAL="1" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $i; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE SDVAL="12345" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->asortimentas; ?></FONT></TD>
			<TD STYLE="border: 1px solid #000000; width: 186px;" ALIGN=LEFT><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->pavadinimas; ?></FONT></TD>
			<TD STYLE="border: 1px solid #000000; width: 98px;" ALIGN=CENTER><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->tipas; ?></FONT></TD>
			<TD STYLE="border: 1px solid #000000; width: 115px;" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->medziaga; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->x.'x'.$order->y; ?></FONT></TD>
			<TD STYLE="border: 1px solid #000000; width: 132px;" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->spauda; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE SDVAL="1" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->folija; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE SDVAL="0" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->lakas; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->klijai; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE SDVAL="100000" SDNUM="1033;0;#,##0"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->atvezti; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE SDVAL="50000" SDNUM="1033;0;#,##0"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->i_sandeli; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->suvyniojimas; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER SDVAL="1" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->padetis_rulone; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="40" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->Odd; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="40" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->OD; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="40" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->h1; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="40" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->B1; ?></FONT></TD>
			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN=RIGHT SDVAL="500" SDNUM="1033;"><FONT FACE="Verdana" SIZE=1 COLOR="#000000"><?php echo $order->rulone; ?></FONT></TD>
	</tr>
<?php $i++; } ?>
	<tr>
		<td style="width: 21px">&nbsp;</td>
		<td style="width: 66px">&nbsp;</td>
		<td style="width: 186px">&nbsp;</td>
		<td style="width: 97px">&nbsp;</td>
		<td style="width: 95px">&nbsp;</td>
		<td style="width: 63px">&nbsp;</td>
		<td style="width: 132px">&nbsp;</td>
		<td style="width: 65px">&nbsp;</td>
		<td style="width: 65px">&nbsp;</td>
		<td style="width: 65px">&nbsp;</td>
		<td style="width: 89px">&nbsp;</td>
		<td style="width: 89px">&nbsp;</td>
		<td style="width: 35px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 21px">&nbsp;</td>
		<td style="width: 66px">&nbsp;</td>
		<td style="width: 186px">&nbsp;</td>
		<td style="width: 97px">&nbsp;</td>
		<td class="auto-style3" colspan="5"><FONT FACE="Verdana" COLOR="#000000">Pageidaujama u&#382;sakymo &#303;vykdymo data:</FONT></td>
		<td style="width: 65px">&nbsp;</td>
		<td style="width: 89px" class="newStyle1"><B><FONT FACE="Verdana" COLOR="#FF0000"><?php echo date('Y-m-d',strtotime($orders[0]->data)); ?></FONT></B></td>
		<td style="width: 89px">&nbsp;</td>
		<td style="width: 35px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
		<td style="width: 33px">&nbsp;</td>
	</tr>
</table>

</body>

</html>
