<?xml version="1.0" encoding = "UTF-8" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <meta content="" />

    <title>Feedback</title>
    <!-- CSS-->
    <link rel="stylesheet" href="../CSS/styles.css"/>
    <!-- FavIcon-->
    <link rel="icon" href="../favicon/favicon1.ico"/>
    <!-- javascript-->
    <script type="text/javascript" src="..\database\validation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="headerInclude">
      <?php
        include("../includes/Header.php");
         ?>
    </div>
    <div class="linksInclude">
      <?php
      include("../includes/Links.php");
      ?>
    </div>

    <div class="content">
      <h2 class="ZeroH2"><span class="pinkFont ">●</span> Feedback <span class="pinkFont MirrorP">●</span> </h2>
        <p> <span class="pinkFont"> * </span>  indicates required information</p>

        <form id = "FeedBackForm" action = "../database/connect.php" method= "post" onsubmit="return validateForm()">

            <fieldset id = "InformationField" >

              <legend class="feedbackLegend"> Information  </legend>
              <br/>

              <label class = "FeedbackLabel" >
                First name  <span class="pinkFont"> * </span> </label>
                <input type = "text" name="fName" id="fName" />
                <br/><br/>

                <label class = "FeedbackLabel"  >
                  Last name <span class="pinkFont"> * </span> </label>
                  <input type = "text" name="lName" id="lName" />
                  <br/><br/>


                  <label class = "FeedbackLabel" >
                    Country <span class="pinkFont"> * </span>  </label>
                    <input type = "text" name="Country" id="Country" />
                    <br/><br/>

                    <label class = "FeedbackLabel" >
                      City <span class="pinkFont"> * </span>  </label>
                      <input type = "text"  name="city" id="city" />
                      <br/><br/>

                      <label class = "FeedbackLabel" >
                        Street Address  <span class="pinkFont"> * </span>  </label>
                        <input type = "text" id="street1" />
                        <br/><br/>

                        <label class = "FeedbackLabel" >
                          Email  <span class="pinkFont"> * </span>  </label>
                          <input type="text" name="email" id="email"  />

                          <?php
                          $fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                          if(strpos($fullUrl,"email=used")== true){
                            echo "<p class='form_error'>Email Already Exist! </p>";
                          }
                          ?>
                          <br/> <br/>

                          <label class = "FeedbackLabel" >
                            Phone <span class="pinkFont"> * </span> </label>
                            <input type = "text" name="phone" id="phone" />
                            <br/> <br/>

                          </fieldset>
                          <fieldset >

                            <legend class="feedbackLegend"> Opinon  </legend>
                            <br/>

                            <label class = "FeedbackLabel">
                              How Did You Hear About Us? <span class="pinkFont"> * </span>
                              <select name ="Source" >
                                <option value="Friend"> Friend </option>
                                <option value="Facebook"> Facebook </option>
                                <option value="Twitter"> Twitter</option>
                                <option value="Instagram"> Instagram</option>
                              </select>
                            </label>
                            <br/>

                            <p> Would You Recommend Our Website?  <span class="pinkFont"> * </span>  </p>

                            <label  > yes
                              <input type = "radio" name="recommend" value="yes" id="yes"  />
                            </label>

                            <label  > No
                              <input type = "radio"  name="recommend" value="No" id="no" />
                            </label>


                            <p> What Do You Like Most About The Website? <span class="pinkFont"> * </span> </p>
                            <label id="like1">
                              <input type = "checkbox" name = "liked" value="Design" id="Checkbox1"  /> Design
                            </label>

                            <label id="like2">
                              <input type = "checkbox" name = "liked"  value="Information" id="Checkbox2" /> Information and Ideas
                            </label>

                            <label id="like3">
                              <input type = "checkbox" name = "liked" value="Product" id="Checkbox3"  /> Our Product
                            </label>
                            <br/><br/>

                            <label class = "FeedbackLabel"> Please Help Us To Improve Our Website <span class="pinkFont"> * </span></label>
                              <br/><br/>
                              <textarea rows="5" cols="55" name="feedback" id="textarea" > </textarea>
                              <br/><br/>
                              <input type="submit" name="submit" value="Send Feedback" />
                              <input type="reset" name="resetreset" value="Cancel" />



                          </fieldset>
                        </form>

                        <?php   $fullURL ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if(strpos($fullURL,"form=saved")== true){
                          echo "<p class='pinkFont'>Thank you for taking the time to provide your feedback.</p>";
                        }
                        ?>
                      </div>

                      <div class="footerInclude">
                        <?php
                        include("../includes/Footer.php");
                        ?>
                      </div>
                    </body>
                    </html>
