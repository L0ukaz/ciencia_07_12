<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <haeder>
        <h1> informações <h1>
    </header>
    
    <main>
        <?php

        $nome= $_GET["nome"];
        $email= $_GET["email"];
        $senha= $_GET["senha"];
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $nome);
        fwrite($myfile, $email);
        fwrite($myfile, $senha);
        fclose($myfile);

        echo"<p>Ola, $nome, sua Email e senha já estão salvos!";

        
        ?>
    </main>
</body>
</html>