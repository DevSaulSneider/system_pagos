<?php

    $string = 'Zohar_#2023#';
    $pass = crypt($string, '$2a$07$usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi');
    echo $pass;
?>