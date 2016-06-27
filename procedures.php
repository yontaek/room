<?php
  require_once('rooms.inc');
  $page_options['title'] = 'General Procedures';
  rooms_start($page_options);
?>
<style type="text/css">
#content {
	width: 750px;
}
#content ul, ol {
	line-height: 1.25em;
	margin-top: 5px;
}
#content li {
	margin-top: 5px;
}
.collapse p, hr {
	width:588px !important;
}
</style>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>

<link rel="stylesheet" type="text/css" href="/template/expand.css" />
<script  type="text/javascript" src="/template/expand.js"></script>
<script type="text/javascript">
	$(function() {
		// --- Using the default options:
		$("h2.expand").toggler();
		// --- Other options:
		//$("h2.expand").toggler({method: "toggle", speed: 0});
		//$("h2.expand").toggler({method: "toggle"});
		//$("h2.expand").toggler({speed: "fast"});
		//$("h2.expand").toggler({method: "fadeToggle"});
		//$("h2.expand").toggler({method: "slideFadeToggle"});
		$("#content").expandAll({
			trigger : "h2.expand",
			ref : "div.demo",
			localLinks : "p.top a"
		});
	}); 
</script>

<h1 style="width: 800px;">General Procedures for Reserving a Room</h1>

<p style="margin-top: 20px; margin-bottom: -5px;">Click on the topics to display the content.</p>

<a name="top"></a>

<div id="content">
<ol style="margin-left:20px; margin-top: 20px;">
	
	<h2 class="expand" >Contact</h2>
	<div class="collapse">
		<p>
			Contact the Event Services office on the 3rd floor of the Student Union Memorial Center or call (520) 621-1414. Room requests may also be faxed 
			to the Event Services office at 621-2545 using the <a href="/rooms/reservation_form.php">room reservation request form</a>.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
		
	<h2 class="expand" >Determine your room reservation needs:</h2> 
	<div class="collapse">
		<p>
			What kind of event are you planning? Will you need the space each week or only one time? How many people do you expect to attend your event? 
			Will you want food at your event? What A/V Equipment will you require? Special set-ups? Be prepared to provide the Event coordinator with 
			the details of your event when making your room reservation.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" >Room Assignments:</h2>
	<div class="collapse">
		<p>
			A variety of rooms are available for use by University Departments at no charge: small meeting rooms, mid-size lecture rooms, or multipurpose rooms. 
			We strive to assign the room preferred nut can not guarantee availability. Each day, room assignments are posted outside the meeting rooms and at 
			various locations throughout the SUMC. The Arizona Student Unions reserve the right to reassign rooms to serve the greatest number of programs and 
			services. The Event Services office will provide notification of changes to reservations promptly via email, phone or fax.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" ><a name="confirmation"></a>Confirmation:</h2>
	<div class="collapse">
		<p>
			The Event Services office will confirm requested reservations on the submitted form by fax, telephone, mail, or email. All reservations made by phone or 
			walk-in will also receive a confirmation. The reserving group’s contact person will be required to sign the room confirmation agreeing to the SUMC policies 
			and procedures r and return the signed confirmation to the Event Services office within two (2) two days of receipt. Catered meals will receive a confirmation 
			when the menu for the event has been submitted to Event Services.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
		
	<h2 class="expand" ><a name="cancellation"></a>Cancellations:</h2>
	<div class="collapse">
		<p>
	 		The Arizona Student Unions reserve the right to impose a cancellation fee if written notice to cancel a space is not submitted at least five (5) working 
	 		days prior to the event for general meeting rooms and thirty (30) days prior to the event for ballrooms. Meeting rooms canceled less than 5 (five) working 
	 		days before the event will incur a 50% charge of the room rental and less than 3 days prior notice will be billed in full. Ballrooms canceled less than 
	 		30 days prior to the event will be billed at 50% of the room rental and less than 15 days notice prior to the event will be billed in full. Groups with 
	 		no University affiliation will be required to leave a 25% deposit of the total catering bill, which will be applied to the final catering bill. If the event 
	 		is cancelled less than 30 days prior to the scheduled time, the deposit is non-refundable.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" >No Shows:</h2>
	<div class="collapse">
		<p>
	 		Five (5) working day's notice is required to cancel a general meeting room reservation in the Student Union to avoid paying a cancellation fee. 
	 		Full room charges will be enforced for all "No Shows" on reservations with existing charges or with rooms where physical labor has been expended. 
	 		Groups using rooms at no charge will be given only (1) "No show" without penalty of a room charge. The second time a group fails to give sufficient 
	 		notice to cancel a space their privilege to reserve rooms in the Student Union Memorial Center will be forfeited for the remainder of the semester.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" >Room Charges:</h2>
	<div class="collapse">
		<p>
	 		All recognized student groups are allowed two (2) preset meeting rooms per week, with a two-hour limit per meeting, at no charge. These groups may 
	 		book rooms each semester as needed on a first come basis. <b>Available rooms are:</b> Agave, Cholla, Copper, Ocotillo, Presidio, Sabina, San Pedro, Santa Cruz, 
	 		Tubac, Ventana.
		</p>
		<p>
			Only the President or Treasurer of the recognized student organizations can make reservations or changes to reservations for their clubs. Room charges 
			apply to any student group who exceed the weekly allotted rooms or the two-hour time limit. 
		</p>
		<p>
			University departments are permitted two (2) preset meeting rooms per week with a two (2) hour limit at no charge, for day-to-day meetings  only and does 
			not include conferences, extended days in the same week or multiple rooms on the same day. Departments that go over the two-rooms-per-week limit will be 
			charged a <a href="/rooms/roomrates.php" >room charge</a>.
		</p>
		<p>
			All student groups and departments charging an admission fee for their events will be assessed a room charge. There is a rental fee for ballrooms and rooms 
			whenever setup is required.
		</p>
		<p>
			Groups that misrepresent an event or affiliation in order to avoid fees and charges will be charged appropriately and may have their reservation privileges 
			suspended, as determined by the Unions’ Associate Director. All fees, if applicable are due and payable within 30 (thirty) days of the event. 
		</p>
		<p>
			For room rates please go <a href="/rooms/roomrates.php" >here</a>. 
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" ><a name="servicerates"></a>Miscellaneous Service Rates:</h2>
	<div class="collapse">
		 <ul style="float: left; margin-left: 20px; list-style-type: none;">
			<li>Banner Space</li>
			<li>Lift with operator</li>
			<li>Clean Up Charge</li>
			<li>Labor charge</li>
			<li>Overtime (for use of room after official closing time)</li>
			<li>Piano</li>
			<li>Moving of piano on stage</li>
			<li>Barco Projector (does not include operator or VCR)</li>
			<li>Small Tent (10' X 10')</li>
			<li>Large Tent (20' X 30')</li>
		</ul>
		<ul style="float: left; margin-left: 40px; list-style-type: none;">
			<li>$25.00 per day</li>
			<li>$35.00 per hour</li>
			<li>$50.00 minimum charge</li>
			<li>$50.00 per hour (2 hour minimum)</li>
			<li>$35.00 per hour</li>
			<li>$45.00 per day</li>
			<li>$100.00 minimum charge</li>
			<li>$125.00 per day</li>
			<li>$80.00 per day</li>
			<li>$225.00 per day</li>
		</ul>
		<br style="clear: both;" />
		<p class="top" >
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" >Room Setups:</h2>
	<div class="collapse">
		<p>
	 		Setup and equipment needs for rooms are to be requested at the time the reservation is made. Some rooms in the SUMC are available with an existing 
	 		standard setup (preset) and their setups cannot be changed. Other rooms may be arranged in a variety of configurations. Please note that if you 
	 		require a specific set up, some rooms may not be available to you. For more complicated setups, a fee will be assessed. Special diagrams for 
	 		room reservations can be created and requested through our Events Coordinators. Please see our <a href="/rooms/roomrates.php">list of rooms</a>. 
	 		Furniture including tables and chairs is not to be changed except by special permission from the Arizona Student Unions. When possible, we will try 
	 		to accommodate all changes to reservations. Last minute requests that require additional labor charges may necessitate passing those costs on to the 
	 		customer. Please discuss the agenda for your event with one of our Event Coordinators in advance and provide a copy of your program and event needs 
	 		as soon as possible. We can better serve you and your guests if we are aware of your schedule.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" >Advertising:</h2>
	<div class="collapse">
		<p>
	 		Any advertising for the promotion of a program or special event to be held in a Student Union space, such as newspaper releases, posters, tickets 
	 		and handbills must indicate the sponsoring group. Any advertising or promotion of an event must be discussed with and approved by the Student Union 
	 		Memorial Center Event Services office at the time the reservation is made and before it is confirmed. 
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" >Personnel &amp; Security:</h2> 
	<div class="collapse">
		<p>
			Some events in the Student Union Memorial Center may require additional event personnel and some equipment may require an operator. The cost of the 
			required event personnel will be charged to the reserving group. These charges will be discussed with the Events Coordinator in advance and reflected 
			on the reservation confirmation. Additionally, some events such as high risk or high occupancy events require security personnel. Only UA police or 
			other campus approved security companies may be used to satisfy security requirements. The cost of the security personnel will be charged to the 
			reserving group. The Event Services office will be responsible for the hiring and scheduling of the security personnel for the events.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
	<h2 class="expand" >Parking:</h2>
	<div class="collapse">
		<p>
	 		If your event will require vehicle parking, please contact the Special Events Coordinator for Parking &amp; Transportation at the University Services bldg., 
	 		room 104G, or by phone at (520) 621-3710. The cost of renting space in the Student Union Memorial Center does not include parking fees on campus. 
	 		The nearest public parking facility is the Second St./Mountain Ave. garage located behind the Student Union Memorial Center on the corner of Second and 
	 		Mountain Ave. Please contact Parking and Transportation for more information on the garage schedule, parking fees and other available parking locations on 
	 		campus.
		</p>
		<p class="top">
			<a href="#top" style="color: #C00;">&#9650; TOP</a>
		</p>
		<hr  class="clear" />
		<br />
	</div>
	
</ol>

</div>
<br /><br />
<?php rooms_finish() ?>