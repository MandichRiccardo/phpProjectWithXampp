<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>array associativi</title>
    </head>
    <body>
        <!--Scrivere un programma PHP che dichiara un array associativo di dati personali (nome, cognome, età) e lo stampa-->
        <h1 class="maiuscolo">dati personali</h1>
        <?php
            $persona = [];
            $persona["nome"] = "Riccardo";
            $persona["cognome"] = "Mandich";
            $persona["eta"] = "18";?>
            <?php foreach ($persona as $key => $value):?>
            <ul>
                <li>
                    <?php echo $key;?>
                    <ul>
                        <li>
                            <?php echo $value; ?>
                        </li>
                    </ul>
                </li>
            </ul>
            <?php endforeach;?>
        <hr>
        <!--Scrivere un programma PHP che dichiara un array associativo di voti degli studenti (nome => voto) e calcola la media dei voti.-->
        <h1 class="maiuscolo">voti degli studenti</h1>
        <?php
            $voti = [];
            $voti["Riccardo"] = rand(4, 10);
            $voti["Manuel"] = rand(4, 10);
            $voti["Michelangelo"] = rand(4, 10);
            $voti["michael"] = rand(4, 10);
            $voti["nicolò"] = rand(4, 10);
            $voti["nicola"] = rand(4, 10);
            ?>
            <ul>
                <li>
                    voti:
                    <?php foreach ($voti as $key => $value):?>
                    <ul>
                        <li>
                            <?php echo $key;?>
                            <ul>
                                <li>
                                    <?php echo $value; ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <?php endforeach;?>
                </li>
            </ul>
            <?php
                $totale = 0;
                foreach($voti as $value){
                    $totale = $totale + $value;
                }
                $votoMedio = $totale/count($voti);
                echo "il voto medio è $votoMedio";
            ?>
        <hr>
        <!--Scrivere un programma PHP che dichiara un array associativo di prodotti (nome => prezzo) e stampa i prodotti con un prezzo superiore a 50 euro.-->
        <h1 class="maiuscolo">prodotti superiori a 50€</h1>
        
        <?php
            $prodotti = [];
            $prodotti["hard disk"] = rand(1, 100);
            $prodotti["lettere cd"] = rand(1,100);
            $prodotti["nintendo ds"] = rand(1,100);
            $prodotti["stampante"] = rand(1,100);
            $prodotti["scanner"] = rand(1,100);
            $prodotti["cassa"] = rand(1,100);
            $prodotti["megafono"] = rand(1,100);
            ?>
            <ul>
                <li>
                    prodotti a più di 50€:
                    <?php $i = 0;
                    foreach ($prodotti as $key => $value):
                        if($value>=50):?>
                            <ul>
                                <li>
                                    <?php echo $key;?>
                                    <ul>
                                        <li>
                                            <?php echo $value; ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php
                        else:
                            $i++;
                        endif;
                    endforeach;?>
                </li>
            </ul>
        <hr>
        <!--Scrivere un programma PHP che dichiara un array associativo di parole (parola => lunghezza) e stampa le parole più lunghe-->
        <h1 class="maiuscolo">parole lunghe</h1>
        <ul>
            <li>
                parole più lunghe:
                <?php $parole = [];
                $parole["ciao"] = 0;
                $parole["buongiorno"] = 0;
                $parole["arrivederci"] = 0;
                $parole["mattina"] = 0;
                $parole["pomeriggio"] = 0;
                $parole["sera"] = 0;
                $parole["notte"] = 0;
                foreach ($parole as $key=>&$value):
                    $value = strlen($key);
                    $max = max(isset($max)?$max:0, $value);
                endforeach;
                foreach($parole as $key=>$value):
                    if($value === $max):?>
                        <ul>
                            <li>
                                <?php echo $key."    ".$value;?>
                            </li>
                        </ul>
                    <?php
                    endif;
                endforeach;?>
            </li>
        </ul>
        <hr>
        <!--Scrivere un programma PHP che dichiara un array associativo di mesi dell'anno (numero => nome) e stampa i mesi in ordine crescente utilizzando la funzione "asort".-->
        <h1 class="maiuscolo">mesi in ordine</h1>
        
        <?php
            $mesi = [];
            $mesi[1] = "gennaio";
            $mesi[3] = "marzo";
            $mesi[9] = "settembre";
            $mesi[5] = "maggio";
            $mesi[8] = "agosto";
            $mesi[4] = "aprile";
            $mesi[12] = "dicembre";
            $mesi[10] = "ottobre";
            $mesi[6] = "giugno";
            $mesi[2] = "febbraio";
            $mesi[7] = "luglio";
            $mesi[11] = "novembre";
            //uso ksort perchè ksort ordina in base ai valori e non in base alle chiavi e quindi verrebbero messi in ordine alfabetico
            ksort($mesi);
            ?>
            <ul>
                <li>
                    mesi:
                    <?php foreach ($mesi as $key => $value):?>
                    <ul>
                        <li>
                            <?php echo $value; ?>
                        </li>
                    </ul>
                    <?php endforeach;?>
                </li>
            </ul>
        <hr>
    </body>
    <style>
        .maiuscolo{
            text-transform: uppercase;
        }
    </style>
</html>