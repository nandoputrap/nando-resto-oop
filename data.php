<?php
    require_once('menu.php');

    $juice = new Menu('JUS', 15000, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
    $coffee = new Menu('KOPI', 10000, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
    $curry = new Menu('GULAI', 25000, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
    $pasta = new Menu('PASTA', 15000, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

    $menus = [$juice, $coffee, $curry, $pasta];
?>