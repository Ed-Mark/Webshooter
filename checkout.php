<?php 

    $permitted = '0123456789aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ';

    echo 'PAY-'.substr(str_shuffle($permitted), 10, 16);

?>
