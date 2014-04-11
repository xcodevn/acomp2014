<?php
$subNav = array(
	"VISA ; visa.php ;",
	"Destination ; destination.php ; ",
	"Transportation ; transportation.php ; ",
	"Accommodation ; accommodation.php ; "
);

set_include_path("../");
include("inc/essentials.php");
?>
<script>
$mainNav.set("information") // this line colors the top button main nav with the text "home"
</script>
<h1 class="margin-t-0">Transportation</h1>
<hr>

<div style="font-size:16px;">
    <p>Tan Son Nhat  is Vietnam's largest international airport. If you arrived at Tan Son Nhat airport, you can take <b style="color:blue;">No. 152 air-con airport bus.</b></p>
    <ul>
      <li>Time required : 60 minutes</li>
      <li>Working Time : 06:00 ~ 18:30</li>
      <li>Running Frequency : Every 30 or 60 minutes</li>
      <li>Bus Stop : Airport Bus Stop, 1st Floor of Airport</li>
      <li>Ticket price is 3000 VND (approx. $0.2)</li>
      <li>Terminal stop - Ben Thanh Market (center of Ho Chi Minh city)</li>
    </ul>

    <p>Alternatively, you can take taxi. Taxis from the airport to the city centre take <b style="color:blue;">30 minutes and cost $5-7</b>. Taxi drivers get commission for taking customers to certain hotels so when arriving at the airport be explicit about exactly which hotel you want to be taken to.</p>
<p><h3>COMING to the HCM UNIVERSITY of TECHNOLOGY</h3></p>
Address:<br>
268 LyThuongKiet Street, Ward 14, Dist 10<br>
HoChiMinh City, Vietnam<br>
</div>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <style>
      #map_canvas {
    width: 500px;
    height: 400px;
    background-color: #CCC;
      }
    </style>

