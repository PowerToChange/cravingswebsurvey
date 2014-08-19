<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>P2C Survey</title>
    <link rel="icon" href="/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link href="css/survey.css" rel="stylesheet" media="screen">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  </head>
  <body>

    <div class="container">
      <div class="screen" order="first">
        <div class="p2clogo">
          <object data="img/logo-survey.svg" type="image/svg+xml">
            <a href="img/logo-survey.svg">
              <!--[if lte IE 8]-->
                <img src="img/p2c.gif"/>
              <!--[endif]-->
            </a>
          </object>
        </div>
        <h2>We want to know what you want. Take this survey to join the cravings conversation on your campus.</h2>
      <form class="form">
          <h4>My university is: <?php include('get_campus_dropdown.php'); ?></h4>
          <h4>The one thing I crave most is:</h4>
          <div class="radio">
            <input id="radio-cwf" type="radio" name="submitted[civicrm_1_activity_1_cg9_custom_64]" value="warmup-fun" />
            <label for="radio-cwf">fun</label>
          </div>
          <div class="radio">
            <input id="radio-cwr" type="radio" name="submitted[civicrm_1_activity_1_cg9_custom_64]" value="warmup-relationship" />
            <label for="radio-cwr">relationship</label>
          </div>
          <div class="radio">
            <input id="radio-cwm" type="radio" name="submitted[civicrm_1_activity_1_cg9_custom_64]" value="warmup-money" />
            <label for="radio-cwm">money</label>
          </div>
          <div class="radio">
            <input id="radio-cwg" type="radio" name="submitted[civicrm_1_activity_1_cg9_custom_64]" value="warmup-grades" />
            <label for="radio-cwg">good grades</label>
          </div>
          <div class="radio">
            <input id="radio-cwo" type="radio" name="submitted[civicrm_1_activity_1_cg9_custom_64]" value="warmup_other" />
            <label for="radio-cwo">other</label>
          </div>
          <!-- if other -->
          <input type="hidden" name="submitted[civicrm_1_activity_1_cg9_custom_126]" value="" />
          <h4>I’d like a <strong>FREE MAGAZINE BY PERSONAL DELIVERY</strong> to help me explore my craving for:</h4>
          
          <div class="radio">
            <input id="radio-msc" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_147][magazine-spiritual]" value="magazine-spiritual" />
            <label for="radio-msc">spiritual connection</label>
          </div>
          <div class="radio">
            <input id="radio-mj" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_147][magazine-justice]" value="magazine-justice" />
            <label for="radio-mj">a real justice</label>
          </div>
          <div class="radio">
            <input id="radio-me" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_147][magazine-escape]" value="magazine-escape" />
            <label for="radio-me">escape from the dreariness of life</label>
          </div>
          <div class="radio">
            <input id="radio-mss" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_147][magazine-success]" value="magazine-success" />
            <label for="radio-mss">achievement &amp; success</label>
          </div>
          <div class="radio">
            <input id="radio-ml" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_147][magazine-love]" value="magazine-love" />
            <label for="radio-ml">love without conditions</label>
          </div>
          <div class="radio">
            <input id="radio-mn" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_147][magazine-no]" value="magazine-no" />
            <label for="radio-mn">No, thanks</label>
          </div>
          

          <h4><em>Power to Change loves to help students discover Jesus.</em></h4>
          <h4>How interested are you in having a chat about how to begin a journey with Jesus Christ?</h4>
          <div class="radio">
            <input id="radio-1" type="radio" name="submitted[civicrm_1_activity_1_cg17_custom_149]" value="gauge-1" />
            <label for="radio-1">1 - not</label>
          </div>
          <div class="radio">
            <input id="radio-2" type="radio" name="submitted[civicrm_1_activity_1_cg17_custom_149]" value="gauge-2" />
            <label for="radio-2">2</label>
          </div>
          <div class="radio">
            <input id="radio-3" type="radio" name="submitted[civicrm_1_activity_1_cg17_custom_149]" value="gauge-3" />
            <label for="radio-3">3 - maybe</label>
          </div>
          <div class="radio">
            <input id="radio-4" type="radio" name="submitted[civicrm_1_activity_1_cg17_custom_149]" value="gauge-4" />
            <label for="radio-4">4</label>
          </div>
          <div class="radio">
            <input id="radio-5" type="radio" name="submitted[civicrm_1_activity_1_cg17_custom_149]" value="gauge-5" />
            <label for="radio-5">5 - very</label>
          </div>
          <h4>On my spiritual journey I’d like to:</h4>
          <div class="radio">
            <input id="radio-wec" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_150][journey-explore]" value="journey-explore" />
            <label for="radio-wec">explore the deeper meaning of my cravings</label>
          </div>
          <div class="radio">
            <input id="radio-wor" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_150][journey-online]" value="journey-online" />
            <label for="radio-wor">get connected to online resources about my cravings</label>
          </div>
          <div class="radio">
            <input id="radio-whm" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_150][journey-p2c]" value="journey-p2c" />
            <label for="radio-whm">hear more about Power to Change</label>
          </div>
          <div class="radio">
            <input id="radio-wg" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_150][journey-grow]" value="journey-grow" />
            <label for="radio-wg">grow in my relationship with Jesus</label>
          </div>
          <div class="radio">
            <input id="radio-wn" type="checkbox" name="submitted[civicrm_1_activity_1_cg17_custom_150][journey-nothing]" value="journey-nothing" />
            <label for="radio-wn">do nothing right now</label>
          </div>

          <div class="form-group">
            <label for="inputFirstName">First Name</label>
            <input id="inputFirstName" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_contact_first_name]" type="text" class="form-control" placeholder="First Name" />
          </div>
          <div class="form-group">
            <label for="inputLastName">Last Name</label>
            <input id="inputLastName" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_contact_last_name]"type="text" class="form-control" placeholder="Last Name" />
          </div>
          <div class="form-group">
            <label>Gender</label>
            <div class="radio">
              <input id="radio-male" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_contact_gender_id]" value="2">
              <label for="radio-male">Male</label>
            </div>
            <div class="radio">
              <input id="radio-female" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_contact_gender_id]" value="1">
              <label for="radio-female">Female</label>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPhoneNumber">Cell Phone</label>
            <input id="inputPhoneNumber" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_phone_phone]" type="tel" class="form-control" placeholder="Phone Number" />
          </div>
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input id="inputEmail" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_email_email]" type="email" class="form-control" placeholder="Email" />
          </div>
          <h4>Year</h4>
            <input id="radio-y1" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_57]" value="1" />
            <label for="radio-y1">1&nbsp;&nbsp;</label>
            <input id="radio-y2" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_57]" value="2" />
            <label for="radio-y2">2&nbsp;&nbsp;</label>
            <input id="radio-y3" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_57]" value="3" />
            <label for="radio-y3">3&nbsp;&nbsp;</label>
            <input id="radio-y4" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_57]" value="4" />
            <label for="radio-y4">4&nbsp;&nbsp;</label>
            <input id="radio-y5" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_57]" value="5" />
            <label for="radio-y5">5&nbsp;&nbsp;</label>
            <input id="radio-yg" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_57]" value="grad" />
            <label for="radio-yg">Grad</label>
            <input id="radio-yo" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_57]" value="other" />
            <label for="radio-yo">Other</label>
            <!-- if other -->
            <input type="hidden" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_58]" value=""/>

          <h4>Faculty/Degree</h4>
          <input name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_59]" type="text" display-name="faculty or degree" />
            <!-- on campus residence -->
          <input type="hidden" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_60]" value="" />
          <h4>I am an international student</h4> 
          <input id="international-yes" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_61]" value="yes"/>
          <label for="international-yes"> Yes </label>
          <input id="international-no" type="radio" name="submitted[civicrm_1_contact_1_fieldset_fieldset][civicrm_1_contact_1_cg7_custom_61]" value="no"/>
          <label for="international-no"> No </label>
          
        </div>
          <div id="messages">
            
          </div>
      <div class="screen" order="thankyou">
        <div class="p2clogo">
          <object data="img/logo-survey.svg" type="image/svg+xml">
            <a href="img/logo-survey.svg">
              <!--[if lte IE 8]-->
                <img src="img/p2c.gif"/>
              <!--[endif]-->
            </a>
          </object>
        </div>
          <h1>Thanks! Enjoy the dinner!</h1>
      </div>
      
      <div class="screen" order="error-submitting">
        <h1>We're sorry, it looks like there was an error while trying to submit your survey.</h1>
        <h1>Would you like to try to submit it again?</h1>
      </div>
      
      <div class="screen" order="submitting">
        <h1>Submitting &hellip;</h1>
        <img src="img/submitting.gif" />
      </div>
  
        <button id="submit-button" type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
        <button id="reset-button" type="button" class="btn btn-link" data-dismiss="modal">Reset</button>
        <a id="visit-button" type="button" class="btn btn-primary" data-dismiss="modal" href="http://p2c.com">Visit p2c.com</a>
        <button id="retry-button" type="button" class="btn btn-primary" data-dismiss="modal">Try Submit Again</button>
              <!-- (person entering data)-->
              <input type="hidden" name="submitted[civicrm_1_activity_1_cg17_custom_151]" value="crave.mycravings.ca" /> 
              <!--(notes)-->
              <input type="hidden" name="submitted[civicrm_1_activity_1_activity_details]" value="" /> 
              <input type="hidden" name="details[sid]" value="" />
              <input type="hidden" name="details[page_num]" value="1" />
              <input type="hidden" name="details[page_count]" value="1" />
              <input type="hidden" name="details[finished]" value="0" />
              <input type="hidden" name="form_build_id" value="<?php echo file_get_contents('form_build_id.txt'); ?>" />
              <input type="hidden" name="form_id" value="<?php echo file_get_contents('form_id.txt'); ?>" />
      </form>
    </div>


    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/surveys.js"></script>
  </body>
</html>