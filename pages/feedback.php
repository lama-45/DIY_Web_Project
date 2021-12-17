<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <!-- CSS-->
    <link rel="stylesheet" href="../CSS/styles.css">
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    <!-- javascript-->
    <script type="text/javascript" src="../database/validation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- FavIcon-->
    <link rel="icon" href="../favicon/favicon1.ico">
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




      <div class="Content">

        <h2><p class="pinkFont ">●</p> FeedBack Form <p class="pinkFont ">●</p></h2>
        <p> <span class="pinkFont"> * </span>  indicates required information</p>

        <form id = "FeedBackForm" action = "../database/connect.php" method= "POST" onsubmit="return validateForm()">

            <fieldset id = "InformationField" >

              <legend class="feedbackLegend"> Information  </legend>
              <br>

              <label class = "FeedbackLabel" >
                First name  <span class="pinkFont"> * </span> </label>
                <input type = "text" name="fName" id="fName" />
                <br><br>

                <label class = "FeedbackLabel"  >
                  Last name <span class="pinkFont"> * </span> </label>
                  <input type = "text" name="lName" id="lName" />
                  <br><br>


                  <label class = "FeedbackLabel" >
                    Country <span class="pinkFont"> * </span>  </label>
                    <input type = "text" name="Country" id="Country" />
                    <br><br>

                    <label class = "FeedbackLabel" >
                      City <span class="pinkFont"> * </span>  </label>
                      <input type = "text"  name="city" id="city" />
                      <br><br>

                      <label class = "FeedbackLabel" >
                        Street Address  <span class="pinkFont"> * </span>  </label>
                        <input type = "text"   id="street1" id="street1" />
                        <br><br>

                        <label class = "FeedbackLabel" >
                          Email  <span class="pinkFont"> * </span>  </label>
                          <input type="email" name="email" id="email"  />

                          <?php
                          $fullUrl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                          if(strpos($fullUrl,"email=used")== true){
                            echo "<p class='form_error'>Email Already Exist! </p>";
                          }
                          ?>
                          <br> <br>

                          <label class = "FeedbackLabel" >
                            Phone <span class="pinkFont"> * </span> </label>
                            <input type = "text" name="phone" id="phone" />
                            <br> <br>

                          </fieldset>
                          <fieldset >

                            <legend class="feedbackLegend"> Opinon  </legend>
                            <br>

                            <label class = "FeedbackLabel">
                              How Did You Hear About Us? <span class="pinkFont"> * </span>
                              <select name ="Source" >
                                <option value="Friend"> Friend </option>
                                <option value="Facebook"> Facebook </option>
                                <option value="Twitter"> Twitter</option>
                                <option value="Instagram"> Instagram</option>
                              </select>
                            </label>
                            <br>

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
                              <input type = "checkbox" name = "liked"  value="Information"id="Checkbox2" /> Information and Ideas
                            </label>

                            <label id="like3">
                              <input type = "checkbox" name = "liked" value="Product" id="Checkbox3"  /> Our Product
                            </label>
                            <br><br>

                            <label class = "FeedbackLabel"> Please Help Us To Improve Our Website <span class="pinkFont"> * </span>
                              <br><br>
                              <textarea rows="5" cols="55" name="feedback" id="textarea" > </textarea>
                              <br><br>
                              <input type="submit" name="submit" value="Send Feedback">
                              <button  type="reset" name="reset" >Cancel</button>
                            </label>

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
