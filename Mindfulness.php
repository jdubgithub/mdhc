<?php 
require_once 'src/com/mdhealthclinics/UserData.php';

session_start();
$patientData = null;
if (isset($_SESSION) && isset($_SESSION['userData'])) {
    $patientData = $_SESSION['userData'];
}
else {
    header("Location: /PtPortal/index.php");
    return;
}

include_once 'headerPtPortal.html';
include_once 'mdhealth_utils.php';

$testCompleted = json_encode(getTestsCompleted($patientData->id));

?>

<script>
var user_id = <?php echo $patientData->id; ?>;
var testsCompleted = <?php echo $testCompleted ? $testCompleted : ''; ?>;
</script>

<span class="progress_ball"><i class="fa fa-refresh"></i></span>

      <div class="loader-modal"></div>
       <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
   
   <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
          <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
</svg>

      </div>

<!--    ========================= MAIN WRAPPER START ========================  -->
<div class="main white_section" data-colorset="white_section">
  <div class="page_title_in_content skincolored_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section_header fancy">
          <h1 class="post_title"><b><font color="#FFFFFF">Mindfulness Audios</font></b></h1>
          <p class="post_subtitle"><b><font color="#FFFFFF">Listen to the Minduflness Audios.</font></b></p>
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

                        <p style="text-align: center;"><b><font color="#000000"s size="4">If you have been instructed by our Psychology Deptartment please click on the appropriate Audio.</b></font></p>
		                </div>
	                </div>
<div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>

<?php echo getQandAs('MindfullnessFiveMin'); ?>

                        <div class="col-xs-6 col-xs-3">
                          <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 250px;">
                                <a href="javascript:" 
                                onClick="clickVid('MindfullnessFiveMin', '1 - Mindfullness Meditation 5 Minute');" 
                                style="background-image: url('PtPortal/Images/5MinMindfulness.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                            <div class="content boxed  with_button ">
                                <div class="hgroup">
                                </div>
                                    <div class="desc">  
                            <p style="text-align: center;"><b><font color="#000000" size="1">1-Mindfullness Meditation 5 Minute </b></font></p>                            
                            <p>&nbsp;</p>                            
                                    </div>
                                <div class="link">
                                <a href="javascript:"
                                onClick="clickVid('MindfullnessFiveMin', '1-Mindfullness Meditation 5 Minute');" 
                                data-colorset="white_section" class="linkify btn btn-xs btn-default">1-Mindfullness Meditation 5 Minute</a>
                                </div>
                            </div>
                            <p>&nbsp;</p>

                          </div>

                        </div>

<?php echo getQandAs('MindfullnessFiveMin'); ?>


                        <div class="col-xs-6 col-xs-3">
                          <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 250px;">
                                <a href="javascript:" 
                                onClick="clickVid('MindfullnessTwelveMin', '2 - Mindfullness Meditation 12 Minute');" 
                                style="background-image: url('PtPortal/Images/12MinMindfulness.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                            <div class="content boxed  with_button ">
                                <div class="hgroup">
                                </div>
                                    <div class="desc">  
                            <p style="text-align: center;"><b><font color="#000000" size="1">2-Mindfullness Meditation 12 Minute</b></font></p>                            
                            <p>&nbsp;</p>                            
                                    </div>
                                <div class="link">
                                <a href="javascript:"
                                onClick="clickVid('MindfullnessTwelveMin', '2-Mindfullness Meditation 12 Minute');" 
                                data-colorset="white_section" class="linkify btn btn-xs btn-default">2-Mindfullness Meditation 12 Minute</a>
                                </div>
                            </div>
                            <p>&nbsp;</p>

                          </div>

                        </div>

<?php echo getQandAs('MindfullnessTwentyMin'); ?>


                        <div class="col-xs-6 col-xs-3">
                            <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 400px;">
                                <a href="javascript:" 
                                onClick="clickVid('MindfullnessTwentyMin', '3-Mindfullness Meditation 20 Minute');" 
                                style="background-image: url('PtPortal/Images/20MinMindfulness.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                                <div class="content boxed  with_button ">
                                    <div class="hgroup">
                                    </div>
                                        <div class="desc"> 
                                        
                            <p style="text-align: center;"><b><font color="#000000" size="1">3-Mindfullness Meditation 20 Minute</b></font></p>                            
                            <p>&nbsp;</p>                                          
                                        </div>
                                    <div class="link">
                                    <a href="javascript:"
                                    onClick="clickVid('MindfullnessTwentyMin', '3-Mindfullness Meditation 20 Minute');" 
                                    data-colorset="white_section" class="linkify btn btn-xs btn-default">3-Mindfullness Meditation 20 Minute</a>
                                    </div>
                                </div>
                            </div>
                        </div>


<?php echo getQandAs('MindfullnessWorkingEmotionsSensations'); ?>

                        <div class="col-xs-6 col-xs-3">
                          <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 400px;">
                                <a href="javascript:" 
                                onClick="clickVid('MindfullnessWorkingEmotionsSensations', '4-Difficult Emotions Sensations');" 
                                style="background-image: url('PtPortal/Images/4_WorkingEmotionsSensations.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                            <div class="content boxed  with_button ">
                                <div class="hgroup">
                                </div>
                                    <div class="desc">       
                                    
                            <p style="text-align: center;"><b><font color="#000000" size="1">4-Difficult Emotions Sensations</b></font></p>                            
                            <p>&nbsp;</p> 
                            
                                    </div>
                                <div class="link">
                                <a href="javascript:"
                                onClick="clickVid('MindfullnessWorkingEmotionsSensations', '4-Difficult Emotions Sensations');" 
                                data-colorset="white_section" class="linkify btn btn-xs btn-default">4-Difficult Emotions Sensations</a>
                                </div>
                            </div>
                          </div>
                        </div>

<?php echo getQandAs('MindfullnessFourtyFiveMin'); ?>

                        <div class="col-xs-6 col-xs-3">
                          <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 400px;">
                                <a href="javascript:" 
                                onClick="clickVid('MindfullnessFourtyFiveMin', '5-Mindfullness Meditation 45 Minute');" 
                                style="background-image: url('PtPortal/Images/5_45MinMindfullness.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                            <div class="content boxed  with_button ">
                                <div class="hgroup">
                                </div>
                                    <div class="desc">       
                                    
                            <p style="text-align: center;"><b><font color="#000000" size="1">5-Mindfullness Meditation 45 Minute</b></font></p>                            
                            <p>&nbsp;</p> 
                            
                                    </div>
                                <div class="link">
                                <a href="javascript:"
                                onClick="clickVid('MindfullnessFourtyFiveMin', '5-Mindfullness Meditation 45 Minute');" 
                                data-colorset="white_section" class="linkify btn btn-xs btn-default">5-Mindfullness Meditation 45 Minute</a>
                                </div>
                            </div>
                          </div>
                        </div>


<?php echo getQandAs('MindfullnessLovingKindness'); ?>

                    
                        <div class="col-xs-6 col-xs-3">
                          <div class="team_member teaser_box centered same_height_col white_section" style="height: auto; min-height: 400px;">
                                <a href="javascript:" 
                                onClick="clickVid('MindfullnessLovingKindness', '6-Loving Kindness');" 
                                style="background-image: url('PtPortal/Images/LovingKindness.jpg')" data-colorset="white_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
                            <div class="content boxed  with_button ">
                                <div class="hgroup">
                                </div>
                                    <div class="desc">       
                                    
                            <p style="text-align: center;"><b><font color="#000000" size="1">6-Loving Kindness</b></font></p>                            
                            <p>&nbsp;</p>  
                            
                                    </div>
                                <div class="link">
                                <a href="javascript:"
                                onClick="clickVid('MindfullnessLovingKindness', '6-Loving Kindness');" 
                                data-colorset="white_section" class="linkify btn btn-xs btn-default">6-Loving Kindness</a>
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

<?php include_once 'footerPtPortal.html'; ?>