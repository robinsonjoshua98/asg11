<?php

require_once('includes/functions.php');



$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';


// if(!isset($_POST['submit']))
if($_POST['submit']) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_liquid($from_value, $from_unit, $to_unit);
}

$pageTitle = "Liquid Measurements";



?>

<?php include_once 'includes/header.php' ?>
<?= $pageTitle; ?>
    <div id="main-content">

      <h1>Volumizer</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">    
            <option value="buckets"<?php if($from_unit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($from_unit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkins"<?php if($from_unit == 'firkins') { echo " selected"; } ?>>Firkins</option>
            <option value="hogsheads"<?php if($from_unit == 'hogsheads') { echo " selected"; } ?>>Hogs Heads</option>
            <option value="imperialGallons"<?php if($from_unit == 'imperialGallons') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="pints"<?php if($from_unit == 'pints') { echo " selected"; } ?>>Pints</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
          <select name="to_unit">
            <option value="buckets"<?php if($to_unit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($to_unit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkins"<?php if($to_unit == 'firkins') { echo " selected"; } ?>>Firkins</option>
            <option value="hogsheads"<?php if($to_unit == 'hogsheads') { echo " selected"; } ?>>Hogs Heads</option>
            <option value="imperialGallons"<?php if($to_unit == 'imperialGallons') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="pints"<?php if($to_unit == 'buckets') { echo " pints"; } ?>>Pints</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br>
      <a href="index.php">Return to menu</a>
      <?php include_once 'includes/header.php' ?>
      
    </div>
  </body>
</html>