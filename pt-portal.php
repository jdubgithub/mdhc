<?php include_once 'headerPtPortal.html'; ?>
<div class="brand-colors"></div>

<!--    ========================= MAIN WRAPPER START ========================  -->
<div class="main white_section pt_portal_login" data-colorset="white_section">
  <div class="page_title_in_content skincolored_section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section_header fancy">
          <h1 class="post_title">
            <b><font color="#FFFFFF">Patient Portal Access</font></b>
          </h1>
          <p class="post_subtitle">
            <b><font color="#FFFFFF">Logon or Register to Access Patients Portal.</font></b>
          </p>
        </div>
      </div>
    </div>
  </div>

  <section class="vc_row wpb_row vc_row-fluid text-left no_padding vbottom no_cols_padding">
    <div class="container">

      <strong><b>To access the Patients Portal where you can download Forms, Documents, listen to Mindfulness Audios,
          view Next Good Step Videos, or participate in Telemedicine you will have to Register then Logon.</b></strong>

    </div>
  </section>

  <section class="vc_row wpb_row vc_row-fluid white_section text-left no_padding">
    <div class="container">
      <div class="row">
        <div class="wpb_column vc_column_container col-sm-12 white_section">
          <div class="wpb_wrapper">

            <div class="plethora_button wpb_content_element text-left ">

              <table width="100%" height="400px" cellpadding="0" cellspacing="0">
                <tr>

                  <td width="35%" height="371px" valign="top">

                    <div valign="top">

                      <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

                        <form name="formLogon" method="post" action="PtPortalLogonScript.php">

                          <tr>
                            <td height="21">
                              <p align="left">
                                <strong><font face="Times New Roman" size="4" color="#002D59"> Logon</font></strong>
                            
                            </td>
                          </tr>
                          <tr>

                            <td width="82%"> </td>
                          </tr>
                          <tr>

                            <td align="left" valign="top">
                              <p align="left">
                                <font size="4" face="Times New Roman"><font color="#002D59">User Name: </font><font
                                  color="#002D59" size="4"> 
                                  <input type="text" name="UN" id="UN" placeholder="Email Address">

                                </font></font>
                            
                            </td>
                          </tr>

                          <tr>
                            <td><font face="Times New Roman" color="#002D59"></font></td>
                          </tr>
                          <tr>
                            <td>
                              <p align="left">
                                <font size="4" face="Times New Roman"><font color="#002D59">Password: </font><font
                                  color="#002D59" size="4"> <input name="PW" type="password" id="PW" size="20">

                                </font></font>
                            
                            </td>
                          </tr>
                          <tr>
                            <td><font face="Times New Roman" color="#002D59">   </font></td>
                          </tr>
                          <tr>
                            <td>
                              <p align="left">

                                <input type="submit" id="SubmitLogon" value="Submit" name="Submit">
                            
                            </td>
                          </tr>
                          <tr>
                            <td><font face="Times New Roman" color="#002D59">  </font></td>
                          </tr>
                          <tr>
                            <td width="50%">
                              <p align="left">
                                <font size="3" face="Times New Roman"><font color="#002D59">Forgot? </font> <a
                                  target="_blank" href="mailto:info@md-hc.com?subject=Provider Login Help"
                                  style="text-decoration: none"> <font size="3" color="#002D59">Contact Us</font></a></font>
                            
                            </td>
                          </tr>

                        </form>

                        </table>

                      </div>

                    </div>
                  

                  <td width="35%" height="371px">

                    <div align="center" valign="top">

                     <form name="formRegister" id="formRegister" method="post">
                     
                   <div class="success_box">
                       <div class="box">
                              <font size="4" color="#FFFFFF"><b>Thank you!</b></font>
                              <font color="#FFFFFF"><br />We will get back to you as soon as possible. </font>
                        </div>
                        <div class="error">
                          <font size="4" color="red">Please complete all the fields.</font>
                        </div>

                     </div>

                      <div align="right">

                        <table width="90%" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="92%">
                              <p align="left">
                                <strong><font face="Times New Roman" size="4" color="#002D59"> Register</font></strong>
                            </td>
                          </tr>
                          <tr>
                            <td align="center">
                              <p align="left">
                                <font size="4" face="Times New Roman"><font color="#002D59">First Name: </font><font
                                  color="#002D59" size="4"> <input type="text" name="first_name" id="first_name" required value=""></font></font> 
                            </td>
                          </tr>
                          <tr>
                            <td align="center" valign="top">
                              <p align="left">
                                <font size="4" face="Times New Roman"><font color="#002D59">Last Name: </font><font
                                  color="#002D59" size="4"> <input value="" type="text" name="last_name" id="last_name" required></font></font> 
                            </td>
                          </tr>
                          <tr>
                            <td align="center">
                              <p align="left">
                                <font size="4" face="Times New Roman" color="#002D59">        DOB</font>
                                <font face="Times New Roman" color="#002D59">: </font>
                                <font color="#002D59" size="4"> <input value="" maxlength="8" name="dob" id="dob" required></font>
                            </td>
                          </tr>

                          <tr>
                            <td align="center">
                              <p align="left">
                            <font face="Times New Roman" color="#002D59">     
                            </font> <font size="4" face="Times New Roman"><font color="#002D59">Phone: </font><font
                                color="#002D59" size="4"> <input value="" maxlength="10" name="phone" id="phone" required></font></font></td>
                          </tr>

                          <tr>
                            <td align="center"><font size="4" face="Times New Roman" color="#002D59">     
                              <p align="left">

                                Email</font><font face="Times New Roman"><font color="#002D59">: </font><font
                                color="#002D59" size="4"> <input regex="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" value="" name="email_address" id="email_address" required></font></font></td>
                          </tr>

                          <tr>
                            <td align="center">
                              <p align="left">
                            <font size="4" face="Times New Roman" color="#002D59">Password</font><font
                              face="Times New Roman"><font color="#002D59">: </font><font color="#002D59" size="4"> 
                              <input value="" name="password" id="password" type="password" required></font></font></td>
                          </tr>

                          <tr>
                            <td>
                              <p align="left">
                                <input type="submit" id="submit_reg" value="Submit" name="submit_reg" style="font-family: Arial; font-size: 10pt; color: #FFFFFF; font-style: italic; font-weight: bold; padding: 0; background-color: #0099FF;">
                                </p>
                            </td>
                          </tr>
                        </table>
                      </div>

                    </form>

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


<div></div>

</div>

<?php include_once 'footerPtPortal.html'; ?>