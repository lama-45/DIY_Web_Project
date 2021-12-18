<?xml version="1.0" encoding = "UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
   <head>
      <meta content="" />
      <title>Schedule</title>
      <!-- CSS-->
      <link rel="stylesheet" href="../CSS/styles.css"/>
      <!-- print-->
     <link href="../CSS/print.css" rel="stylesheet" type="text/css" media="print" />
      <!-- FavIcon-->
      <link rel="icon" href="../favicon/favicon1.ico"/>
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
         <h2 class="ZeroH2"><span class="pinkFont ">●</span> Contact Us <span class="pinkFont MirrorP">●</span> </h2>
         <table class="sceduleTable">
            <caption>if you need any further information, please feel free to contact us. </caption>
            <thead>
               <tr>
                  <th> Time</th>
                  <th> Monday</th>
                  <th> Tuesday</th>
                  <th>Wednesday </th>
                  <th>Thursday </th>
                  <th > Sunday</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>8:00 am-3:00 pm</td>
                  <td rowspan="2" colspan="5">0559777215</td>
               </tr>
               <tr>
                  <td>4:00 pm-6:30 pm</td>
               </tr>
               <tr>
                  <td>7:00 pm-9:30 pm</td>
                  <td colspan="3">0555555555</td>
                  <td colspan="3">0555555553</td>
               </tr>
               <tr>
                  <td>10:00 pm-11:00 pm</td>
                  <td rowspan="2" colspan="2">0559777215</td>
                  <td rowspan="2" colspan="3">0555555555</td>
               </tr>
               <tr>
                  <td>4:00 pm-6:30 pm</td>
               </tr>
            </tbody>
         </table>
      </div>
      <div class="FooterInclude">
         <?php
            include("../includes/Footer.php");
            ?>
      </div>
   </body>
</html>