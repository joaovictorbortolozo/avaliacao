Usando PHP você deve fazer um programa que acenda e apague a lâmpada
<br>
<select name="">
    <option value="apagado.png">Apagado</option>
    <option value="acesso.png">Aceso</option>
</select>

<?php

if ($apagado){
   echo "$img = imagecreatefromjpeg('/imagens/acesa.jpg')";
   readfile('aceso.png');
}




?>