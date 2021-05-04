<?php

$rand = substr(md5(microtime()),rand(0,26),5);
?>


<div>

    <p>
        Your order was successfully submitted!
    </p>
    <p>
        Your order ID is: <?= $rand ?>
    </p>

</div>
