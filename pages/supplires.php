  <?php
  include_once('../database/fetch.php');
  $sql = "SELECT * FROM locations, suppliers WHERE locations.name=suppliers.Name";
  $result = mysqli_query($con, $sql);
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Suppliers</title>
      <!-- CSS-->
      <link rel="stylesheet" href="../CSS/styles.css">
      <!-- Fonts-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
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
      <div class="content">
        <table>
          <caption><h2><p class="pinkFont ">●</p> Our Suppliers <p class="pinkFont ">●</p></h2></caption>
		        <tr>
    			     <th> Country </th>
			         <th> City </th>
			         <th> Name </th>
               <th> Address </th>
        			 <th> Number </th>
		           </tr>
               <?php

               if (mysqli_num_rows($result) > 0) {
                 // output data of each row
                 while($row = mysqli_fetch_assoc($result)) {?>
        	          <tr> 	<td><?php echo $row['Country']; ?></td>
                      <td><?php echo $row['City']; ?></td>
		                    <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['Address']; ?></td>
		                      <td><?php echo $row['Number']; ?></td>
		                      </tr>
                        <?php   }
                      } else {
                        echo "0 results";
                      }
                      mysqli_close($con);
                      ?>
                      </table>
                      <div class="footerInclude">
                       <?php
                       include("../includes/Footer.php");
                       ?>
                     </div>
                   </body>
                   </html>
