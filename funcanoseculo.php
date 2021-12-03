<? 

function SeculoAno($ano){

    $qtd = strlen($ano);
    $udigito = substr($ano, -1); 
    $pndigito = substr($ano, -2, 1); 

    switch ($qtd) {
        case 1:
            $seculo = 1;
        break;
        case 2:
            $seculo = 1;
        break;
        case 3:
            if ($udigito == 0 && $pndigito == 0){
                $seculo = substr($ano, -3, 1); 
            }else{
                $seculo = substr($ano, -3, 1) + 1; 
            }
        break;
        case 4:
            if ($udigito == 0 && $pndigito == 0){
                $seculo = substr($ano, -4, 2); 

            }else{
                $seculo = substr($ano, -4, 2) + 1; 
            }
        break;
    }
    return $seculo;

}

//Insira aqui o ano
$ano = 1001;
$resultsec = SeculoAno($ano);

echo 'Ano '.$ano." = Século ".$resultsec;

?>