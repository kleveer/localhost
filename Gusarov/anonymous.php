<?php
// $funkecho = function($string) {
//     echo $string;
// };
// $funkEcho("Hello");

function useCallback($number, $callBack) {
    return $callBack($number);
}
function square($num) {
    return $num**2;
}
$cube = function($num) {
    return $num**3;
};

echo useCallback(5, $cube);
?>
<?php
echo '<br>';
echo "Задание №1",'<br>';

function getEvenNumbers($array){
    return array_filter($array, function($value) {
        return $value %2== 0;
    });
};
$numbers = [1,2,3,5,4,6];
$evenNumbers = getEvenNumbers($numbers);
echo "Массив равен:" . implode(" ", $evenNumbers) ."<br>";
?>