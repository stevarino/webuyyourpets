<?php include 'header.php'; ?>
<!---->

<script src="js/bootstrap.js"> </script>
<h2 style='margin: 1em 0 0 0; text-align: center;'>
  Show Me:
    <a href='/pets.php'>All</a> |
    <a href='/pets.php?category=cat'>Cats</a> |
    <a href='/pets.php?category=dog'>Dogs</a>
</h2>
<div class="items">
	 <div class="container">
        <table style='border: 0;'><tr>
         <?php

         $where = '';
         if(isset($_GET['category'])) {
           $where = "WHERE category = '" . $_GET['category'] . "'";
         }

        $db = new SQLite3('db.sqlite');
        $results = $db->query("SELECT id,title,image FROM pets $where order by sort;");
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
