<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Empresa SA</title>
    </head>
    <body>
        <?php
        require './func.class.php';
        $funcionario1 = new func;
        $funcionario1->ExeCreate('Leandro', 18);
        $funcionario1->sal(10);
        $funcionario1->horasT(150);
        $funcionario1->salMes();
        $funcionario1->mostrarDados();
        echo '<hr>';
        $funcionario2 = new func;
        $funcionario2->ExeCreate('Greicy', 14);
        $funcionario2->sal(50);
        $funcionario2->horasT(100);
        $funcionario2->salMes();
        $funcionario2->mostrarDados();
        echo '<hr>';
        $funcionario3 = new func;
        $funcionario3->ExeCreate('Lucas', 22);
        $funcionario3->sal(100);
        $funcionario3->horasT(60);
        $funcionario3->salMes();
        $funcionario3->mostrarDados();
//        $funcionario2 = new func;
//        $funcionario2->ExeCreate('Leonardo', 51);
//        print_r($funcionario1[2]).'<br>';
        echo '<hr>';
        $func = $funcionario1;
        $i = 0;
        foreach ($func as $v):
            $var[$i] = $v;
            $i++;
        endforeach;
        echo '<br>';
        
        echo 'Nome: '.$var[5];
        ?>
    </body>
</html>
