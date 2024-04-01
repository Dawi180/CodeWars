<!-- Kata
Given the angle (in degrees) of the hour-hand, return the time in 12 hour HH:MM format. Round down to the nearest minute.

Examples
12:00 = 0 degrees

03:00 = 90 degrees

06:00 = 180 degrees

09:00 = 270 degrees

12:00 = 360 degrees

Notes
0 <= angle <= 360

Do not make any AM or PM assumptions for the HH:MM result. They are indistinguishable for this Kata.

3 o'clock is 03:00, not 15:00
7 minutes past midnight is 12:07
7 minutes past noon is also 12:07 -->

<?php
function what_time_is_it(float $angle): string {
    //     $h=(int)($angle/30);
    //     $m=floor(fmod($angle, 30) * 2);
    //     // $m=log($angle);
    //     if($angle==0){
    //         $Time="12:00";
    //     }
    //     else{
    //         
    //         $Time= str_pad((string)$h,2,"0",STR_PAD_LEFT).":".str_pad((string)$m,2,"0",STR_PAD_LEFT);
    //     }
        $time=gmdate("h:i",$angle*2*60);
      return $time;
    }
?>