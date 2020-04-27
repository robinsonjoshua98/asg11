<?php

const LIQUID_MEASUREMENT_TO_IMPERIAL_GALLON = array (

    "buckets" => 4,
    "butts" => 108,
    "firkins" => 9,
    "hogsheads" => 54,
    "pints" => 0.125
    );

    
   function convert_to_gallons($value, $from_unit) {
    if(array_key_exists($from_unit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLON)) {
        return $value * LIQUID_MEASUREMENT_TO_IMPERIAL_GALLON[$from_unit];
    } else {
        return "Unsupported Unit.";
    }
    
  }
  
  function convert_from_gallons($value, $to_unit) {
    if(array_key_exists($to_unit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLON)) {
        return $value / LIQUID_MEASUREMENT_TO_IMPERIAL_GALLON[$to_unit];
    } else {
        return "Unsupported Unit.";
  }
}

function convert_liquid($value, $from_unit, $to_unit) {
    $gallons_value = convert_to_gallons($value, $from_unit);
    $new_value = convert_from_gallons($gallons_value, $to_unit);
    return $new_value;
  }



  const LENGTH_TO_LENGTH = array (

    "grain" => 0.7,
    "thumb-length" => 2.1,
    "palm" => 3.3,
    "fist" => 10.4,
    "foot" => 25.0,
    "step" => 62.5,
    "double-step" => 1500,
    "rod" => 3000
);

  
  function convert_to_centimeters($value, $from_unit) {
    if(array_key_exists($from_unit, LENGTH_TO_LENGTH)) {
        return $value * LENGTH_TO_LENGTH[$from_unit];
    } else {
        return "Unsupported Unit.";
    }
    
  }
  
  function convert_from_centimeters($value, $to_unit) {
    if(array_key_exists($to_unit, LENGTH_TO_LENGTH)) {
        return $value / LENGTH_TO_LENGTH[$to_unit];
    } else {
        return "Unsupported Unit.";
  }
}

function convert_length($value, $from_unit, $to_unit) {
    $gallons_value = convert_to_centimeters($value, $from_unit);
    $new_value = convert_from_centimeters($gallons_value, $to_unit);
    return $new_value;
  }

