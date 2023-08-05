<?php
    //LOOPING THROUGH AN ASSOCIATIVE ARRAY
    $age = array('Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43');

    foreach ($age as $key => $value) {
        echo "key = $key , and the value = $value";
        echo '<br>';
    }
?>