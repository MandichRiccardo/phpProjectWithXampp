<?php
session_start();
require_once '../header.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
if(!isset($_SESSION["carrello"])){
    $_SESSION["carrello"] = [];
}

if(isset($_POST["operazione"])){
    $carrello = $_SESSION["carrello"];
    if($_POST["operazione"] == "aggiungi"){
        $alreadyPresent = false;
        foreach($carrello as &$c){
            if($c["id"] == $_POST["id"]){
                $alreadyPresent=true;
                $c["quantita"]+=$_POST["quantita"];
            }
        }
        if(!$alreadyPresent){
            array_push($carrello, ["id"=>$_POST["id"], "quantita"=>$_POST["quantita"]]);
        }
    }
    $_SESSION["carrello"] = $carrello;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Gestione Carrello Spesa</title>
    <style>
        /* Add CSS styles for the cart management */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .cart {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        .cart table {
            width: 100%;
            border-collapse: collapse;
        }
        .cart th, .cart td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .cart th {
            background-color: #f2f2f2;
        }
        .cart button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .cart button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="cart">
        <h1>Gestione Carrello Spesa</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome Prodotto</th>
                    <th>Prezzo</th>
                    <th>Quantità</th>
                    <th>Totale</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($_SESSION["carrello"] as $prodotto){
                        $result = $conn->query("select * from products where id = {$prodotto["id"]}")->fetch_assoc();
                        ?>
                        <tr>
                            <td>
                                <?= $result["name"];?>
                            </td>
                            <td>
                                <?= $result["price"];?>
                            </td>
                            <td>
                                <?= $prodotto["quantita"];?>
                            </td>
                            <td>
                                <?= $prodotto["quantita"]*$result["price"];?>
                            </td>
                            <td>
                                <form action="/ludoteca/cart" method="post">
                                <input type="hidden" name="id" value="<?php echo $prodotto["id"]?>">
                                <input type="number" name="quantita" value="1" max="<?php $prodotto["quantita"]?>" min="0">
                                <input type="hidden" name="operazione" value="rimuovi">
                                <input type="submit" value="Aggiungi">
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <button>Effettua Acquisto</button>
    </div>
</body>
</html>
