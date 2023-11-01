<html>

<head> 

<title>EXMPLI com PHP</title>

<meta charset="UTF-8">

</head>

<body>

<h1>
    hoje é dia 18 de outubro de 2023
</h1>

e são exatamente 

<?php

date_default_timezone_set(
    'america/Sao_paulo');
    
    echo date('d/m/Y  H:i:s');
    
    ?>.

    

</body>
</html>