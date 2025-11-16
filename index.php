<?php
require __DIR__ . '/inc/all.inc.php';

 $page = (int) ($_GET['page'] ?? 1);
if($page<1) $page=1;

$perPage=15;


$WorldCityRepository = new WorldCityRepository($pdo);
$entries = $WorldCityRepository->fetch($page,$perPage);
$count=$WorldCityRepository->countAll();
$pagesNum=ceil($count/$perPage);


render('index.view', [
    'entries'=>$entries,
    'pagination'=>[
        'page'=>$page,
        'pagesNum'=>$pagesNum
    ]
]);

?>



