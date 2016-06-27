<?php
  require_once('rooms.inc');
  $page_options['title'] = 'Reservation Form';
  $page_options['styles'] = 'table.display td, table.display th{ padding:4px;}';
  rooms_start($page_options);
?>
<h1>Room Reservation Form</h1>
<table border="0" cellpadding="0" cellspacing="0" bgcolor="#cccccc">
  <tbody><tr>
    <td>
      <table border="0" cellpadding="4" cellspacing="1" frame="" width="100%" class="display">
        <tbody><tr>
          <td valign="top" bgcolor="#ffffff">
            <div align="right">
              <img src="/template/images/number_one.gif" width="20" height="31" alt="Step 1"></div>
          </td>
          <td bgcolor="#ffffff"><b><a href="/template/resources/forms/event_planning_reserv_order_form-201308.pdf">Download the form and print it out.<br>
                <br>
              </a></b>
           
          </td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#ffffff">
            <div align="right">
              <img src="/template/images/number_two.gif" width="20" height="31" alt="Step 2"></div>
          </td>
          <td bgcolor="#ffffff"><b>Fill it out completely and don't forget to sign it.</b></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#ffffff">
            <div align="right">
              <img src="/template/images/number_three.gif" width="20" height="31" alt="Step 3"></div>
          </td>
          <td bgcolor="#ffffff"><b>Mail or Fax it in:</b>
            <p>Student Union Memorial Center<br>Event Services Office<br>PO Box 210017<br>Tucson, Arizona 85721<br>phone 520.621.1414<br>fax 520.621-2545</p></td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>
<?php rooms_finish() ?>