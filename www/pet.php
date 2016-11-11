<?php include 'header.php'; ?>

<script src="js/bootstrap.js"> </script>

<div class="offers">
	 <div class="container">
         <?php

$db = new SQLite3('db.sqlite');
$id = $_GET['id'];
$results = $db->query("SELECT id,title,image,description FROM pets where id = $id limit 1");
$i = 0;
while ($row = $results->fetchArray()) { ?>
	<h3><?php echo $row[1]; ?></h3>
    <p style='text-align: center; margin: 2em 0;'>
        <img src="images/<?php echo $row[2]; ?>" alt=""/>
	</p>
    <p><?php echo $row[3]; ?></p>
<?php
}
?>
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
