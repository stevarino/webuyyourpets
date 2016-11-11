<?php include 'header.php'; ?>
<!---->
<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				 <div class="banner1">
					  <div class="banner-info">
					  <h3>Pet Selling as it Should Be.</h3>
					  <p>Need to get rid of an animal that has honestly outlived its usefulness? Let us take care of it for you!</p>
					  </div>
				 </div>
	         </li>
	         <li>
				 <div class="banner2">
					 <div class="banner-info">
					 <h3>We come to you!</h3>
					 <p>There is no exucse not to pick up the phone today.</p>
					 </div>
				 </div>
			 </li>
	         <li>
	             <div class="banner3">
	        	 <div class="banner-info">
	        	 <h3>Just looking for a change of scenery?</h3>
	          	 <p>Ask about our low-cost exchange program. Satisfaction guaranteed!</p>
				 </div>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
<script src="js/bootstrap.js"> </script>

<div class="items">
	 <div class="container">
        <table style='border: 0;'><tr>
         <?php

$db = new SQLite3('db.sqlite');

$results = $db->query('SELECT id,title,image FROM pets order by random() limit 8');
$i = 0;
while ($row = $results->fetchArray()) {
    if ($i % 4 === 0 && $i !== 0) { ?>
             </tr><tr><?php
    }
    ?>
            <td style='padding: 10px;'>
				 <a href="pet.php?id=<?php echo $row[0]; ?>">
					 <div class="arrival-info">
						 <h4><?php echo $row[1]; ?></h4>
					 </div>
                    <img width='250' src="images/<?php echo $row[2]; ?>" alt=""/>
				  </a>
			 </td>

    <?php
    $i += 1;
}
?>
		 </tr></table>
	 </div>
</div>
<!---->
<div class="offers">
	 <div class="container">
	 <h3>End of Season Sale</h3>
        <table style='border: 0; margin: 0 auto;'><tr>
         <?php

$db = new SQLite3('db.sqlite');

$results = $db->query('SELECT id,title,image FROM pets order by random() limit 2');
$i = 0;
while ($row = $results->fetchArray()) {
    if ($i % 4 === 0 && $i !== 0) { ?>
             </tr><tr><?php
    }
    ?>
            <td style='padding: 10px;'>
				 <a href="pet.php?id=<?php echo $row[0]; ?>">
					 <div class="arrival-info">
						 <h4><?php echo $row[1]; ?></h4>
					 </div>
                    <img width='250' src="images/<?php echo $row[2]; ?>" alt=""/>
				  </a>
			 </td>

    <?php
    $i += 1;
}
?>
		 </tr></table>
		 <div class="clearfix"></div>
	 </div>
	 </div>
</div>
<!---->
<div class="subscribe">
	 <div class="container">
		 <h3>Newsletter</h3>
		 <form>
			 <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			 <input type="submit" value="Subscribe">
		 </form>
	 </div>
</div>
<!---->
<?php require 'footer.php'; ?>
