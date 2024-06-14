<html>
    <?php
    //Radio Button
    echo "<b>Seu sistema operacional é: </b>" , $_POST["sistema"], "<br><br>";

    //Checkbox  
    if(isset($_POST["numeros"]))
    {
    echo "<b> Os numeros de sua preferencia são:</b><br>";

    foreach($_POST["numeros"] as $numero) {
        echo "- ", $numero, "<BR><br>";

    }

    }
    else {
    echo "<b> voce nao escolheu um numero preferido</b><br><br>";

    }   

    echo "<b> seu processador é:</b>" , $_POST["processador"], "<BR>";
    ?>
</html>