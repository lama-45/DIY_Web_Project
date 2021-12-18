  <?php
  include_once('../database/fetch.php');
  $sql = "SELECT * FROM locations, suppliers WHERE locations.name=suppliers.Name";
  $result = mysqli_query($con, $sql);
  ?>
  <?xml version="1.0" encoding = "UTF-8" ?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


  <html xmlns = "http://www.w3.org/1999/xhtml">
    <head>
      <meta content="" />

      <title>Supplires</title>
      <!-- CSS-->
      <link rel="stylesheet" href="../CSS/styles.css"/>
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
        <h2 class="ZeroH2"><span class="pinkFont ">●</span> Our Supplires <span class="pinkFont MirrorP">●</span> </h2>
        <table>

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
                      </div>
                      <div class="FooterInclude">
                       <?php
                       include("../includes/Footer.php");
                       ?>
                     </div>
                   </body>
                   </html>
