<?php
    echo heading('Hi!', 3);
    echo ul(array('ini list 1','ini list 2'));
    $image_properties = array(
        'src' => 'https://www.freelogodesign.org/Content/img/logo-samples/flooop.png',
        'alt' => 'LOGO',
        'width' => '200',
        'height' => '200'
    );
    echo img($image_properties);
 