<?php
require_once ('rooms.inc');
$page_options['title'] = 'Reserving a Room';
$page_options['styles'] = '#center-col{width:780px;}';
rooms_start($page_options);
?>

<style>
#plugIn{
    width: 100%;
    height: 700px;
}
</style>
<h1>Reserving a Room in the Student Union Memorial Center</h1>
<p>
	The Student Union Memorial Center is designed to support the activities, meetings and conferences of the students, faculty and staff of the
	University of Arizona. Groups eligible to reserve space in the Student Union Memorial Center include:
</p>

<ol style="margin-left:20px; line-height: 1.5em !important;">
	<li>
		<a href="/rooms/procedures_studentorg.php" style="font-weight: bold;" >Student Clubs &amp; Organizations</a> that are officially recognized by <a href="http://arizonaorgs.orgsync.com"
		onclick="window.open(this.href); return false;"
		onkeypress="window.open(this.href); return false;">ASUA</a>.
	</li>
	<li>
		<a href="/rooms/procedures_university.php" style="font-weight: bold;" >University Offices &amp; Departments</a>.
	</li>
	<li>
		<a href="/rooms/procedures_other.php" style="font-weight: bold;" >Non-University Groups</a>.
	</li>
</ol>

<p>
	Room reservations and catering orders can be placed in person in the Student Union Memorial Center or by calling (520) 621-1414. Please note that
	reservation requests will be accepted and processed in order of receipt, tentative reservations will not be accepted, and priority booking is extended
	to on-campus constituents.
</p>

<p>
	Reservation requests (for weekly or re-occurring events or meetings) must be submitted on the <a href="/rooms/reservation_form.php" >room reservation form</a>
	to the Event Services Office or sent in via fax at 621-2545.
</p>

<p>
	For more information on room rentals, go <a href="/rooms/" >here</a>.
</p>
<div id="plugIn">
	<script id="socialtables-onsite-script" type="text/javascript" src="//s3.amazonaws.com/socialtables-onsite/577/socialtables-onsite.js" async></script>
</div>
<?php
rooms_finish()
?>
