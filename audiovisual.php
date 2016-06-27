<?php
require_once ('rooms.inc');
$page_options['title'] = 'Equipment Rental Pricing';
$page_options['styles'] = 'table.display td, table.display th{ padding: 5px; font-size: 12px;}';
rooms_start($page_options);
?>
<h1>Equipment Rental Pricing</h1>
<table border="0" cellspacing="2" cellpadding="4" class="display" >
	<tr>
		<th align="left"></th>
		<th align="right" bgcolor="#333366" style="color:#ffffff;">department charge*</th>
		<th align="right" bgcolor="#333366" style="color:#ffffff;">Non-UA</th>
	</tr>
	<tr style="background-color: #C7C7C7;">
		<td ><b>Projection &amp; Video</b></td>
		<td align="right" >&nbsp;</td>
		<td align="right" >&nbsp;</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >DVD player</td>
		<td align="right" >$15</td>
		<td align="right" >$20</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Movie Screen (6X6)</td>
		<td align="right" >$10</td>
		<td align="right" >$20</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Movie Screen (8x8)</td>
		<td align="right" >$20</td>
		<td align="right" >$25</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Movie Screen (10x10)</td>
		<td align="right" >$30</td>
		<td align="right" >$60</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Overhead projector</td>
		<td align="right" >$10</td>
		<td align="right" >$25</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Slide projector</td>
		<td align="right" >$15</td>
		<td align="right" >$30</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >TV/DVD</td>
		<td align="right" >$25</td>
		<td align="right" >$40</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >42" Plasma TV</td>
		<td align="right" >$75</td>
		<td align="right" >$75</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Video Projector</td>
		<td align="right" >$75</td>
		<td align="right" >$150</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Video Projector Kiva</td>
		<td align="right" >$95</td>
		<td align="right" >$95</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Video Projector S. Ballroom</td>
		<td align="right" >$295</td>
		<td align="right" >$295</td>
	</tr>

	<tr style="background-color: #C7C7C7;">
		<td><b>Audio</b></td>
		<td align="right" >&nbsp;</td>
		<td align="right" >&nbsp;</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Compact disc player</td>
		<td align="right" >$15</td>
		<td align="right" >$30</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Mic w/Stand</td>
		<td align="right" >$12.50</td>
		<td align="right" >$20</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Microphones</td>
		<td align="right" >$7.50</td>
		<td align="right" >$15</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Podium w/mic</td>
		<td align="right" >$25</td>
		<td align="right" >$40</td>
	</tr>

	<tr style="background-color: #C7C7C7;">
		<td><b>Presentation</b></td>
		<td align="right" >&nbsp;</td>
		<td align="right" >&nbsp;</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Easel</td>
		<td align="right" >$10</td>
		<td align="right" >$20</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Flip Chart Pads (ea.) with pen
		<br>
		(self tear pads)</td>
		<td align="right" >$20</td>
		<td align="right" >$20</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Flip Charts only</td>
		<td align="right" >$15</td>
		<td align="right" >$15</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Laser Pointer</td>
		<td align="right" >$15</td>
		<td align="right" >$20</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Whiteboard </td>
		<td align="right" >$10</td>
		<td align="right" >$10</td>
	</tr>

	<tr style="background-color: #C7C7C7;">
		<td><b>internet access</b></td>
		<td align="right" >&nbsp;</td>
		<td align="right" >&nbsp;</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Ethernet
		<br>
		(registered with campus network)</td>
		<td align="right" >$25</td>
		<td align="right" >$25</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Network Cord</td>
		<td align="right" >$5</td>
		<td align="right" >$5</td>
	</tr>

	<tr style="background-color: #C7C7C7;">
		<td><b>Electrical</b></td>
		<td align="right" >&nbsp;</td>
		<td align="right" >&nbsp;</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Extension cord</td>
		<td align="right" >$5</td>
		<td align="right" >$10</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Power Strip</td>
		<td align="right" >$5</td>
		<td align="right" >$10</td>
	</tr>

	<tr style="background-color: #C7C7C7;">
		<td><b>Other</b></td>
		<td align="right" >&nbsp;</td>
		<td align="right" >&nbsp;</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Banner Frame</td>
		<td align="right" >$20</td>
		<td align="right" >$20</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Pipe/Drape</td>
		<td align="right" >$20</td>
		<td align="right" >$20</td>
	</tr>
	<tr style="background-color: #E6E6E6;">
		<td style="padding-left: 20px;" >Tableskirt</td>
		<td align="right" >$5</td>
		<td align="right" >$5</td>
	</tr>

</table>
<p>
	* includes recognized student groups
</p>
<?php 
rooms_finish()
?>