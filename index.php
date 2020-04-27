<?php

function convert_to_gallons($value, $from_unit) {
  switch($from_unit) {
    case 'buckets':
      return $value * 4;
      break;
    case 'butts':
      return $value * 108;
      break;
    case 'firkins':
      return $value * 9;
      break;
    case 'hogsheads':
      return $value * 54;
      break;
    case 'pints':
      return $value * 0.125;
      break;
  }
}

function convert_from_gallons($value, $from_unit) {
  switch($from_unit) {
    case 'buckets':
      return $value / 4;
      break;
    case 'butts':
      return $value / 108;
      break;
    case 'firkins':
      return $value / 9;
      break;
    case 'hogsheads':
      return $value / 54;
      break;
    case 'pints':
      return $value / 0.125;
      break;
  }
}

function convert_length($value, $from_unit, $to_unit) {
  $gallons_value = convert_to_gallons($value, $from_unit);
  $new_value = convert_from_gallons($gallons_value, $to_unit);
  return $new_value;
}

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';


// if(!isset($_POST['submit']))
if($_POST['submit']) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Liquids</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Volumizer</h1>
  
      <form action="outdate-irish-length-measurements.php" method="post">
        
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
      
    </div>
  </body>
</html>