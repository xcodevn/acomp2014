<?php
/* All tiles on the homepage are configured here, be sure to check the tutorials/docs on http://metro-webdesign.info */

/* GROUP 1 */

$tile[] = array("type"=>"simple","group"=>0,"x"=>0,"y"=>0,'width'=>4,'height'=>2,"url"=>"welcome.php",
"title"=>"<i class='fa fa-bookmark-o'></i> Welcome","text"=>"<p>ACOMP is an annual international forum for the exchange of ideas, techniques, and state-of-the-art applications in the field of advanced computing among scientists, engineers, and practitioners.
</p>
<p>
For ACOMP2014, we will provide a friendly environment where researchers can discuss current and future trends in research areas such as Security and Information Systems, Software Engineering, Embedded Systems and VLSI Design, High Performance Computing, Image Processing and Visualization, Scientific Computing and other interesting topics.</p>");

/*SLIDESHOW TILE - only in full version 
$tile[] = array("type"=>"slideshow","group"=>0,"x"=>0,"y"=>1,"width"=>1,"height"=>1,"url"=>"welcome.php",
	"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Slideshow","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"noClick");*/

$tile[] = array("type"=>"scrollText","group"=>0,"x"=>4,"y"=>0,"width"=>2,"height"=>1,"url"=>"updates.php",
"title"=>"<i class='fa fa-bullhorn fa-x5'></i> Updates","text"=>array(
"<i class=\"fa fa-certificate fa-x2\"></i>  February 10, 2014: Call for Papers and Registration updated.",
"<i class=\"fa fa-certificate fa-x2\"></i>  February 02, 2014: 1st Call for Papers.",
"<i class=\"fa fa-certificate fa-x2\"></i>  December 20, 2013: The conference site is available."
),"scrollSpeed"=>2000);

$tile[] = array("type"=>"simple","group"=>0,"x"=>4,"y"=>1,"width"=>2,"height"=>1,
"title"=>"<i class='fa fa-calendar fa-x2'></i> Important Dates","text"=>
"<ul style='font-size:13px;'>
<li> Abstract submission: &nbsp;&nbsp; June 05, 2014</li>
<li>Full paper submission:&nbsp;&nbsp;	June 10, 2014</li>
<li>Notification:&nbsp;&nbsp; August 15, 2014	</li>
<li>Registration:&nbsp;&nbsp; August 25, 2014</li>
<li>Camera-ready:&nbsp;&nbsp; August 30, 2014</li>
</ul>
"
, "classes"=>"noClick");



/*
$tile[] = array("type"=>"scrollText","group"=>0,"x"=>2,"y"=>3,"width"=>2,"height"=>1,"url"=>"external:panels/example.php",
"title"=>"dddddddd","text"=>array(
"A sidepanel will come from the right, watch out!",
"Okay, and what you are watching now is a scroll live tile...",
"which can be very cool",
"to open a sidepanel, check this source code in tiles.php"
),"scrollSpeed"=>2500);
*/
/*
$tile[] = array("type"=>"slidefx","group"=>0,"x"=>2,"y"=>3,"width"=>2,"height"=>1,"url"=>"submit.php",
	"text"=>"Click to see in full","img"=>"img/paper_subbmission.png","classes"=>"lightbox"
);
*/
/*
$tile[] = array("type"=>"slide","group"=>0,"x"=>4,"y"=>2,"width"=>2,"height"=>1,"url"=>"submission.php",
	"text"=>"Click to see in full","img"=>"img/paper_subbmission.png","imgSize"=>1,
	"slidePercent"=>0.20,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
);*/
/*
$tile[] = array("type"=>"slidefx","group"=>0,"x"=>2,"y"=>2,"width"=>2,"height"=>1,"url"=>"register.php",
	"text"=>"Click to see in full","img"=>"img/register_slice.png","classes"=>"lightbox"
);*/
$tile[] = array("type"=>"simple","group"=>0,"x"=>4,"y"=>2,"width"=>2,"height"=>1,"url"=>"submission.php",
"title"=>" <i class=\"fa fa-files-o\"></i>  Submission",
	"text"=>"Detail information"
);

$tile[] = array("type"=>"simple","group"=>0,"x"=>2,"y"=>2,"width"=>2,"height"=>1,"url"=>"register.php",
"title"=>" <i class=\"fa fa-sign-in\"></i> Registration",
	"text"=>"Detail information"
);

/*
$tile[] = array("type"=>"scrollText","group"=>0,"x"=>4,"y"=>3,"width"=>2,"height"=>1,"url"=>"external:panels/example.php",
"title"=>"ccccc","text"=>array(
"A sidepanel will come from the right, watch out!",
"Okay, and what you are watching now is a scroll live tile...",
"which can be very cool",
"to open a sidepanel, check this source code in tiles.php"
),"scrollSpeed"=>2500);
*/





$tile[] = array("type"=>"simple","group"=>0,"x"=>2,"y"=>3,"width"=>4,"height"=>1,"url"=>"keynote.php",
"title"=>"<i class='fa fa-microphone fa-x2'></i> Keynote Speakers ","text"=>
"To be confirmed!"
);

$tile[] = array("type"=>"simple","group"=>0,"x"=>0,"y"=>2,"width"=>2,"height"=>2,"url"=>"sponsors.php",
"title"=>" <i class='fa fa-star-o fa-x2'></i> Sponsors","text"=> "
<div style='float:left;'>
<img class='h30' src='img/sponsors/Intel.png' />
<img class='h30' src='img/sponsors/LogoBK.png' />
<img src='img/sponsors/dhqg_hcm.png' class='h30'></td>
<img class='h30' src='img/sponsors/onrg.png' />
<img class='h30' style='padding-left:40px;' src='img/sponsors/aoard.png' />
<img class='h30' src='img/sponsors/usarmy.png' />

</div>

"

);


/*
$tile[] = array("type"=>"custom","group"=>0,"x"=>4,"y"=>0,'width'=>2,'height'=>1,"url"=>"updates.php",
"content"=>
"<div style='line-height:30px; margin-top:5px;'>
<div style='color:#FFF;font-size:43px;line-heigt:70px;'><strong>CHECK</strong></div>
<span style='color:#FFF;font-size:32px;'><strong>OUT</strong></span><span style='color:#BBB;font-size:32px;'>THE</span>
<div style='font-size:57px;line-height:30px;'>TYPO</div>
<div style='font-size:37px;line-height:40px;'>GRAPHY</div>
</div>");
*/
/* GROUP 2*/
/*<br />
SLIDEFX TILE -  only in full version 
$tile[] = array("type"=>"slidefx","group"=>1,"x"=>0,"y"=>0,'width'=>2,'height'=>1,"url"=>"external:img/metro_slide.png",
	"text"=>"Click to see in full","img"=>"img/metro_slide_300x150.png","classes"=>"lightbox"
);
*/


$tile[] = array("type"=>"simple","group"=>1,"x"=>0,"y"=>0,"width"=>2,"height"=>1,"url"=>"callforpapers.php",
"title"=>"<i class='fa fa-flag '></i> Call for papers","text"=>
"ACOMP 2014 will be held in Ho Chi Minh City University of Technology (HCMUT) from November 19-21, 2014.
");

$tile[] = array("type"=>"scrollText","group"=>1,"x"=>2,"y"=>0,"width"=>2,"height"=>1,"url"=>"topicofinterest.php",
"title"=>"<i class='fa fa-check'></i> Topics of interest","text"=>
array(
"Track 1. Advances in Security and Information Systems <br>
Chairs:
	  <ul>
		<li>Tran Khanh Dang, HCMC University of Technology, Vietnam</li>
		<li>Josef Küng, Johannes Kepler University Linz, Austria</li>
	  </ul>
","Track 2. Model-based Software Engineering & Enterprise Engineering<br>
Chairs:
	  <ul>
		<li>Aditya Ghose, University of Wollongong, Australia</li>
		<li>Quan Thanh Tho, Ho Chi Minh City University of Technology, Vietnam</li>
	  </ul>
","Track 3. Embedded Systems and VLSI Design<br>
Chairs:
	  <ul>
		<li>Koichiro Ishibashi, University of Electro-Communications, Japan</li>
		<li>Tran Ngoc Thinh, Ho Chi Minh City University of Technology, Vietnam</li>
	  </ul>
","Track 4. High Performance & Scientific Computing<br>
Chairs: To be confirmed!
",
"Track 5. Image Processing and Visualization<br>
Chairs:
	  <ul>
		<li>Kazuhiko Hamamoto, Tokai University, Japan</li>
		<li>Le Thanh Sach, HCMC University of Technology, Vietnam</li>
	  </ul>
"
)
,"scrollSpeed"=>2500);

$tile[] = array("type"=>"simple","group"=>1,"x"=>4,"y"=>0,"width"=>2,"height"=>1,"url"=>"organization.php",
"title"=>"<i class='fa fa-users'></i> General Chairs","text"=>"	
<ul>
	  <li>Nguyen Thanh Son, HCMC University of Technology, Vietnam</li>
	  <li>Roland Wagner, Johannes Kepler University Linz, Austria</li>
</ul>
"
);

$tile[] = array("type"=>"scrollText","group"=>1,"x"=>0,"y"=>1,"width"=>3,"height"=>1,"url"=>"organization.php",
"title"=>"<i class='fa fa-users'></i> Steering Committee","text"=>array(
"
<ul>
	  <li>Elisa Bertino, Purdue University, USA</li>
	  <li>Kazuhiko Hamamoto, Tokai University, Japan</li>
	  <li>Abdelkader Hameurlain, Paul Sabatier University, Toulouse, France</li>
</ul>",
"
<ul>
	  <li>Dieter Kranzlmueller, Ludwig Maximilians Universitty, Germany</li>
	  <li>Beng Chin Ooi, National University of Singapore, Singapore</li>
	  <li>Phan Thi Tuoi, HCMC University of Technology, Vietnam</li>
</ul>",
"<ul>
	  <li>Nabendu Pal, University of Louisiana at Lafayette, USA</li>
	</ul>"
),"scrollSpeed"=>2500);

$tile[] = array("type"=>"simple","group"=>1,"x"=>3,"y"=>1,"width"=>3,"height"=>1,"url"=>"organization.php",
"title"=>"<i class='fa fa-users'></i> Program Chairs","text"=>
"
	<ul>
	  <li>Tran Khanh Dang, HCMC University of Technology, Vietnam</li>
	  <li>Josef Küng, Johannes Kepler University Linz, Austria</li>
	  <li>Thoai Nam, HCMC University of Technology, Vietnam</li>
	</ul>
"
);

$tile[] = array("type"=>"scrollText","group"=>1,"x"=>0,"y"=>3,"width"=>3,"height"=>1,"url"=>"organization.php",
"title"=>"<i class='fa fa-users'></i> Publication Chairs","text"=>array("
	<ul>
	  <li>Nguyen Thanh Binh, HCMC University of Technology, Vietnam</li>
	  <li>Nguyen Hoang Dung, HCMC University of Technology, Vietnam</li>
	</ul>
	"
),scrollSpeed=>100000);

$tile[] = array("type"=>"scrollText","group"=>1,"x"=>3,"y"=>3,"width"=>3,"height"=>1,"url"=>"organization.php",
"title"=>"<i class='fa fa-users'></i> Program Committee","text"=>array(
"<ul>	<li>Stephane Bressan, National University of Singapore, Singapore</li>
	<li>Michael S. Brown, National University of Singapore (NUS), Singapore</li>
	<li>Alain Bui, University of Versailles Saint-Quentin-en-Yvelines, France</li>
	<li>Tien-Dung Cao, Tan Tao University, Vietnam</li></ul>
",
"<ul>	<li>Watchara  Chatwiriya, King Mongkut's Institute of Technology Ladkrabang (KMITL), Thailand</li>
	<li>Hyunseung Choo, Sungkyunkwan University, South Korea</li>
	<li>Somsak Choomchuay, King Mongkut's Institute of Technology Ladkrabang, Thailand</li>
	<li>Hoa Dam, University of Wollongong, Australia</li></ul>
",
"
<ul>	<li>Dinh-Hanh Dang, Coltech, Vietnam</li>
	<li>Andre Etienne, Paris XIII University, France</li>
	<li>Aditya Ghose, University of Wollongong, Australia</li>
	<li>Hoai-Phuong Ha, University of Tromsø, Norway</li></ul>
",
"
<ul>	<li>Kazuhiko Hamamoto, Tokai University, Japan</li>
	<li>Yo-Sung Ho, Gwangju Institute of Science and Technology (GIST), Korea</li>
	<li>Van-Quan Ho, Linköping University, Sweden</li>
	<li>Ryutaro Ichise, National Institute of Informatics, Japan</li></ul>
","
<ul>	<li>Tomohiko Igasaki, Kumamoto University, Japan</li>
	<li>Muhammad Ilyas, University of Sargodha, Pakistan</li>
	<li>Koichiro Ishibashi, The University of Electro-Communications, Japan</li>
	<li>Hiroshi Ishii, Tokai University, Japan</li></ul>
","
<ul>	<li>Ottar Johnsen, Applied Science University, Switzerland</li>
	<li>Eiji Kamioka, Shibaura Institute of Technology, Japan</li>
	<li>Surin Kittitornkun, KMITL, Thailand</li>
	<li>Hilda Kosorus, Johannes Kepler University Linz, Austria</li></ul>
","
<ul>	<li>Pierre Kuonen, Applied Science University, Switzerland</li>
	<li>Thanh-Sach Le, HCMC University of Technology, Vietnam</li>
	<li>Tien-Thuong Le, HCMC University of Technology, Vietnam</li>
	<li>Hoai-Bac Le, HCMC University of Technology, Vietnam</li></ul>
","
<ul>	<li>Lam-Son Le, HCMC University of Technology, Vietnam</li>
	<li>Gueesang  Lee, Chonnam National University, Korea</li>
	<li>Jonathan Lee, National Taiwan University, Taiwan</li>
	<li>Quan Le-Trung, HCMC International University, Vietnam</li></ul>
","
<ul>	<li>Fabio Massacci, University of Trento, Italy</li>
	<li>Takumi Miyoshi, Shibaura Institute of Technology, Japan</li>
	<li>Hiroaki Morino, Shibaura Institute of Technology, Japan</li>
	<li>Masaki Nakagawa, Tokyo University of Agriculture and Technology (TUAT), Japan</li></ul>
","
<ul>	<li>Nanjangud Narendra, IBM, India</li>
	<li>Nhat-Minh Ngo Nguyen, University of Trento, Italy</li>
	<li>Minh-Son Nguyen, HCMC International University, Vietnam</li>
	<li>Dinh-Thuc Nguyen, University of Science, Vietnam, Vietnam</li></ul>
","
<ul>	<li>Thanh-Binh Nguyen, Da Nang University, Vietnam</li>
	<li>Tuan-Dang Nguyen, University of Information Technology, VNUHCM, Vietnam</li>
	<li>Viet-Hung Nguyen, University of Trento, Italy</li>
	<li>Thanh-Binh Nguyen, HCMC University of Technology, Vietnam</li></ul>
","
<ul>	<li>Benjamin Nguyen, INRIA Rocquencourt, France</li>
	<li>Viet-Hung Nguyen Quoc, EPFL, Switzerland</li>
	<li>Alex Norta, Tallinn Technology University, Estonia</li>
	<li>Mizuhito Ogawa, JAIST, Japan </li></ul>
","
<ul>	<li>Masato Oguchi, Ochanomizu University, Japan</li>
	<li>Nabendu Pal, University of Louisiana at Lafayette, USA</li>
	<li>Eric Pardede, La Trobe University, Australia</li>
	<li>Tuan D. Pham, The University of Aizu, Japan</li></ul>
","
<ul>	<li>Cong-Duc Pham, University of Pau, France</li>
	<li>Tran-Vu Pham, HCMC University of Technology, Vietnam</li>
	<li>Cong-Kha Pham, The University of Electro-Communications, Japan</li>
	<li>Trong Nhan Phan, Johannes Kepler University Linz, Austria</li></ul>
","
<ul>	<li>Huu-Phu Phung, University of Gothenburg, Sweden, and University of Illinois at Chicago, USA</li>
	<li>Sathaporn Promwong, King Mongkut's Institute of Technology Ladkrabang, Thailand</li>
	<li>Thanh-Tho Quan, HCMC University of Technology, Vietnam</li>
	<li>Akbar Saiful, Institute of Technology Bandung, Indonesia</li></ul>
","
<ul>	<li>Reinhard Stumptner, SCCH, Austria</li>
	<li>David Taniar, Monash University, Australia</li>
	<li>Chivalai Temiyasathit, King Mongkut's Institute of Technology Ladkrabang, Thailand</li>
	<li>Quoc-Cuong To, INRIA Rocquencourt, France</li></ul>
","
<ul>	<li>Shigenori Tomiyama, Tokai University, Japan</li>
	<li>Dan-Thu Tran, University of Science, Vietnam</li>
	<li>Cao-De Tran, Can Tho University, Vietnam</li>
	<li>Van-Hoai Tran, HCMC University of Technology, Vietnam</li></ul>
","
<ul>	<li>Minh-Quang Tran, National Institute of Informatics, Japan</li>
	<li>Minh-Sang Tran Le, University of Trento, Italy</li>
	<li>Anh-Hoang Truong, Coltech, Vietnam</li>
	<li>Tuan-Anh Truong, University of Trento, Italy</li></ul>
","
<ul>	<li>Hong-Linh Truong, Vienna University of Technology, Austria</li>
	<li>Nhat-Quang Truong Minh, Can Tho University of Engineering and Technology, Vietnam</li>
	<li>Hoang-Tam Vo, National University of Singapore, Singapore</li>
	<li>Alain Wegmann, EPFL, Switzerland</li></ul>
","
<ul>	<li>Chin Wei-Ngan, NUS, Singapore</li>
	<li>Shigeki Yamada, National Institute of Informatics, Japan</li></ul>
"
),"scrollSpeed"=>2500);

$tile[] = array("type"=>"scrollText","group"=>1,"x"=>0,"y"=>2,"width"=>3,"height"=>1,"url"=>"organization.php",
"title"=>"<i class='fa fa-users'></i> Publicity Chairs","text"=>array(
"<ul>	  <li>Hoai-Phuong Ha, University of Tromsø, Norway</li>
	  <li>Minh-Quang Tran, National Institute of Informatics, Japan</li>
	  <li>Lam-Son Le, HCMC University of Technology, Vietnam</li></ul>"
));

$tile[] = array("type"=>"simple","group"=>1,"x"=>3,"y"=>2,"width"=>3,"height"=>1,"url"=>"organization.php",
"title"=>"<i class='fa fa-users'></i> Local Organizing Committee","text"=>
"
<ul>	
		<li>Tran Ngoc Thinh, HCMC University of Technology, Vietnam</li>
	  <li>Le Thanh Sach, HCMC University of Technology, Vietnam</li>
	  <li>Tran Ngoc Minh, HCMC University of Technology, Vietnam</li>
</ul>	  "
);
	
	
	
	
/* GROUP 3 */

$tile[] = array("type"=>"simple","group"=>2,"x"=>0,"y"=>0,"width"=>2,"height"=>2,"url"=>"visa.php",
    "title"=>"<i class=\"fa fa-file-text-o\"></i> VISA","text"=> "Visas are exempted for the citizens of the countries, which have signed a bilateral visa exemption agreement with Vietnam, including Thailand, Philippines, Malaysia, Indonesia, Singapore, and Laos.
    <p>If you need support for visa application, please feel free to contact us as soon as possible. Click here for more detail.</p>");


$tile[] = array("type"=>"simple","group"=>2,"x"=>2,"y"=>0,"width"=>4,"height"=>2,"url"=>"destination.php",
    "title"=>"<i class=\"fa fa-flag\"></i> Destination info","text"=>" <div id=\"figures\" style=\"float: right; margin: 0.5em\">
          <div style=\"margin: 0.5em\">
                <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0\" width=\"210\" height=\"158\" title=\"Sai Gon\">
                          <param name=\"movie\" value=\"img/saigon.swf\">
                                  <param name=\"quality\" value=\"high\">
                                          <embed src=\"img/saigon.swf\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"250\" height=\"200\">
                                                </object>
                                                      </div>
                                                      </div>Ho Chi Minh City is formerly known as Saigon located in the south of Vietnam, which is one of the fastest growing countries in the Asia Pacific region. It is the largest city and also the business capital of the country. Ho Chi Minh City is also the center for education, science, technology, industry and tourism...  ");


$tile[] = array("type"=>"simple","group"=>2,"x"=>3,"y"=>2,"width"=>3,"height"=>2,"url"=>"transportation.php",
    "title"=>"<i class=\"fa fa-fighter-jet\"></i> Transportation","text"=> "
If you arrived at Tan Son Nhat airport, you can take No. 152 air-con airport bus.
<ul>
<li>Time required : 60 minutes</li>
<li>Working Time : 06:00 ~ 18:30</li>
<li>Running Frequency : Every 30 or 60 minutes</li>
<li>Bus Stop : Airport Bus Stop, 1st Floor of Airport</li>
<li>Ticket price is 3000 VNĐ(approx. 0.2 USD)</li>
<li>Terminal stop - Ben Thanh Market(center of Ho Chi Minh city)</li>
</ul>
Alternatively, you can take taxi. Taxis from the airport to the city centre take 30 minutes and cost 5-7 USD.");

$tile[] = array("type"=>"scrollText","group"=>2,"x"=>0,"y"=>2,"width"=>3,"height"=>2,"url"=>"accommodation.php",
    "title"=>"<i class=\"fa fa-cutlery\"></i> Accommodation","text"=> array(" <img src=\"img/accommodation/truong_dua.png\" class=\"hotelImg\">
	  <span style=\"font-size:24px;\">Truong Dua Hotel</span><br>
	  <i>Address:</i> 90A/B 73-77 Ly Thuong Kiet, District 10 <br>
	  <i>Tel:</i> +84 - 8 - 38643525 <br>
	  <i>Fax:</i> +84 - 8 - 38643524<br>
	  <i>Distance to HCMUT:</i> 0.5 Km<br>","<img src=\"img/accommodation/palace.png\" class=\"hotelImg\">
	  <span style=\"font-size:24px;\">Palace Hotel Saigon</span><br>
	  <i>Address:</i> 56-66 Nguyen Hue, District 1<br>
	  <i>Tel:</i> +84 - 8 - 38292860 <br>
	  <i>Fax:</i> +84 - 8 - 38244229<br>
	  <i>Distance to HCMUT:</i> 7 Km<br>","<img src=\"img/accommodation/liberty.png\" class=\"hotelImg\">
	  <span style=\"font-size:24px;\">Que Huong - Liberty 2 Hotel</span><br>
	  <i>Address:</i> 129-133 Ham Nghi Blvd, District 1 <br>
	  <i>Tel:</i> +84 - 8 - 39224922 <br>
	  <i>Fax:</i> +84 - 8 - 38230776<br>
	  <i>Distance to HCMUT:</i> 6 Km<br>","<img src=\"img/accommodation/oscar.png\" class=\"hotelImg\">
	  <span style=\"font-size:24px;\">Oscar Hotel</span><br>
	  <i>Address:</i> 68A Nguyen Hue Blvd, District 1 <br>
	  <i>Tel:</i> +84 - 8 - 38292959 <br>
	  <i>Fax:</i> +84 - 8 - 38222958<br>
	  <i>Distance to HCMUT:</i> 7 Km<br>","<img src=\"img/accommodation/vien_dong.png\" class=\"hotelImg\">
	  <span style=\"font-size:24px;\">Vien Dong Hotel</span><br>
		<i>Address:</i> 275A Pham Ngu Lao St., District 1<br>
		<i>Tel:</i> +84 - 8 - 38368941<br>
		<i>Fax:</i> +84 - 8 - 38369010<br>
		<i>Distance to HCMUT:</i> 5 Km<br>
		(Special prices for ACOMP 2011's participants)","<img src=\"img/accommodation/bong_sen.png\" class=\"hotelImg\">
	  <span style=\"font-size:24px;\">Bong Sen Hotel 2 (Bong Sen Hotel Annex)</span><br>
		<i>Address:</i> 61 - 63 Hai Ba Trung St., District 1<br>
		<i>Tel:</i> +84 - 8 - 38235818<br>
		<i>Fax:</i> +84 - 8 - 38235816<br>
		<i>Distance to HCMUT:</i> 6.5 Km<br>
		(Special prices for ACOMP 2011's participants)","<img src=\"img/accommodation/sai_gon.png\" class=\"hotelImg\">
	  <span style=\"font-size:24px;\">Saigon Hotel</span><br>
	  <i>Address:</i> 41 - 47 Dong Du St., District 1<br>
	  <i>Tel:</i> +84 - 8 - 38299734 <br>
	  <i>Fax:</i> +84 - 8 - 38291466<br>
	  <i>Distance to HCMUT:</i> 7 Km<br>"));

?> 
