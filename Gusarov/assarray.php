<?php
    echo '<h1>Ассоциативыне массивы</h1>';
$array = ['one'=>'один', 'two' => 'два', 'green' => 'зеленый'];
$array[] = 123;
$array['four'] = 'четыре';
unset($array['two']);
foreach($array as $key => $item){
    echo "<p>$key - $item</p>";
}
?>