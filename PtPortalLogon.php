<?php include_once 'headerPtPortal.html'; ?>
<div class="brand-colors"></div>

<!--    ========================= MAIN WRAPPER START ========================  -->
<div class="main white_section" data-colorset="white_section">
  <div class="page_title_in_content skincolored_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section_header fancy">
          <h1 class="post_title"><b><font color="#FFFFFF">Patient Portal Access</font></b></h1>
          <p class="post_subtitle"><b><font color="#FFFFFF">Logon or Register to Access Patients Portal.</font></b></p>
        </div>
      </div>
    </div>
  </div>

  <section class="vc_row wpb_row vc_row-fluid text-left no_padding vbottom no_cols_padding">
    <div class="container">

                    <strong><b>To access the Patients Portal where you can download Forms, Documents, listen to Mindfulness Audios, view Next Good Step Videos, or participate in Telemedicine you will have to Register then Logon.</b></strong>

    </div>
  </section>

<div>
    <p>
<font face="Times New Roman" color="#002D59">

<input type="button" value="Reg Response" onclick="show_alert();"></font></p>
    <p>&nbsp;</p>
</div>

  <section class="vc_row wpb_row vc_row-fluid white_section text-left no_padding">
    <div class="container">
      <div class="row">
        <div class="wpb_column vc_column_container col-sm-12 white_section">
          <div class="wpb_wrapper">

            <div class="plethora_button wpb_content_element text-left ">
 
 
<table border="1" width="100%" bordercolor="#33CCFF" bgcolor="#33CCFF" cellpadding="0" cellspacing="0" style="border-width: 0px">
	<tr>
		<td width="50%" valign="top" style="border-style: none; border-width: medium">

<div  valign="top">

<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

<form name="formLogon" method="post" action="PtPortalLogonScript.php">
   
<tr>
<td height="21">
<p align="center"><strong><font face="Times New Roman" size="4" color="#002D59">
Logon</font></strong></td>
</tr>
<tr>

<td width="82%">&nbsp;</td>
</tr>
<tr>

<td align="left" valign="top">
<p align="center"><font size="4" face="Times New Roman"><font color="#002D59">User Name:
</font><font color="#002D59" size="4">

<input type="text" name="UN" id="UN" placeholder="Email Address">

</font></font></td>
</tr>

<tr>
<td>
<font face="Times New Roman" color="#002D59">&nbsp;&nbsp; </font></td>
</tr>
<tr>
<td>
<p align="center"><font size="4" face="Times New Roman"><font color="#002D59">Password: 
</font><font color="#002D59" size="4"> 

<input name="PW" type="password" id="PW" size="20" >

</font></font></td>
</tr>
<tr>
<td>
<font face="Times New Roman" color="#002D59">&nbsp;&nbsp; </font></td>
</tr>
<tr>
<td>
<p align="center">
   
<input type="submit" id="SubmitLogon" value="Submit" name="Submit" > 

</td>
</tr>
<tr>
<td>
<font face="Times New Roman" color="#002D59">

&nbsp;</font></td>
</tr>
<tr>
<td width="50%">
<p align="center"><font size="3" face="Times New Roman"><font color="#002D59">Forgot? 
</font> 
<a target="_blank" href="mailto:info@md-hc.com?subject=Provider Login Help" style="text-decoration: none">
<font size="3" color="#002D59">Contact Us</font></a></font></td>
</tr>

</form>

</table>

</div>

		
<td width="50%" style="border-style: none; border-width: medium">

<div align="center" valign="top">



<div align="right">



<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

<tr>
<td width="92%">
<p align="center"><strong><font face="Times New Roman" size="4" color="#002D59">
Register</font></strong></td>
</tr>

<form target="_self" name="formRegister" method="post" action="PtRegistration.php">

<tr>

<td align="center">
<p align="center"><font size="4" face="Times New Roman"><font color="#002D59">First Name:
</font><font color="#002D59" size="4">
<input type="text" name="PtFName" id="PtFName"></font></font></td>
</tr>

<tr>
<td align="center" valign="top">
<p align="center"><font size="4" face="Times New Roman"><font color="#002D59">Last Name:
</font><font color="#002D59" size="4">
<input type="text" name="PtLName" id="PtLName"></font></font></td>
</tr>

<tr>
<td align="center">
<p align="center"><font size="4" face="Times New Roman" color="#002D59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
DOB</font><font face="Times New Roman"><font color="#002D59">:
</font><font color="#002D59" size="4">
<input maxlength="8" name="DOB" id="DOB" ></font></font></td>
</tr>

<tr>
<td align="center">
<font face="Times New Roman" color="#002D59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
<font size="4" face="Times New Roman"><font color="#002D59">Phone:
</font><font color="#002D59" size="4">
<input maxlength="10" name="Phone" id="Phone" ></font></font></td>
</tr>

<tr>
<td align="center">
<font size="4" face="Times New Roman" color="#002D59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
Email</font><font face="Times New Roman"><font color="#002D59">:
</font><font color="#002D59" size="4">
<input name="Email" id="Email"></font></font></td>
</tr>

<tr>
<td align="center">
<font size="4" face="Times New Roman" color="#002D59">Password</font><font face="Times New Roman"><font color="#002D59">:
</font><font color="#002D59" size="4">
<input name="Password" id="Password"></font></font></td>
</tr>

<tr>
<td>
<p align="center">
<input type="submit" id="SubmitReg" value="Submit" name="SubmitReg" style="font-family: Arial; font-size: 10pt; color: #FFFFFF; font-style: italic; font-weight: bold; padding: 0; background-color: #0099FF"></td>
</tr>

</form>

</table>

		</div>

		</div>
		</td>
	</tr>
</table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<script type="text/javascript">

var response="";

function RegResponse(response) {

window.alert('Try Again');
   
    var data = "$response";
    
    
     jQuery( function() {
       jQuery(data).dialog({
             show: {effect: 'fade', duration: 500},
    	     hide: {effect: 'fade', duration: 500},
    	     height: 440,
    	     width: 697,
    	     title: title,
             resizable: false,
             draggable: false,
    	     modal: true
        });
     } );
}
</script>

<script type="text/javascript"> 
function show_alert() { 

alert('Reg Success'); 

return false;

}
</script>


  <section class="vc_row wpb_row vc_row-fluid">
    <div class="container">
      <div class="row">
        <div class="wpb_column vc_column_container col-sm-12">
          <div class="wpb_wrapper">
            <div class="vc_wp_text wpb_content_element">
              <div class="widget widget_text">
                <div class="textwidget">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<div>

</div>

  <div id="new_comment">
    <div class="container">
      <div class="new_comment"></div>
    </div>
  </div>

</div>
<?php include_once 'footerPtPortal.html'; ?>