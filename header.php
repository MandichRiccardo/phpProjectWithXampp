<?php
    session_start();
    require_once "variabili.php";
    /**
     * stampa di un oggetto che mi mostra tutti gli eventuali valori e array che lo compongono in modo ricorsivo con indentazione relativa alla profondità
     * @param mixed $line
     * @param int $deep
     * @return void
     */
    function printlnd($line, $deep = 0){
        if(gettype($line) == 'array'){
            echo "{<br>";
            foreach($line as $i => $value){
                unset($j);
                for($j = 0;$j<=$deep;$j++){
                    echo "&nbsp;&nbsp;";
                }
                echo "$i-->";
                printlnd($value, $deep+1);
            }
            unset($j);
            for($j = 0;$j<$deep;$j++){
                echo "&nbsp;&nbsp;";
            }
            echo "}<br>";
        }else{
            echo $line;
            echo "<br>";
        }
    }