<?php
include('asset/php_module/db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Map || Fish Creek Provincial Park</title>
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/aside.css">
    <link rel="stylesheet" href="asset/css/svg.css">
    <link rel="stylesheet" href="asset/css/modal.css">
</head>
<body>
    <main>
        <h1 style="display:none">Fish Creek Interative map</h1>
        <div id="welcomeModal">
			<a href="#" id="welcomeclose">
                <span> </span>
                <img src="asset/images/x_button.svg" alt="close button" width="20" height="20" class="closeBtnImg">
            </a>
            <img src="asset/images/logo_color_squre.svg" width="150" height="150" id="welcomeLogo">
            <h2>Fish Creek Provincial Park</h2>
            <h3>Cryptid Directory and Map</h3>
            <p class="z-welcome">Welcome! Thank you for visiting our interactive map of Fish Creek Provincial Park. This map will direct you to the most intriguing points of interest in Canada's second largest urban park. There are also a number of mythical creatures rumoured to make their homes in the park. This guide will provide you with information on these creatures and where to potentially find them.</p>
            <p class="z-welcome">The map features many different icons which represent the featured areas. Touch or click on any of these icons to display more information on their coresponding locations. The legend on the right hand side will detail exactly what each particular icon represents, and the pop-out menu on the left will provide a full directory of the cryptids which have been reported in the area.</p>
            <p>We hope you enjoy your visit to Fish Creek Park, and that this map provides you with ample information to find your way around, as well as stay safe in the event that you encounter one of these creatures. Feel free to leave a comment detailing your experience at these locations, and have fun!</p>
            <button id="closeWelcome">Go to map</button>
        </div>
        <!-- Aside Bar Start -->
        <div id="sidebarTrigger">
            <a href="#"><img src="asset/images/hamburger.svg" alt="hamburger menu" width="55" height="55" id="hamburgerMenu"></a>
            <a href="index.php"><img src="asset/images/logo_color.svg" alt="logo" width="300" height="auto" id="logo_img" class="logo"></a>
        </div>
        <nav id="sideBar">
            <ul id="sidebar_top">
                <li class="sidebarTitle">
                    <a href="index.html"><img src="asset/images/logo_white.svg" alt="logo" width="300" height="auto" id="logo_img_side" class="logo"></a>
                    <a href="#" id="closeSideBar"><img src="asset/images/x_button.svg" alt="close button" width="30" height="30" class="closeBtn"></a>
                </li>
                <!-- MONSTER -->
                <li class="sidebaritems monster"><span class="sideBar_subheading">Monster Library<img src="asset/images/dropdown.svg" alt="Arrow" width="15" height="15" class="dropdownArrow"></span>
                    <ul class="hidden">
                        <?php
						$query = "SELECT * FROM monster_site";
						$sql = mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql)){ echo '
                        <li class="subList monster_listing" id="'.$row['monster_name'].'">
                            <a href="#"><img src="asset/images/monster/'.$row['monster_img'].'" width="40" height="40" alt="'.$row['monster_img'].'"class="monsterIcon"></a>
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">'.$row['monster_name'].'</span></a>
                                <a href="#"><span class="siteName">'.$row['site_name'].'</span></a>
                            </div>
                        </li>
						';}
                        ?>
                    </ul>
                </li>
                <!-- ACTIVITY -->
                <!-- <li class="sidebaritems"><span class="sideBar_subheading">Activity<img src="asset/images/dropdown.svg" alt="" width="15" height="15" class="dropdownArrow"></span>
                    <ul class="hidden">
                        <li class="subList monsters">
                            <a href="#"><img width="40" height="40" class="monsterIcon"></a>
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList monsters">
                            <a href="#"><img width="40" height="40" class="monsterIcon"></a>
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList monsters">
                            <a href="#"><img width="40" height="40" class="monsterIcon"></a>
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                    </ul>
                </li> -->
                <!-- PARKING -->
                <li class="sidebaritems"><span class="sideBar_subheading">Parking Lot<img src="asset/images/dropdown.svg" alt="" width="15" height="15" class="dropdownArrow"></span>
                    <ul class="hidden">
                        <!-- In loop from DB -->
                        <li class="subList parking">
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList parking">
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList parking">
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList parking">
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList parking">
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList parking">
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList parking">
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <li class="subList parking">
                            <div class="monster_siteContainer">
                                <a href="#"><span class="subTitleHeading">Batking</span></a>
                                <a href="#"><span class="siteName">Blue Devil Golf club</span></a>
                            </div>
                        </li>
                        <!-- ---------------- -->
                    </ul>
                </li>
            </ul>
            <img src="asset/images/text_logo_white.svg" alt="text logo in white" width="268" height="71" id="whiteLogo">
            <p id="trademark">All rights reserved © 2022 Fish Creek Provincial Park</p>
        </nav>
        <aside class="legend">
            <ul>
                <li class="legendTitle">
                    <img src="asset/images/dropdown.svg" width="18" height="18" class="legendctr"></span>
                    <span id="legendTop" class="legend_subheading">Legend</span>
                </li>
                <li class="legenditems" id="poi"><img src="asset/images/legend_icon/monster_icon.svg" art="site_icon" width="35" height="35" class="legendIcons"><span class="legend_subheading">Point of Interest</span></li>
                <li class="legenditems" id="parking"><img src="asset/images/legend_icon/parking.svg" art="parking_icon" width="35" height="35" class="legendIcons"><span class="legend_subheading">Parking Lot</span></li>
                <!-- <li class="legenditems" id="act"><img src="asset/images/legend_icon/activity.svg" art="activity_icon" width="35" height="35" class="legendIcons"><span class="legend_subheading">Activitiy</span></li> -->
                <li class="legenditems" id="mload"><img src="asset/images/legend_icon/main_road.svg" art="load_icon" width="35" height="35" class="legendIcons"><span class="legend_subheading">Main Road</span></li>
                <li class="legenditems" id="trail"><img src="asset/images/legend_icon/trail.svg" art="trail_icon" width="35" height="35" class="legendIcons"><span class="legend_subheading">Trail</span></li>
                <li class="legenditems" id="river"><img src="asset/images/legend_icon/river.svg" art="river_icon" width="35" height="35" class="legendIcons"><span class="legend_subheading">River</span></li>
            </ul>
        </aside>
        <aside class="bottomControl">
            <a href="#" class="zoomctr" id="welcomeOpen"><img src="asset/images/logo_color_squre.svg" width="35" height="35" alt="fishcreek_logo"></a>
            <a href="#" class="zoomctr" id="zoomIn"><img src="asset/images/zoom_in.svg" width="35" height="35" alt="zoom_in"></a>
            <a href="#" class="zoomctr" id="zoomOut"><img src="asset/images/zoom_out.svg" width="35" height="35" alt="zoom_out"></a>
            <a href="#" class="zoomctr" id="attribution"><img src="asset/images/more.svg" width="35" height="35" alt="more_icon"></a>
        </aside>
        <!-- Aside Bar End -->
        <div id="blackBG"></div>
        <div id="svgbg">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="bg_svg" x="0px" y="0px"
	        viewBox="0 700 1085 1920" style="enable-background:new 0 0 1085 1920;" xml:space="preserve">
				<style type="text/css">
					.st0{display:none;}
					.st1{display:inline;}
					.st2{fill:#231F20;}
					.st3{font-family:'MyriadPro-Regular';}
					.st4{font-size:14px;}
					.st5{fill:#ED1C24;}
					.st6{fill:#B5DEC8;}
					.st7{fill:#D1D3D4;}
					.st8{opacity:0.3;fill:#D1D3D4;}
					.st9{fill:#39ADE3;}
					.st10{fill:none;stroke:#39ADE3;stroke-width:8;stroke-miterlimit:10;}
					.st11{fill:#A7A9AC;}
					.st12{fill:none;stroke:#FFE293;stroke-width:5;stroke-miterlimit:10;}
					.st13{fill:none;stroke:#62C4B3;stroke-width:5;stroke-miterlimit:10;}
					.st14{fill:none;stroke:#62C4B3;stroke-width:5;stroke-linejoin:round;stroke-miterlimit:10;}
					.st15{fill:none;stroke:#E55625;stroke-width:2;stroke-miterlimit:10;}
					.st16{fill:#E55625;}
					.st17{fill:#A90000;}
					.st18{fill:#FFFFFF;}
					.st19{fill:#455A52;}
					.st20{fill:#4B5C00;}
					.st21{fill:#E72700;}
					.st22{fill:#CB00FF;}
					.st23{fill:#007303;}
					.st24{fill:#A20076;}
					.st25{fill:#B90049;}
					.st26{fill:#3F71D1;}
					.st27{fill:#1751FF;}
				</style>
				<g id="parking_x5F_lot" class="st0">
					<g class="st1">
						<text transform="matrix(1 0 0 1 539.8342 319.3374)"><tspan x="0" y="0" class="st2 st3 st4">Loop</tspan><tspan x="0" y="14" class="st2 st3 st4">Parking</tspan></text>
					</g>
					<g class="st1">
						<text transform="matrix(1 0 0 1 591.7968 938.7132)"><tspan x="0" y="0" class="st2 st3 st4">South Fish</tspan><tspan x="0" y="14" class="st2 st3 st4">Creek Bridge</tspan></text>
					</g>
					<g class="st1">
						<text transform="matrix(1 0 0 1 524.437 1224.8557)"><tspan x="0" y="0" class="st2 st3 st4">Fish Creek</tspan><tspan x="0" y="14" class="st2 st3 st4">Boat Ramp</tspan></text>
					</g>
					<text transform="matrix(1 0 0 1 444.5907 1224.8552)" class="st1"><tspan x="0" y="0" class="st2 st3 st4">Sikome</tspan><tspan x="0" y="14" class="st2 st3 st4">Parking</tspan></text>
					<text transform="matrix(1 0 0 1 504.2088 1459.8082)" class="st1"><tspan x="0" y="0" class="st2 st3 st4">Blue Devil</tspan><tspan x="0" y="14" class="st2 st3 st4">Parking</tspan></text>
					<g class="st1">
						<text transform="matrix(1 0 0 1 643.5004 1219.8896)"><tspan x="0" y="0" class="st2 st3 st4">McKenzie Meadows</tspan><tspan x="0" y="14" class="st2 st3 st4">Parking</tspan></text>
					</g>
					<g class="st1">
						<text transform="matrix(1 0 0 1 508.0945 458.3781)"><tspan x="0" y="0" class="st2 st3 st4">Mallard</tspan><tspan x="0" y="14" class="st2 st3 st4">Point</tspan></text>
					</g>
					<g class="st1">
						<text transform="matrix(1 0 0 1 685.6015 442.6001)"><tspan x="0" y="0" class="st2 st3 st4">Douglas Park</tspan><tspan x="0" y="14" class="st2 st3 st4">Public Boat</tspan></text>
					</g>
					<g class="st1">
						<text transform="matrix(1 0 0 1 648.2414 828.092)"><tspan x="0" y="0" class="st2 st3 st4">Mountain Bike</tspan><tspan x="0" y="14" class="st2 st3 st4">Park Parking Lot</tspan></text>
					</g>
				</g>
				<g id="points_x5F_of_x5F_interest">
					<g>
						<text transform="matrix(1 0 0 1 503.1449 1426.6787)"><tspan x="0" y="0" class="st5 st3 st4">Blue</tspan><tspan x="0" y="14" class="st5 st3 st4">Devil</tspan></text>
					</g>
					<text transform="matrix(1 0 0 1 448.0933 1193.8623)" class="st5 st3 st4">Sikome</text>
					<g>
						<text transform="matrix(1 0 0 1 489.056 1053.0743)"><tspan x="0" y="0" class="st5 st3 st4">Hull&apos;s</tspan><tspan x="0" y="14" class="st5 st3 st4">Wood</tspan></text>
					</g>
					<g>
						<text transform="matrix(1 0 0 1 371.0027 927.199)"><tspan x="0" y="0" class="st5 st3 st4">Bow</tspan><tspan x="0" y="14" class="st5 st3 st4">Valley</tspan><tspan x="0" y="28" class="st5 st3 st4">Ranche</tspan></text>
					</g>
					<g>
						<text transform="matrix(1 0 0 1 575.0515 850.7733)"><tspan x="0" y="0" class="st5 st3 st4">Mountain Bike</tspan><tspan x="0" y="14" class="st5 st3 st4">Skills Park</tspan></text>
					</g>
					<g>
						<text transform="matrix(1 0 0 1 661.1362 520.8182)"><tspan x="0" y="0" class="st5 st3 st4">Poplar</tspan><tspan x="0" y="14" class="st5 st3 st4">Island</tspan></text>
					</g>
					<g>
						<text transform="matrix(1 0 0 1 361.0734 1036.9664)" class="st5 st3 st4">Ice Caves</text>
					</g>
					<g>
						<text transform="matrix(1 0 0 1 647.2918 1186.4768)"><tspan x="0" y="0" class="st5 st3 st4">McKenzie</tspan><tspan x="0" y="14" class="st5 st3 st4">Meadows</tspan></text>
					</g>
					<g>
						<text transform="matrix(1 0 0 1 433.9082 946.2442)"><tspan x="0" y="0" class="st2 st3 st4">Visitor</tspan><tspan x="0" y="14" class="st2 st3 st4">Centre</tspan></text>
					</g>
					<g>
						<text transform="matrix(1 0 0 1 719.9503 778.9781)" class="st2 st3 st4">Bankside</text>
					</g>
				</g>
				<g id="bg">
					<rect x="-0.2" class="st6" width="1083.4" height="1920"/>
				</g>
				<g class="unknown">
					<path class="st7" d="M-0.2,751.2c0,0,82.2,9.8,124.3,78.2c0,0,4.4,17.8,6.1,38.2c0,0,28.9,28.4,52.6,34.7c0,0,18.4,32,21.9,47.1
						c0,0,21,40,46.5,53.3l29.8,5.3c0,0,14.9,31.1,57.9,31.1l46.5,15.1c0,0,4.4,71.1,3.5,84.4c0,0-24.6,91.6-28.9,103.1
						c0,0-4.4,85.3-6.1,99.6l-13.2,18.7c0,0,11.4,8.9,22.8,12.4c0,0,28.1-21.3,49.1-14.2c0,0,35.1-38.2,71-34.7c0,0,26.3,5.3,31.6,13.3
						v103.1c0,0,35.1,78.2,54.4,112l3.5,23.1l74.5,54.2l8.8,42.7l-30.7,25.8h-61.4l-34.2-16.9c0,0-38.6-8-56.1,37.3v68.4l44.7,42.7
						l68.4,11.6l35.1,31.1l0.9,47.9l-300.8-0.1l-58.8-65.7l-64.9-142.2L80.3,1402.8c0,0-7.9-34.7,7-52.4l-5.3-81.8l-59.6-16.9
						l-22.6-49.8V751.2z"/>
					<path class="st7" d="M426.5,2.2c0,0,1.8,63.6,3.5,60.7s59.8-14.3,59.8-14.3l4.1,28.5l-36.3,49.4l-7.6,24.4l57.4,13.7l48.1,22.6h-82
						l21,36l14.1,28.2l20.2,27.4l2.3,12.5l15.8,18.4l-1.2,12.5l32.8,39.8l18.2,11l12,11.6l32.6,25.1l52.1,22.5l14.9-25.9l10.8,6.7
						l54.7,59.1l12.3,17.4l4.8,39.2l9.4,12.5l6.4,25.3l10.3,14l13.5,57.4v45.8l-4.4,57.1l-3.8,32.4c0,0-22.9,22.6-28.1,49.1
						c0,0-10,14.3-10,21.7c0,0,5.3,9.8,5,16.7l-10.8,10.1l-0.3,11.3l-17.3,1.5l-30.8,33l2.1,8.9h-12l-15.5,31.4l4.1,11.1h-15.2
						l-1.2,16.4l-8.2-8l-24.6,32.4l1.5,9.8l7.9,1.5l-0.3,6.8h-6.7l2.3,11l12,48.8l7.6-5.1l8.8,2.4l2.3,2.7l-6.2,8.6l-0.6,10.1l15.2,8.3
						l-0.9,3.3l-16.7,1.8l-0.6,12.5l6.2,17.2l6.4,8.3l6.7,23.5l-0.3,26.5l-7.1,32.6l-3.1,21.6l2,23.9l9.9,27.7l20,46.4l8.8,1.8
						l16.3-21.9l5.7,17.4l17.1,4.5l0.4,16.9l-7,8.9l-14.9-3.1l-9.7,11.1l28.6,53.5l22.9,9.8l9.2,21.9l6.6,3.1l11.4,33h27.7l9.9,56.4
						l26.2,29.2l19.8,9.8l5.3,26.3l-18.5-24.1l-32.1-13.4l-36.5-14.3l-27.7,7.1l-35.6,18.7l-4.8,2.6c0,0,0.3,38.2,31.4,75.6l38.7,60.1
						l25.8,73.1l22,33.6l33.1,33.6l46,7.7l28.1-37.5l8.2-16.9l40.4-44.3l39-16.7l15.6,10.7V451.1l-33.7-23.2c0,0-7.9-79.4-27.3-115.1
						v-53.5l30.8-33.9l28.6-12.5V2.2H426.5z"/>
					<path class="st7" d="M381.8,2.2l7.9,65.9c0,0,51.2,76.3,28.9,123.1l-6.6,24.1l25,45.5l17.1,34.8c0,0,78.8,83,47.3,120.4h35.5
						c0,0,13.1,60.2,46,91l-9.2,84.3l2.6,44.2l65.7,74.9l74.9,37v39.2c0,0-2.6,38.8-99.9,69.6c0,0-63.1-21.4-132.7-6.7l-11.8,6.7
						l-7.9,74.9l-18.4,6.7l-21-8l-26.3-36.1l-38.1-1.3l-10.5-10.7L320,900.2l-15.8-12l11.8-33.4c0,0-15.8-21.4-11.8-41.5
						c0,0-32.9-28.1-42-81.6c0,0-26.3-9.4-39.4-45.5c0,0-55.2-2.7-59.1-37.5c0,0-22.3-16.1-26.3-34.8v-18.7L44,568.4l-44.2,2.7V2.2
						H381.8z"/>
					<polygon class="st8" points="-0.2,749.7 35.2,747.7 122.7,808.1 131.5,873.9 189.2,905.9 231.2,987.7 261.4,1007.2 275.4,1007.2 
						306.5,1034.8 384.3,1052.1 389.1,1118.3 376.5,1329.6 375.9,1362.8 416.7,1355.1 457,1327.2 517.6,1329 517.6,1442.3 572.9,1565 
						650.3,1629 659.5,1669 629.3,1701 561.1,1701 526.9,1673 498.1,1681 470.5,1719.7 469.2,1783.7 507.3,1827.7 571.6,1838.3 
						621.4,1867.7 622.8,1920.1 -0.2,1920.1 	"/>
				</g>
				<g class="river">
					<path class="st9" d="M857.7,1825.5l-27.5-75.7l-38.8-60.1c0,0-27-21.3-31.4-75.6l-3.8-80.8c0,0,19.7-30.9,3.7-57.7
						c0,0-11.9-40.4-20.7-55.9c0,0-12.9-30.9-71.6-36.3c0,0-36.4-13.1-72.8-72.5c0,0-47.9-42.4-24.5-127.5c0,0,37.9-7.6,51.1-52.6
						c0,0-2.2-33.4-11.9-55.7c0,0-58.1-19.2-55.9-68.7c0,0,1.8-29,44.5-35.2c0,0,59-4,92.5-33.4c0,0,37.9-17.4,65.6-63.3
						c0,0,29.1-50.8,35.7-66.4c2.2-2.2,11.9-24.5,18.5-51.3l7.5-21l1.3-69.6l-17.6-13.8l0.4-8c0,0,10.6-8.9,11.4-11.1
						c0.9-2.2,1.3-23.2,1.3-23.2l-6.6-9.8l-1.8-17.8l-9.2-7.1c0,0-4-19.2-14.5-35.2l-4.8-33L749,491.7c0,0-49.3-54-105.2-72.7
						c0,0-48-4.9-52.8-10.7l-7-15.6l-18.1-7.6c0,0-22-14.7-29.1-36.1c0,0-25.1-23.6-32.1-43.7c0,0-14.1-9.4-22.5-28.1
						c0,0-20.7-2.7-37.4-26.3l-17.2-27.6c0,0-4.4-19.2,12.3-38.8c0,0,4.8-63.3-33-115.1c0,0-6.2-13.4-4.8-31.2v-36h-20.3l7.8,64.7
						c0,0,36.6,53.6,34.7,102.3c0,0-5,29.1-12.1,46l25.1,45.5l44.5,49.1l37,48.6l28.2,31.2l23.3,24.5c0,0-7.9,27.2,0,34.8
						c0,0,11.9,3.1,9.2,16.9c0,0-1.8,12,5.3,19.2l11.4,18.7l35.2,28.1c0,0,12.3,7.1,20.7,0c0,0,15.4-3.1,20.7,13.4l13.2,18.3l14.1,16.9
						c0,0,7.5,43.3,6.6,63.3l-2.6,5.8c0,0-17.6,12.9-22.5,21l-3.1,5.8l1.3,20.1c0,0,1.8,11.1,7.9,13.4c0,0,23.3,14.3,52-4
						c0,0,33.5,4.5,37.4,25c0,0,5.7,53.5,0,64.7l-11.9,22.3c0,0-33.9,70-55.9,84.3c0,0-15.9,11.6-18.1,22.7c0,0-49.3,27.8-80.1,25.3
						l-35.2,6.7l-32.6,32.2l-3.5,24.5c0,0-5.3,52.6,50.2,69.6l12.3,2.2c0,0,9.7,42.8-3.1,54c0,0-44,15.2-50.2,60.7
						c2.2,1.8-4.4,29.9-4,59.8c0,0,0.8,25.9,35.6,51.3l23.8,45c0,0,16.7,22.7,33.9,28.1c0,0,34.3,12,48.4,14.3c0,0,40.1,4.5,45.8,37.9
						c0,0,13.2,30.8,7.5,74.9l3.5,116c0,0,10.1,67.3,25.5,101.2c0,0,24.7,12.9,33.9,45c0,0,16.3,25,24.7,60.7c0,0,14.1,64.9,28.6,86
						h53.7C910.2,1920,864.1,1841.5,857.7,1825.5z M780.5,603.1l5.8-13l-1.1-5.6l-0.9-6.5h6.9l3.7,2.2l6.7,6.1l2.3,16.9l2,8.5l0.8,16.9
						l-13.2,16.6l-1.1,2.7l-3.4-3.2l-5-3.9l-3.6-13.8V603.1z M761.2,706.3c-9.5-11.3-32.1-3.4-32.1-3.4c-12.3,7.1-30.4,4.8-30.4,4.8
						c-11-2.4-14.2-10.7-14.2-10.7l-0.3-22.1l6.8-4l18.1-18.3l2.5-10.4l-1.6-48.8l-5.6-22.4l-11.6-10.9l-16.3-16.5l-3.4-8l-11.2-10
						l-11.6-1.3c-2.2,5.9-8.1,5.5-8.1,5.5c-5.1-1.4-7.5-6.2-7.5-6.2l-8-2.8c-9.6-4.6-23.1-15.8-23.1-15.8l-16.3-22.1v-16.5
						c-1.1-7.8-3.7-11.8-3.7-11.8l-8.7-15.1l-4.5-1.3v-4.5l6.4-16.4l23.6,10.5l5.2,4.2l32.3,1.8c20.7,0.9,50.2,25,50.2,25l35.9,36.3
						l2.9,9.4c10.8-1.6,27.1,6.9,27.1,6.9c12.1,7.6,16.1,19.2,16.1,19.2l1.3,38.8c0.4,6.7-5.6,24.7-5.6,24.7c-11,17.8-4.3,39.7-4.3,39.7
						l6.8,15.8l7.9-0.1l8.4,14.9l21,29.4c6.6,8.2,0,43.1,0,43.1C803.2,758.8,790,781,790,781h-1.5c1.3-10.7-6.9-54-6.9-54
						C776.2,715.3,761.2,706.3,761.2,706.3z"/>
					<polygon class="st9" points="636.4,1103.4 636.4,1109.9 645.5,1113.1 649.1,1109.4 647.3,1098.4 	"/>
					<polygon class="st9" points="636.4,1141.4 636.4,1165.7 627.5,1165.7 628.2,1173.3 637.4,1178.3 648.1,1168.7 649.7,1155.1 
						645.9,1144.6 	"/>
					<polygon class="st9" points="636.4,1120.4 636.4,1125.6 648.1,1132.9 648.1,1127.4 646,1124.7 	"/>
					<polygon class="st9" points="625.9,1012.9 627.5,1033.3 616.8,1041.6 608.5,1043.1 608.5,1053.6 618.9,1050.3 636.4,1034.3 
						638.8,1011.1 631.1,1010.3 	"/>
					<polygon class="st9" points="637.4,1038.8 637.4,1055.8 645.9,1058.9 648.2,1055.4 648.2,1038.8 	"/>
					<polygon class="st9" points="628.2,1066.9 635.4,1077.4 641.4,1077.4 639.4,1063.1 633.3,1063.1 	"/>
					<polygon class="st9" points="610,1058.9 623.6,1066.8 622.6,1070.3 610,1071.2 	"/>
					<path class="st9" d="M469.1,1184.7c0,0,3.3-11.9,9.8-16.3c0.3-1.8,14.5-1.2,14.5,0c0,1.2-1.5,16.3-1.5,16.3s-0.9,10.4-13.6,10.7
						l-2.1,11c0,0-2.1,17.5-21.6,12.7c0,0-6.5-5.3-6.5-6.2c0-0.9,0-4.4,0-4.4l6.8-2.7l-3.6-7.1C451.4,1198.6,451.6,1187.1,469.1,1184.7z
						"/>
					<path class="st10" d="M544.1,1049.7l-4.2,2.5c0,0-0.8,7.9,2.1,13c0,0,2.8,6.8-4.1,9.4c0,0-4.6,1.1-10.2-2.4l-10.9-11.2
						c0,0-3-3.6,0-7.7c0,0,4.8-10.6-0.6-17.5l-26.1-16.5c0,0-4.7-1.8-8.3,0l-6,9.2c0,0-7.4,4.3-12.7-0.1l-15-4.2l-10.7,2.1l-24.7-0.4
						l-31.7,3.6l-9.3-3.6l-14.1-9.9c0,0-18.8-18.9-18-42.3c0,0,9.2-16.5-2.7-19.3c0,0-17.9,1.8-23.9-9.1l-7.7-10.4l-8.3-14.1l-4.9-9
						c0,0-2.7-6.7-9-5.3l-1.8,2.8l-0.7,11.3l-4.9,10.4c0,0-5.7,5.4-13.3,0.9c0,0-6.9-3.9-7-12.3c0,0-0.6-8.9-13.7-8.8l-7.1,2
						c0,0-6.2,1.8-10.1-3.4l-6.6-12.3c0,0-0.5-10.1,6.3-9.9c0,0,5.9-1.2,6.9-2.5c0,0,6.1-3,6.9-13.1c0,0-12.4-20.4-17.9-23.9l-18.2-16.6
						c0,0-4.8-7.9,1-16.2c0,0,4.9-10.7-3.9-14.2l-8.8-1.6c0,0-8.4-2.7-6.2-10.2c0,0,0.7-5.9-7.1-10c0,0-7.3-8.4-20.1-8.4
						c0,0-9.1,3.3-17.2-3.7c0,0-7.5-7.2-10.1-15.8l7.3-4.9c0,0,7.9-9,5.2-16c0,0-0.7-5.5,9-5.7c0,0,8.5,0.4,1-13.9c0,0-2.4-6.4-11.6-6.2
						c0,0-3.8-6.1,1.2-12.8c0,0,0.1-15.6-5.4-19c0,0-6.7-5.7-10.1-5.9c0,0-6-1.9-6.8,3.9c0,0-4,3.3-5.8,1.6l-2.4-5.9
						c0,0-5.3-12.6-15.6-12.4l-3,6.4c0,0-15.4-1.3-15.6-1.3c-0.2,0-5.2-1.3-6.4-9.8l-1-10.7c0,0,1.7-6.1,9-6.7c0,0,10.4-3.6,15.6-3.4
						c0,0,4.6-4.3-1.7-6.9l-11.3-4.8c0,0-8.8-1.3-15,2.6c0,0-4.4,3.4-6.7,0.1c0,0-0.8-5.2,0.7-7l-7.9-5.4l-8.7,8l-0.6,2.8l-11.7,0.9
						c0,0-7.8-2.7-8.7-10.3c0,0-9-5.8-24.2-5.1"/>
					<path class="st10" d="M182.6,784.3l6.1-5.6l-0.7-13.7c0,0-0.6-4.1,6.7-4.4c0,0,6-1.6,10.2,4.6l5.5,9.4c0,0,3.3,5.2,0,10.3
						l-3.4,10.2l-5.3,7.7"/>
					<path class="st10" d="M476.2,1106.6c0,0,2.7,18.9,8.5,25.7c0,0,5.6,7.3,20.1,3.3c0,0,11.6-4.9,13.4-11.8l1.8-10.3l4.2-2.6l13.2-9.4
						c0,0,4.9-1.7,7.2,1.1l6.8,6.9c0,0,2.3,2.2,1.1,5.9c0,0-5.9-1.3-6.4,1.2l-2.1,7c0,0-1.8,14.7-0.8,19.8c0,0-2.4,6.1-6.2,8.2l-9.7,7
						l-13.3,7.8c0,0-4,2-3.2,7.4c0,0,0.2,5.8,1.6,5.6c0,0,6.7-1.9,7.4,0c0,0,0.2,4.9-0.7,7.1c0,0-3.9,8.3-10.7,11.4l-6.8,4.7l-13.8,7.3
						l-0.2,7.3c0,0,2.1,5.7,10.8,5.9c0,0,11.2-1.6,17.4-5.5c0,0,8.1-4.3,12.6-2.4c0,0,11.8,3.5,14,8l1.5,2.1"/>
				</g>
				<g class="main_x5F_road">
					<path class="st11" d="M-1.6,1297.5h24.1l101.8,263.7l75.9,199.8l80.3,159h18.4l-68.4-140.4l-17.5-30.5L93.8,1436.4l-55.5-138.9h290
						l96.8-3.6c0,0,75-0.4,133.3-24l126.8-34.2l183.8-51.1l88.6-26.2l3.1,82.6l57,147l35.5,104.3l31.9,91.9v-59.1l-38.9-127.9
						l-50.4-122.5l-24.6-65.3l-1.8-54.6l29.4-7.1l51.8-4l34.5-12.4v-29.7l-27.5,5.8l-46.5,22.2l-42.1,11.5l-0.9-247.8l-0.4-97.7
						l-1.3-249.5l-1.3-119c0,0-10.1-108.3-136.9-159.8l-129-22.6c0,0-105.3-32-140.8-51.9L518.6,175c-8.6-3.9-17.6-6.9-26.7-9.1
						l-36.7-8.7l-54.6-13.6c0,0-70.2-21.8-78.1-92.8l-5.7-42h-10.5l20.6,102l10.5,33.3c0,0,2.2,76.8-38.2,81.7l-24.1,6.7l0.4,8l26.3-6.7
						c0,0,26.8-7.5,50-31.1l5.5,64.8h7.7l2.2-66.6c0,0,10.4-40.2,30.3-46.6l55.7,13.8c0,0,65.4,15.1,102.2,35.1l43.9,18.6
						c0,0,48.2,24.4,109.2,33.7l104.8,20.4l29.4,8.4c0,0,89.5,33.7,109.2,141.6l4.2,110.3v171.1l0.6,149.2l-1.2,58l2.3,190.6l1.8,39.7
						l-265.5,73.9l-132.2,38c0,0-73.1,22.5-135.7,22.5l-188.9,3L31,1280.3c0,0-25.4-71.6-32.6-84.1v39.7c0,0,8,12.4,16.8,43.2H-1.6
						V1297.5z"/>
					<path class="st11" d="M890.2,253.4c0,0,0.6,21.3-5.5,27.7c0,0-7.9,9.7-12.1,10.6l16,9.9l5.4-26.1v-21L890.2,253.4"/>
					<path class="st11" d="M893.9,278.6l3.9,28.7l4.6,3.9l-2.9-18.2c0,0,4.4,10,13.9,21.1c0,0,6,6.7,6.2,13.9l3.5,3.9
						c0,0,0.1-12.1-6.3-19.4c0,0-13.9-15.4-15.3-21.4l-2.9-12.8L893.9,278.6"/>
					<path class="st11" d="M679.2,761.4l-7.4-7.1l-31.1-16l-21.8-35.8l-18.7-32.2L577,645.1l-5.7-1.9c-19-2.2-20.7-17.8-20.7-17.8
						l-4.5-15.9l-2.1-27.9l5.6-12.9l6.2-20.6v-27.4l-41,3.1l-39.4,15.8l-13.6,5.6l-39.6,2l-72.2-0.9c-21.9,2-48.3,10.2-48.3,10.2
						c-5,0.3-6.7-2.7-6.7-2.7c-5.5-13.3-8.8-44.1-8.8-44.1c-1.5-33.5,2.6-51.6,2.6-51.6c6.4-40.3,33.3-73.2,33.3-73.2l23.6-35
						c16.6-16.9,19.8-49.5,19.8-49.5l1.2-32.9h-8.7v33.5c0,0-3.3,25.6-22.4,50.4l-29.9,48.4c0,0-8.5,13.1-15.9,33.6
						c0,0-5.4,16.4-7.3,31.9c0,0-1.8,29.9,0,57l1.8,31.4c0,0,0.1,6.1-7.7,7.3l-37,10.6l-22.5,3.3L141,594.1l-37.9-9.1l1.5-15l2-21.6
						l2-93.2l0.1-33.5c0,0,1.9-8,5.1-11.9l20.3-29.5l26.7-37.6l10.5-17.3l6.8-64.2l-0.4-11.3c0,0,2.6-5.8,9.4-8.2l89.3-1.1l-0.4-8
						l-83.6,0.9c0,0-9.4-0.4-9.4-9.6l5.5-76.7l2.2-34.5l1.3-28.9l0.4-9c0,0,0.3-6.7-7-13.5l-46.2-55H135L183.5,65c0,0,4.4,5.9,4.4,10.8
						l-5.6,83.2l-6.1,65.3c0,0-1.6,8.1-10.8,9l-45.6,1H-0.2v8.9l162.3-0.7c0,0,8.1,0.9,8.8,6.9l1.3,11.3l-6.6,60.2c0,0-1.5,8-7,13.3
						l-47.5,67.6c0,0-7.4,11.8-8.1,23.6l-1.5,63.1l-0.2,58.9c0,0-2.8,31.3-3.9,33.6L49,569.7l-49.2,0.2v5.6l48.9-1.1L99.2,591l33.6,7.4
						l9.3,0.6l64.2-14.3c0,0,12,0.3,12.8,9.7l2,8.1c0,0,2.9,11.3,17.2,13.9l39.4,11.3c0,0,18.7,3,24.8,20.1l37.7,60.4
						c0,0,25.9,41.5,26.8,58.7l1.2,45l2.2,8.1l15,23l6.4,15.1v38.6l5.3,0.2v-38.8l-8.5-19.3l50.1-27.4c4.4-2.4,9.9-0.8,12.5,3.5
						l12.9,22.3l5.3,0.3l7.3-3l15.2-7.4l45.1-10.7c0,0,33.7-8.9,55.9,0.9l6.6,2.1h30.9l28.9-6.7l11.2-9.3c0,0,8.6-14.1,10.2-25.6
						L679.2,761.4z M433,806.6L394.4,830c-6.9,5.5-11.5-1.3-11.5-1.3l-9.3-23.7l-0.7-33.6c1.1-18-18.4-50.2-18.4-50.2L329,682.3
						l-21.8-38c-6.3-16.9-29.3-22.7-29.3-22.7l-33.9-9.8c-18.6-2.4-19-16.7-19-16.7l-1.8-14l49.9-11.1c15.8-2.9,18.2,7.6,18.2,7.6
						c7.6,34.4,30.4,71.6,30.4,71.6l58,80.2l59.5,64C441.2,805,433,806.6,433,806.6z M442.6,788.6l-65.7-74.9l-36.6-49.6
						c-18.7-19.1-34-58.4-34-58.4l-8.8-28.9c-1.8-13.1,8.8-15.3,8.8-15.3c31.1-10.5,48.8-9,48.8-9l106.5-2.7l5.7-3.2l48.4-19.8l36.5-2.2
						l-0.2,22.2l-2.8,13.1l-9.2,21.1l3.1,28.7L546,631c6.3,15.8,26.7,16.7,26.7,16.7l2.4,2.2l23.6,27.9l14.7,27.5
						c-17.5,15.1-45.5,20.2-45.5,20.2l-29.1,17.1l-33,18.2l-16,9.8l-30.9,22.1C448.7,797.4,442.6,788.6,442.6,788.6z M676,778.3
						c0,0-4,24.8-20.1,32l-23.4,4.9h-31.3c0,0-12.5-4.9-38.5-5.8c0,0-12.7-0.1-25.1,2.7l-44.6,11.3l-15.9,7.4c0,0-7,4.7-10.7-3.6
						L457,813c-3.1-4.7-2-11,2.4-14.3l19.8-14.9l34-20.4l47.3-28.1l8.5-6.2l21.4-6l3.9-1.6c0,0,16.2-6.7,22.1-12.4l21.2,31.8l5,4.7
						c0,0,28.4,11.6,30.2,16C673,761.4,677.1,769,676,778.3z"/>
					<polygon class="st11" points="460.8,837.4 473.9,863.3 475.5,862.6 473.9,856.8 466.2,837.7 	"/>
					<g>
						<path class="st11" d="M672.4,411.7l5.1,6.2l11.7,5.9l10.8,1.6l12.6,1.5l8.8,1l0.6-1.1l-12.9-2.3l-11.2-1.5l-9.2-2.5
							c-2-0.5-4-1.2-5.9-2.1c-3.6-1.8-9.4-5.9-12.8-17.4l2.4-23.4c0.2-1.6,1.5-2.7,3.1-2.7c6.8,0.1,23.4,0.2,24,0
							c0.7-0.3,15.3-0.8,15.3-0.8l21.4,12l17.9,10.6l13.2,3.9l8.9,0.2l9,0.1l13,1.2l10.4,0.5l14.7,4.3l11.1,5.4l15.2,8.7l19.8,13.9
							c0,0,12.8,12.1,16.2,23.3c0,0,2.8,8.5,2.9,22.2l-0.4,17.2l-8.4,14.8l-4.7,9c0,0-6.9,9.1-9.8,20l-0.6,18.9h-41.7h-12.3l-1.8,3v1.3
							l3-1.5l11.6,0.9l41,0.7l0.3,15.5c0,0,1.9,14.7,17,26.2c0,0,7.6,9.9,8,20.6v21.4c0,0,0.4,10.9,12,21.3l0.9,3.7v33.7l-9.3,15.6
							l-2.3,6.1l-1.3,7.1l0.1,26.6c0,0,0.1,10.3-1.2,14.1l-0.4,6.7h5l0.6-7.3c0,0,2.3-10.8,3.2-13.3V734c0,0,2.3-14.1,11.6-23.2v-18.6
							v-19.4c0,0-0.6-7.1-6.3-12.8c0,0-6.2-5.9-6.9-12.4v-11.9v-14.2c0,0-4.8-16.5-12.1-22.1c0,0-11.4-7.5-12.1-19.1l-0.4-15.7l89.1,0.1
							v-5.9h-84.2c0,0-5.8,0.1-5.3-5l0.8-11.3l14.8-22.5l10.4-20.5l-1.1-26l-2.9-15.6c0,0-8.4-18.4-17.2-25.3l-21.9-16.4l-14.2-9
							l-18.2-8l-16.6-1.4l-21.4-1.4l-14.9-1.2c0,0-19.8-6.7-23.3-10.4l-26.3-15.6l-13-1l-26.6,1.5l-7.9-1.5c0,0-19.7-5.7-25.9-10.6
							l-7.8-6.3c0,0-13.6-12-17.7-24.9l-4.1-17.1l-0.6-20.1l11.1-34.9l9.7-29.9l3.7-11.9l5.4-13.3l7.8-10.3l7.6-10.7l6-10.1l6.7,1.7
							l16.2,7.4l9.6,7.7l19.2,21.1l25.7,27.1l14.2,6.8l40,0.3l43.9-2.9l12.7-11.4l11.6-2.8l18.7-0.7l6,7.2v32.2l3.8,1.1v23.6l4.7-0.2
							V255l0.9-7.8v-18l6-5.7l22-0.9l38.8-0.2h48l67.4-1.2v-6.3l-58.4,0.7l-61.4,0.4l-58-0.4c0,0-3.9-2.1-4.8-8.1l0.8-13.5l-2-3.4
							l-0.2-20.3l0.4-56.4l1.8-5.8l0.6-16.5c0,0,0.4-4.9,7.3-6.9l50.9-1.1l21.4,0.5l7-0.5h85.1h11.1v-4.2l-42,0.8h-61.1l-51.3-0.8
							l-23.3-1.1c0,0-5.6-1-5.8-6.8L897.2,28V1.5h-9.9l1.2,18.8l1.9,19l0.9,32c0,0-0.1,9.1-5.7,8.6l-11,0.2v3.3l12.1,0.1
							c0,0,3.7,0.8,3.9,5.4l-0.6,47.5l0.6,42l-1.8,4.5l-0.4,9.8l-0.1,15.6c0,0-0.2,7.8-8,7.8l-14.7,0.9c0,0-9,0.5-18.3,8.7l-5.9,6.5
							c0,0-3.7,2.3-8.6,2.2l-38.1,1.7l-36.2-0.3l-9.9-5.6l-28.2-30.2l-25.7-26.8c0,0-5.1-2.7-8.2-4l-13.1-6.8l-5.3-5.4l1-6.9l0.7-17.1
							l-1.8-11l-3.7-10l-2-8.9l-4.6-14l-1-28.9l0.9-48.6l-7.1,0.4v68.1v12l4.1,10.8l-2.1,3.5c0,0-30.7,7-57.3-8c0,0-25.6-12.9-27.6-41.6
							l1.9-2.5l18.4-0.2l1.3-1.2L589.3,0h-2.4v48.7c0,0,0.3,2.8-4.2,2.8h-16.1l-1.6-12.4c0,0-1.2-8.5-7.3-17.2L544.4,2.2h-7.8l17.8,26.3
							c0,0,4.6,7.7,4.7,15.5l0.7,6.8h-48.6h-29.4c0,0-8.2-3-9.1-9.8l-0.6-6.5l-0.8-8.5l-4.3-9.5l-2.3-14.3h-2.5l2.3,13.4l4.8,10.7
							l1.3,15.7c0,0,1.3,8.8,11,11.1h15.9l11.2,1.5v13.2h-51l-3.2-11.3l-6.8-12.8L441.3,16v-5h6.1V1.4l-1.1-0.2v8.3c0,0-5.4,0-5.6,0
							s-0.7-7.8-0.7-7.8h-1.5l0.3,7.7v6.8l7.4,29.8l5.9,11l4.6,13.5l9.3,36.3l3.8,14.4l0.2,17.2c0,0-0.7,5.8,6.2,9l18.8,10.4l6.9,3.3
							h11.9l-0.1,13l-5.4,7.3l2.2,0.8l5.5-7.5v-13.5l13.6-2.1l13.3-1.1l9.9-0.9v6.6l-5.8,12.2l-1,10.3c0,0-0.1,8.3,5.6,13l39.4,18.2
							c0,0,8.6,3.3,15.6-7.5l1.7-3.9l6.2-11.4l4.1-13.1l1.8-8.8l18.5-5.2l17.6-4c1.1-0.2,2,1,1.4,2l-7.6,12.7l-11.2,16.2l-6.4,17.7
							l-3.6,13.7l-6,17.6l-7.3,23.4l-6.6,23.2l0.6,21.3l2.3,10.7l0.2,4.4l-5.6,2.6c0,0-14.4,3.7-20.7-7.9l-6.8-10.1l-2.5-2.2L555.9,297
							c-0.8-0.5-1.1-1.5-0.7-2.4l4.3-8.1l3.3-4.2c0,0,0.6-0.5,3.6-3.9c1.1-1.3,3.4-4.9,4.6-6.8c0.6-1,0.6-7.2,0.6-7.2s-0.6-8.8-7.5-10.3
							l-14.9-6.5l-11.1-4.5l2.6-7.7l1.3-5.5l-9.9-5.2l-25.6,0.3l-7.7,2.5l-7.8-10.9l-4.1-10.6l-2.2,0.9l4,10.1l7,10.9l5.7,10.8l4.1,8.1
							l10.4,4.2l-1,4.9v7.3l1.9,5.7l6,9.4l3,4.4l5.6,4l12,6.4l7.1,4.1c0,0,0.9,1,0.2,2.3l-7.4,10.1c0,0-2,1.7-0.6,4.3l4.7,7l3.4,5.1
							l16.7,25.3l4.9,5.9c0.8,0.9,0.7,2.2-0.1,3l-14.1,14.1l0.6,3l18.1-17.1l5.7-3.5l8-5.7c0,0,5.5-4.2,6.4-10.2l0.9-6.5
							c0.1-1,1-1.8,2.1-1.8c3.1,0,9.6-0.1,14.2-2.1l1.6,0.9l7,12c0,0,9.9,15.8,28.1,24.2l13.2,5.1c0,0,6,1.1,6,6.6l-1.8,12
							c0,0-1,8.3,0.7,14 M508,246.3l-8.8-15.5l8.1-3.2l23.6-0.7l8.5,3.9l-0.4,3.3l-2.8,8.4l-7.9-3.2l-3.6-1.1L522,239l-4.5,10.4
							L508,246.3z M542.7,290.8l-12.4-6.8l-5.6-5.6l-3.8-6.6l-4.4-7.7v-8.6l1-3.2l1.9-2.4l3.6-9.2h4.1l21.6,9.1l15.2,6.8
							c5.1,2.4,6.1,7.9,6.1,7.9l-0.3,6.6l-13.1,15.7l-2.7,5.4l-0.9,1.6c-0.7,1.2-2.2,1.6-3.4,0.9L542.7,290.8z M594.9,340.6
							c-0.3,1.9-1,3.7-2.3,5.2l-2.8,3.3l-10.5,7.8c-0.9,0.7-2.2,0.9-3.3,0.6l-2.5-2.1l-5.1-6.1l-8.6-12.3l-9.4-14.4l-5.6-8.1
							c-0.9-1.7-0.3-3.2-0.3-3.2l1.6-1.9l6.1-10.1c0.8-1.9,2.2-1.1,2.2-1.1l6.5,3.9l15.7,8.5l3.6,5.1l4.9,7.3c2.6,4.6,7.1,7,9.5,7.9
							c0.9,0.4,1.5,1.3,1.3,2.3L594.9,340.6z M510.8,54.4h28.1v13h-28.1V54.4z M458.6,69.5l82.5,0.1V54.4h19.4l1.8,8.9
							c2.6,12.5,10.1,23.3,10.1,23.3l10.5,9.2v1.5l-6.8,5.5l-9.8,3.6l-12.4,5.2l-4.6,2.8l-3.9-4.7c-4.3-5.4-11.3-6.3-11.3-6.3l-30.8-0.4
							l-35.6,1.3L458.6,69.5z M529.9,155.3l-15.2,2.4h-9.8l-14.7-6.1l-15.4-8.6l-3.3-5.2l0.3-18l-3.6-13.2l26-0.5l15.7,0.3l24.4,0.3
							l4.3,2.2l8.6,7.8l-3.1,5.1l-0.3,11.3l4.1,6.9l2,2.8l1.9,1.7l1.2,9.3L529.9,155.3z M662.8,151.9c0,0-0.6,4.3-4.4,4.3l-40.6,12.2
							l-8.1,27.1l-0.6,4.8l-3.9,7.2l-1.6,3.1c0,0-7,9.2-18.1,2l-21.8-9.8l-8.1-3.5c0,0-10.9-4.7-7.3-21.8l7-14.4l0.1-9.6l-2.2-11
							l-2.7-2.3l-4.5-7.7v-10.7l2.6-4.3l2.7-2.2L576,105l4.3-2.3l3.5-3.8h1.3c0,0,8.8,7.2,19.4,10.5c0,0,10.8,5,29.8,5.1l22.6-1.8
							c0,0,1.8,0.4,1.9,1.8c0,0,3.8,11.8,4,19.1V151.9z"/>
					</g>
					<path class="st11" d="M350.9,546.4c0,0-0.3-11.4-12.1-27.9c0,0-8.7-15-7.9-32.6c0,0,0.9-13.3,10.4-23.3l27.2-38.6l13.1-16.1
						l7.8-1.7l31.7-0.9h15c0,0,15.1,1.6,20.7,11.8c0,0,5.4,7.9,6.7,19.7l6.3,25.6l1.1,17.9l-3.9,18.9l-4.3,12.9c0,0-4,12.8,0.4,23.9
						l2.3,6.3l-4,1.6l-3.6-14c0,0-3.9-7.9,2.3-20.9c0,0,7.3-23.2,7.2-31c0,0-1.3-19.9-4.3-28.6l-4.2-18.6c0,0-5.1-17-18.8-20.3l-3.9-1
						l-30.6-0.1l-18.7,1.8c0,0-4.8,1.1-9.1,6.3l-17.2,25.1l-11.9,15.9l-5.6,7.7c0,0-10.3,11.6-8.4,26.1c0,0,0.1,10.9,4.3,18.9l6.8,13.3
						l4,6.2c0,0,4.4,5.6,4.8,15.7L350.9,546.4z"/>
					<path class="st11" d="M960.3,845l-58.6-0.2c0,0-2.3,0.1-4.7-3.9c0,0-6.6-18.2-5.6-34.4l1.8-22.9h-5c0,0-4.1,25.3-1.2,39
						c0,0,4,17.1,3.3,23.8c0,0-19.1,2.9-30.2,11.8h-3.1c0,0-5-10.2-14.1-11.6l-17.4,0.3l-10.6,3.6l1.9,3.4l9.1-3.6h16.8
						c0,0,9.7,3.7,11.3,10.7l0.1,1.6l-7,8.5c0,0-11.6,13.9-13.4,22.2l-0.6,3c0,0-0.7,2.1-4.7,2.8c0,0-13.9-1-19.2,10.2
						c0,0-2.5,5.9-2.5,10.2h-23.3h-9.2c0,0-10.5,0.1-17.6,7.1c0,0-7.2,7.9-8.3,14.5c0,0-1.4,7.5-1.3,11.2l-1.1,18.4
						c0,0-0.6,6.7-4.3,10.2l-15.3,22.3l-9.2,13.9l-5,6.7c0,0-6.9,12.1-3.4,30.7c0,0,3.9,16.2,12.2,25.6c0,0,7.6,8.8,18.1,15.7l5.6,3.3
						l32.6,14.8l-5.2,16.4L762,1158c0,0-3.1,8.1-0.4,20.3l6.2,21.4l6.2-1.7l-6.2-19.6c0,0-3.4-9.8,4.1-25.6l12.1-35.3l1.5-5.5l5.5-17.8
						c0,0,2.1-27,8-35.1l10.8-17.9l21.9-32.4l5.9-13.3c0,0,6.8-21,3.3-39.5c0,0-6.8-26.7-6.1-31.4c0,0,0-22.1,8.4-36.9
						c0,0,11.8-16.9,16-19.5c0,0,8.1-7.4,13.7-9.9c0,0,15.6-7.1,25.4-7.6l39.9,0.7l22.1-0.2L960.3,845z M812.7,912.3
						c0,0,4.6-7.1,9.7-9.2h7.8c0,0-2.4,10.4-1.4,19l0.6,15.4c0,0-12.2,1.4-16.7-7C812.7,930.4,807.1,921,812.7,912.3z M834.7,972.1
						c-2.9,24.6-12.9,38.4-12.9,38.4l-19.8,30.9c-4,6.9-13.8,27.7-13.8,27.7l-4.8,26.6l-4.2,13.8l-1.1,0.6l-25.6-11.2
						c-8.4-2.7-18.1-10.9-18.1-10.9c-8.2-4-15.9-17.5-15.9-17.5c-6.8-11-6.7-26.8-6.7-26.8c-0.1-13.2,5.3-20.7,5.3-20.7l7.4-10.6
						l10.9-15.9l9.9-13.5c5.4-4.1,4.9-16.1,4.9-16.1l0.3-9.6l0.7-10.9c1.2-8.9,5.9-14,5.9-14c5.6-8.8,21.1-9.8,21.1-9.8l28.9,0.3
						c-0.7,5.7,5.5,12.7,5.5,12.7c3.2,5.3,18.2,6.2,18.2,6.2C835.2,954.9,834.7,972.1,834.7,972.1z"/>
					<polygon class="st11" points="960.3,845 1079.8,845 1079.8,851.7 960.4,851 	"/>
					<path class="st11" d="M381.3,1281.1c0,0-0.2-53.8,3.1-68.9l5.1-62.9l-1.8-31.9c0,0-7.9-27.4-27.3-31.9l-33.5-7.3l-24.1-4.3
						c0,0-16.9-2.4-24.1-11.7l-27.9-18.4c0,0-10.7-10.4-34.5-9.3l-52.7-0.1l-36.6-1.1v13.3c0,0,0.7,14.8-4,20.3c0,0-3.8,6.7-2.8,23.4
						l-1.4,33.8v5c0,0-1.5,15.1,13.5,29.8l22.7,19.9c0,0,12.1,11.6,25.2,10.4c0,0,17.5-2.1,26.2-0.4c0,0,17.5,3.6,25.2,0.7l14.8-7.4
						c0,0,10.8-6.8,21.6-6.2c0,0,13.2,2.1,21.6,11.6c0,0,10.5,8.6,19.3,6.7l24.4-2.5c0,0,11.6-3.3,15.3-15.9l3.4-19.9
						c0,0,0.9-13.2-9.6-19.3c0,0-9.6-5-11.6-12.9l-8.3-17.9c0,0-3.2-7.2-2.3-21.8l1.1-6.5l5.3,1.4l-1.7,7.4l-0.8,4.9l0.9,12.3l6.1,12.3
						l6.5,11.6l5,5.1l5.6,4.4c0,0,7.2,6.6,7.4,14.4l-0.9,12.8l-2.5,14.2c0,0-3.7,11.5-13.7,14.2l-8.9,2.2l-16.7,2.8
						c0,0-13.1,1.8-20.4-3.2c0,0-13.2-11.7-22.4-12.4c0,0-6.2-1.3-20.6,3.1l-19.7,8.6l-9.4,0.9c0,0-20.6-2.3-28.2-1.3
						c0,0-12.2,2.9-25.3-0.4l-10.8-4.9l-23.4-20.6l-14-15.5c0,0-5.6-9.2-5.9-16.5l-0.4-22.1l1-24.8l0.7-20.1l4-5.8
						c0,0,4.1-10.3,3.1-18.8v-9.9l-9.6-0.1l-76.3-0.6v44.6v43.8c0,0-1.1,29.7,1.7,35.5h22v3.4l-23.9,0.4c0,0-4.9,0.4-5.1-8.7v-18.2
						l1-20.6l-1.3-29l0.3-20.6l-0.6-29c0,0-19,1-29.5,9.5v-9.1c0,0,17.6-7.4,28.6-7.4c0,0-2-24.2-28.6-25.1v-6.7c0,0,23.2,0.5,29.9,13.8
						c0,0,4.4,10.2,5.6,16.2l86.3,1.3l-0.4-42.4c0,0,1.5-7.1,5.5-12.4l8-12.6c0,0,2.1-8.4-0.1-11.2l-6.6-8.2l-16.9-6.3
						c0,0-13.1-2.5-19.1-10.2c0,0-8.4-11.4-9.1-20.2l-1.8-10.6c0,0-3.9-12.6-11.9-17.2L33.9,860l-15-0.7l-19,7.6v-10l11.5-3.6l15.7-1.1
						c0,0,27.6,7.6,32.5,12c0,0,15,6.8,19.5,13.5c0,0,7.5,8.7,8.7,18.9l2.1,11c0,0,3.9,11.9,17.5,17l20.9,8.2c0,0,11.6,5.2,12.8,16.4
						l-0.3,11l-10.1,17.5c0,0-3.7,5.5-3.9,8.7v20.6l0.4,19.8h17l25.3,0.5l33.3,0.1l20.1,0.4c0,0,27.6,4,34.9,13.1l25.8,16.7l13.1,7.6
						l29.2,6.1l36.5,7.7c0,0,19.4,6.9,25.3,18.6c0,0,5.3,7.4,7.3,18.6l0.9,18.9l1.2,17.8l-0.5,27.6l-2.4,17.5l-2.6,24.8l-2.5,3.9
						l-1.1,23.6l-1.5,30.6L381.3,1281.1z"/>
					<path class="st11" d="M158.6,1626.2c0,0,142.9-1.4,191.4,0s173.9-16.4,203.7-12.8s98.9,8.7,107.4,6.2c8.5-2.5,11.4,0,11.4,0v4.4
						c0,0-49.1-1.6-66.1-2.7c-16.9-1.2-44.8-4.8-63.9-4.8s-77.9,3.5-94.4,5.8c-16.5,2.3-84.3,8.8-98.3,8.8s-159.5-0.6-168.9,0
						c-9.4,0.6-22.3,4.1-22.3,4.1V1626.2z"/>
					<path class="st11" d="M473.9,1461.9c0,0,15.8,51.5,19.2,59.2c3.5,7.7,19.6,52.5,21.9,59.5s13.3,32.9,13.3,32.9l-2.2,0.1l-25-63.7
						c0,0-21.8-61.9-22.6-64.6c-0.8-2.7-7.7-25-7.7-25L473.9,1461.9z"/>
				</g>
				<g class="trails">
					<path class="st12" d="M475.3,1105.8l-4.5-10.3l-8.4-13.1h-14.3l-4.4-1.1l-1.1-4.9l-7.4-2.2l-5.6-4.2h-9.9l-4.4-5.4l-5.6-2.4h-8.7
						l-2.7-3.7l-9.4-4.9l-2.3-2.7l-7.1-5.2l-5.3-0.7l-7.8-1.8h-6.2l-9,1.4v-6.5l-5-0.9l-7-5.3l-5.3,0.6l-5.7,2.8c0,0-2.1-3.9-2.2-3.9
						c-0.2,0-2.3-2.8-2.3-2.8l-14.1-1.8l-3.9,1.5l-3.9-1.9l-3.2-4.6l-5.7,2.1"/>
					<polyline class="st12" points="331.1,985 326.8,988.9 325.4,992.1 328.3,1005.6 327.9,1010.1 321.9,1014.6 317.9,1013.9 
						311.5,1009.9 305.9,1009.3 285.9,988.1 282.4,986.1 281.9,974.5 	"/>
					<line class="st12" x1="223.1" y1="940.6" x2="224.7" y2="937.1"/>
					<polyline class="st12" points="227.7,940.7 221.8,940.6 216.4,944.6 205.7,954.5 202.8,956.7 	"/>
					<polyline class="st12" points="434,983.1 431.6,1015.8 429.6,1029.3 401.8,1029.3 400,1030.3 400.8,1033.4 410.1,1035.7 
						414.3,1038.8 422.3,1039.7 426.9,1043.9 431,1044.7 436.6,1048.7 439.3,1052.8 444.8,1062.2 448,1065.8 453.1,1068 456.2,1068 
						457.5,1066 457.1,1058.5 455.9,1053.1 458.5,1048.7 461.6,1046.3 463.1,1042.9 458.3,1037.1 451.6,1035.9 446.4,1033.1 
						438.5,1032.3 429.6,1029.3 	"/>
					<polyline class="st12" points="463.1,1042.9 466.4,1042.7 469.5,1040.9 474.3,1037.4 481.1,1038.3 486.4,1043.6 490.9,1048.1 
						494.3,1048.1 495.9,1046.8 498.9,1044.9 502.4,1045.1 505.3,1048.1 512.7,1058.7 522.9,1072.8 537.5,1076.4 541.4,1092.3 
						556.4,1109 555.8,1117.2 552.4,1128.2 552.9,1132.9 558.7,1145.8 564.8,1149.2 571.8,1150.4 579.7,1145.8 585.4,1138.9 589.8,1125 
						588.7,1117.3 583.3,1108.6 581.6,1103 578.5,1093.8 570.2,1093.8 552.4,1093.8 544.9,1096.3 	"/>
					<polyline class="st12" points="491.8,1004.6 499.9,1005.2 505.4,1012.2 514.6,1015.6 529.7,1015.6 532.6,1011.3 532.6,1003.2 
						537.6,991.6 544.7,979.7 562.5,962.8 574.4,952.6 588.7,944.7 609.4,942 611.9,938 618.7,934.6 635.8,933.7 640.1,932.8 
						644.1,928.9 659.5,923.7 676.2,919.3 687.7,908.4 699.2,882.1 704.8,862 707.9,846.3 723.9,836.6 735.1,825.4 743.3,818.8 
						750.2,798.3 748.8,787.9 743.5,783.4 726.2,784.9 711.3,775.7 	"/>
					<polyline class="st12" points="668.1,936.4 670.6,929.9 670.6,925.4 681.6,918.8 693.1,913.6 697.4,911.4 700.9,907.6 710.8,901.4 
						717.9,893.8 722.9,883 729.6,873.4 735.1,862 750.2,829.2 753.5,815.7 765.5,781.9 771.3,763.7 771.3,747.2 766.8,738.3 
						753.5,730.8 741.7,724.1 733.1,724.1 725.3,728.1 721.1,730.1 711.1,729.9 701.1,730.3 695.1,728.8 678.2,724.1 669.5,704.8 
						668.1,679.7 676.1,670.1 685.3,667.9 691.9,658.1 695.1,649 696.2,614.1 689.3,599.7 681.9,590.1 677.9,582.6 673.3,575.4 
						655.9,558.6 648.8,555.7 645.5,556.8 636.2,561.9 632.6,561.4 624.8,552.6 612.4,545.4 598.2,534.1 588.8,524.6 575.5,503.3 
						554.5,446 537.9,417.6 537.4,404 534.3,398.6 527.5,396.1 518.2,378.2 510.3,373.6 487.4,347.3 477.5,341.6 446.8,307.1 	"/>
					<polyline class="st12" points="657.3,924.4 665.3,931.5 673.8,944.9 680.7,955.8 686.1,959.8 692.8,960.9 692.8,966.1 694.9,967.2 
						699,965.8 704.3,971.9 	"/>
					<polyline class="st12" points="564.8,1149.2 564.8,1155.4 558.5,1162.3 551.5,1170.5 545.7,1181.6 542,1191.7 538.9,1206.3 
						539.8,1211.2 532.8,1210.5 525.1,1207.8 521.3,1207.8 512.7,1201.6 510.2,1201.6 505.4,1196.9 	"/>
					<polyline class="st12" points="521.9,1225.7 526.5,1239.7 541.7,1259.5 548.5,1300.6 556.4,1311.1 556.4,1317 552.3,1317 
						551.9,1323 559.5,1331.4 565.1,1341.3 567.5,1349.4 575.2,1358.4 575.2,1363.8 589.8,1375.7 598.7,1382.3 634.3,1397.8 
						657.1,1399.2 668.8,1401.6 686.5,1409.2 694.1,1414 712.9,1437.7 710.4,1442.6 710.4,1446.1 718.3,1460.6 724.3,1480.4 
						726.1,1496.2 720.5,1503 722.3,1509.2 726.1,1522.4 734.9,1532.1 735.5,1576.1 726.7,1579.1 712.8,1577.7 703.4,1580.6 
						686.5,1580.6 683.2,1577.6 677.7,1578.2 674.6,1580.6 660.4,1580.6 	"/>
					<polyline class="st12" points="680.7,955.8 674.2,955.8 666.1,959.1 653.6,964.4 637.5,970.7 621.6,974.9 608,976.7 597.9,977.7 
						590.5,980.4 580.6,981.1 566.3,991.7 565.1,1005.7 562.3,1011.4 562.3,1022.4 564.5,1032.9 567.4,1040.9 576,1049.2 584.2,1054.3 
						588.9,1061.4 597.2,1072.4 606.3,1077.4 611.4,1086.5 613.1,1091.5 617.4,1107.5 620,1127.1 614.3,1146.1 609.1,1157.7 604,1160.3 
						597.9,1170.3 586.9,1180.8 578.2,1187.7 571.8,1191.4 568.4,1200.3 566.9,1208.1 564.4,1217.1 564.8,1223.4 568,1229.8 
						573.4,1234.6 	"/>
					<polyline class="st12" points="700.2,967.2 697.1,971.1 689.4,981.8 689.4,987.9 	"/>
					<polyline class="st12" points="689.4,981.8 682.3,983.4 664.5,1006.4 658.9,1015.6 658.3,1020.3 661.7,1024.4 660.8,1032 
						664.3,1042.2 670,1053.6 669.1,1059.7 671.6,1064.3 671.7,1071.2 672.7,1074.8 673.2,1084.2 673.1,1087.1 679.7,1091.8 
						687.3,1092.4 688.6,1093.8 687.7,1098.4 688.8,1101.4 686.7,1105.1 685.5,1108.7 688.3,1113.1 685.8,1117.8 682.4,1120.4 
						681.2,1122.8 681.6,1128.1 684.2,1134.1 685.9,1148.3 694.8,1153.9 700.8,1159.2 	"/>
					<polyline class="st12" points="591.8,885.1 573.4,862 568,862 567.4,865 575.1,877.1 573.6,888.4 561.6,885.7 559.9,889.1 
						560.8,902.7 563.5,905.1 572.7,905.1 574.2,906.8 572.8,928.1 573.7,933.4 583.2,936.4 585.3,937.6 585,940 581,942.8 575.9,949.4 
						576.4,951.4 	"/>
					<polyline class="st12" points="469.9,989 460.4,970.1 449.1,967.4 431.5,949.4 424.6,939.7 415.3,936.3 409.2,931.4 408.3,924.9 
						404.2,915.9 400,912.3 388.2,906.9 383.9,902.7 381.3,902.7 381.3,906.9 394.2,919.8 401.2,950.6 392.9,966.8 392.9,968.6 
						404.3,975.8 415.6,977.7 426.5,982.7 437.1,983.2 454.7,985.6 469.9,989 490.2,997.3 491.8,999.1 491.8,1004.6 487.2,1026.6 
						489.9,1034.1 483.8,1047.6 473,1096 468.5,1101.6 462.2,1122 457.1,1145.4 456.7,1147.7 453.1,1151.4 442.8,1155.5 439.8,1159.1 	
						"/>
					<line class="st12" x1="348.8" y1="900.9" x2="350.1" y2="887.4"/>
					<polyline class="st12" points="392.9,968.6 356.9,981.8 337.3,985 329.5,984.8 281.9,974.5 265.5,971.1 257.4,969.1 244.3,961.7 
						238.1,956.3 231.7,944 227.7,940.7 224.7,937.1 214.9,918.7 203.7,906.1 201.8,900.9 193.4,889.3 179.9,872.6 179.1,862 
						174.6,851.2 159.5,842.1 159.5,838.3 159.5,815.7 145.9,791.9 121.5,780.8 113.9,770.3 111.5,761.2 108.8,757.9 100.6,756.6 
						100.6,687.7 87.5,677.2 84.2,666.6 86.2,653.4 84.2,646.6 87.6,639.7 92.4,632.6 98.2,627.1 102,612.3 107.9,610.3 110.5,607.2 
						123.7,611 136.2,626.8 138.4,638.6 155.4,656.1 161.3,670.1 170.5,685.8 175.1,687.7 182.4,688.3 193.6,693.2 202.3,696.6 
						214.3,704.9 229.6,716.6 232.4,727.6 238.6,732.3 239.9,762.8 264.8,800.8 273.3,806.1 285.7,844.1 290.2,854.3 290.5,862 
						289.1,869.9 285.5,884.1 283.9,893.3 284.7,901.4 292.6,894 298.9,901.4 305.6,901.8 313.1,908.9 322.8,908.1 337.8,903.3 
						348.8,900.9 381.3,902.7 	"/>
					<polyline class="st12" points="87.5,666.6 84.5,673 76.4,678.9 67.8,681.4 63.5,684.4 57.9,691.7 51.4,701.6 40.3,708.4 
						31.3,706.6 21.3,712 16.9,717.7 12.2,721.9 6.1,729.9 2.4,735.5 0.2,743.1 -0.2,750.5 -0.2,756.4 41.6,756.4 65.7,773.6 
						68.8,778.5 72.9,778.9 94.1,783.8 120.2,796 131.2,806.3 142,819.9 144.1,832.2 144.1,858.3 149.3,870.8 158.1,881.9 167.9,884.3 
						178.4,879.9 179.9,872.6 	"/>
					<polyline class="st12" points="100.6,756.6 96.7,758.4 86.7,757.5 73.5,757.5 59.4,748.8 43.6,742.3 22.4,732.9 -0.2,729.9 	"/>
					<polyline class="st12" points="6.1,634 10.7,647.3 20.6,649.8 27.4,661.7 33,672.8 33,683.3 34.8,690.6 35.6,697.4 31.3,706.6 	"/>
					<path class="st12" d="M588.8,524.6l1.1,11.1l4,16c0,0-3.8,8.7-4,9.6l-4.9,7.6v18.7l2,14l10.7,22v17.8l2.7,5.3l4.2,4.7l10.4,1.1
						l18.9,3.6l14.9,8l12.7,9.6l2.4,4.2l6.4-0.7"/>
					<polyline class="st12" points="663.9,677.7 665.5,682.8 665.5,706.6 672.2,721 674.8,728.1 681.9,731.2 693.3,731.2 701.1,733.2 
						724.8,733.2 740.4,733.2 745.7,744.6 748.2,754.1 744.8,772.6 743.5,783.4 	"/>
					<line class="st12" x1="585.1" y1="587.4" x2="569.1" y2="587.4"/>
					<polyline class="st12" points="589.5,530.7 584.5,534.5 578.5,532.6 	"/>
					<polyline class="st12" points="600.4,646.6 597.7,659.3 595.6,679.2 	"/>
					<polyline class="st12" points="534.3,398.6 551.7,381.4 548.4,374.8 538.5,365.3 537.1,350.8 547.5,335.2 547.6,328.2 553.7,323.4 
							"/>
					<polyline class="st12" points="558.4,369.4 552.2,370.6 548.4,374.8 	"/>
					<polyline class="st12" points="712.7,421.3 701,452.7 677.3,437.9 661.3,432.2 650.3,424.1 624.1,421.3 615.1,413.9 611.1,405 
						602,402.2 587.1,386.6 580.1,385.7 569.3,391.7 563.1,390.6 551.7,381.4 	"/>
					<polyline class="st12" points="782.8,1376.6 777.7,1386.6 766.2,1381.6 761.9,1373 761.9,1367.7 750.6,1368.8 746.2,1377.1 
						733.5,1391.4 727.5,1392.6 717.3,1383.4 711.3,1380.1 702.8,1381.2 691.5,1377.4 659.1,1361 637.9,1347.7 632.7,1343.5 
						621.1,1327.5 615.4,1323.4 607,1310.8 605.2,1302.3 603.6,1294 	"/>
					<polyline class="st12" points="603.6,1294 589.8,1277 583.7,1270.8 573.7,1268.1 567.1,1257.2 567.1,1243.7 573.4,1234.6 
						585.3,1234.6 595.1,1237.7 600.2,1236.1 612.4,1229 638.6,1225.1 659.3,1216.1 685.3,1209.7 710.4,1201.6 	"/>
				</g>
				<g class="road_for_car">
					<path class="st13" d="M474.6,859.3c0,0,10.9,58.1,12.2,67.9c1.2,9.8,1.7,25.5,0,28.6c-1.7,3.2-11.8,9.7-25.9,9.5
						c-14.1-0.3-21.6-1.4-26.9-0.9c-5.2,0.5-5.7,7.8-6.1,10.1c-0.4,2.4-23.7,3.3-31.6,3.1c-7.8-0.3-14-6.7-15-10.3
						c-1.1-3.6-15.6-6.6-24.7-7"/>
					<path class="st14" d="M495.1,1098.4c0,0,2.5,18.4,0,28.2c-2.5,9.7-12.8,31.1-7.2,36.4s10.9,6.6,15.3,5.8c4.4-0.8,9-6.3,4.8-9.8
						c-7.4-6-23.2-9.7-37.2-11.8s-22.1,7.5-22.1,7.5c0.8,1.3,2.9,12.4,0,15.3c-2.9,2.9-15.8,10.8-22.2,36.1s6.8,27.8,7.9,34.4
						c1.1,6.6,31.6,0.4,40.9-9.1s29.1-7,44.8-2c-11.9-8.2-8-71.4-5.6-80.2c2.5-8.8-0.4-36.8-11.4-43.4c-11-6.7-17.2-41.8-15.3-48.6
						s6.8-20.2,5.6-25.2c-1.2-5,2.5-17,4.6-33.1c2.1-16.2-10.1-41.1-10.1-41.1"/>
					<path class="st13" d="M431.5,1091.3c0,0-0.9,27.1-6.8,35.3c-5.9,8.2-8.8,13.6-15.5,12.4c-6.6-1.2-13,0.2-13,0.2"/>
					<path class="st13" d="M413.8,1139.2c0,0,20.9,4,34.9,15.6"/>
					<path class="st14" d="M479.6,884.5c0,0,33.2-4.7,60.2-4.2c27,0.4,59.7-2.1,72.6-6.6c12.9-4.6,66.5-24.6,82.4-36.1s23-20.3,29.2-24
						s14.1,5.8,14.1,5.8l-32,21.6l-5.9-3.4"/>
					<path class="st14" d="M638.6,1619.6c0,0-40.1-39.9-48.8-47c-8.7-7.1-9.3-11.9-9.9-22.5c-0.6-10.7-6.2-25.5-12.9-41.5
						s-20.5-40.9-24.6-55.7s-12.6-48.9-10.7-60.3c1.9-11.4,16.7-42.8,16.1-52.3s0.6-20.7-1.2-24.3"/>
				</g>
				<g class="Parking_x5F_icon">
					<g id="mountain_bike_park">
						<circle class="st15" cx="706.1" cy="812.6" r="20"/>
						<path class="st16" d="M698.7,799.9h2.7v27h-2.7V799.9z M700.6,813.9h8.6c1.1,0,2-0.2,2.8-0.7c0.8-0.5,1.4-1.2,1.9-2
							c0.4-0.9,0.7-1.9,0.7-3c0-1.1-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2c-0.8-0.5-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1
							c1.2,0.7,2.2,1.6,2.8,2.9c0.7,1.2,1,2.7,1,4.3c0,1.6-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V813.9
							L700.6,813.9z"/>
					</g>
					<g id="mallard_point">
						<circle class="st15" cx="529.3" cy="422.3" r="20"/>
						<path class="st16" d="M521.9,409.6h2.7v27h-2.7V409.6z M523.9,423.7h8.6c1.1,0,2-0.2,2.8-0.7s1.4-1.2,1.9-2c0.4-0.9,0.7-1.9,0.7-3
							s-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2s-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1c1.2,0.7,2.2,1.6,2.8,2.9
							c0.7,1.2,1,2.7,1,4.3c0,1.6-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V423.7L523.9,423.7z"/>
					</g>
					<g id="loop">
						<circle class="st15" cx="567.2" cy="356.3" r="20"/>
						<path class="st16" d="M559.9,343.6h2.7v27h-2.7V343.6z M561.8,357.6h8.6c1.1,0,2-0.2,2.8-0.7s1.4-1.2,1.9-2c0.4-0.9,0.7-1.9,0.7-3
							s-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2s-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1c1.2,0.7,2.2,1.6,2.8,2.9
							c0.7,1.2,1,2.7,1,4.3s-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V357.6L561.8,357.6z"/>
					</g>
					<g id="douglas_park">
						<circle class="st15" cx="757.1" cy="468.9" r="20"/>
						<path class="st16" d="M749.7,456.2h2.7v27h-2.7V456.2z M751.7,470.3h8.6c1.1,0,2-0.2,2.8-0.7s1.4-1.2,1.9-2c0.4-0.9,0.7-1.9,0.7-3
							s-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2s-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1c1.2,0.7,2.2,1.6,2.8,2.9
							c0.7,1.2,1,2.7,1,4.3s-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V470.3L751.7,470.3z"/>
					</g>
					<g id="south_fish_creek_bridge">
						<circle class="st15" cx="603.6" cy="924.4" r="20"/>
						<path class="st16" d="M596.2,911.7h2.7v27h-2.7V911.7z M598.2,925.8h8.6c1.1,0,2-0.2,2.8-0.7c0.8-0.5,1.4-1.2,1.9-2
							c0.4-0.9,0.7-1.9,0.7-3s-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2c-0.8-0.5-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1
							s2.2,1.6,2.8,2.9c0.7,1.2,1,2.7,1,4.3c0,1.6-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V925.8L598.2,925.8
							z"/>
					</g>
					<g id="sikome">
						<circle class="st15" cx="445.2" cy="1238.9" r="20"/>
						<path class="st16" d="M437.8,1226.1h2.7v27h-2.7V1226.1z M439.8,1240.2h8.6c1.1,0,2-0.2,2.8-0.7c0.8-0.5,1.4-1.2,1.9-2
							c0.4-0.9,0.7-1.9,0.7-3c0-1.1-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2c-0.8-0.5-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1
							c1.2,0.7,2.2,1.6,2.8,2.9c0.7,1.2,1,2.7,1,4.3s-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V1240.2
							L439.8,1240.2z"/>
					</g>
					<g id="fishcreekboatramp">
						<circle class="st15" cx="522.6" cy="1249.4" r="20"/>
						<path class="st16" d="M515.2,1236.7h2.7v27h-2.7V1236.7z M517.1,1250.7h8.6c1.1,0,2-0.2,2.8-0.7s1.4-1.2,1.9-2s0.7-1.9,0.7-3
							s-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2c-0.8-0.5-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1s2.2,1.6,2.8,2.9
							c0.7,1.2,1,2.7,1,4.3s-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V1250.7L517.1,1250.7z"/>
					</g>
					<g id="blue_devil">
						<circle class="st15" cx="589.8" cy="1460.3" r="20"/>
						<path class="st16" d="M582.5,1447.6h2.7v27h-2.7V1447.6z M584.4,1461.7h8.6c1.1,0,2-0.2,2.8-0.7s1.4-1.2,1.9-2
							c0.4-0.9,0.7-1.9,0.7-3c0-1.1-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2s-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1
							s2.2,1.6,2.8,2.9c0.7,1.2,1,2.7,1,4.3c0,1.6-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V1461.7
							L584.4,1461.7z"/>
					</g>
					<g id="meckenzie">
						<circle class="st15" cx="685.6" cy="1187.6" r="20"/>
						<path class="st16" d="M678.2,1174.9h2.7v27h-2.7V1174.9z M680.2,1189h8.6c1.1,0,2-0.2,2.8-0.7s1.4-1.2,1.9-2s0.7-1.9,0.7-3
							s-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2c-0.8-0.5-1.7-0.7-2.8-0.7h-8.6v-2.5h8.5c1.6,0,3,0.3,4.3,1s2.2,1.6,2.8,2.9
							c0.7,1.2,1,2.7,1,4.3s-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1h-8.5V1189L680.2,1189z"/>
					</g>
					<g id="visitor_center">
						<circle class="st15" cx="434.4" cy="955.8" r="20"/>
						<path class="st16" d="M427,943.1h2.7v27H427V943.1z M429,957.2h8.6c1.1,0,2-0.2,2.8-0.7c0.8-0.5,1.4-1.2,1.9-2
							c0.4-0.9,0.7-1.9,0.7-3s-0.2-2.2-0.7-3c-0.4-0.9-1.1-1.5-1.9-2c-0.8-0.5-1.7-0.7-2.8-0.7H429v-2.5h8.5c1.6,0,3,0.3,4.3,1
							c1.2,0.7,2.2,1.6,2.8,2.9c0.7,1.2,1,2.7,1,4.3c0,1.6-0.3,3.1-1,4.3c-0.7,1.2-1.6,2.2-2.8,2.9c-1.2,0.7-2.6,1-4.3,1H429V957.2
							L429,957.2z"/>
					</g>
				</g>
				<g class="mon">
					<g id="bowValleyRanche" class="monster_svg">
						<path class="st17" d="M400.8,922.2c0-0.7-0.9-1-1.4-0.4c-0.5,0.6-1,1.3-1.6,1.9c-0.9,1-1.9,1.9-3.1,2.4c-0.4,0.2-0.8,0.3-1.1-0.1
							c-0.2-0.3-0.1-0.6,0-1c0.3-0.6,0.7-1.2,0.8-1.9c0.2-1-0.3-1.7-1.2-2.1c-0.9-0.4-1.3,0.4-1.6,1c-0.8,1.5-2.5,1.6-3.6,2.5
							c-0.2,0.1-0.5,0.1-0.6-0.1c-0.2-0.3-0.2-0.7,0-1c0.7-1.3,1.7-2.2,3.1-2.7c2.8-1,3.9-2.7,3.4-5.6c-0.1-0.8-0.2-1.5,1.1-1.6
							c1.1-0.1,1.6-1.2,1.4-2.3c-0.2-1.1-1.2-1.1-2.1-1c-1.6,0.2-3.2,2.1-3,4.1c0.2,2.1-0.7,3.1-2.6,3.6c-0.3,0.1-0.6,0.3-1,0.4
							c-1.2,0.6-2.2,1.8-3.4,2c-1.2,0.2-1.7-1.8-2.9-2.3c-0.4-0.2-1-0.4-0.9-0.9c0.1-0.5,0.7-0.5,1.1-0.6c0.7-0.1,1.4-0.3,2-0.6
							c0.9-0.6,1.3-1.4,1.1-2.5c-0.1-0.7-0.3-1.5-1.2-1.6c-1-0.1-1.8,0.4-2.4,1.2c-0.2,0.3-0.4,0.7-0.7,1c-0.6,0.5-1.1,0.4-1.1-0.5
							c0-0.8-0.1-1.7,0.5-2.3c0.7-0.9,0.8-1.6,0.5-2.3c-0.6-1.6-3-1.6-3.6,0c-0.3,0.8-0.3,1.6-0.1,2.6c0.3,1.8,0.1,3.3-1.8,4.4
							c-2,1.2-2.7,3.4-2.2,5.8c0.2,1.1-0.1,1.3-1,1.1c-0.5-0.1-0.9-0.2-1.4-0.3c-2-0.4-2.6-1.4-2.2-3.4c0.2-0.9,0.4-1.8-0.4-2.5
							c-0.5-0.5-1.2-0.3-1.8,0c-1,0.5-1.1,1.5-1,2.4c0.2,2.1,1.2,3.9,2.5,5.6c0,0,0,0.1,0.1,0.1c0.6,0.6-0.2,1.6-0.9,1.2
							c-0.1,0-0.1,0-0.2-0.1c-1.9-1-3.2-2.6-4.5-4.3v0c-0.5-0.6-1.4-0.3-1.4,0.5v2.9c0,0,0,0.1,0,0.1c0.2,1.9,0.4,3.8,0.7,5.6
							c0.5,2.4,1.1,4.7,3.5,6.1c0.6,0.3,0.4,1.7,1.4,2.1c0.3,0.1,0.5,0.4,0.5,0.8c-0.1,1.5,1.3,1.5,2.4,1.9c0.7,0.3,0.7,1,0.7,1.6
							c0,1.2-0.3,2.3-0.7,3.4c-0.3,0.7-0.4,1.4,0.7,1c1.3-0.4,2,0.2,2.5,1.2c1.1,1.8,2.7,3,4.6,3.8c0.1,0,0.1,0,0.2,0.1
							c1.5,0.5,2.5,3,4.1,2.1c2.7-1.6,5.8-2.7,7.7-5.4c0.8-1.1,1.4-2.5,3.3-1.8c0.6,0.2,0.7-0.2,0.5-0.8c-0.2-0.5-0.4-1.1-0.5-1.7
							c-0.7-2.8-0.6-3.1,1.6-4c0.5-0.2,1.3-0.5,1.2-1.1c-0.3-1.2,0.1-1.5,1.2-1.5c0.2,0,0.5-0.2,0.4-0.4c-0.9-1.5,0.6-1.6,1.3-2.2
							c0.6-0.6,1.1-1.3,1.5-2.1C400.4,931.3,401.1,925.9,400.8,922.2z M395.8,911c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C394.3,910.8,394.7,910.5,395.8,911z M383.8,912.4c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C382.3,912.2,382.6,911.9,383.8,912.4z M367.4,918.5c-0.4,0.2-0.9-0.1-1.4-0.1c0.1-1.5,0.4-1.7,1.5-1.2
							C367.7,917.6,368,918.2,367.4,918.5z M379.8,908.5c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C378.4,908.2,378.7,908,379.8,908.5z M378.2,941.6c0.5,0.2,0.8,0.4,1.1,0.5c-0.1,0.6-0.1,1.2-0.2,2
							C378.3,943.3,378.1,942.6,378.2,941.6z M374.8,931.9c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4
							c-0.2,0-0.3-0.5-0.2-0.8c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5c0.3,0.8,0.2,1-0.7,1.2
							c-0.5,0.1-1,0.1-1.4,0.1C375.4,933.3,375.2,932.7,374.8,931.9z M376.2,942.3c0.1,0.2,0.2,0.3,0.3,0.5c0-0.3,0.1-0.4,0.1-0.7
							c0.1,0.1,0.3,0.1,0.3,0.2c0.2-0.1,0.3-0.3,0.5-0.4c0.1,0.2,0.3,0.3,0.3,0.5c0.1,0.4,0.1,0.9,0.2,1.5c-0.3-0.2-0.4-0.4-0.6-0.5
							c0,0.1-0.1,0.3-0.2,0.4c-0.1-0.1-0.3-0.2-0.5-0.3v0.9C376,943.7,375.8,943.2,376.2,942.3z M377.3,948.3c0.1,0.6,0.1,1.2,0.2,1.9
							C376.5,950,376.4,949.4,377.3,948.3z M378.2,949.2c0.1,0.8,0.2,1.4,0.2,2.1C377.6,950.8,377.5,950.3,378.2,949.2z M379.4,951.5
							c-0.2-0.1-0.6-0.2-0.7-0.4c-0.4-0.7,0-1.2,0.6-1.8c0.1,0.6,0.2,1.3,0.3,2C379.5,951.4,379.4,951.4,379.4,951.5z M379.6,942.5
							c0-0.1,0.3-0.5,0.5-0.5c0.2,0,0.6,0.3,0.6,0.4c-0.1,0.7-0.3,1.4-0.4,2c-0.1,0-0.2,0-0.3,0C379.8,943.9,379.6,943.2,379.6,942.5z
							M380.9,951.5c-0.1,0.1-0.5,0.1-0.6,0c-0.1-0.1-0.2-0.4-0.1-0.6c0.1-0.4,0.3-0.7,0.5-1.3c0.2,0.6,0.3,1,0.4,1.3
							C381,951.2,381,951.4,380.9,951.5z M382.5,951.2c0,0.1-0.4,0.2-0.6,0.4c-0.1-0.2-0.3-0.4-0.2-0.6c0.1-0.5,0.3-0.9,0.5-1.4
							c0.1,0,0.2,0,0.4,0C382.5,950.2,382.6,950.7,382.5,951.2z M382.6,943c-0.5,0.8-0.8,1.4-1.2,2c-0.1,0-0.2,0-0.3-0.1
							c0-0.8-0.1-1.6,0-2.5c0-0.2,0.6-0.5,1-0.6c0.1,0,0.3,0.1,0.5,0.2c0.2,0,0.5-0.2,0.7-0.1c0.2,0.1,0.3,0.5,0.2,0.8
							c-0.1,0.6-0.4,1.1-0.5,1.7c-0.1,0-0.1,0-0.2,0C382.7,944,382.6,943.5,382.6,943z M382.9,951.5c0.2-0.8,0.3-1.5,0.5-2.3
							C384.2,950.5,384,951.2,382.9,951.5z M384.7,950.4c-0.1,0.1-0.3,0.1-0.4,0.1c-0.1-0.1-0.2-0.3-0.3-0.5c0-0.5,0-1,0.2-1.7
							c0.1,0.2,0.2,0.4,0.4,0.7c0.1-0.6,0.1-1,0.2-1.5C385.5,948.4,385.4,949.7,384.7,950.4z M386.2,943c-0.1,0.4,0.1,0.9-0.7,0.9
							c-0.2,0-0.4,0.5-0.7,0.8c-0.1-0.7-0.1-1.3-0.2-1.9c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.3,0.5-0.5,1c0-0.7-0.1-1.1-0.1-1.5
							c0-0.1,0.3-0.3,0.5-0.3c0.6,0,1.2,0.2,1.9,0.3C386.2,942.4,386.3,942.7,386.2,943z M389.1,933.9c-0.5,0.1-1,0.1-1.4,0.1
							c-0.3-0.7-0.6-1.4-0.9-2.2c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4c-0.2,0-0.3-0.5-0.2-0.8
							c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5C390,933.5,389.9,933.8,389.1,933.9z M392.4,922.4
							c0-1.1,0.3-1.3,1.2-0.9c0.2,0.4,0.3,0.8-0.1,1C393.2,922.7,392.8,922.5,392.4,922.4z"/>
						<path d="M367.2,917.3c-0.9,0.5-1.2,0.7-1.1,0.9c0.4-0.2,0.8-0.5,1.1-0.7C367.7,917.2,367.5,917.3,367.2,917.3z"/>
						<path class="st18" d="M392.8,921.8c-0.3-0.2-0.1-0.2,0-0.2c0.6,0.4,0.8,0.5,0.8,0.7C393.3,922.1,393,922,392.8,921.8z"/>
						<path class="st17" d="M373.6,932.8c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C373.4,932.2,373.3,932.5,373.6,932.8z"/>
						<path class="st17" d="M374.2,932.7c0-0.3,0.1-0.7,0.1-1.1C374.3,932,374.2,932.3,374.2,932.7z"/>
						<path class="st17" d="M374.3,931.5c-1,0.7-1,0.9-0.7,1.3C373.3,932.5,373.4,932.2,374.3,931.5z"/>
						<path class="st17" d="M385.5,932.8c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C385.3,932.2,385.2,932.5,385.5,932.8z"/>
						<path class="st17" d="M386.1,932.7c0-0.3,0.1-0.7,0.1-1.1C386.2,932,386.2,932.3,386.1,932.7z"/>
						<path class="st17" d="M386.2,931.5c-1,0.7-1,0.9-0.7,1.3C385.2,932.5,385.3,932.2,386.2,931.5z"/>
						<path d="M379.5,908.7c-0.9,0.5-1.1,0.7-1,0.9c0.4-0.2,0.8-0.5,1-0.7C379.9,908.6,379.7,908.6,379.5,908.7z"/>
						<path d="M382.8,912.6c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C383.9,913.3,383.6,913.1,382.8,912.6z"/>
						<path d="M392.8,921.6c-0.1,0-0.3,0,0,0.2c0.2,0.1,0.5,0.3,0.8,0.5C393.6,922.1,393.5,922,392.8,921.6z"/>
						<path d="M394.8,911.3c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C395.9,912,395.7,911.8,394.8,911.3z"/>
					</g>
					<g id="fishcreek_x5F_boatRamp" class="monster_svg">
						<path class="st19" d="M566,1153.8c0-0.7-0.9-1-1.4-0.4c-0.5,0.6-1,1.3-1.6,1.9c-0.9,1-1.9,1.9-3.1,2.4c-0.4,0.2-0.8,0.3-1.1-0.1
							c-0.2-0.3-0.1-0.6,0-1c0.3-0.6,0.7-1.2,0.8-1.9c0.2-1-0.3-1.7-1.2-2.1c-0.9-0.4-1.3,0.4-1.6,1c-0.8,1.5-2.5,1.6-3.6,2.5
							c-0.2,0.1-0.5,0.1-0.6-0.1c-0.2-0.3-0.2-0.7,0-1c0.7-1.3,1.7-2.2,3.1-2.7c2.8-1,3.9-2.7,3.4-5.6c-0.1-0.8-0.2-1.5,1.1-1.6
							c1.1-0.1,1.6-1.2,1.4-2.3c-0.2-1.1-1.2-1.1-2.1-1c-1.6,0.2-3.2,2.1-3,4.1c0.2,2.1-0.7,3.1-2.6,3.6c-0.3,0.1-0.6,0.3-1,0.4
							c-1.2,0.6-2.2,1.8-3.4,2c-1.2,0.2-1.7-1.8-2.9-2.3c-0.4-0.2-1-0.4-0.9-0.9c0.1-0.5,0.7-0.5,1.1-0.6c0.7-0.1,1.4-0.3,2-0.6
							c0.9-0.6,1.3-1.4,1.1-2.5c-0.1-0.7-0.3-1.5-1.2-1.6c-1-0.1-1.8,0.4-2.4,1.2c-0.2,0.3-0.4,0.7-0.7,1c-0.6,0.5-1.1,0.4-1.1-0.5
							c0-0.8-0.1-1.7,0.5-2.3c0.7-0.9,0.8-1.6,0.5-2.3c-0.6-1.6-3-1.6-3.6,0c-0.3,0.8-0.3,1.6-0.1,2.6c0.3,1.8,0.1,3.3-1.8,4.4
							c-2,1.2-2.7,3.4-2.2,5.8c0.2,1.1-0.1,1.3-1,1.1c-0.5-0.1-0.9-0.2-1.4-0.3c-2-0.4-2.6-1.4-2.2-3.4c0.2-0.9,0.4-1.8-0.4-2.5
							c-0.5-0.5-1.2-0.3-1.8,0c-1,0.5-1.1,1.5-1,2.4c0.2,2.1,1.2,3.9,2.5,5.6c0,0,0,0.1,0.1,0.1c0.6,0.6-0.2,1.6-0.9,1.2
							c-0.1,0-0.1,0-0.2-0.1c-1.9-1-3.2-2.6-4.5-4.3v0c-0.5-0.6-1.4-0.3-1.4,0.5v2.9c0,0,0,0.1,0,0.1c0.2,1.9,0.4,3.8,0.7,5.6
							c0.5,2.4,1.1,4.7,3.5,6.1c0.6,0.3,0.4,1.7,1.4,2.1c0.3,0.1,0.5,0.4,0.5,0.8c-0.1,1.5,1.3,1.5,2.4,1.9c0.7,0.3,0.7,1,0.7,1.6
							c0,1.2-0.3,2.3-0.7,3.4c-0.3,0.7-0.4,1.4,0.7,1c1.3-0.4,2,0.2,2.5,1.2c1.1,1.8,2.7,3,4.6,3.8c0.1,0,0.1,0,0.2,0.1
							c1.5,0.5,2.5,3,4.1,2.1c2.7-1.6,5.8-2.7,7.7-5.4c0.8-1.1,1.4-2.5,3.3-1.8c0.6,0.2,0.7-0.2,0.5-0.8c-0.2-0.5-0.4-1.1-0.5-1.7
							c-0.7-2.8-0.6-3.1,1.6-4c0.5-0.2,1.3-0.5,1.2-1.1c-0.3-1.2,0.1-1.5,1.2-1.5c0.2,0,0.5-0.2,0.4-0.4c-0.9-1.5,0.6-1.6,1.3-2.2
							s1.1-1.3,1.5-2.1C565.6,1163,566.2,1157.6,566,1153.8z M561,1142.7c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C559.5,1142.4,559.9,1142.2,561,1142.7z M549,1144.1c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C547.5,1143.8,547.8,1143.6,549,1144.1z M532.5,1150.1c-0.4,0.2-0.9-0.1-1.4-0.1c0.1-1.5,0.4-1.7,1.5-1.2
							C532.9,1149.3,533.2,1149.9,532.5,1150.1z M545,1140.1c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C543.6,1139.9,543.9,1139.6,545,1140.1z M543.4,1173.2c0.5,0.2,0.8,0.4,1.1,0.5c-0.1,0.6-0.1,1.2-0.2,2
							C543.5,1175,543.3,1174.2,543.4,1173.2z M540,1163.5c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4
							c-0.2,0-0.3-0.5-0.2-0.8c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5c0.3,0.8,0.2,1-0.7,1.2
							c-0.5,0.1-1,0.1-1.4,0.1C540.6,1165,540.3,1164.3,540,1163.5z M541.4,1174c0.1,0.2,0.2,0.3,0.3,0.5c0-0.3,0.1-0.4,0.1-0.7
							c0.1,0.1,0.3,0.1,0.3,0.2c0.2-0.1,0.3-0.3,0.5-0.4c0.1,0.2,0.3,0.3,0.3,0.5c0.1,0.4,0.1,0.9,0.2,1.5c-0.3-0.2-0.4-0.4-0.6-0.5
							c0,0.1-0.1,0.3-0.2,0.4c-0.1-0.1-0.3-0.2-0.5-0.3v0.9C541.1,1175.3,541,1174.9,541.4,1174z M542.5,1179.9c0.1,0.6,0.1,1.2,0.2,1.9
							C541.7,1181.6,541.6,1181,542.5,1179.9z M543.4,1180.8c0.1,0.8,0.2,1.4,0.2,2.1C542.7,1182.5,542.7,1181.9,543.4,1180.8z
							M544.6,1183.2c-0.2-0.1-0.6-0.2-0.7-0.4c-0.4-0.7,0-1.2,0.6-1.8c0.1,0.6,0.2,1.3,0.3,2C544.7,1183,544.6,1183.1,544.6,1183.2z
							M544.7,1174.2c0-0.1,0.3-0.5,0.5-0.5c0.2,0,0.6,0.3,0.6,0.4c-0.1,0.7-0.3,1.4-0.4,2c-0.1,0-0.2,0-0.3,0
							C545,1175.5,544.8,1174.8,544.7,1174.2z M546,1183.2c-0.1,0.1-0.5,0.1-0.6,0c-0.1-0.1-0.2-0.4-0.1-0.6c0.1-0.4,0.3-0.7,0.5-1.3
							c0.2,0.6,0.3,1,0.4,1.3C546.2,1182.8,546.2,1183.1,546,1183.2z M547.7,1182.8c0,0.1-0.4,0.2-0.6,0.4c-0.1-0.2-0.3-0.4-0.2-0.6
							c0.1-0.5,0.3-0.9,0.5-1.4c0.1,0,0.2,0,0.4,0C547.7,1181.8,547.7,1182.3,547.7,1182.8z M547.8,1174.6c-0.5,0.8-0.8,1.4-1.2,2
							c-0.1,0-0.2,0-0.3-0.1c0-0.8-0.1-1.6,0-2.5c0-0.2,0.6-0.5,1-0.6c0.1,0,0.3,0.1,0.5,0.2c0.2,0,0.5-0.2,0.7-0.1
							c0.2,0.1,0.3,0.5,0.2,0.8c-0.1,0.6-0.4,1.1-0.5,1.7c-0.1,0-0.1,0-0.2,0C547.9,1175.6,547.8,1175.1,547.8,1174.6z M548,1183.1
							c0.2-0.8,0.3-1.5,0.5-2.3C549.3,1182.1,549.2,1182.9,548,1183.1z M549.8,1182c-0.1,0.1-0.3,0.1-0.4,0.1c-0.1-0.1-0.2-0.3-0.3-0.5
							c0-0.5,0-1,0.2-1.7c0.1,0.2,0.2,0.4,0.4,0.7c0.1-0.6,0.1-1,0.2-1.5C550.7,1180,550.6,1181.3,549.8,1182z M551.4,1174.6
							c-0.1,0.4,0.1,0.9-0.7,0.9c-0.2,0-0.4,0.5-0.7,0.8c-0.1-0.7-0.1-1.3-0.2-1.9c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.3,0.5-0.5,1
							c0-0.7-0.1-1.1-0.1-1.5c0-0.1,0.3-0.3,0.5-0.3c0.6,0,1.2,0.2,1.9,0.3C551.4,1174.1,551.4,1174.4,551.4,1174.6z M554.3,1165.6
							c-0.5,0.1-1,0.1-1.4,0.1c-0.3-0.7-0.6-1.4-0.9-2.2c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4
							c-0.2,0-0.3-0.5-0.2-0.8c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5
							C555.2,1165.2,555.1,1165.4,554.3,1165.6z M557.6,1154.1c0-1.1,0.3-1.3,1.2-0.9c0.2,0.4,0.3,0.8-0.1,1
							C558.4,1154.3,558,1154.1,557.6,1154.1z"/>
						<path class="st19" d="M532.4,1148.9c-0.9,0.5-1.2,0.7-1.1,0.9c0.4-0.2,0.8-0.5,1.1-0.7C532.9,1148.8,532.6,1148.9,532.4,1148.9z"
							/>
						<path class="st19" d="M558,1153.5c-0.3-0.2-0.1-0.2,0-0.2c0.6,0.4,0.8,0.5,0.8,0.7C558.5,1153.8,558.2,1153.6,558,1153.5z"/>
						<path class="st19" d="M538.7,1164.4c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C538.6,1163.8,538.5,1164.1,538.7,1164.4z"/>
						<path class="st19" d="M539.4,1164.3c0-0.3,0.1-0.7,0.1-1.1C539.4,1163.6,539.4,1164,539.4,1164.3z"/>
						<path class="st19" d="M539.5,1163.2c-1,0.7-1,0.9-0.7,1.3C538.5,1164.1,538.6,1163.8,539.5,1163.2z"/>
						<path class="st19" d="M550.7,1164.4c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C550.5,1163.8,550.4,1164.1,550.7,1164.4z"/>
						<path class="st19" d="M551.3,1164.3c0-0.3,0.1-0.7,0.1-1.1C551.4,1163.6,551.3,1164,551.3,1164.3z"/>
						<path class="st19" d="M551.4,1163.2c-1,0.7-1,0.9-0.7,1.3C550.4,1164.1,550.5,1163.8,551.4,1163.2z"/>
						<path class="st19" d="M544.7,1140.3c-0.9,0.5-1.1,0.7-1,0.9c0.4-0.2,0.8-0.5,1-0.7C545.1,1140.2,544.9,1140.3,544.7,1140.3z"/>
						<path class="st19" d="M547.9,1144.3c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C549.1,1145,548.8,1144.8,547.9,1144.3z"/>
						<path class="st19" d="M558,1153.3c-0.1,0-0.3,0,0,0.2c0.2,0.1,0.5,0.3,0.8,0.5C558.8,1153.8,558.7,1153.6,558,1153.3z"/>
						<path class="st19" d="M560,1142.9c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C561.1,1143.6,560.9,1143.4,560,1142.9z"/>
					</g>
					<g id="mountainBikeSkillsPark" class="monster_svg">
						<path class="st20" d="M670.4,873.6c0-0.7-0.9-1-1.4-0.4c-0.5,0.6-1,1.3-1.6,1.9c-0.9,1-1.9,1.9-3.1,2.4c-0.4,0.2-0.8,0.3-1.1-0.1
							c-0.2-0.3-0.1-0.6,0-1c0.3-0.6,0.7-1.2,0.8-1.9c0.2-1-0.3-1.7-1.2-2.1c-0.9-0.4-1.3,0.4-1.6,1c-0.8,1.5-2.5,1.6-3.6,2.5
							c-0.2,0.1-0.5,0.1-0.6-0.1c-0.2-0.3-0.2-0.7,0-1c0.7-1.3,1.7-2.2,3.1-2.7c2.8-1,3.9-2.7,3.4-5.6c-0.1-0.8-0.2-1.5,1.1-1.6
							c1.1-0.1,1.6-1.2,1.4-2.3c-0.2-1.1-1.2-1.1-2.1-1c-1.6,0.2-3.2,2.1-3,4.1c0.2,2.1-0.7,3.1-2.6,3.6c-0.3,0.1-0.6,0.3-1,0.4
							c-1.2,0.6-2.2,1.8-3.4,2c-1.2,0.2-1.7-1.8-2.9-2.3c-0.4-0.2-1-0.4-0.9-0.9s0.7-0.5,1.1-0.6c0.7-0.1,1.4-0.3,2-0.6
							c0.9-0.6,1.3-1.4,1.1-2.5c-0.1-0.7-0.3-1.5-1.2-1.6c-1-0.1-1.8,0.4-2.4,1.2c-0.2,0.3-0.4,0.7-0.7,1c-0.6,0.5-1.1,0.4-1.1-0.5
							c0-0.8-0.1-1.7,0.5-2.3c0.7-0.9,0.8-1.6,0.5-2.3c-0.6-1.6-3-1.6-3.6,0c-0.3,0.8-0.3,1.6-0.1,2.6c0.3,1.8,0.1,3.3-1.8,4.4
							c-2,1.2-2.7,3.4-2.2,5.8c0.2,1.1-0.1,1.3-1,1.1c-0.5-0.1-0.9-0.2-1.4-0.3c-2-0.4-2.6-1.4-2.2-3.4c0.2-0.9,0.4-1.8-0.4-2.5
							c-0.5-0.5-1.2-0.3-1.8,0c-1,0.5-1.1,1.5-1,2.4c0.2,2.1,1.2,3.9,2.5,5.6c0,0,0,0.1,0.1,0.1c0.6,0.6-0.2,1.6-0.9,1.2
							c-0.1,0-0.1,0-0.2-0.1c-1.9-1-3.2-2.6-4.5-4.3v0c-0.5-0.6-1.4-0.3-1.4,0.5v2.9c0,0,0,0.1,0,0.1c0.2,1.9,0.4,3.8,0.7,5.6
							c0.5,2.4,1.1,4.7,3.5,6.1c0.6,0.3,0.4,1.7,1.4,2.1c0.3,0.1,0.5,0.4,0.5,0.8c-0.1,1.5,1.3,1.5,2.4,1.9c0.7,0.3,0.7,1,0.7,1.6
							c0,1.2-0.3,2.3-0.7,3.4c-0.3,0.7-0.4,1.4,0.7,1c1.3-0.4,2,0.2,2.5,1.2c1.1,1.8,2.7,3,4.6,3.8c0.1,0,0.1,0,0.2,0.1
							c1.5,0.5,2.5,3,4.1,2.1c2.7-1.6,5.8-2.7,7.7-5.4c0.8-1.1,1.4-2.5,3.3-1.8c0.6,0.2,0.7-0.2,0.5-0.8c-0.2-0.5-0.4-1.1-0.5-1.7
							c-0.7-2.8-0.6-3.1,1.6-4c0.5-0.2,1.3-0.5,1.2-1.1c-0.3-1.2,0.1-1.5,1.2-1.5c0.2,0,0.5-0.2,0.4-0.4c-0.9-1.5,0.6-1.6,1.3-2.2
							s1.1-1.3,1.5-2.1C670.1,882.7,670.7,877.3,670.4,873.6z M665.5,862.4c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C664,862.2,664.3,861.9,665.5,862.4z M653.4,863.8c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C652,863.6,652.3,863.3,653.4,863.8z M637,869.9c-0.4,0.2-0.9-0.1-1.4-0.1c0.1-1.5,0.4-1.7,1.5-1.2
							C637.4,869,637.7,869.6,637,869.9z M649.5,859.9c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C648,859.6,648.4,859.4,649.5,859.9z M647.9,892.9c0.5,0.2,0.8,0.4,1.1,0.5c-0.1,0.6-0.1,1.2-0.2,2
							C648,894.7,647.8,894,647.9,892.9z M644.5,883.2c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4
							c-0.2,0-0.3-0.5-0.2-0.8c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5c0.3,0.8,0.2,1-0.7,1.2
							c-0.5,0.1-1,0.1-1.4,0.1C645.1,884.7,644.8,884.1,644.5,883.2z M645.8,893.7c0.1,0.2,0.2,0.3,0.3,0.5c0-0.3,0.1-0.4,0.1-0.7
							c0.1,0.1,0.3,0.1,0.3,0.2c0.2-0.1,0.3-0.3,0.5-0.4c0.1,0.2,0.3,0.3,0.3,0.5c0.1,0.4,0.1,0.9,0.2,1.5c-0.3-0.2-0.4-0.4-0.6-0.5
							c0,0.1-0.1,0.3-0.2,0.4c-0.1-0.1-0.3-0.2-0.5-0.3v0.9C645.6,895.1,645.5,894.6,645.8,893.7z M646.9,899.7c0.1,0.6,0.1,1.2,0.2,1.9
							C646.2,901.4,646.1,900.8,646.9,899.7z M647.9,900.5c0.1,0.8,0.2,1.4,0.2,2.1C647.2,902.2,647.2,901.7,647.9,900.5z M649,902.9
							c-0.2-0.1-0.6-0.2-0.7-0.4c-0.4-0.7,0-1.2,0.6-1.8c0.1,0.6,0.2,1.3,0.3,2C649.2,902.8,649.1,902.8,649,902.9z M649.2,893.9
							c0-0.1,0.3-0.5,0.5-0.5c0.2,0,0.6,0.3,0.6,0.4c-0.1,0.7-0.3,1.4-0.4,2c-0.1,0-0.2,0-0.3,0C649.5,895.3,649.3,894.6,649.2,893.9z
							M650.5,902.9c-0.1,0.1-0.5,0.1-0.6,0c-0.1-0.1-0.2-0.4-0.1-0.6c0.1-0.4,0.3-0.7,0.5-1.3c0.2,0.6,0.3,1,0.4,1.3
							C650.7,902.5,650.6,902.8,650.5,902.9z M652.2,902.6c0,0.1-0.4,0.2-0.6,0.4c-0.1-0.2-0.3-0.4-0.2-0.6c0.1-0.5,0.3-0.9,0.5-1.4
							c0.1,0,0.2,0,0.4,0C652.2,901.5,652.2,902.1,652.2,902.6z M652.3,894.3c-0.5,0.8-0.8,1.4-1.2,2c-0.1,0-0.2,0-0.3-0.1
							c0-0.8-0.1-1.6,0-2.5c0-0.2,0.6-0.5,1-0.6c0.1,0,0.3,0.1,0.5,0.2c0.2,0,0.5-0.2,0.7-0.1c0.2,0.1,0.3,0.5,0.2,0.8
							c-0.1,0.6-0.4,1.1-0.5,1.7c-0.1,0-0.1,0-0.2,0C652.4,895.3,652.3,894.9,652.3,894.3z M652.5,902.9c0.2-0.8,0.3-1.5,0.5-2.3
							C653.8,901.9,653.7,902.6,652.5,902.9z M654.3,901.8c-0.1,0.1-0.3,0.1-0.4,0.1c-0.1-0.1-0.2-0.3-0.3-0.5c0-0.5,0-1,0.2-1.7
							c0.1,0.2,0.2,0.4,0.4,0.7c0.1-0.6,0.1-1,0.2-1.5C655.2,899.8,655.1,901.1,654.3,901.8z M655.9,894.4c-0.1,0.4,0.1,0.9-0.7,0.9
							c-0.2,0-0.4,0.5-0.7,0.8c-0.1-0.7-0.1-1.3-0.2-1.9c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.3,0.5-0.5,1c0-0.7-0.1-1.1-0.1-1.5
							c0-0.1,0.3-0.3,0.5-0.3c0.6,0,1.2,0.2,1.9,0.3C655.9,893.8,655.9,894.1,655.9,894.4z M658.7,885.3c-0.5,0.1-1,0.1-1.4,0.1
							c-0.3-0.7-0.6-1.4-0.9-2.2c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4c-0.2,0-0.3-0.5-0.2-0.8
							c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5C659.7,884.9,659.6,885.1,658.7,885.3z M662.1,873.8
							c0-1.1,0.3-1.3,1.2-0.9c0.2,0.4,0.3,0.8-0.1,1C662.9,874,662.5,873.9,662.1,873.8z"/>
						<path class="st20" d="M636.9,868.7c-0.9,0.5-1.2,0.7-1.1,0.9c0.4-0.2,0.8-0.5,1.1-0.7C637.3,868.6,637.1,868.6,636.9,868.7z"/>
						<path class="st20" d="M662.5,873.2c-0.3-0.2-0.1-0.2,0-0.2c0.6,0.4,0.8,0.5,0.8,0.7C663,873.5,662.7,873.4,662.5,873.2z"/>
						<path class="st20" d="M643.2,884.2c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C643,883.6,642.9,883.8,643.2,884.2z"/>
						<path class="st20" d="M643.9,884.1c0-0.3,0.1-0.7,0.1-1.1C643.9,883.4,643.9,883.7,643.9,884.1z"/>
						<path class="st20" d="M644,882.9c-1,0.7-1,0.9-0.7,1.3C642.9,883.8,643,883.6,644,882.9z"/>
						<path class="st20" d="M655.2,884.2c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C655,883.6,654.9,883.8,655.2,884.2z"/>
						<path class="st20" d="M655.8,884.1c0-0.3,0.1-0.7,0.1-1.1C655.9,883.4,655.8,883.7,655.8,884.1z"/>
						<path class="st20" d="M655.9,882.9c-1,0.7-1,0.9-0.7,1.3C654.9,883.8,655,883.6,655.9,882.9z"/>
						<path class="st20" d="M649.2,860.1c-0.9,0.5-1.1,0.7-1,0.9c0.4-0.2,0.8-0.5,1-0.7C649.6,860,649.4,860,649.2,860.1z"/>
						<path class="st20" d="M652.4,864c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C653.5,864.7,653.3,864.5,652.4,864z"/>
						<path class="st20" d="M662.5,873c-0.1,0-0.3,0,0,0.2c0.2,0.1,0.5,0.3,0.8,0.5C663.3,873.5,663.1,873.4,662.5,873z"/>
						<path class="st20" d="M664.5,862.7c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C665.6,863.4,665.3,863.2,664.5,862.7z"/>
					</g>
					<g id="polarIsland" class="monster_svg">
						<path class="st21" d="M737,512.9c0-0.7-0.9-1-1.4-0.4c-0.5,0.6-1,1.3-1.6,1.9c-0.9,1-1.9,1.9-3.1,2.4c-0.4,0.2-0.8,0.3-1.1-0.1
							c-0.2-0.3-0.1-0.6,0-1c0.3-0.6,0.7-1.2,0.8-1.9c0.2-1-0.3-1.7-1.2-2.1c-0.9-0.4-1.3,0.4-1.6,1c-0.8,1.5-2.5,1.6-3.6,2.5
							c-0.2,0.1-0.5,0.1-0.6-0.1c-0.2-0.3-0.2-0.7,0-1c0.7-1.3,1.7-2.2,3.1-2.7c2.8-1,3.9-2.7,3.4-5.6c-0.1-0.8-0.2-1.5,1.1-1.6
							c1.1-0.1,1.6-1.2,1.4-2.3c-0.2-1.1-1.2-1.1-2.1-1c-1.6,0.2-3.2,2.1-3,4.1c0.2,2.1-0.7,3.1-2.6,3.6c-0.3,0.1-0.6,0.3-1,0.4
							c-1.2,0.6-2.2,1.8-3.4,2c-1.2,0.2-1.7-1.8-2.9-2.3c-0.4-0.2-1-0.4-0.9-0.9c0.1-0.5,0.7-0.5,1.1-0.6c0.7-0.1,1.4-0.3,2-0.6
							c0.9-0.6,1.3-1.4,1.1-2.5c-0.1-0.7-0.3-1.5-1.2-1.6c-1-0.1-1.8,0.4-2.4,1.2c-0.2,0.3-0.4,0.7-0.7,1c-0.6,0.5-1.1,0.4-1.1-0.5
							c0-0.8-0.1-1.7,0.5-2.3c0.7-0.9,0.8-1.6,0.5-2.3c-0.6-1.6-3-1.6-3.6,0c-0.3,0.8-0.3,1.6-0.1,2.6c0.3,1.8,0.1,3.3-1.8,4.4
							c-2,1.2-2.7,3.4-2.2,5.8c0.2,1.1-0.1,1.3-1,1.1c-0.5-0.1-0.9-0.2-1.4-0.3c-2-0.4-2.6-1.4-2.2-3.4c0.2-0.9,0.4-1.8-0.4-2.5
							c-0.5-0.5-1.2-0.3-1.8,0c-1,0.5-1.1,1.5-1,2.4c0.2,2.1,1.2,3.9,2.5,5.6c0,0,0,0.1,0.1,0.1c0.6,0.6-0.2,1.6-0.9,1.2
							c-0.1,0-0.1,0-0.2-0.1c-1.9-1-3.2-2.6-4.5-4.3v0c-0.5-0.6-1.4-0.3-1.4,0.5v2.9c0,0,0,0.1,0,0.1c0.2,1.9,0.4,3.8,0.7,5.6
							c0.5,2.4,1.1,4.7,3.5,6.1c0.6,0.3,0.4,1.7,1.4,2.1c0.3,0.1,0.5,0.4,0.5,0.8c-0.1,1.5,1.3,1.5,2.4,1.9c0.7,0.3,0.7,1,0.7,1.6
							c0,1.2-0.3,2.3-0.7,3.4c-0.3,0.7-0.4,1.4,0.7,1c1.3-0.4,2,0.2,2.5,1.2c1.1,1.8,2.7,3,4.6,3.8c0.1,0,0.1,0,0.2,0.1
							c1.5,0.5,2.5,3,4.1,2.1c2.7-1.6,5.8-2.7,7.7-5.4c0.8-1.1,1.4-2.5,3.3-1.8c0.6,0.2,0.7-0.2,0.5-0.8s-0.4-1.1-0.5-1.7
							c-0.7-2.8-0.6-3.1,1.6-4c0.5-0.2,1.3-0.5,1.2-1.1c-0.3-1.2,0.1-1.5,1.2-1.5c0.2,0,0.5-0.2,0.4-0.4c-0.9-1.5,0.6-1.6,1.3-2.2
							s1.1-1.3,1.5-2.1C736.6,522.1,737.3,516.7,737,512.9z M732,501.8c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C730.5,501.5,730.9,501.3,732,501.8z M720,503.2c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C718.5,502.9,718.8,502.7,720,503.2z M703.6,509.2c-0.4,0.2-0.9-0.1-1.4-0.1c0.1-1.5,0.4-1.7,1.5-1.2
							C703.9,508.4,704.2,509,703.6,509.2z M716,499.2c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C714.6,499,714.9,498.7,716,499.2z M714.4,532.3c0.5,0.2,0.8,0.4,1.1,0.5c-0.1,0.6-0.1,1.2-0.2,2
							C714.5,534.1,714.3,533.3,714.4,532.3z M711,522.6c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4
							c-0.2,0-0.3-0.5-0.2-0.8c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5c0.3,0.8,0.2,1-0.7,1.2
							c-0.5,0.1-1,0.1-1.4,0.1C711.6,524,711.4,523.4,711,522.6z M712.4,533.1c0.1,0.2,0.2,0.3,0.3,0.5c0-0.3,0.1-0.4,0.1-0.7
							c0.1,0.1,0.3,0.1,0.3,0.2c0.2-0.1,0.3-0.3,0.5-0.4c0.1,0.2,0.3,0.3,0.3,0.5c0.1,0.4,0.1,0.9,0.2,1.5c-0.3-0.2-0.4-0.4-0.6-0.5
							c0,0.1-0.1,0.3-0.2,0.4c-0.1-0.1-0.3-0.2-0.5-0.3v0.9C712.2,534.4,712,534,712.4,533.1z M713.5,539c0.1,0.6,0.1,1.2,0.2,1.9
							C712.7,540.7,712.6,540.1,713.5,539z M714.4,539.9c0.1,0.8,0.2,1.4,0.2,2.1C713.8,541.6,713.7,541,714.4,539.9z M715.6,542.3
							c-0.2-0.1-0.6-0.2-0.7-0.4c-0.4-0.7,0-1.2,0.6-1.8c0.1,0.6,0.2,1.3,0.3,2C715.7,542.1,715.6,542.2,715.6,542.3z M715.8,533.2
							c0-0.1,0.3-0.5,0.5-0.5c0.2,0,0.6,0.3,0.6,0.4c-0.1,0.7-0.3,1.4-0.4,2c-0.1,0-0.2,0-0.3,0C716,534.6,715.8,533.9,715.8,533.2z
							M717.1,542.3c-0.1,0.1-0.5,0.1-0.6,0c-0.1-0.1-0.2-0.4-0.1-0.6c0.1-0.4,0.3-0.7,0.5-1.3c0.2,0.6,0.3,1,0.4,1.3
							C717.2,541.9,717.2,542.2,717.1,542.3z M718.7,541.9c0,0.1-0.4,0.2-0.6,0.4c-0.1-0.2-0.3-0.4-0.2-0.6c0.1-0.5,0.3-0.9,0.5-1.4
							c0.1,0,0.2,0,0.4,0C718.7,540.9,718.8,541.4,718.7,541.9z M718.8,533.7c-0.5,0.8-0.8,1.4-1.2,2c-0.1,0-0.2,0-0.3-0.1
							c0-0.8-0.1-1.6,0-2.5c0-0.2,0.6-0.5,1-0.6c0.1,0,0.3,0.1,0.5,0.2c0.2,0,0.5-0.2,0.7-0.1c0.2,0.1,0.3,0.5,0.2,0.8
							c-0.1,0.6-0.4,1.1-0.5,1.7c-0.1,0-0.1,0-0.2,0C718.9,534.7,718.8,534.2,718.8,533.7z M719.1,542.2c0.2-0.8,0.3-1.5,0.5-2.3
							C720.4,541.2,720.2,542,719.1,542.2z M720.9,541.1c-0.1,0.1-0.3,0.1-0.4,0.1c-0.1-0.1-0.2-0.3-0.3-0.5c0-0.5,0-1,0.2-1.7
							c0.1,0.2,0.2,0.4,0.4,0.7c0.1-0.6,0.1-1,0.2-1.5C721.7,539.1,721.6,540.4,720.9,541.1z M722.4,533.7c-0.1,0.4,0.1,0.9-0.7,0.9
							c-0.2,0-0.4,0.5-0.7,0.8c-0.1-0.7-0.1-1.3-0.2-1.9c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.3,0.5-0.5,1c0-0.7-0.1-1.1-0.1-1.5
							c0-0.1,0.3-0.3,0.5-0.3c0.6,0,1.2,0.2,1.9,0.3C722.4,533.2,722.5,533.5,722.4,533.7z M725.3,524.7c-0.5,0.1-1,0.1-1.4,0.1
							c-0.3-0.7-0.6-1.4-0.9-2.2c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4c-0.2,0-0.3-0.5-0.2-0.8
							c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5C726.2,524.3,726.1,524.5,725.3,524.7z M728.6,513.2
							c0-1.1,0.3-1.3,1.2-0.9c0.2,0.4,0.3,0.8-0.1,1C729.4,513.4,729,513.2,728.6,513.2z"/>
						<path class="st21" d="M703.4,508c-0.9,0.5-1.2,0.7-1.1,0.9c0.4-0.2,0.8-0.5,1.1-0.7C703.9,507.9,703.7,508,703.4,508z"/>
						<path class="st21" d="M729,512.6c-0.3-0.2-0.1-0.2,0-0.2c0.6,0.4,0.8,0.5,0.8,0.7C729.5,512.9,729.2,512.7,729,512.6z"/>
						<path class="st21" d="M709.8,523.5c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C709.6,522.9,709.5,523.2,709.8,523.5z"/>
						<path class="st21" d="M710.4,523.4c0-0.3,0.1-0.7,0.1-1.1C710.5,522.7,710.4,523.1,710.4,523.4z"/>
						<path class="st21" d="M710.5,522.3c-1,0.7-1,0.9-0.7,1.3C709.5,523.2,709.6,522.9,710.5,522.3z"/>
						<path class="st21" d="M721.7,523.5c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C721.5,522.9,721.4,523.2,721.7,523.5z"/>
						<path class="st21" d="M722.3,523.4c0-0.3,0.1-0.7,0.1-1.1C722.4,522.7,722.4,523.1,722.3,523.4z"/>
						<path class="st21" d="M722.4,522.3c-1,0.7-1,0.9-0.7,1.3C721.4,523.2,721.5,522.9,722.4,522.3z"/>
						<path class="st21" d="M715.7,499.4c-0.9,0.5-1.1,0.7-1,0.9c0.4-0.2,0.8-0.5,1-0.7C716.1,499.3,715.9,499.4,715.7,499.4z"/>
						<path class="st21" d="M719,503.4c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C720.1,504.1,719.8,503.9,719,503.4z"/>
						<path class="st21" d="M729,512.4c-0.1,0-0.3,0,0,0.2c0.2,0.1,0.5,0.3,0.8,0.5C729.8,512.9,729.7,512.7,729,512.4z"/>
						<path class="st21" d="M731,502c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C732.1,502.7,731.9,502.5,731,502z"/>
					</g>
					<g id="bankside" class="monster_svg">
						<path class="st22" d="M778.2,766.4c0-0.7-0.9-1-1.4-0.4c-0.5,0.6-1,1.3-1.6,1.9c-0.9,1-1.9,1.9-3.1,2.4c-0.4,0.2-0.8,0.3-1.1-0.1
							c-0.2-0.3-0.1-0.6,0-1c0.3-0.6,0.7-1.2,0.8-1.9c0.2-1-0.3-1.7-1.2-2.1c-0.9-0.4-1.3,0.4-1.6,1c-0.8,1.5-2.5,1.6-3.6,2.5
							c-0.2,0.1-0.5,0.1-0.6-0.1c-0.2-0.3-0.2-0.7,0-1c0.7-1.3,1.7-2.2,3.1-2.7c2.8-1,3.9-2.7,3.4-5.6c-0.1-0.8-0.2-1.5,1.1-1.6
							c1.1-0.1,1.6-1.2,1.4-2.3c-0.2-1.1-1.2-1.1-2.1-1c-1.6,0.2-3.2,2.1-3,4.1c0.2,2.1-0.7,3.1-2.6,3.6c-0.3,0.1-0.6,0.3-1,0.4
							c-1.2,0.6-2.2,1.8-3.4,2c-1.2,0.2-1.7-1.8-2.9-2.3c-0.4-0.2-1-0.4-0.9-0.9c0.1-0.5,0.7-0.5,1.1-0.6c0.7-0.1,1.4-0.3,2-0.6
							c0.9-0.6,1.3-1.4,1.1-2.5c-0.1-0.7-0.3-1.5-1.2-1.6c-1-0.1-1.8,0.4-2.4,1.2c-0.2,0.3-0.4,0.7-0.7,1c-0.6,0.5-1.1,0.4-1.1-0.5
							c0-0.8-0.1-1.7,0.5-2.3c0.7-0.9,0.8-1.6,0.5-2.3c-0.6-1.6-3-1.6-3.6,0c-0.3,0.8-0.3,1.6-0.1,2.6c0.3,1.8,0.1,3.3-1.8,4.4
							c-2,1.2-2.7,3.4-2.2,5.8c0.2,1.1-0.1,1.3-1,1.1c-0.5-0.1-0.9-0.2-1.4-0.3c-2-0.4-2.6-1.4-2.2-3.4c0.2-0.9,0.4-1.8-0.4-2.5
							c-0.5-0.5-1.2-0.3-1.8,0c-1,0.5-1.1,1.5-1,2.4c0.2,2.1,1.2,3.9,2.5,5.6c0,0,0,0.1,0.1,0.1c0.6,0.6-0.2,1.6-0.9,1.2
							c-0.1,0-0.1,0-0.2-0.1c-1.9-1-3.2-2.6-4.5-4.3v0c-0.5-0.6-1.4-0.3-1.4,0.5v2.9c0,0,0,0.1,0,0.1c0.2,1.9,0.4,3.8,0.7,5.6
							c0.5,2.4,1.1,4.7,3.5,6.1c0.6,0.3,0.4,1.7,1.4,2.1c0.3,0.1,0.5,0.4,0.5,0.8c-0.1,1.5,1.3,1.5,2.4,1.9c0.7,0.3,0.7,1,0.7,1.6
							c0,1.2-0.3,2.3-0.7,3.4c-0.3,0.7-0.4,1.4,0.7,1c1.3-0.4,2,0.2,2.5,1.2c1.1,1.8,2.7,3,4.6,3.8c0.1,0,0.1,0,0.2,0.1
							c1.5,0.5,2.5,3,4.1,2.1c2.7-1.6,5.8-2.7,7.7-5.4c0.8-1.1,1.4-2.5,3.3-1.8c0.6,0.2,0.7-0.2,0.5-0.8c-0.2-0.5-0.4-1.1-0.5-1.7
							c-0.7-2.8-0.6-3.1,1.6-4c0.5-0.2,1.3-0.5,1.2-1.1c-0.3-1.2,0.1-1.5,1.2-1.5c0.2,0,0.5-0.2,0.4-0.4c-0.9-1.5,0.6-1.6,1.3-2.2
							c0.6-0.6,1.1-1.3,1.5-2.1C777.8,775.5,778.5,770.1,778.2,766.4z M773.2,755.2c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C771.8,755,772.1,754.7,773.2,755.2z M761.2,756.6c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C759.7,756.4,760.1,756.1,761.2,756.6z M744.8,762.7c-0.4,0.2-0.9-0.1-1.4-0.1c0.1-1.5,0.4-1.7,1.5-1.2
							C745.2,761.8,745.4,762.4,744.8,762.7z M757.3,752.7c0.2,0.5,0.5,1.1-0.2,1.4c-0.4,0.2-0.9-0.1-1.4-0.1
							C755.8,752.4,756.1,752.2,757.3,752.7z M755.6,785.7c0.5,0.2,0.8,0.4,1.1,0.5c-0.1,0.6-0.1,1.2-0.2,2
							C755.7,787.5,755.5,786.8,755.6,785.7z M752.2,776c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4
							c-0.2,0-0.3-0.5-0.2-0.8c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5c0.3,0.8,0.2,1-0.7,1.2
							c-0.5,0.1-1,0.1-1.4,0.1C752.9,777.5,752.6,776.9,752.2,776z M753.6,786.5c0.1,0.2,0.2,0.3,0.3,0.5c0-0.3,0.1-0.4,0.1-0.7
							c0.1,0.1,0.3,0.1,0.3,0.2c0.2-0.1,0.3-0.3,0.5-0.4c0.1,0.2,0.3,0.3,0.3,0.5c0.1,0.4,0.1,0.9,0.2,1.5c-0.3-0.2-0.4-0.4-0.6-0.5
							c0,0.1-0.1,0.3-0.2,0.4c-0.1-0.1-0.3-0.2-0.5-0.3v0.9C753.4,787.9,753.3,787.4,753.6,786.5z M754.7,792.5c0.1,0.6,0.1,1.2,0.2,1.9
							C753.9,794.2,753.9,793.6,754.7,792.5z M755.6,793.3c0.1,0.8,0.2,1.4,0.2,2.1C755,795,754.9,794.5,755.6,793.3z M756.8,795.7
							c-0.2-0.1-0.6-0.2-0.7-0.4c-0.4-0.7,0-1.2,0.6-1.8c0.1,0.6,0.2,1.3,0.3,2C756.9,795.6,756.8,795.6,756.8,795.7z M757,786.7
							c0-0.1,0.3-0.5,0.5-0.5c0.2,0,0.6,0.3,0.6,0.4c-0.1,0.7-0.3,1.4-0.4,2c-0.1,0-0.2,0-0.3,0C757.2,788.1,757.1,787.4,757,786.7z
							M758.3,795.7c-0.1,0.1-0.5,0.1-0.6,0c-0.1-0.1-0.2-0.4-0.1-0.6c0.1-0.4,0.3-0.7,0.5-1.3c0.2,0.6,0.3,1,0.4,1.3
							C758.4,795.3,758.4,795.6,758.3,795.7z M759.9,795.4c0,0.1-0.4,0.2-0.6,0.4c-0.1-0.2-0.3-0.4-0.2-0.6c0.1-0.5,0.3-0.9,0.5-1.4
							c0.1,0,0.2,0,0.4,0C759.9,794.3,760,794.9,759.9,795.4z M760,787.1c-0.5,0.8-0.8,1.4-1.2,2c-0.1,0-0.2,0-0.3-0.1
							c0-0.8-0.1-1.6,0-2.5c0-0.2,0.6-0.5,1-0.6c0.1,0,0.3,0.1,0.5,0.2c0.2,0,0.5-0.2,0.7-0.1c0.2,0.1,0.3,0.5,0.2,0.8
							c-0.1,0.6-0.4,1.1-0.5,1.7c-0.1,0-0.1,0-0.2,0C760.1,788.1,760.1,787.7,760,787.1z M760.3,795.7c0.2-0.8,0.3-1.5,0.5-2.3
							C761.6,794.7,761.4,795.4,760.3,795.7z M762.1,794.6c-0.1,0.1-0.3,0.1-0.4,0.1c-0.1-0.1-0.2-0.3-0.3-0.5c0-0.5,0-1,0.2-1.7
							c0.1,0.2,0.2,0.4,0.4,0.7c0.1-0.6,0.1-1,0.2-1.5C762.9,792.6,762.8,793.9,762.1,794.6z M763.6,787.2c-0.1,0.4,0.1,0.9-0.7,0.9
							c-0.2,0-0.4,0.5-0.7,0.8c-0.1-0.7-0.1-1.3-0.2-1.9c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.3,0.5-0.5,1c0-0.7-0.1-1.1-0.1-1.5
							c0-0.1,0.3-0.3,0.5-0.3c0.6,0,1.2,0.2,1.9,0.3C763.6,786.6,763.7,786.9,763.6,787.2z M766.5,778.1c-0.5,0.1-1,0.1-1.4,0.1
							c-0.3-0.7-0.6-1.4-0.9-2.2c-0.3,0.4-0.5,0.6-0.6,0.8c0,0.4-0.1,0.7-0.2,1.3c-0.7-0.1-1.4-0.2-2-0.4c-0.2,0-0.3-0.5-0.2-0.8
							c0.2-1.1,1.3-2,2.6-2.1c1.3-0.1,2.6,0.5,3.2,1.6c0.1,0.2,0.1,0.3,0.2,0.5C767.4,777.7,767.3,777.9,766.5,778.1z M769.9,766.6
							c0-1.1,0.3-1.3,1.2-0.9c0.2,0.4,0.3,0.8-0.1,1C770.6,766.8,770.2,766.7,769.9,766.6z"/>
						<path class="st22" d="M744.7,761.5c-0.9,0.5-1.2,0.7-1.1,0.9c0.4-0.2,0.8-0.5,1.1-0.7C745.1,761.4,744.9,761.4,744.7,761.5z"/>
						<path class="st22" d="M770.3,766c-0.3-0.2-0.1-0.2,0-0.2c0.6,0.4,0.8,0.5,0.8,0.7C770.8,766.3,770.4,766.2,770.3,766z"/>
						<path class="st22" d="M751,777c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C750.8,776.4,750.7,776.6,751,777z"/>
						<path class="st22" d="M751.6,776.9c0-0.3,0.1-0.7,0.1-1.1C751.7,776.2,751.6,776.5,751.6,776.9z"/>
						<path class="st22" d="M751.7,775.7c-1,0.7-1,0.9-0.7,1.3C750.7,776.6,750.8,776.4,751.7,775.7z"/>
						<path class="st22" d="M762.9,777c0.3,0,0.5-0.1,0.6-0.1c0-0.3,0-0.7,0.1-1.1C762.7,776.4,762.6,776.6,762.9,777z"/>
						<path class="st22" d="M763.6,776.9c0-0.3,0.1-0.7,0.1-1.1C763.6,776.2,763.6,776.5,763.6,776.9z"/>
						<path class="st22" d="M763.7,775.7c-1,0.7-1,0.9-0.7,1.3C762.6,776.6,762.7,776.4,763.7,775.7z"/>
						<path class="st22" d="M756.9,752.9c-0.9,0.5-1.1,0.7-1,0.9c0.4-0.2,0.8-0.5,1-0.7C757.4,752.8,757.1,752.8,756.9,752.9z"/>
						<path class="st22" d="M760.2,756.8c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C761.3,757.5,761.1,757.3,760.2,756.8z"/>
						<path class="st22" d="M770.3,765.8c-0.1,0-0.3,0,0,0.2c0.2,0.1,0.5,0.3,0.8,0.5C771.1,766.3,770.9,766.2,770.3,765.8z"/>
						<path class="st22" d="M772.2,755.5c-0.2,0-0.4-0.1,0,0.2c0.3,0.2,0.7,0.5,1,0.7C773.3,756.2,773.1,756,772.2,755.5z"/>
					</g>
					<g id="hullsWood" class="monster_svg">
						<path class="st23" d="M522.5,1039.1c0-0.5-0.7-0.7-1.1-0.3c-0.4,0.5-0.8,1-1.2,1.5c-0.7,0.8-1.5,1.5-2.5,1.9
							c-0.3,0.1-0.6,0.2-0.9-0.1c-0.2-0.2-0.1-0.5,0-0.8c0.2-0.5,0.5-1,0.6-1.5c0.1-0.8-0.3-1.3-1-1.6c-0.7-0.3-1,0.3-1.2,0.7
							c-0.6,1.2-1.9,1.3-2.8,2c-0.1,0.1-0.4,0.1-0.5-0.1c-0.2-0.2-0.1-0.5,0-0.8c0.5-1,1.4-1.8,2.4-2.1c2.2-0.7,3-2.1,2.6-4.4
							c-0.1-0.6-0.1-1.1,0.9-1.2c0.8-0.1,1.2-1,1.1-1.8c-0.2-0.9-1-0.9-1.6-0.8c-1.3,0.1-2.5,1.7-2.3,3.2c0.1,1.7-0.5,2.5-2,2.8
							c-0.3,0.1-0.5,0.2-0.7,0.3c-0.9,0.4-1.8,1.4-2.6,1.5c-0.9,0.1-1.3-1.4-2.3-1.8c-0.3-0.1-0.8-0.3-0.7-0.7c0.1-0.4,0.5-0.4,0.9-0.5
							c0.5-0.1,1.1-0.2,1.5-0.5c0.7-0.5,1-1.1,0.9-2c-0.1-0.5-0.3-1.2-0.9-1.2c-0.8-0.1-1.4,0.3-1.8,0.9c-0.2,0.3-0.3,0.6-0.6,0.7
							c-0.5,0.4-0.8,0.3-0.9-0.4c0-0.6-0.1-1.3,0.4-1.8c0.6-0.7,0.7-1.2,0.4-1.8c-0.5-1.3-2.3-1.2-2.8,0c-0.2,0.6-0.2,1.3-0.1,2
							c0.2,1.4,0.1,2.6-1.4,3.5c-1.5,1-2.1,2.7-1.7,4.5c0.2,0.8-0.1,1-0.8,0.9c-0.4-0.1-0.7-0.1-1.1-0.2c-1.5-0.3-2-1.1-1.7-2.6
							c0.1-0.7,0.3-1.4-0.3-1.9c-0.4-0.4-1-0.3-1.4,0c-0.7,0.4-0.8,1.1-0.8,1.9c0.2,1.7,1,3.1,2,4.4c0,0,0,0.1,0.1,0.1
							c0.4,0.5-0.1,1.2-0.7,0.9c-0.1,0-0.1,0-0.1-0.1c-1.5-0.8-2.5-2-3.5-3.4v0c-0.4-0.4-1.1-0.2-1.1,0.4v2.3c0,0,0,0.1,0,0.1
							c0.2,1.5,0.3,2.9,0.6,4.4c0.4,1.9,0.9,3.7,2.7,4.8c0.4,0.3,0.3,1.3,1.1,1.6c0.2,0.1,0.4,0.3,0.4,0.6c-0.1,1.1,1,1.2,1.9,1.5
							c0.6,0.2,0.6,0.8,0.6,1.3c0,0.9-0.2,1.8-0.6,2.6c-0.2,0.5-0.3,1.1,0.6,0.8c1-0.3,1.5,0.2,2,0.9c0.9,1.4,2.1,2.4,3.6,3
							c0.1,0,0.1,0,0.1,0.1c1.2,0.4,2,2.3,3.2,1.6c2.1-1.2,4.5-2.1,6.1-4.2c0.6-0.9,1.1-1.9,2.6-1.4c0.5,0.2,0.6-0.2,0.4-0.6
							c-0.1-0.4-0.3-0.9-0.4-1.3c-0.5-2.2-0.5-2.4,1.3-3.1c0.4-0.2,1-0.4,0.9-0.9c-0.2-1,0.1-1.2,1-1.2c0.2,0,0.4-0.1,0.3-0.3
							c-0.7-1.2,0.5-1.3,1-1.7c0.5-0.5,0.9-1,1.2-1.7C522.2,1046.2,522.7,1042,522.5,1039.1z M518.6,1030.4c0.2,0.4,0.4,0.9-0.1,1.1
							c-0.3,0.1-0.7-0.1-1.1-0.1C517.5,1030.2,517.7,1030,518.6,1030.4z M509.2,1031.5c0.2,0.4,0.4,0.9-0.1,1.1
							c-0.3,0.1-0.7-0.1-1.1-0.1C508.1,1031.3,508.3,1031.1,509.2,1031.5z M496.4,1036.2c-0.3,0.1-0.7-0.1-1.1-0.1
							c0.1-1.1,0.3-1.3,1.2-1C496.7,1035.5,496.9,1036,496.4,1036.2z M506.2,1028.4c0.2,0.4,0.4,0.9-0.1,1.1c-0.3,0.1-0.7-0.1-1.1-0.1
							C505,1028.2,505.3,1028,506.2,1028.4z M504.9,1054.2c0.4,0.2,0.6,0.3,0.9,0.4c-0.1,0.5-0.1,0.9-0.1,1.5
							C505,1055.6,504.8,1055,504.9,1054.2z M502.2,1046.7c-0.2,0.3-0.4,0.5-0.5,0.6c0,0.3-0.1,0.6-0.1,1c-0.5-0.1-1.1-0.1-1.5-0.3
							c-0.1,0-0.2-0.4-0.2-0.6c0.2-0.9,1-1.6,2-1.7c1-0.1,2,0.4,2.5,1.2c0.1,0.1,0.1,0.2,0.2,0.4c0.2,0.6,0.1,0.8-0.5,0.9
							c-0.4,0.1-0.8,0.1-1.1,0.1C502.7,1047.8,502.5,1047.3,502.2,1046.7z M503.3,1054.8c0.1,0.1,0.1,0.2,0.2,0.4c0-0.2,0.1-0.3,0.1-0.5
							c0.1,0.1,0.2,0.1,0.3,0.2c0.1-0.1,0.3-0.2,0.4-0.3c0.1,0.1,0.2,0.2,0.2,0.4c0.1,0.3,0.1,0.7,0.1,1.1c-0.2-0.2-0.3-0.3-0.5-0.4
							c0,0.1-0.1,0.2-0.1,0.3c-0.1-0.1-0.2-0.1-0.4-0.2v0.7C503.1,1055.9,503,1055.6,503.3,1054.8z M504.1,1059.5c0.1,0.5,0.1,1,0.2,1.5
							C503.5,1060.8,503.5,1060.3,504.1,1059.5z M504.9,1060.2c0.1,0.6,0.1,1.1,0.2,1.6C504.4,1061.5,504.3,1061.1,504.9,1060.2z
							M505.8,1062c-0.2-0.1-0.5-0.1-0.6-0.3c-0.3-0.5,0-1,0.5-1.4c0.1,0.5,0.2,1,0.2,1.5C505.9,1061.9,505.8,1062,505.8,1062z
							M505.9,1055c0-0.1,0.2-0.4,0.4-0.4c0.2,0,0.5,0.2,0.4,0.3c-0.1,0.5-0.2,1.1-0.3,1.6c-0.1,0-0.1,0-0.2,0
							C506.1,1056,506,1055.5,505.9,1055z M506.9,1062c-0.1,0.1-0.4,0.1-0.5,0c-0.1-0.1-0.1-0.3-0.1-0.5c0.1-0.3,0.2-0.6,0.4-1
							c0.1,0.5,0.2,0.7,0.3,1C507.1,1061.7,507,1062,506.9,1062z M508.2,1061.8c0,0.1-0.3,0.2-0.5,0.3c-0.1-0.1-0.2-0.3-0.2-0.5
							c0.1-0.4,0.2-0.7,0.4-1.1c0.1,0,0.2,0,0.3,0C508.2,1061,508.3,1061.4,508.2,1061.8z M508.3,1055.3c-0.4,0.6-0.7,1.1-1,1.6
							c-0.1,0-0.1,0-0.2-0.1c0-0.6-0.1-1.3,0-1.9c0-0.2,0.5-0.4,0.7-0.5c0.1,0,0.2,0.1,0.4,0.2c0.1,0,0.4-0.1,0.5-0.1
							c0.1,0.1,0.2,0.4,0.2,0.6c-0.1,0.4-0.3,0.9-0.4,1.3c-0.1,0-0.1,0-0.2,0C508.4,1056.1,508.3,1055.7,508.3,1055.3z M508.5,1062
							c0.1-0.6,0.3-1.2,0.4-1.8C509.5,1061.2,509.4,1061.8,508.5,1062z M509.9,1061.1c-0.1,0.1-0.2,0.1-0.3,0.1
							c-0.1-0.1-0.2-0.2-0.2-0.4c0-0.4,0-0.8,0.1-1.3c0.1,0.1,0.2,0.3,0.3,0.5c0.1-0.5,0.1-0.8,0.2-1.2
							C510.6,1059.6,510.5,1060.6,509.9,1061.1z M511.1,1055.4c-0.1,0.3,0.1,0.7-0.5,0.7c-0.1,0-0.3,0.4-0.6,0.6c-0.1-0.5-0.1-1-0.1-1.5
							c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.2,0.4-0.4,0.7c0-0.5-0.1-0.9-0.1-1.2c0-0.1,0.2-0.2,0.4-0.2c0.5,0,1,0.1,1.5,0.2
							C511.1,1054.9,511.2,1055.1,511.1,1055.4z M513.4,1048.3c-0.4,0.1-0.8,0.1-1.1,0.1c-0.2-0.6-0.5-1.1-0.7-1.7
							c-0.2,0.3-0.4,0.5-0.5,0.6c0,0.3-0.1,0.6-0.1,1c-0.5-0.1-1.1-0.1-1.5-0.3c-0.1,0-0.2-0.4-0.2-0.6c0.2-0.9,1-1.6,2-1.7
							c1-0.1,2,0.4,2.5,1.2c0.1,0.1,0.1,0.2,0.2,0.4C514.1,1048,514,1048.1,513.4,1048.3z M516,1039.3c0-0.9,0.2-1,0.9-0.7
							c0.1,0.3,0.3,0.7-0.1,0.8C516.6,1039.5,516.3,1039.3,516,1039.3z"/>
						<path class="st23" d="M496.3,1035.3c-0.7,0.4-0.9,0.6-0.9,0.7c0.3-0.2,0.7-0.4,0.8-0.5C496.6,1035.2,496.5,1035.2,496.3,1035.3z"
							/>
						<path class="st23" d="M516.3,1038.8c-0.2-0.2-0.1-0.2,0-0.1c0.5,0.3,0.6,0.4,0.6,0.5C516.7,1039.1,516.5,1038.9,516.3,1038.8z"/>
						<path class="st23" d="M501.2,1047.4c0.2,0,0.4-0.1,0.5-0.1c0-0.3,0-0.5,0.1-0.9C501.1,1046.9,501,1047.1,501.2,1047.4z"/>
						<path class="st23" d="M501.7,1047.3c0-0.3,0.1-0.5,0.1-0.9C501.8,1046.8,501.8,1047,501.7,1047.3z"/>
						<path class="st23" d="M501.8,1046.4c-0.7,0.5-0.8,0.7-0.6,1C501,1047.1,501.1,1046.9,501.8,1046.4z"/>
						<path class="st23" d="M510.6,1047.4c0.2,0,0.4-0.1,0.5-0.1c0-0.3,0-0.5,0.1-0.9C510.4,1046.9,510.3,1047.1,510.6,1047.4z"/>
						<path class="st23" d="M511.1,1047.3c0-0.3,0.1-0.5,0.1-0.9C511.1,1046.8,511.1,1047,511.1,1047.3z"/>
						<path class="st23" d="M511.2,1046.4c-0.7,0.5-0.8,0.7-0.6,1C510.3,1047.1,510.4,1046.9,511.2,1046.4z"/>
						<path class="st23" d="M505.9,1028.5c-0.7,0.4-0.9,0.5-0.8,0.7c0.3-0.2,0.6-0.4,0.8-0.5C506.2,1028.5,506,1028.5,505.9,1028.5z"/>
						<path class="st23" d="M508.4,1031.6c-0.1,0-0.3-0.1,0,0.2c0.2,0.2,0.5,0.4,0.8,0.5C509.3,1032.2,509.1,1032,508.4,1031.6z"/>
						<path class="st23" d="M516.3,1038.7c-0.1,0-0.2,0,0,0.1c0.1,0.1,0.4,0.2,0.6,0.4C516.9,1039.1,516.8,1038.9,516.3,1038.7z"/>
						<path class="st23" d="M517.8,1030.6c-0.1,0-0.3-0.1,0,0.2c0.2,0.2,0.5,0.4,0.8,0.5C518.7,1031.1,518.5,1031,517.8,1030.6z"/>
					</g>
					<g id="mckenzieMeadows" class="monster_svg">
						<path class="st24" d="M664.8,1166.7c0-0.5-0.7-0.7-1.1-0.3c-0.4,0.5-0.8,1-1.2,1.5c-0.7,0.8-1.5,1.5-2.5,1.9
							c-0.3,0.1-0.6,0.2-0.9-0.1c-0.2-0.2-0.1-0.5,0-0.8c0.2-0.5,0.5-1,0.6-1.5c0.1-0.8-0.3-1.3-1-1.6c-0.7-0.3-1,0.3-1.2,0.7
							c-0.6,1.2-1.9,1.3-2.8,2c-0.1,0.1-0.4,0.1-0.5-0.1c-0.2-0.2-0.1-0.5,0-0.8c0.5-1,1.4-1.8,2.4-2.1c2.2-0.7,3-2.1,2.6-4.4
							c-0.1-0.6-0.1-1.1,0.9-1.2c0.8-0.1,1.2-1,1.1-1.8c-0.2-0.9-1-0.9-1.6-0.8c-1.3,0.1-2.5,1.7-2.3,3.2c0.1,1.7-0.5,2.5-2,2.8
							c-0.3,0.1-0.5,0.2-0.7,0.3c-0.9,0.4-1.8,1.4-2.6,1.5c-0.9,0.1-1.3-1.4-2.3-1.8c-0.3-0.1-0.8-0.3-0.7-0.7c0.1-0.4,0.5-0.4,0.9-0.5
							c0.5-0.1,1.1-0.2,1.5-0.5c0.7-0.5,1-1.1,0.9-2c-0.1-0.5-0.3-1.2-0.9-1.2c-0.8-0.1-1.4,0.3-1.8,0.9c-0.2,0.3-0.3,0.6-0.6,0.7
							c-0.5,0.4-0.8,0.3-0.9-0.4c0-0.6-0.1-1.3,0.4-1.8c0.6-0.7,0.7-1.2,0.4-1.8c-0.5-1.3-2.3-1.2-2.8,0c-0.2,0.6-0.2,1.3-0.1,2
							c0.2,1.4,0.1,2.6-1.4,3.5c-1.5,1-2.1,2.7-1.7,4.5c0.2,0.8-0.1,1-0.8,0.9c-0.4-0.1-0.7-0.1-1.1-0.2c-1.5-0.3-2-1.1-1.7-2.6
							c0.1-0.7,0.3-1.4-0.3-1.9c-0.4-0.4-1-0.3-1.4,0c-0.7,0.4-0.8,1.1-0.8,1.9c0.2,1.7,1,3.1,2,4.4c0,0,0,0.1,0.1,0.1
							c0.4,0.5-0.1,1.2-0.7,0.9c-0.1,0-0.1,0-0.1-0.1c-1.5-0.8-2.5-2-3.5-3.4v0c-0.4-0.4-1.1-0.2-1.1,0.4v2.3c0,0,0,0.1,0,0.1
							c0.2,1.5,0.3,2.9,0.6,4.4c0.4,1.9,0.9,3.7,2.7,4.8c0.4,0.3,0.3,1.3,1.1,1.6c0.2,0.1,0.4,0.3,0.4,0.6c-0.1,1.1,1,1.2,1.9,1.5
							c0.6,0.2,0.6,0.8,0.6,1.3c0,0.9-0.2,1.8-0.6,2.6c-0.2,0.5-0.3,1.1,0.6,0.8c1-0.3,1.5,0.2,2,0.9c0.9,1.4,2.1,2.4,3.6,3
							c0.1,0,0.1,0,0.1,0.1c1.2,0.4,2,2.3,3.2,1.6c2.1-1.2,4.5-2.1,6.1-4.2c0.6-0.9,1.1-1.9,2.6-1.4c0.5,0.2,0.6-0.2,0.4-0.6
							c-0.1-0.4-0.3-0.9-0.4-1.3c-0.5-2.2-0.5-2.4,1.3-3.1c0.4-0.2,1-0.4,0.9-0.9c-0.2-1,0.1-1.2,1-1.2c0.2,0,0.4-0.1,0.3-0.3
							c-0.7-1.2,0.5-1.3,1-1.7c0.5-0.5,0.9-1,1.2-1.7C664.5,1173.9,665,1169.6,664.8,1166.7z M660.9,1158c0.2,0.4,0.4,0.9-0.1,1.1
							c-0.3,0.1-0.7-0.1-1.1-0.1C659.8,1157.8,660,1157.6,660.9,1158z M651.5,1159.1c0.2,0.4,0.4,0.9-0.1,1.1c-0.3,0.1-0.7-0.1-1.1-0.1
							C650.4,1158.9,650.6,1158.7,651.5,1159.1z M638.7,1163.8c-0.3,0.1-0.7-0.1-1.1-0.1c0.1-1.1,0.3-1.3,1.2-1
							C639,1163.1,639.2,1163.6,638.7,1163.8z M648.4,1156c0.2,0.4,0.4,0.9-0.1,1.1c-0.3,0.1-0.7-0.1-1.1-0.1
							C647.3,1155.8,647.5,1155.6,648.4,1156z M647.1,1181.8c0.4,0.2,0.6,0.3,0.9,0.4c-0.1,0.5-0.1,0.9-0.1,1.5
							C647.2,1183.2,647.1,1182.6,647.1,1181.8z M644.5,1174.3c-0.2,0.3-0.4,0.5-0.5,0.6c0,0.3-0.1,0.6-0.1,1c-0.5-0.1-1.1-0.1-1.5-0.3
							c-0.1,0-0.2-0.4-0.2-0.6c0.2-0.9,1-1.6,2-1.7c1-0.1,2,0.4,2.5,1.2c0.1,0.1,0.1,0.2,0.2,0.4c0.2,0.6,0.1,0.8-0.5,0.9
							c-0.4,0.1-0.8,0.1-1.1,0.1C645,1175.4,644.8,1174.9,644.5,1174.3z M645.6,1182.4c0.1,0.1,0.1,0.2,0.2,0.4c0-0.2,0.1-0.3,0.1-0.5
							c0.1,0.1,0.2,0.1,0.3,0.2c0.1-0.1,0.3-0.2,0.4-0.3c0.1,0.1,0.2,0.2,0.2,0.4c0.1,0.3,0.1,0.7,0.1,1.1c-0.2-0.2-0.3-0.3-0.5-0.4
							c0,0.1-0.1,0.2-0.1,0.3c-0.1-0.1-0.2-0.1-0.4-0.2v0.7C645.4,1183.5,645.3,1183.2,645.6,1182.4z M646.4,1187.1
							c0.1,0.5,0.1,1,0.2,1.5C645.8,1188.4,645.8,1188,646.4,1187.1z M647.1,1187.8c0.1,0.6,0.1,1.1,0.2,1.6
							C646.7,1189.1,646.6,1188.7,647.1,1187.8z M648.1,1189.6c-0.2-0.1-0.5-0.1-0.6-0.3c-0.3-0.5,0-1,0.5-1.4c0.1,0.5,0.2,1,0.2,1.5
							C648.2,1189.5,648.1,1189.6,648.1,1189.6z M648.2,1182.6c0-0.1,0.2-0.4,0.4-0.4c0.2,0,0.5,0.2,0.4,0.3c-0.1,0.5-0.2,1.1-0.3,1.6
							c-0.1,0-0.1,0-0.2,0C648.4,1183.7,648.3,1183.1,648.2,1182.6z M649.2,1189.7c-0.1,0.1-0.4,0.1-0.5,0c-0.1-0.1-0.1-0.3-0.1-0.5
							c0.1-0.3,0.2-0.6,0.4-1c0.1,0.5,0.2,0.7,0.3,1C649.4,1189.4,649.3,1189.6,649.2,1189.7z M650.5,1189.4c0,0.1-0.3,0.2-0.5,0.3
							c-0.1-0.1-0.2-0.3-0.2-0.5c0.1-0.4,0.2-0.7,0.4-1.1c0.1,0,0.2,0,0.3,0C650.5,1188.6,650.6,1189,650.5,1189.4z M650.6,1182.9
							c-0.4,0.6-0.7,1.1-1,1.6c-0.1,0-0.1,0-0.2-0.1c0-0.6-0.1-1.3,0-1.9c0-0.2,0.5-0.4,0.7-0.5c0.1,0,0.2,0.1,0.4,0.2
							c0.1,0,0.4-0.1,0.5-0.1c0.1,0.1,0.2,0.4,0.2,0.6c-0.1,0.4-0.3,0.9-0.4,1.3c-0.1,0-0.1,0-0.2,0
							C650.7,1183.7,650.6,1183.4,650.6,1182.9z M650.8,1189.6c0.1-0.6,0.3-1.2,0.4-1.8C651.8,1188.8,651.7,1189.4,650.8,1189.6z
							M652.2,1188.7c-0.1,0.1-0.2,0.1-0.3,0.1c-0.1-0.1-0.2-0.2-0.2-0.4c0-0.4,0-0.8,0.1-1.3c0.1,0.1,0.2,0.3,0.3,0.5
							c0.1-0.5,0.1-0.8,0.2-1.2C652.9,1187.2,652.8,1188.2,652.2,1188.7z M653.4,1183c-0.1,0.3,0.1,0.7-0.5,0.7c-0.1,0-0.3,0.4-0.6,0.6
							c-0.1-0.5-0.1-1-0.1-1.5c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.2,0.4-0.4,0.7c0-0.5-0.1-0.9-0.1-1.2c0-0.1,0.2-0.2,0.4-0.2
							c0.5,0,1,0.1,1.5,0.2C653.4,1182.5,653.5,1182.8,653.4,1183z M655.6,1175.9c-0.4,0.1-0.8,0.1-1.1,0.1c-0.2-0.6-0.5-1.1-0.7-1.7
							c-0.2,0.3-0.4,0.5-0.5,0.6c0,0.3-0.1,0.6-0.1,1c-0.5-0.1-1.1-0.1-1.5-0.3c-0.1,0-0.2-0.4-0.2-0.6c0.2-0.9,1-1.6,2-1.7
							c1-0.1,2,0.4,2.5,1.2c0.1,0.1,0.1,0.2,0.2,0.4C656.4,1175.6,656.3,1175.8,655.6,1175.9z M658.3,1166.9c0-0.9,0.2-1,0.9-0.7
							c0.1,0.3,0.3,0.7-0.1,0.8C658.9,1167.1,658.6,1166.9,658.3,1166.9z"/>
						<path class="st24" d="M638.6,1162.9c-0.7,0.4-0.9,0.6-0.9,0.7c0.3-0.2,0.7-0.4,0.8-0.5C638.9,1162.8,638.8,1162.8,638.6,1162.9z"
							/>
						<path class="st24" d="M658.6,1166.4c-0.2-0.2-0.1-0.2,0-0.1c0.5,0.3,0.6,0.4,0.6,0.5C659,1166.7,658.7,1166.5,658.6,1166.4z"/>
						<path class="st24" d="M643.5,1175c0.2,0,0.4-0.1,0.5-0.1c0-0.3,0-0.5,0.1-0.9C643.4,1174.5,643.3,1174.7,643.5,1175z"/>
						<path class="st24" d="M644,1174.9c0-0.3,0.1-0.5,0.1-0.9C644.1,1174.4,644,1174.6,644,1174.9z"/>
						<path class="st24" d="M644.1,1174c-0.7,0.5-0.8,0.7-0.6,1C643.3,1174.7,643.4,1174.5,644.1,1174z"/>
						<path class="st24" d="M652.9,1175c0.2,0,0.4-0.1,0.5-0.1c0-0.3,0-0.5,0.1-0.9C652.7,1174.5,652.6,1174.7,652.9,1175z"/>
						<path class="st24" d="M653.4,1174.9c0-0.3,0.1-0.5,0.1-0.9C653.4,1174.4,653.4,1174.6,653.4,1174.9z"/>
						<path class="st24" d="M653.4,1174c-0.7,0.5-0.8,0.7-0.6,1C652.6,1174.7,652.7,1174.5,653.4,1174z"/>
						<path class="st24" d="M648.2,1156.1c-0.7,0.4-0.9,0.5-0.8,0.7c0.3-0.2,0.6-0.4,0.8-0.5C648.5,1156.1,648.3,1156.1,648.2,1156.1z"
							/>
						<path class="st24" d="M650.7,1159.2c-0.1,0-0.3-0.1,0,0.2c0.2,0.2,0.5,0.4,0.8,0.5C651.6,1159.8,651.4,1159.6,650.7,1159.2z"/>
						<path class="st24" d="M658.6,1166.3c-0.1,0-0.2,0,0,0.1c0.1,0.1,0.4,0.2,0.6,0.4C659.2,1166.7,659.1,1166.6,658.6,1166.3z"/>
						<path class="st24" d="M660.1,1158.2c-0.1,0-0.3-0.1,0,0.2c0.2,0.2,0.5,0.4,0.8,0.5C661,1158.7,660.8,1158.6,660.1,1158.2z"/>
					</g>
					<g id="sikomeLake" class="monster_svg">
						<path class="st25" d="M480.6,1170.8c0-0.6-0.7-0.8-1.1-0.3c-0.4,0.5-0.8,1-1.3,1.5c-0.7,0.8-1.5,1.5-2.5,1.9
							c-0.3,0.1-0.6,0.2-0.9-0.1c-0.2-0.2-0.1-0.5,0-0.8c0.2-0.5,0.5-1,0.6-1.5c0.1-0.8-0.3-1.4-1-1.7c-0.7-0.3-1,0.3-1.3,0.8
							c-0.6,1.2-2,1.3-2.9,2c-0.1,0.1-0.4,0.1-0.5-0.1c-0.2-0.2-0.1-0.5,0-0.8c0.5-1,1.4-1.8,2.5-2.1c2.2-0.8,3.1-2.2,2.7-4.5
							c-0.1-0.6-0.2-1.2,0.9-1.3c0.9-0.1,1.3-1,1.1-1.8c-0.2-0.9-1-0.9-1.7-0.8c-1.3,0.2-2.5,1.7-2.4,3.3c0.2,1.7-0.6,2.5-2.1,2.9
							c-0.3,0.1-0.5,0.2-0.8,0.3c-0.9,0.5-1.8,1.4-2.7,1.6c-0.9,0.1-1.3-1.5-2.3-1.9c-0.3-0.1-0.8-0.3-0.7-0.7c0.1-0.4,0.5-0.4,0.9-0.5
							c0.6-0.1,1.1-0.2,1.6-0.5c0.7-0.5,1.1-1.1,0.9-2c-0.1-0.6-0.3-1.2-0.9-1.3c-0.8-0.1-1.4,0.3-1.9,0.9c-0.2,0.3-0.3,0.6-0.6,0.8
							c-0.5,0.4-0.9,0.3-0.9-0.4c0-0.6-0.1-1.3,0.4-1.9c0.6-0.7,0.7-1.3,0.4-1.8c-0.5-1.3-2.4-1.3-2.9,0c-0.2,0.6-0.2,1.3-0.1,2.1
							c0.2,1.4,0.1,2.6-1.4,3.5c-1.6,1-2.2,2.7-1.8,4.6c0.2,0.9-0.1,1-0.8,0.9c-0.4-0.1-0.7-0.2-1.1-0.2c-1.6-0.3-2.1-1.1-1.8-2.7
							c0.1-0.7,0.3-1.4-0.3-2c-0.4-0.4-1-0.3-1.4,0c-0.8,0.4-0.9,1.2-0.8,1.9c0.2,1.7,1,3.1,2,4.5c0,0,0,0.1,0.1,0.1
							c0.5,0.5-0.2,1.3-0.7,0.9c-0.1,0-0.1,0-0.1-0.1c-1.5-0.8-2.5-2.1-3.6-3.4v0c-0.4-0.5-1.1-0.2-1.1,0.4v2.3c0,0,0,0.1,0,0.1
							c0.2,1.5,0.3,3,0.6,4.5c0.4,1.9,0.9,3.7,2.8,4.9c0.5,0.3,0.3,1.4,1.1,1.7c0.2,0.1,0.4,0.3,0.4,0.6c-0.1,1.2,1,1.2,1.9,1.5
							c0.6,0.2,0.6,0.8,0.6,1.3c0,0.9-0.2,1.8-0.6,2.7c-0.2,0.5-0.3,1.1,0.6,0.8c1-0.3,1.6,0.2,2,0.9c0.9,1.4,2.1,2.4,3.7,3.1
							c0.1,0,0.1,0,0.1,0.1c1.2,0.4,2,2.4,3.2,1.7c2.1-1.3,4.6-2.1,6.2-4.3c0.6-0.9,1.1-2,2.6-1.4c0.5,0.2,0.6-0.2,0.4-0.6
							c-0.1-0.4-0.3-0.9-0.4-1.3c-0.5-2.2-0.5-2.5,1.3-3.2c0.4-0.2,1-0.4,0.9-0.9c-0.2-1,0.1-1.2,1-1.2c0.2,0,0.4-0.2,0.3-0.3
							c-0.7-1.2,0.5-1.3,1-1.8s0.9-1,1.2-1.7C480.4,1178.1,480.9,1173.8,480.6,1170.8z M476.7,1161.9c0.2,0.4,0.4,0.9-0.1,1.1
							c-0.3,0.1-0.7-0.1-1.1-0.1C475.5,1161.8,475.8,1161.5,476.7,1161.9z M467.1,1163.1c0.2,0.4,0.4,0.9-0.1,1.1
							c-0.3,0.1-0.7-0.1-1.1-0.1C465.9,1162.9,466.2,1162.7,467.1,1163.1z M454,1167.9c-0.3,0.1-0.7-0.1-1.1-0.1c0.1-1.2,0.3-1.4,1.2-1
							C454.3,1167.2,454.5,1167.7,454,1167.9z M464,1159.9c0.2,0.4,0.4,0.9-0.1,1.1c-0.3,0.1-0.7-0.1-1.1-0.1
							C462.8,1159.7,463.1,1159.5,464,1159.9z M462.6,1186.3c0.4,0.2,0.6,0.3,0.9,0.4c-0.1,0.5-0.1,0.9-0.1,1.6
							C462.8,1187.7,462.6,1187.1,462.6,1186.3z M460,1178.5c-0.2,0.3-0.4,0.5-0.5,0.6c0,0.3-0.1,0.6-0.1,1.1c-0.6-0.1-1.1-0.1-1.6-0.3
							c-0.1,0-0.2-0.4-0.2-0.6c0.2-0.9,1-1.6,2.1-1.7c1-0.1,2.1,0.4,2.5,1.3c0.1,0.1,0.1,0.2,0.2,0.4c0.2,0.6,0.2,0.8-0.5,0.9
							c-0.4,0.1-0.8,0.1-1.1,0.1C460.5,1179.7,460.2,1179.2,460,1178.5z M461,1186.9c0.1,0.1,0.1,0.2,0.2,0.4c0-0.2,0.1-0.3,0.1-0.6
							c0.1,0.1,0.2,0.1,0.3,0.2c0.1-0.1,0.3-0.2,0.4-0.3c0.1,0.1,0.2,0.2,0.2,0.4c0.1,0.3,0.1,0.7,0.2,1.2c-0.2-0.2-0.3-0.3-0.5-0.4
							c0,0.1-0.1,0.2-0.1,0.3c-0.1-0.1-0.2-0.1-0.4-0.2v0.7C460.9,1188,460.8,1187.6,461,1186.9z M461.9,1191.6c0.1,0.5,0.1,1,0.2,1.5
							C461.3,1193,461.3,1192.5,461.9,1191.6z M462.6,1192.3c0.1,0.6,0.1,1.1,0.2,1.7C462.1,1193.7,462.1,1193.2,462.6,1192.3z
							M463.6,1194.2c-0.2-0.1-0.5-0.2-0.6-0.3c-0.3-0.6,0-1,0.5-1.4c0.1,0.5,0.2,1,0.2,1.6C463.7,1194.1,463.6,1194.2,463.6,1194.2z
							M463.7,1187c0-0.1,0.2-0.4,0.4-0.4c0.2,0,0.5,0.2,0.5,0.3c-0.1,0.6-0.2,1.1-0.3,1.6c-0.1,0-0.1,0-0.2,0
							C463.9,1188.1,463.8,1187.6,463.7,1187z M464.8,1194.2c-0.1,0.1-0.4,0.1-0.5,0c-0.1-0.1-0.2-0.3-0.1-0.5c0.1-0.3,0.2-0.6,0.4-1
							c0.1,0.5,0.2,0.8,0.3,1C464.9,1193.9,464.9,1194.2,464.8,1194.2z M466.1,1194c0,0.1-0.3,0.2-0.5,0.3c-0.1-0.2-0.2-0.3-0.2-0.5
							c0.1-0.4,0.2-0.7,0.4-1.1c0.1,0,0.2,0,0.3,0C466.1,1193.1,466.1,1193.5,466.1,1194z M466.2,1187.4c-0.4,0.6-0.7,1.1-1,1.6
							c-0.1,0-0.2,0-0.2-0.1c0-0.6-0.1-1.3,0-2c0-0.2,0.5-0.4,0.8-0.5c0.1,0,0.2,0.1,0.4,0.2c0.1,0,0.4-0.2,0.6-0.1
							c0.2,0.1,0.2,0.4,0.2,0.6c-0.1,0.5-0.3,0.9-0.4,1.3c-0.1,0-0.1,0-0.2,0C466.3,1188.2,466.2,1187.8,466.2,1187.4z M466.4,1194.2
							c0.2-0.6,0.3-1.2,0.4-1.9C467.4,1193.4,467.3,1194,466.4,1194.2z M467.8,1193.3c-0.1,0.1-0.2,0.1-0.3,0.1
							c-0.1-0.1-0.2-0.2-0.2-0.4c0-0.4,0-0.8,0.2-1.4c0.1,0.1,0.2,0.3,0.3,0.6c0.1-0.5,0.1-0.8,0.2-1.2
							C468.5,1191.7,468.4,1192.8,467.8,1193.3z M469,1187.4c-0.1,0.3,0.1,0.7-0.5,0.7c-0.2,0-0.3,0.4-0.6,0.6c-0.1-0.6-0.1-1-0.1-1.5
							c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.2,0.4-0.4,0.8c0-0.5-0.1-0.9-0.1-1.2c0-0.1,0.2-0.2,0.4-0.2c0.5,0,1,0.1,1.5,0.2
							C469,1187,469.1,1187.2,469,1187.4z M471.3,1180.2c-0.4,0.1-0.8,0.1-1.1,0.1c-0.2-0.6-0.5-1.1-0.7-1.7c-0.2,0.3-0.4,0.5-0.5,0.6
							c0,0.3-0.1,0.6-0.1,1.1c-0.6-0.1-1.1-0.1-1.6-0.3c-0.1,0-0.2-0.4-0.2-0.6c0.2-0.9,1-1.6,2.1-1.7c1-0.1,2.1,0.4,2.5,1.3
							c0.1,0.1,0.1,0.2,0.2,0.4C472.1,1179.9,472,1180.1,471.3,1180.2z M474,1171c0-0.9,0.2-1,0.9-0.7c0.1,0.3,0.3,0.7-0.1,0.8
							C474.6,1171.2,474.3,1171.1,474,1171z"/>
						<path class="st25" d="M453.9,1166.9c-0.7,0.4-0.9,0.6-0.9,0.7c0.3-0.2,0.7-0.4,0.9-0.5C454.3,1166.9,454.1,1166.9,453.9,1166.9z"
							/>
						<path class="st25" d="M474.3,1170.5c-0.2-0.2-0.1-0.2,0-0.2c0.5,0.3,0.6,0.4,0.6,0.5C474.7,1170.8,474.5,1170.7,474.3,1170.5z"/>
						<path class="st25" d="M459,1179.3c0.2,0,0.4-0.1,0.5-0.1c0-0.3,0-0.5,0.1-0.9C458.8,1178.8,458.7,1179,459,1179.3z"/>
						<path class="st25" d="M459.5,1179.2c0-0.3,0.1-0.5,0.1-0.9C459.5,1178.7,459.5,1178.9,459.5,1179.2z"/>
						<path class="st25" d="M459.5,1178.3c-0.8,0.5-0.8,0.7-0.6,1C458.7,1179,458.8,1178.8,459.5,1178.3z"/>
						<path class="st25" d="M468.5,1179.3c0.2,0,0.4-0.1,0.5-0.1c0-0.3,0-0.5,0.1-0.9C468.3,1178.8,468.2,1179,468.5,1179.3z"/>
						<path class="st25" d="M469,1179.2c0-0.3,0.1-0.5,0.1-0.9C469,1178.7,469,1178.9,469,1179.2z"/>
						<path class="st25" d="M469.1,1178.3c-0.8,0.5-0.8,0.7-0.6,1C468.2,1179,468.3,1178.8,469.1,1178.3z"/>
						<path class="st25" d="M463.7,1160.1c-0.7,0.4-0.9,0.6-0.8,0.7c0.3-0.2,0.6-0.4,0.8-0.5C464,1160,463.9,1160,463.7,1160.1z"/>
						<path class="st25" d="M466.3,1163.2c-0.2,0-0.3-0.1,0,0.2c0.2,0.2,0.6,0.4,0.8,0.5C467.2,1163.8,467,1163.6,466.3,1163.2z"/>
						<path class="st25" d="M474.3,1170.4c-0.1,0-0.2,0,0,0.2c0.2,0.1,0.4,0.2,0.6,0.4C475,1170.8,474.8,1170.7,474.3,1170.4z"/>
						<path class="st25" d="M475.9,1162.2c-0.2,0-0.3-0.1,0,0.2c0.2,0.2,0.6,0.4,0.8,0.5C476.8,1162.7,476.6,1162.5,475.9,1162.2z"/>
					</g>
					<g id="bluedevil" class="monster_svg">
						<path class="st26" d="M574.9,1413.9c0-0.6-0.8-0.8-1.2-0.4c-0.5,0.6-0.9,1.1-1.4,1.6c-0.8,0.9-1.6,1.6-2.8,2.1
							c-0.4,0.1-0.7,0.3-1-0.1c-0.2-0.3-0.1-0.6,0-0.9c0.3-0.5,0.6-1.1,0.7-1.7c0.1-0.9-0.3-1.5-1.1-1.8c-0.8-0.4-1.1,0.3-1.4,0.8
							c-0.7,1.3-2.2,1.4-3.2,2.2c-0.1,0.1-0.4,0.1-0.5-0.1c-0.2-0.3-0.1-0.6,0-0.9c0.6-1.1,1.5-2,2.7-2.4c2.4-0.8,3.4-2.4,2.9-4.9
							c-0.1-0.7-0.2-1.3,1-1.4c0.9-0.1,1.4-1.1,1.2-2c-0.2-1-1.1-1-1.8-0.9c-1.4,0.2-2.8,1.9-2.6,3.6c0.2,1.9-0.6,2.8-2.3,3.2
							c-0.3,0.1-0.6,0.2-0.8,0.4c-1,0.5-2,1.6-3,1.7c-1,0.1-1.5-1.6-2.5-2c-0.4-0.1-0.9-0.3-0.8-0.8c0.1-0.5,0.6-0.5,1-0.5
							c0.6-0.1,1.2-0.2,1.7-0.6c0.8-0.5,1.2-1.3,1-2.2c-0.1-0.6-0.3-1.3-1-1.4c-0.9-0.1-1.5,0.4-2.1,1c-0.2,0.3-0.4,0.6-0.6,0.8
							c-0.5,0.4-0.9,0.4-1-0.4c0-0.7-0.1-1.5,0.4-2c0.6-0.8,0.7-1.4,0.5-2c-0.6-1.4-2.6-1.4-3.2,0c-0.3,0.7-0.3,1.4-0.1,2.3
							c0.2,1.6,0.1,2.9-1.5,3.9c-1.7,1.1-2.4,3-1.9,5.1c0.2,0.9-0.1,1.1-0.9,1c-0.4-0.1-0.8-0.2-1.2-0.3c-1.7-0.4-2.3-1.2-1.9-3
							c0.1-0.8,0.4-1.5-0.4-2.2c-0.5-0.4-1.1-0.3-1.6,0c-0.8,0.5-0.9,1.3-0.9,2.1c0.2,1.9,1.1,3.4,2.2,4.9c0,0,0,0.1,0.1,0.1
							c0.5,0.6-0.2,1.4-0.8,1c-0.1,0-0.1,0-0.1-0.1c-1.7-0.9-2.8-2.3-3.9-3.8v0c-0.4-0.5-1.2-0.2-1.2,0.4v2.5c0,0,0,0.1,0,0.1
							c0.2,1.6,0.3,3.3,0.6,4.9c0.4,2.1,1,4.1,3.1,5.3c0.5,0.3,0.4,1.5,1.2,1.8c0.3,0.1,0.4,0.4,0.4,0.7c-0.1,1.3,1.1,1.3,2.1,1.7
							c0.6,0.3,0.6,0.9,0.6,1.4c0,1-0.3,2-0.6,3c-0.2,0.6-0.3,1.2,0.6,0.9c1.1-0.4,1.7,0.2,2.2,1c1,1.6,2.3,2.7,4,3.4
							c0.1,0,0.1,0,0.1,0.1c1.3,0.4,2.2,2.6,3.6,1.8c2.4-1.4,5.1-2.4,6.8-4.7c0.7-1,1.3-2.2,2.9-1.5c0.5,0.2,0.6-0.2,0.5-0.7
							c-0.1-0.5-0.3-1-0.4-1.5c-0.6-2.4-0.5-2.7,1.4-3.5c0.5-0.2,1.1-0.5,1-1c-0.3-1.1,0.1-1.4,1.1-1.3c0.2,0,0.5-0.2,0.4-0.4
							c-0.8-1.4,0.6-1.4,1.1-1.9c0.6-0.5,1-1.1,1.3-1.9C574.6,1421.9,575.1,1417.2,574.9,1413.9z M570.5,1404.1c0.2,0.4,0.4,1-0.1,1.2
							c-0.3,0.1-0.8-0.1-1.2-0.1C569.2,1403.9,569.5,1403.7,570.5,1404.1z M560,1405.3c0.2,0.4,0.4,1-0.1,1.2c-0.3,0.1-0.8-0.1-1.2-0.1
							C558.7,1405.1,559,1404.9,560,1405.3z M545.6,1410.6c-0.3,0.1-0.8-0.1-1.2-0.1c0.1-1.3,0.4-1.5,1.4-1.1
							C545.9,1409.9,546.2,1410.4,545.6,1410.6z M556.6,1401.9c0.2,0.4,0.4,1-0.1,1.2c-0.3,0.1-0.8-0.1-1.2-0.1
							C555.3,1401.7,555.5,1401.4,556.6,1401.9z M555.1,1430.9c0.4,0.2,0.7,0.3,1,0.5c-0.1,0.5-0.1,1-0.1,1.7
							C555.2,1432.4,555,1431.8,555.1,1430.9z M552.1,1422.4c-0.3,0.4-0.4,0.5-0.5,0.7c0,0.3-0.1,0.6-0.1,1.2c-0.6-0.1-1.2-0.1-1.7-0.3
							c-0.1,0-0.3-0.5-0.2-0.7c0.2-1,1.1-1.8,2.3-1.9c1.1-0.1,2.3,0.4,2.8,1.4c0.1,0.1,0.1,0.3,0.2,0.4c0.3,0.7,0.2,0.9-0.6,1
							c-0.4,0.1-0.9,0.1-1.2,0.1C552.7,1423.6,552.4,1423.1,552.1,1422.4z M553.3,1431.5c0.1,0.1,0.1,0.3,0.3,0.4c0-0.2,0.1-0.4,0.1-0.6
							c0.1,0.1,0.2,0.1,0.3,0.2c0.1-0.1,0.3-0.3,0.4-0.4c0.1,0.1,0.2,0.3,0.3,0.4c0.1,0.4,0.1,0.8,0.2,1.3c-0.3-0.2-0.4-0.3-0.5-0.4
							c0,0.1-0.1,0.3-0.1,0.4c-0.1-0.1-0.2-0.1-0.4-0.3v0.8C553.1,1432.7,553,1432.3,553.3,1431.5z M554.3,1436.8
							c0.1,0.5,0.1,1.1,0.2,1.7C553.6,1438.2,553.6,1437.7,554.3,1436.8z M555.1,1437.5c0.1,0.7,0.1,1.2,0.2,1.8
							C554.5,1439,554.5,1438.5,555.1,1437.5z M556.1,1439.6c-0.2-0.1-0.5-0.2-0.6-0.3c-0.3-0.6,0-1.1,0.5-1.5c0.1,0.6,0.2,1.1,0.3,1.7
							C556.2,1439.5,556.2,1439.5,556.1,1439.6z M556.3,1431.7c0-0.1,0.3-0.4,0.4-0.4c0.2,0,0.5,0.3,0.5,0.4c-0.1,0.6-0.2,1.2-0.4,1.8
							c-0.1,0-0.1,0-0.2,0C556.5,1432.9,556.4,1432.3,556.3,1431.7z M557.4,1439.6c-0.1,0.1-0.4,0.1-0.5,0c-0.1-0.1-0.2-0.4-0.1-0.5
							c0.1-0.3,0.3-0.6,0.5-1.1c0.1,0.5,0.3,0.8,0.3,1.1C557.6,1439.3,557.5,1439.5,557.4,1439.6z M558.9,1439.3c0,0.1-0.3,0.2-0.5,0.3
							c-0.1-0.2-0.2-0.4-0.2-0.5c0.1-0.4,0.3-0.8,0.4-1.2c0.1,0,0.2,0,0.3,0C558.9,1438.4,558.9,1438.8,558.9,1439.3z M559,1432.1
							c-0.4,0.7-0.7,1.2-1.1,1.8c-0.1,0-0.2,0-0.3-0.1c0-0.7-0.1-1.4,0-2.2c0-0.2,0.5-0.4,0.8-0.5c0.1,0,0.3,0.1,0.5,0.2
							c0.1,0,0.5-0.2,0.6-0.1c0.2,0.1,0.3,0.5,0.2,0.7c-0.1,0.5-0.3,1-0.5,1.5c-0.1,0-0.1,0-0.2,0C559.1,1433,559,1432.5,559,1432.1z
							M559.2,1439.6c0.2-0.7,0.3-1.3,0.5-2C560.3,1438.7,560.2,1439.3,559.2,1439.6z M560.8,1438.6c-0.1,0.1-0.3,0.1-0.3,0.1
							c-0.1-0.1-0.2-0.3-0.2-0.4c0-0.5,0-0.9,0.2-1.5c0.1,0.1,0.2,0.3,0.4,0.6c0.1-0.5,0.1-0.9,0.2-1.4
							C561.5,1436.8,561.4,1438,560.8,1438.6z M562.1,1432.1c-0.1,0.3,0.1,0.8-0.6,0.8c-0.2,0-0.4,0.4-0.6,0.7c-0.1-0.6-0.1-1.1-0.1-1.6
							c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.2,0.4-0.5,0.8c0-0.6-0.1-1-0.1-1.3c0-0.1,0.3-0.3,0.4-0.3c0.5,0,1.1,0.1,1.7,0.2
							C562.1,1431.6,562.2,1431.9,562.1,1432.1z M564.6,1424.2c-0.4,0.1-0.9,0.1-1.2,0.1c-0.3-0.6-0.5-1.2-0.8-1.9
							c-0.3,0.4-0.4,0.5-0.5,0.7c0,0.3-0.1,0.6-0.1,1.2c-0.6-0.1-1.2-0.1-1.7-0.3c-0.1,0-0.3-0.5-0.2-0.7c0.2-1,1.1-1.8,2.3-1.9
							c1.1-0.1,2.3,0.4,2.8,1.4c0.1,0.1,0.1,0.3,0.2,0.4C565.5,1423.8,565.4,1424,564.6,1424.2z M567.6,1414.1c0-1,0.3-1.1,1-0.8
							c0.1,0.3,0.3,0.7-0.1,0.9C568.3,1414.3,567.9,1414.1,567.6,1414.1z"/>
						<path class="st26" d="M545.5,1409.6c-0.8,0.4-1,0.6-1,0.8c0.3-0.2,0.7-0.4,0.9-0.6C545.9,1409.5,545.7,1409.6,545.5,1409.6z"/>
						<path class="st26" d="M567.9,1413.6c-0.3-0.2-0.1-0.2,0-0.2c0.6,0.3,0.7,0.4,0.7,0.6C568.4,1413.8,568.1,1413.7,567.9,1413.6z"/>
						<path class="st26" d="M551,1423.2c0.2,0,0.4-0.1,0.6-0.1c0-0.3,0-0.6,0.1-1C550.9,1422.6,550.8,1422.9,551,1423.2z"/>
						<path class="st26" d="M551.6,1423.1c0-0.3,0.1-0.6,0.1-1C551.6,1422.5,551.6,1422.8,551.6,1423.1z"/>
						<path class="st26" d="M551.7,1422.1c-0.8,0.6-0.9,0.8-0.6,1.1C550.8,1422.9,550.9,1422.6,551.7,1422.1z"/>
						<path class="st26" d="M561.5,1423.2c0.2,0,0.4-0.1,0.6-0.1c0-0.3,0-0.6,0.1-1C561.3,1422.6,561.2,1422.9,561.5,1423.2z"/>
						<path class="st26" d="M562.1,1423.1c0-0.3,0.1-0.6,0.1-1C562.1,1422.5,562.1,1422.8,562.1,1423.1z"/>
						<path class="st26" d="M562.1,1422.1c-0.8,0.6-0.9,0.8-0.6,1.1C561.2,1422.9,561.3,1422.6,562.1,1422.1z"/>
						<path class="st26" d="M556.3,1402c-0.8,0.4-1,0.6-0.9,0.8c0.3-0.2,0.7-0.4,0.9-0.6C556.6,1402,556.4,1402,556.3,1402z"/>
						<path class="st26" d="M559.1,1405.5c-0.2,0-0.4-0.1,0,0.2c0.2,0.2,0.6,0.4,0.9,0.6C560.1,1406.1,559.9,1405.9,559.1,1405.5z"/>
						<path class="st26" d="M567.9,1413.4c-0.1,0-0.3,0,0,0.2c0.2,0.1,0.4,0.3,0.7,0.4C568.6,1413.8,568.5,1413.7,567.9,1413.4z"/>
						<path class="st26" d="M569.6,1404.3c-0.2,0-0.4-0.1,0,0.2c0.2,0.2,0.6,0.4,0.9,0.6C570.6,1404.9,570.4,1404.8,569.6,1404.3z"/>
					</g>
					<g id="iceCave" class="monster_svg">
						<path class="st27" d="M412.5,1026.5c0-0.6-0.8-0.8-1.2-0.4c-0.5,0.6-0.9,1.1-1.4,1.6c-0.8,0.9-1.6,1.6-2.8,2.1
							c-0.4,0.1-0.7,0.3-1-0.1c-0.2-0.3-0.1-0.6,0-0.9c0.3-0.5,0.6-1.1,0.7-1.7c0.1-0.9-0.3-1.5-1.1-1.8c-0.8-0.4-1.1,0.3-1.4,0.8
							c-0.7,1.3-2.2,1.4-3.2,2.2c-0.1,0.1-0.4,0.1-0.5-0.1c-0.2-0.3-0.1-0.6,0-0.9c0.6-1.1,1.5-2,2.7-2.4c2.4-0.8,3.4-2.4,2.9-4.9
							c-0.1-0.7-0.2-1.3,1-1.4c0.9-0.1,1.4-1.1,1.2-2c-0.2-1-1.1-1-1.8-0.9c-1.4,0.2-2.8,1.9-2.6,3.6c0.2,1.9-0.6,2.8-2.3,3.2
							c-0.3,0.1-0.6,0.2-0.8,0.4c-1,0.5-2,1.6-3,1.7c-1,0.1-1.5-1.6-2.5-2c-0.4-0.1-0.9-0.3-0.8-0.8c0.1-0.5,0.6-0.5,1-0.5
							c0.6-0.1,1.2-0.2,1.7-0.6c0.8-0.5,1.2-1.3,1-2.2c-0.1-0.6-0.3-1.3-1-1.4c-0.9-0.1-1.5,0.4-2.1,1c-0.2,0.3-0.4,0.6-0.6,0.8
							c-0.5,0.4-0.9,0.4-1-0.4c0-0.7-0.1-1.5,0.4-2c0.6-0.8,0.7-1.4,0.5-2c-0.6-1.4-2.6-1.4-3.2,0c-0.3,0.7-0.3,1.4-0.1,2.3
							c0.2,1.6,0.1,2.9-1.5,3.9c-1.7,1.1-2.4,3-1.9,5.1c0.2,0.9-0.1,1.1-0.9,1c-0.4-0.1-0.8-0.2-1.2-0.3c-1.7-0.4-2.3-1.2-1.9-3
							c0.1-0.8,0.4-1.5-0.4-2.2c-0.5-0.4-1.1-0.3-1.6,0c-0.8,0.5-0.9,1.3-0.9,2.1c0.2,1.9,1.1,3.4,2.2,4.9c0,0,0,0.1,0.1,0.1
							c0.5,0.6-0.2,1.4-0.8,1c-0.1,0-0.1,0-0.1-0.1c-1.7-0.9-2.8-2.3-3.9-3.8v0c-0.4-0.5-1.2-0.2-1.2,0.4v2.5c0,0,0,0.1,0,0.1
							c0.2,1.6,0.3,3.3,0.6,4.9c0.4,2.1,1,4.1,3.1,5.3c0.5,0.3,0.4,1.5,1.2,1.8c0.3,0.1,0.4,0.4,0.4,0.7c-0.1,1.3,1.1,1.3,2.1,1.7
							c0.6,0.3,0.6,0.9,0.6,1.4c0,1-0.3,2-0.6,3c-0.2,0.6-0.3,1.2,0.6,0.9c1.1-0.4,1.7,0.2,2.2,1c1,1.6,2.3,2.7,4,3.4
							c0.1,0,0.1,0,0.1,0.1c1.3,0.4,2.2,2.6,3.6,1.8c2.4-1.4,5.1-2.4,6.8-4.7c0.7-1,1.3-2.2,2.9-1.5c0.5,0.2,0.6-0.2,0.5-0.7
							c-0.1-0.5-0.3-1-0.4-1.5c-0.6-2.4-0.5-2.7,1.4-3.5c0.5-0.2,1.1-0.5,1-1c-0.3-1.1,0.1-1.4,1.1-1.3c0.2,0,0.5-0.2,0.4-0.4
							c-0.8-1.4,0.6-1.4,1.1-1.9c0.6-0.5,1-1.1,1.3-1.9C412.1,1034.5,412.7,1029.8,412.5,1026.5z M408.1,1016.7c0.2,0.4,0.4,1-0.1,1.2
							c-0.3,0.1-0.8-0.1-1.2-0.1C406.8,1016.5,407.1,1016.3,408.1,1016.7z M397.6,1017.9c0.2,0.4,0.4,1-0.1,1.2
							c-0.3,0.1-0.8-0.1-1.2-0.1C396.3,1017.7,396.6,1017.5,397.6,1017.9z M383.2,1023.3c-0.3,0.1-0.8-0.1-1.2-0.1
							c0.1-1.3,0.4-1.5,1.4-1.1C383.5,1022.5,383.7,1023,383.2,1023.3z M394.1,1014.5c0.2,0.4,0.4,1-0.1,1.2c-0.3,0.1-0.8-0.1-1.2-0.1
							C392.8,1014.3,393.1,1014,394.1,1014.5z M392.7,1043.5c0.4,0.2,0.7,0.3,1,0.5c-0.1,0.5-0.1,1-0.1,1.7
							C392.8,1045,392.6,1044.4,392.7,1043.5z M389.7,1035c-0.3,0.4-0.4,0.5-0.5,0.7c0,0.3-0.1,0.6-0.1,1.2c-0.6-0.1-1.2-0.1-1.7-0.3
							c-0.1,0-0.3-0.5-0.2-0.7c0.2-1,1.1-1.8,2.3-1.9c1.1-0.1,2.3,0.4,2.8,1.4c0.1,0.1,0.1,0.3,0.2,0.4c0.3,0.7,0.2,0.9-0.6,1
							c-0.4,0.1-0.9,0.1-1.2,0.1C390.3,1036.2,390,1035.7,389.7,1035z M390.9,1044.1c0.1,0.1,0.1,0.3,0.3,0.4c0-0.2,0.1-0.4,0.1-0.6
							c0.1,0.1,0.2,0.1,0.3,0.2c0.1-0.1,0.3-0.3,0.4-0.4c0.1,0.1,0.2,0.3,0.3,0.4c0.1,0.4,0.1,0.8,0.2,1.3c-0.3-0.2-0.4-0.3-0.5-0.4
							c0,0.1-0.1,0.3-0.1,0.4c-0.1-0.1-0.2-0.1-0.4-0.3v0.8C390.7,1045.3,390.6,1045,390.9,1044.1z M391.9,1049.4
							c0.1,0.5,0.1,1.1,0.2,1.7C391.2,1050.8,391.1,1050.3,391.9,1049.4z M392.7,1050.1c0.1,0.7,0.1,1.2,0.2,1.8
							C392.1,1051.6,392.1,1051.1,392.7,1050.1z M393.7,1052.2c-0.2-0.1-0.5-0.2-0.6-0.3c-0.3-0.6,0-1.1,0.5-1.5
							c0.1,0.6,0.2,1.1,0.3,1.7C393.8,1052.1,393.7,1052.1,393.7,1052.2z M393.9,1044.3c0-0.1,0.3-0.4,0.4-0.4c0.2,0,0.5,0.3,0.5,0.4
							c-0.1,0.6-0.2,1.2-0.4,1.8c-0.1,0-0.1,0-0.2,0C394.1,1045.5,393.9,1044.9,393.9,1044.3z M395,1052.2c-0.1,0.1-0.4,0.1-0.5,0
							c-0.1-0.1-0.2-0.4-0.1-0.5c0.1-0.3,0.3-0.6,0.5-1.1c0.1,0.5,0.3,0.8,0.3,1.1C395.1,1051.9,395.1,1052.1,395,1052.2z M396.4,1051.9
							c0,0.1-0.3,0.2-0.5,0.3c-0.1-0.2-0.2-0.4-0.2-0.5c0.1-0.4,0.3-0.8,0.4-1.2c0.1,0,0.2,0,0.3,0
							C396.5,1051,396.5,1051.5,396.4,1051.9z M396.5,1044.7c-0.4,0.7-0.7,1.2-1.1,1.8c-0.1,0-0.2,0-0.3-0.1c0-0.7-0.1-1.4,0-2.2
							c0-0.2,0.5-0.4,0.8-0.5c0.1,0,0.3,0.1,0.5,0.2c0.1,0,0.5-0.2,0.6-0.1c0.2,0.1,0.3,0.5,0.2,0.7c-0.1,0.5-0.3,1-0.5,1.5
							c-0.1,0-0.1,0-0.2,0C396.6,1045.6,396.6,1045.2,396.5,1044.7z M396.7,1052.2c0.2-0.7,0.3-1.3,0.5-2
							C397.9,1051.3,397.8,1051.9,396.7,1052.2z M398.3,1051.2c-0.1,0.1-0.3,0.1-0.3,0.1c-0.1-0.1-0.2-0.3-0.2-0.4c0-0.5,0-0.9,0.2-1.5
							c0.1,0.1,0.2,0.3,0.4,0.6c0.1-0.5,0.1-0.9,0.2-1.4C399.1,1049.5,399,1050.6,398.3,1051.2z M399.7,1044.7c-0.1,0.3,0.1,0.8-0.6,0.8
							c-0.2,0-0.4,0.4-0.6,0.7c-0.1-0.6-0.1-1.1-0.1-1.6c-0.1,0-0.1,0-0.2,0c-0.1,0.2-0.2,0.4-0.5,0.8c0-0.6-0.1-1-0.1-1.3
							c0-0.1,0.3-0.3,0.4-0.3c0.5,0,1.1,0.1,1.7,0.2C399.7,1044.2,399.7,1044.5,399.7,1044.7z M402.2,1036.8c-0.4,0.1-0.9,0.1-1.2,0.1
							c-0.3-0.6-0.5-1.2-0.8-1.9c-0.3,0.4-0.4,0.5-0.5,0.7c0,0.3-0.1,0.6-0.1,1.2c-0.6-0.1-1.2-0.1-1.7-0.3c-0.1,0-0.3-0.5-0.2-0.7
							c0.2-1,1.1-1.8,2.3-1.9c1.1-0.1,2.3,0.4,2.8,1.4c0.1,0.1,0.1,0.3,0.2,0.4C403,1036.5,403,1036.6,402.2,1036.8z M405.1,1026.7
							c0-1,0.3-1.1,1-0.8c0.1,0.3,0.3,0.7-0.1,0.9C405.8,1026.9,405.5,1026.7,405.1,1026.7z"/>
						<path class="st27" d="M383.1,1022.2c-0.8,0.4-1,0.6-1,0.8c0.3-0.2,0.7-0.4,0.9-0.6C383.4,1022.1,383.3,1022.2,383.1,1022.2z"/>
						<path class="st27" d="M405.5,1026.2c-0.3-0.2-0.1-0.2,0-0.2c0.6,0.3,0.7,0.4,0.7,0.6C405.9,1026.4,405.7,1026.3,405.5,1026.2z"/>
						<path class="st27" d="M388.6,1035.8c0.2,0,0.4-0.1,0.6-0.1c0-0.3,0-0.6,0.1-1C388.4,1035.3,388.4,1035.5,388.6,1035.8z"/>
						<path class="st27" d="M389.2,1035.7c0-0.3,0.1-0.6,0.1-1C389.2,1035.1,389.2,1035.4,389.2,1035.7z"/>
						<path class="st27" d="M389.3,1034.7c-0.8,0.6-0.9,0.8-0.6,1.1C388.4,1035.5,388.4,1035.3,389.3,1034.7z"/>
						<path class="st27" d="M399.1,1035.8c0.2,0,0.4-0.1,0.6-0.1c0-0.3,0-0.6,0.1-1C398.9,1035.3,398.8,1035.5,399.1,1035.8z"/>
						<path class="st27" d="M399.6,1035.7c0-0.3,0.1-0.6,0.1-1C399.7,1035.1,399.7,1035.4,399.6,1035.7z"/>
						<path class="st27" d="M399.7,1034.7c-0.8,0.6-0.9,0.8-0.6,1.1C398.8,1035.5,398.9,1035.3,399.7,1034.7z"/>
						<path class="st27" d="M393.8,1014.6c-0.8,0.4-1,0.6-0.9,0.8c0.3-0.2,0.7-0.4,0.9-0.6C394.2,1014.6,394,1014.6,393.8,1014.6z"/>
						<path class="st27" d="M396.7,1018.1c-0.2,0-0.4-0.1,0,0.2c0.2,0.2,0.6,0.4,0.9,0.6C397.6,1018.7,397.4,1018.6,396.7,1018.1z"/>
						<path class="st27" d="M405.5,1026c-0.1,0-0.3,0,0,0.2c0.2,0.1,0.4,0.3,0.7,0.4C406.2,1026.4,406.1,1026.3,405.5,1026z"/>
						<path class="st27" d="M407.2,1016.9c-0.2,0-0.4-0.1,0,0.2c0.2,0.2,0.6,0.4,0.9,0.6C408.2,1017.6,408,1017.4,407.2,1016.9z"/>
					</g>
				</g>
			</svg>
        </div>
        <div class="z-monstermodal">
            <a href="#" class="z-close">
                <span> </span>
                <img src="asset/images/x_button.svg" alt="close button" width="20" height="20" class="closeBtnImg_1">
            </a>
            <img src="#" alt="Cryptid's picture goes here." width="200" height="200" class="z-img">
            <h3 class="z-mon_name"></h3>
            <div class="containerScroll">
                <!-- <h3 class="z-monstername">Cryptid Name</h3> -->
                    <p class="z-monsterdesc">This paragraph will provide a brief description of the cryptid's behaviour, location, recent sightings, physical appearance, and any other relevant information.</p>
                    <div class="z-img">
						<img class="z-img-pic" id="siteimg1" src="#" width="300" height="auto" alt="location pics">
						<img class="z-img-pic" id="siteimg2" src="#" width="300" height="auto" alt="location pics">
					</div>
                <h3 class="z-locationname">Location Name</h3>
                    <p class="z-locationdesc">This paragraph will provide a brief description of the point of interest labelled on the map.</p>
                <h3 class="z-activities-h">Activities</h3>
                    <div class="z-activities">
                        <figure class="z-icon">
                            <figcaption>Activity</figcaption>
                        </figure>
                    </div>
                <h3 class="z-parkinglots">Parking Lots</h3>
					<ul id="parkingAll">

					</ul>
                <h3 class="z-reviews">Reviews</h3>
                <ul>
					<?php 
						$query = "SELECT * FROM review WHERE site_id=1";
						$sql = mysqli_query($connection,$query);
						while($row = mysqli_fetch_array($sql)){
							echo '
							<li class="z-reviewer">
								<p class="z-user">'.$row['content_author'].'</p>
								<p class="z-review">'.$row['content_content'].'</p>
								<p class="z-review_time">'.$row['content_date'].'</p>
							</li>
							';
						}
					?>
                    <li>
                        <form method="post" action="#" class="review_post">
                            <label for="z-testimonial-name"></label>
                            <input type="text" name="z-testimonial-name" placeholder="your name" class="name_input">

                            <label for="z-testimonial"></label>
                            <input type="text" name="z-testimonial" placeholder="your review" class="z-testimonial">

                            <input class="z-submit" type="submit" value="SUBMIT">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
		<div id="attributionModal">
			<a href="#" id="attributionclose">
				<span></span>
				<img src="asset/images/x_button.svg" alt="close button" width="20" height="20" class="closeBtnImg" id=atriClose>
			</a>
			<h2>Fish Creek Provincial Park</h2>
			<h3>MMDA 300 - Assignment #1: Interactive Map</h3>
			
			<p>"Cryptid images" created by Zachary Howell using DALL-E 2 Open AI image generation from text prompt (<a href="labs.openai.com">labs.openai.com</a>)</p>
			
			<h4>References:</h4>
			<ul>
				<li><a href="https://www.albertaparks.ca/parks/kananaskis/fish-creek-pp/">"Fish Creek Park"</a> by Government of Alberta. Non-Commercial Reproduction.</li> 
				<li><a href="https://bvrrestaurant.com/">"Bow Valley Ranche Restaurant"</a> by Bow Valley Ranche Restaurant.</li>
				<li><a href="https://bvrrestaurant.com/annies/">"Annie's Caf&#233;"</a> by Bow Valley Ranche Restaurant.</li>
				<li><a href="https://foodiesinthepark.com/">"Foodies in the Park"</a> by Foodies in the park.</li>
				<li><a href="https://albertaparks.ca/parks/kananaskis/fish-creek-pp/information-facilities/park-contacts/bow-valley-ranch-visitor-centre/">"Bow Valley Ranch Visitor Centre"</a> by Government of Alberta. Non-Commercial Reproduction.</li>
				<li><a href="https://www.albertaparks.ca/parks/kananaskis/fish-creek-pp/information-facilities/special-facilities/sikome-aquatic-facility/">"Sikome Aquatic Facility"</a> by Government of Alberta. Non-Commercial Reproduction.</li>
				<li><a href="https://www.albertaparks.ca/parks/kananaskis/fish-creek-pp/information-facilities/day-use/boat-launch/">"Boat Launch Day Use"</a> by Government of Alberta. Non-Commercial Reproduction.</li>
				<li><a href="https://www.cmbalink.com/calgary-skills-parks/fish-creek-skills-park/">"Fish Creek Skills Park"</a> by CMBA - Calgary Mountain Bike Alliance.</li>
				<li><a href="https://www.albertaparks.ca/parks/kananaskis/fish-creek-pp/information-facilities/day-use/hulls-wood/">"Hulls Wood Day Use"</a> by Government of Alberta. Non-Commercial Reproduction.</li>
				<li><a href="https://www.mckenziemeadows.com/">"McKenzie Meadows Golf Club"</a> by McKenzie Meadows Golf Club.</li>
				<li><a href="https://www.bluedevilgolf.com/">"Blue Devil Golf Club"</a> by Blue Devil Golf Club.</li>
				<li><a href="https://www.google.ca/maps/place/Fish+Creek+Provincial+Park/@50.9113576,-114.0422374,13z/data=!4m5!3m4!1s0x53717685a73ceb1d:0xfa8f5c2c1ac36f13!8m2!3d50.9147128!4d-114.0107697">"Fish Creek Map"</a> by Google.</li>
				<li><a href="https://dashingdad.ca/things-to-do-with-your-kids-fish-creek-park-ice-caves/">"Things to do with your kids: Fish Creek Park Ice Cave"</a> by Dashing Dad. All Rights Reserved.</li>
			</ul>   
        	<small>&copy; All Other Works Are Original</small>
		</div>
    </main>
    <script src="asset/js/main.js"></script>
    <script src="asset/js/svg.js"></script>
    <script src="asset/js/modal.js"></script>
</body>
</html>