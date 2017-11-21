<?php 
require_once 'src/com/mdhealthclinics/UserData.php';

session_start();
$sesh = $_SESSION['userData'];
$patientData = $_SESSION['userData'];
?>
<!--
<?php print_r($patientData); ?>
-->

<?php include_once 'headerPtPortal.html'; ?>

<div class="welcome skincolored_section">
<div class="row"></div>
</div>

<!--    ========================= MAIN WRAPPER START ========================  -->
<div class="main white_section" data-colorset="white_section">
  <div class="page_title_in_content skincolored_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section_header fancy">
          <h1 class="post_title"><b><font color="#FFFFFF">Patient Portal</font></b></h1>
          <p class="post_subtitle"><b><font color="#FFFFFF">Patient Portal Switchboard</font></b></p>
        </div>
      </div>
    </div>
  </div>


<section class="vc_row wpb_row vc_row-fluid">
	<div class="container">
		<div class="row">
            <div class="wpb_column vc_column_container col-sm-12">

	                <div class="wpb_text_column wpb_content_element ">
		                <div class="wpb_wrapper">

                        <p style="text-align: center;"><b><font color="#000000"s size="3">Here, along with the tabs as the top of the page, you can enter our patient services; Download Patient Clinic Documents, Learn Mindfullness, Participate In The Next Good Step, or get your care at home with our TeleMedicine. </b></font></p>
		                </div>
	                </div>
<div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>

                        <div class="col-xs-6 col-xs-3">
                          <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 250px;">
                                <a href="patient-forms.php" 
                                style="background-image: url('PtPortal/Images/PtForms.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                            <div class="content boxed  with_button ">
                                <div class="hgroup">
                                </div>
                                    <div class="desc">  
                            <p style="text-align: center;"><b><font color="#000000" size="2">Clinic Forms For Patients</b></font></p>                            
                            <p>&nbsp;</p>                            
                                    </div>
                                <div class="link">
                                <a href="patient-forms.php" 
                                data-colorset="white_section" class="linkify btn btn-xs btn-default">Patient Forms</a>
                                </div>
                            </div>
                            <p>&nbsp;</p>

                          </div>

                        </div>


                        <div class="col-xs-6 col-xs-3">
                            <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 400px;">
                                <a href="Mindfulness.php" 
                                style="background-image: url('PtPortal/Images/MindfullnessSpeakingOf.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                                <div class="content boxed  with_button ">
                                    <div class="hgroup">
                                    </div>
                                        <div class="desc"> 
                                        
                            <p style="text-align: center;"><b><font color="#000000" size="2">Mindfulness - It Works</b></font></p>                            
                            <p>&nbsp;</p>                                          
                                        </div>
                                    <div class="link">
                                    <a href="Mindfulness.php" 
                                    data-colorset="white_section" class="linkify btn btn-xs btn-default">Learn Mindfulness</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <div class="col-xs-6 col-xs-3">
                          <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 400px;">
                                <a href="NGSVideos.php" 
                                style="background-image: url('PtPortal/Images/NGS.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                            <div class="content boxed  with_button ">
                                <div class="hgroup">
                                </div>
                                    <div class="desc">       
                                    
                            <p style="text-align: center;"><b><font color="#000000" size="2">A Personal Growth Program</b></font></p>                            
                            <p>&nbsp;</p> 
                            
                                    </div>
                                <div class="link">
                                <a href="NGSVideos.php" 
                                data-colorset="white_section" class="linkify btn btn-xs btn-default">The Next Good Step</a>
                                </div>
                            </div>
                          </div>
                        </div>
 
 
                    
                        <div class="col-xs-6 col-xs-3">
                          <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 400px;">
                                <a href="Telemedicine.php" 
                                style="background-image: url('PtPortal/Images/Telemedicine.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                            <div class="content boxed  with_button ">
                                <div class="hgroup">
                                </div>
                                    <div class="desc">       
                                    
                            <p style="text-align: center;"><b><font color="#000000" size="2">TeleMedicine Home Care</b></font></p>                            
                            <p>&nbsp;</p>  
                            
                                    </div>
                                <div class="link">
                                <a href="Telemedicine.php" 
                                data-colorset="white_section" class="linkify btn btn-xs btn-default">TeleMedicine</a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
		    </div>
	    </div>

</section>

<div>
    <p>&nbsp;</p>

</div>

  <section class="vc_row wpb_row vc_row-fluid white_section text-left no_padding">
    <div class="container">
      <div class="row">
        <div class="wpb_column vc_column_container col-sm-6 white_section">
          <div class="wpb_wrapper">

            <div class="plethora_button wpb_content_element text-left ">
            
            
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
<div><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p></div>
</div>

<script type="text/javascript">
jQuery(function() {
    if (session && session.mode) {
        jQuery('.welcome.skincolored_section').find('.row').append('Welcome ' + session.mode.first_name + ' ' + session.mode.last_name);
    }
});
</script>

<?php include_once 'footerPtPortal.html'; ?>