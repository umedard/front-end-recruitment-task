<?php declare(strict_types = 1);

include_once 'vendor/autoload.php';

$content = [
    'title' => 'Welcome to your Frontend developer recruitment task!',
    'box' => [
        'title' => 'Ultrices dui sapien eget mi',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet cursus sit amet dictum sit. Augue ut lectus arcu bibendum at varius vel. Urna neque viverra justo nec ultrices dui sapien. Nunc sed id semper risus. Condimentum vitae sapien pellentesque habitant morbi tristique senectus et netus. Sit amet facilisis magna etiam tempor orci. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim. Nec nam aliquam sem et. Cursus mattis molestie a iaculis at.',
        'images_default' => [
            'large' => [
                'url' => 'assets/images/sean-o-KMn4VEeEPR8-unsplash_1_s6zmfh_c_scale,w_1400.jpg',
                'width' => 1400,
                'height' => 931
            ],
            'medium' => [
                'url' => 'assets/images/sean-o-KMn4VEeEPR8-unsplash_1_s6zmfh_ar_16_9,c_fill,g_auto__c_scale,w_720.jpg',
                'width' => 720,
                'height' => 405
            ],
            'small' => [
                'url' => 'assets/images/sean-o-KMn4VEeEPR8-unsplash_1_s6zmfh_c_scale,w_480.jpg',
                'width' => 480,
                'height' => 319
            ],
        ],
        'images' => array_map(function ($src) {
            list($width, $height) = getimagesize($src);
            return [
                'url' => $src,
                'width' => $width,
                'height' => $height
            ];
        }, glob("assets/images/*.jpg"))
    ]
];

$loader = new \Twig\Loader\FilesystemLoader('./views');
$twig = new \Twig\Environment($loader);

echo $twig->render('pages/index.html', $content);