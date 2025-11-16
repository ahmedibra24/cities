<?php 

function e($value){
    return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
}
function render(string $view , array $params){
    extract($params);

    ob_start();
    require __DIR__ . '/../views/pages/'.$view.'.php';
    $contents = ob_get_clean();
    
    require __DIR__ . '/../views/layouts/main.view.php';

}

function get_flag_for_country(string $iso2): string {
     $iso2 = strtolower($iso2);
    return "<img src='https://flagcdn.com/16x12/{$iso2}.png' alt='{$iso2}' >";

}
