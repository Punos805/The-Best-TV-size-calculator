<?php
        $numa1 = $_POST['aaa'];
        $numb1 = $_POST['bbb'];
        number_format($numa1);
        number_format($numb1);
        
        $result1 = 32 * tan(0.017453292519943)* $numa1 / $numb1 * 0.451711608038529;
        $result1_2 = 64 * tan(0.017453292519943)* $numa1 / $numb1 * 0.451711608038529;
        $result1_3 = 128 * tan(0.017453292519943)* $numa1 / $numb1 * 0.451711608038529;
        $ang = 7680/$numb1/2 * 0.000290888208666;
        $result2 = 2 * tan($ang/4) *$numa1 /2.21380186429635;
        $result2_2 = 2 * tan($ang/2) *$numa1 /2.21380186429635;
        $result2_3 = 2 * tan($ang/1) *$numa1 /2.21380186429635;

        echo $result1 . "~" . $result1_2 . "~" . $result1_3 . "~" . $ang . "~" . $result2 . "~" . $result2_2 . "~" . $result2_3;
?>