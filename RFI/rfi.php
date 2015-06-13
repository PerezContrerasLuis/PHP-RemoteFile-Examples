<?php

//Ejemplo archivo principal con Vulnerabilidad   RFI  ^_^ 


if(isset($_GET['doc'])){

$documento = $_GET['doc'];
include($documento);

    
}

echo"<br><br><p>
Al usar el método get se puede visualizar la inclusión de un archivo externo, ESTO ES POCO COMUN  de encontrar, testeamos la url pasando varios valores, con el único fin de encontrar un error que nos notifique de la existencia de include.
</p>
<p>
ejemplo:
Warning: include(hola que hace): failed to open stream: No such file or directory in<strong> C:\xampp\htdocs\pruebas\fileInclusion\RFI\rfi.php</strong> on line 9
NO encuentra el archivo pero si lo acepta como parámetro aceptado , entonces estamos listos ^_^ para incluir un archivo remoto como por ejemplo:
<strong>http://localhost/pruebas/fileInclusion/RFI/rfi.php?doc=C:\xampp\htdocs\pruebas\fileInclusion\RFI\externo.php</strong>
o
<strong>http://localhost/pruebas/fileInclusion/RFI/rfi.php?doc= https://www.facebook.com/</strong>
nose , lo que sea  XD
</p>
<p>
esta técnica funciona si se usa el método POST , y para ello hay que usar herramientas como tamper data o las mas de un millo que existen , jaja bueno un millón quizá no , pero si muchas.

ahora solo nos falta alojar nuestra <strong>SHELL</strong> php en algún server remoto y KABOMM !!!!!
</p>";
/*



*/


?>