<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    // 1) Выведите на экран при помощи echo() название текущего файла и номер текущей строки
    $path = __FILE__;
    $nameFile = basename($path) ;
    echo "1) Название текущего файла - $nameFile </br>"; 
    echo "Номер строки - ", __LINE__, "</br></br>";  
    
    // 2) Создайте многострочную переменную при помощи heredoc синтаксиса
    $textHeredoc = <<<HERE
          2) Это многострочная </br>
          переменная, созданная при помощи </br>
          heredoc синтаксиса </br></br>
    HERE;
    echo $textHeredoc;

    // 3) Задайте две простые строковые переменные и используйте их для построения конечной фразы
    $a='Рыба';
    $b='человек';
    echo "3) $a рыбою сыта, а $b {$b}ом";
    
    ?> 
  </body>
       
</html>