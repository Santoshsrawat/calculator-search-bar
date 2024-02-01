<?php
 
 function isPerfectNumber($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}

function printPerfectNumbers($start, $end) {
    for ($num = $start; $num <= $end; $num++) {
        if (isPerfectNumber($num)) {
            echo "$num is a perfect number\n";
        }
    }
}

// Example usage:
printPerfectNumbers(1, 10000);

 

// $sum =0;
// $n= 100;
// for ($i = $n; $i >= 1; --$i) {
//     $sum -= $i;  // sum = sum + i
//     echo "$sum <br>" ;
// }
 
//  $MARKS = 60;
 
//  if ($MARKS >= 80 && $MARKS < 100) {
//      echo "you get A grade";
//  }
//  else if ($MARKS >= 70 && $MARKS < 80) {
//      echo "you get B grade";
//  }
//  else if ($MARKS >= 60 && $MARKS < 70) {
//      echo "you get C grade";
//  }
//  else if ($MARKS >= 50 && $MARKS < 60) {
//      echo "you get D grade";
//  }
//  else {
//      echo "you are fail";
//  }



// $MARKS = 60;

// switch (true) {
//     case ($MARKS >= 80 && $MARKS < 100):
//         echo "you get A grade";
//         break;
//     case ($MARKS >= 70 && $MARKS < 80):
//         echo "you get B grade";
//         break;
//     case ($MARKS >= 60 && $MARKS < 70):
//         echo "you get C grade";
//         break;
//     case ($MARKS >= 50 && $MARKS < 60):
//         echo "you get D grade";
//         break;
//     default:
//         echo "you are fail";
// }

?>




 
