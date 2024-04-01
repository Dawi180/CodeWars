<!-- The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.

Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here. -->

<?php
function rgb($r,$g,$b){
    $rgb=[$r,$g,$b];
    foreach($rgb as $values){
        if($values>255){
            $values=255;
        }
        elseif($values<0){
            $values=0;
        }
        for($i=0;$values>=16;$i++){
            $values-=16;
        }
        $resultRGB[]=$i;
        $resultRGB[]=$values;
    }
    foreach($resultRGB as $key => $val2){
        switch($resultRGB[$key]){
            case (10):
                $result[]="A";
                break;
            case (11):
                $result[]="B";
                break;
            case (12):
                $result[]="C";
                break;
            case (13):
                $result[]="D";
                break;
            case (14):
                $result[]="E";
                break;
            case (15):
                $result[]="F";
                break;
            default:
                $result[]=$resultRGB[$key];
        }
    }
    return implode("",$result);
}
?>