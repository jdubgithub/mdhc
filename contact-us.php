<script type="text/javascript"> var pageId = '#header_select_cu';</script>

<?php 
header("Access-Control-Allow-Origin: *");
?>
<!-- __________________________________________________ Start Header -->

<?php require('header.html'); ?>
<!-- __________________________________________________ Finish Header -->


<!-- __________________________________________________ Start Middle -->

<div class="wrap_headline">
	<div class="headline">
		<h1 style="margin-top: 0; margin-bottom: 0">
			<font color="#31849b">Contact Us - Make An Appointment</font>
		</h1>
	</div>
</div>


<div class="container">
	<section id="middle">
		<div class="middle_inner">
			<!-- __________________________________________________ Start Content -->

<div class="content_wrap">
	<section id="content">
		<div class="entry">

			<div class="cmsms-form-builder">
				<div class="box success_box" style="display: none;">
					<table>
						<tr>
							<td>&nbsp;</td>
							<td>Thank You!<br>Your message has been sent
								successfully.
							</td>
						</tr>
					</table>
				</div>


<script type="text/javascript">
<?php require 'assets/js/contact_form.js';?>
</script>
				<form action="sendmail.php" method="post" id="contactform">
					<font color="#31849b">Talk To Us</font><span class="color2">
						*</span>
					</p>
					<div class="form_info cmsms_input">
						<label for="contact_name">Name <span class="color2">
								*</span></label> <input type="text" name="contact_name" id="contact_name"
							value="" size="22" tabindex="3"
							class="validate[required,minSize[3],maxSize[100],custom[onlyLetterSp]]" />
					</div>
					<div class="cl"></div>
					<div class="form_info cmsms_input">
						<label for="contact_email">Email <span class="color2">
								*</span></label> <input type="text" name="contact_email"
							id="contact_email" value="" size="22" tabindex="4"
							class="validate[required,custom[email]]" />
					</div>
					<!--											<div class="cl"></div>
						<div class="form_info cmsms_input">
							<label for="contact_url">Website</label>
							<input type="text" name="contact_url" id="contact_url" value="" size="22" tabindex="5" class="validate[custom[url]]" />
						</div>-->
					<div class="cl"></div>
					<div class="form_info cmsms_input">
						<label for="contact_subject"> Phone Number <span
							class="color2"> *</span></label> <input type="text"
							name="contact_subject" id="contact_subject" value=""
							size="22" tabindex="6"
							class="validate[required,minSize[3],maxSize[100]]" />
					</div>
					<div class="cl"></div>
					<div class="form_info cmsms_textarea">
						<label for="contact_message"> Message <span
							class="color2">*</span></label>
						<textarea name="contact_message" id="contact_message"
							cols="28" rows="6" tabindex="7"
							class="validate[required,minSize[3]]"></textarea>
					</div>
					<!--<div class="cl"></div>
						<div class="form_info cmsms_checkboxes">
							<div class="check_parent">
								<input type="checkbox" name="check_1" id="check_1" value="I Agree!">
								<label for="check_1">I Agree!</label>
							</div>
							<div class="check_parent">
								<input type="checkbox" name="check_2" id="check_2" value="Yes">
								<label for="check_2">Yes</label>
							</div>
							<div class="check_parent">
								<input type="checkbox" name="check_3" id="check_3" value="No">
								<label for="check_3">No</label>
							</div>
						</div>-->
					<!--<div class="form_info cmsms_radio">
							<div class="check_parent">
								<input type="radio" name="radio" id="radio_1" value="Just cool!">
								<label for="radio_1">Just cool!</label>
							</div>
							<div class="check_parent">
								<input type="radio" name="radio" id="radio_2" value="Supercool!">
								<label for="radio_2">Supercool!</label>
							</div>
							<div class="check_parent">
								<input type="radio" name="radio" id="radio_3" value="Are you kidding? This is awesome!">
								<label for="radio_3">Are you kidding? This is awesome!</label>
							</div>
						</div>-->
					<!--<div class="form_info cmsms_select">
							<select>
								<option>Just cool!</option>
								<option>Supercool!</option>
								<option>Are you kidding? This is awesome!</option>
							</select>
							<span class="db">Description goes here</span>
						</div>
						<div class="cl"></div>-->
					<div>
						<input type="hidden" name="contact_form_url"
							id="contact_form_url" value="sendmail.php" />
					</div>
					<!-- Here you need to set the path to the sendmail file -->
					<div>
						<a href="#" class="button" id="contact_form_formsend"
							tabindex="8" style="text-decoration: none"><span>
								Submit Your Request</span></a>
						<div class="loading"></div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- __________________________________________________ Finish Content -->

	<!-- __________________________________________________ Start Sidebar -->

	<section id="sidebar">
		<div class="one_first">
			<aside class="widget widget_custom_advertising_entries">
				<b><h2 class="widgettitle">Locations</h2></b>
				<ul>
					<p align="left" style="margin-top: 0; margin-bottom: 0">
						<img src="/images/TustinOffice3.jpg" width="200" height="130"><br>
						<font face="Calibri"> <a href="https://www.google.com/maps/place/217+El+Camino+Real,+Tustin,+CA+92780/data=!4m2!3m1!1s0x80dcdbdc6a09696d:0xc45fa9a1ba13622c?hl=en"
							target="_blank" style="text-decoration: none"> <strong
								style="font-weight: 400"> <font color="#3D4244">217
										El Camino Real </font></strong><font color="#3D4244"><BR> </font> <strong
								style="font-weight: 400"> <font color="#3D4244">Tustin,
										CA 92780</font></strong></font>
					</p>
					<p align="left" style="margin-top: 0; margin-bottom: 0">
						<strong style="font-weight: 400"> <font
							face="Calibri" color="#3D4244"> (map)</a></font></strong><BR> <BR>
						<BR> <img src="/images/location-costa-mesa.jpg"
							width="200" height="130"><br> <font
							face="Calibri"> <a href="https://maps.google.com/maps?client=firefox-a&q=1503+South+Coast+Drive+Costa+Mesa,+CA+92626&ie=UTF-8&ei=QWpoUo6tDJLC9QTEooCQCQ&ved=0CAgQ_AUoAg"
							target="_blank" style="text-decoration: none"> <strong
								style="font-weight: 400"> <font color="#3D4244">1503
										South Coast Drive</font></strong><font color="#3D4244"><BR> </font>
								<strong style="font-weight: 400"> <font
									color="#3D4244">Costa Mesa, CA 92626</font></strong></font>
					</p>
					<p align="left" style="margin-top: 0; margin-bottom: 0">
						<strong style="font-weight: 400"> <font
							face="Calibri" color="#3D4244"> (map)</a></font></strong><BR> <BR>
						<BR> <img src="/images/location-fountain-valley.jpg"
							width="200" height="130"><br> <a href="https://maps.google.com/maps?oe=utf-8&client=firefox-a&q=10900+Warner+Ave.+Fountain+Valley,+CA+92708&ie=UTF-8&hq=&hnear=0x80dd2768c2cf1ce5:0x2b352670b0ad4d46,10900+Warner+Ave,+Fountain+Valley,+CA+92708&gl=us&ei=aWpoUsH2Bon88QTEyICwBw&ved=0CCsQ8gEwAA"
							target="_blank"> <strong style="font-weight: 400">
								<font color="#3D4244"> <span
									style="text-decoration: none"> 10900 Warner Ave.</span></font>
						</strong><span style="text-decoration: none"><font
								color="#3D4244"><BR> <strong
									style="font-weight: 400">Fountain Valley, CA
										92708</strong></font></span>
					</p>
					<p align="left" style="margin-top: 0; margin-bottom: 0">
						<font face="Calibri" color="#3D4244"> <strong
							style="font-weight: 400; text-decoration: none">
								(map)</strong></font></a><BR> <BR> <BR> <img
							src="/images/location-santa-ana.jpg" width="200"
							height="130"><br> <a href="https://maps.google.com/maps?oe=utf-8&client=firefox-a&q=999+Tustin+Ave,+Suite+13+Santa+Ana,+CA+92705&ie=UTF-8&hq=&hnear=0x80dcd97de2102525:0xba849bd873b4a371,999+N+Tustin+Ave+%2313,+Santa+Ana,+CA+92705&gl=us&ei=qmpoUtrtJ4-I9gTs04CoBA&ved=0CCsQ8gEwAA"
							target="_blank" style="text-decoration: none"> <font
							face="Calibri" color="#3D4244"> <strong
								style="font-weight: 400">999 Tustin Ave, Suite 13<BR>
									Santa Ana, CA 92705
							</strong></font></a>
					</p>
					<p align="left" style="margin-top: 0; margin-bottom: 0">
						<font face="Calibri" color="#3D4244"> <a href="https://maps.google.com/maps?oe=utf-8&client=firefox-a&q=999+Tustin+Ave,+Suite+13+Santa+Ana,+CA+92705&ie=UTF-8&hq=&hnear=0x80dcd97de2102525:0xba849bd873b4a371,999+N+Tustin+Ave+%2313,+Santa+Ana,+CA+92705&gl=us&ei=qmpoUtrtJ4-I9gTs04CoBA&ved=0CCsQ8gEwAA"
							target="_blank" style="text-decoration: none"> <strong
								style="font-weight: 400"> <font color="#3D4244">(map)</font></strong></a></font><BR>
						<BR>
					</p>
				</ul>
			</aside>
		</div>





	</section>
	<!-- __________________________________________________ Finish Sidebar -->

		</div>
	</div>
</section>
<!-- __________________________________________________ Finish Middle -->


<!-- __________________________________________________ Start Bottom -->

<?php require('bottom.html'); ?>

<!-- __________________________________________________ Finish Bottom -->

<!-- __________________________________________________ Finish Page -->

<!-- __________________________________________________ Start Footer -->

<?php require('footer.html'); ?>
