<? 

function PrimoInferior($num){

    $aux = $num;

    if($aux>2){
        while($aux>2){
            $resultado = 0;
            for ($i = 2; $i < $aux; $i++) {
                if ($aux % $i == 0) {
                   $resultado++;
                }
            }
            if($resultado == 0){
                return $aux;
                break;
            }
            $aux--;
        }
    } else {
        return 0;
    }
}

//Insira aqui o número inteiro
$num = 10000;

$resultado = PrimoInferior($num);

echo 'Numero '.$num.' = '.$resultado;

?>