<?php


require_once __DIR__.'/bootstrap.php';

$db = new \App\Services\Database();

var_dump($db); die;



$products = [
    [
        'name'          => 'Notebook',
        'description'   => 'Core i7',
        'value'         =>  800.00,
        'date_register' => '2017-06-22',
    ],
    [
        'name'          => 'Mouse',
        'description'   => 'Razer',
        'value'         =>  125.00,
        'date_register' => '2017-10-25',
    ],
    [
        'name'          => 'Keyboard',
        'description'   => 'Mechanical Keyboard',
        'value'         =>  250.00,
        'date_register' => '2017-06-23',
    ],
];

//print_r($products);
function dd($twig, $products){
    echo  $twig->render('products.twig.php', ['products' => $products] );
    return 99;
}

dd($twig, $products);

//echo $template->renderBlock('content', );
//echo $template->renderBlock('test', ['hello' => 'hello']);
