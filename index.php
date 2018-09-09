<?php 
// courtesy of https://www.epochconverter.com/daynumbers

$dayNumber = date("z") + 1;
//echo "Day ". $dayNumber;

 function ordinal($num)
  {
    $last=substr($num,-1);
    if( $last>3  or 
        $last==0 or 
        ( $num >= 11 and $num <= 19 ) )
    {
      $ext='th';
    }
    else if( $last==3 )
    {
      $ext='rd';
    }
    else if( $last==2 )
    {
      $ext='nd';
    }
    else 
    {
      $ext='st';
    }
    return $num.$ext;
  }

echo "Today is the ". ordinal($dayNumber) . " of " . date('Y');
echo "<br>". (365-$dayNumber) . " days left";