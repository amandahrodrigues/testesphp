<? 

function SequenciaCrescente(array $arraysec){

    $count = count($arraysec);
    $i=0;
    $remval = false;

    while($i<$count){

        if($i == 0){
            if($arraysec[$i]>=$arraysec[$i+1]  && $remval==false){
                unset($arraysec[$i]);
                $i=0;
                $remval = true;
                $count = $count - 1;
                $arraysec = array_values($arraysec);
            }else if($arraysec[$i]==$arraysec[$i+1]){
                $sequencia = 'false';
                return $sequencia;
                break;
            }else{
                $i++;
                $sequencia = 'true';
            }
        }else{
            if($arraysec[$i+3]!="" && $arraysec[$i+1]>$arraysec[$i] && $arraysec[$i+2]<=$arraysec[$i+1] && $arraysec[$i+3]>$arraysec[$i+2] && $remval==false){
                 if($arraysec[$i]==$arraysec[$i+2]){
                    unset($arraysec[$i+2]);
                }else{
                    unset($arraysec[$i+1]);
                }
                $i=0;
                $remval = true;
                $count = $count - 1;
                $arraysec = array_values($arraysec);
            }else if($arraysec[$i+1]>$arraysec[$i] && $arraysec[$i+2]<=$arraysec[$i+1] && $remval==false){
                if($arraysec[$i+3]==""){
                    unset($arraysec[$i+2]);
                }else{
                    unset($arraysec[$i+1]);
                }
                $i=0;
                $remval = true;
                $count = $count - 1;
                $arraysec = array_values($arraysec);
            }else if($arraysec[$i+1]<=$arraysec[$i] && $remval==false){
                unset($arraysec[$i+1]);
                $i=0;
                $remval = true;
                $count = $count - 1;
                $arraysec = array_values($arraysec);
            }else if($arraysec[$i+1]!="" && $arraysec[$i+1]<=$arraysec[$i] && $remval==true){
                $sequencia = 'false';
                return $sequencia;
                break;
            }else{
                $i++;
                $sequencia = 'true';
            }
        }
        
    }
    return $sequencia;

}

//Insira aqui o array
$arraysec = [3, 5, 67, 98, 3];
$result = SequenciaCrescente($arraysec);
$count = count($arraysec);
$virgula = "";

for ($j=0;$j<$count;$j++){
    $info .= $virgula.$arraysec[$j];
    $virgula = ",";
}

echo '['.$info.'] '.$result;

?>