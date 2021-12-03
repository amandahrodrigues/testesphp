<? 

for ($i=1; $i<=20; $i++){
    $numerossort[$i] = rand(1, 10);
    $info .= $virgula.$numerossort[$i];
    $virgula = ",";
}

echo 'Array sorteado = ['.$info.']<br>';

$arraymoda = array_count_values($numerossort);

$i = 0;

foreach ($arraymoda as $key => $value) {
    $arraykey[$i] = $key;
    $arrayvalue[$i] = $value;
    $i++;
}

$max = max($arrayvalue);

$virgula = "";

foreach ($arraymoda as $key => $value) {
    if($value == $max){
        $info2 .= $virgula.$key;
        $virgula = ",";
    }
}

echo 'O(os) número(os) que mais se repete(em): '.$info2.'<br>';

echo 'Ele(es) se repete(em) '.$max.' vezes'

?>