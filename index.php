<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Таблица истинности PHP</title>
  <link rel="stylesheet" href="style.css">
 </head>
<body>
  
  <table>
    <caption>Задание 1. Таблица истинности PHP </caption>
    <thead>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>!A</th>
        <th>A || B	</th>
        <th>A && B</th>
        <th>A xor B</th>
      </tr>
    </thead>
    <tbody>

    <tr>
    <?php
    // значения для  A и B
     $a = 0;
     $b = 0;
     // вычисление результатов логических операций
     $notA = !$a;
     $orAB = $a || $b;
     $andAB = $a && $b;
     $xorAB = $a xor $b;
     ?>
        <td>0</td>
        <td>0</td>
        <td> <?php echo $notA ?> </td>
        <td> <?php echo $orAB ?> </td>
        <td> <?php echo $andAB ?> </td>
        <td> <?php echo $xorAB ?> </td>
      </tr>

      <tr>
      <?php
    // значения для  A и B
     $a = 0;
     $b = 1;
     // вычисление результатов логических операций
     $notA = !$a;
     $orAB = $a || $b;
     $andAB = $a && $b;
     $xorAB = $a xor $b;
     ?>

        <td>0</td>
        <td>1</td>
        <td> <?php echo $notA ?> </td>
        <td> <?php echo $orAB ?> </td>
        <td> <?php echo $andAB ?> </td>
        <td> <?php echo $xorAB ?> </td>
      </tr>
      
      <tr>
      <?php
    // значения для  A и B
     $a = 1;
     $b = 0;
     // вычисление результатов логических операций
     $notA = !$a;
     $orAB = $a || $b;
     $andAB = $a && $b;
     $xorAB = $a xor $b;
     ?>
        <td>1</td>
        <td>0</td>
        <td> <?php echo $notA ?> </td>
        <td> <?php echo $orAB ?> </td>
        <td> <?php echo $andAB ?> </td>
        <td> <?php echo $xorAB ?> </td>
      </tr>

      <tr>
      <?php
    // значения для  A и B
     $a = 1;
     $b = 1;
     // вычисление результатов логических операций
     $notA = !$a;
     $orAB = $a || $b;
     $andAB = $a && $b;
     $xorAB = $a xor $b;
     ?>
        <td>1</td>
        <td>1</td>
        <td> <?php echo $notA ?> </td>
        <td> <?php echo $orAB ?> </td>
        <td> <?php echo $andAB ?> </td>
        <td> <?php echo $xorAB ?> </td>
      </tr>
    </tbody>
  </table>
<br>

<table>
<caption>Задание 2. Таблица сравнения, мягкое == </caption>

<?php
    // значения для переменных
     $true = true;
     $false = false;
     $numberone = 1;
     $zero = 0;
     $minusone = -1;
     $stringnumber = "1" ;
     $void = null ;
     $stringtext = "php" ;

     // вычисление результатов логических операций
     $notA = !$a;
     $orAB = $a || $b;
     $andAB = $a && $b;
     $xorAB = $a xor $b;
     ?>

  <tr>
    <th></th>
    <th>true</th>
    <th>false</th>
    <th>1</th>
    <th>0</th>
    <th>-1</th>
    <th>"1"</th>
    <th>null</th>
    <th>"php"</th>
  </tr>
  <tr>
    <th>true</th>
    <td><?php echo $true == $true ?></td>
    <td><?php echo $true == $false ?></td>
    <td><?php echo $true == $numberone ?></td>
    <td><?php echo $true == $zero ?></td>
    <td><?php echo $true == $minusone ?></td>
    <td><?php echo $true == $stringnumber ?></td>
    <td><?php echo $true == $void ?></td>
    <td><?php echo $true == $stringtext ?></td>
  </tr>
  <tr>
    <th>false</th>
    <td><?php echo $false == $true ?></td>
    <td><?php echo $false == $false ?></td>
    <td><?php echo $false == $numberone ?></td>
    <td><?php echo $false == $zero ?></td>
    <td><?php echo $false == $minusone ?></td>
    <td><?php echo $false == $stringnumber ?></td>
    <td><?php echo $false == $void ?></td>
    <td><?php echo $false == $stringtext ?></td>
  </tr>
  <tr>
    <th>1</th>
    <td><?php echo $numberone == $true ?></td>
    <td><?php echo $numberone == $false ?></td>
    <td><?php echo $numberone == $numberone ?></td>
    <td><?php echo $numberone == $zero ?></td>
    <td><?php echo $numberone == $minusone ?></td>
    <td><?php echo $numberone == $stringnumber ?></td>
    <td><?php echo $numberone == $void ?></td>
    <td><?php echo $numberone == $stringtext ?></td>
  </tr>
  <tr>
    <th>0</th>
    <td><?php echo $zero == $true ?></td>
    <td><?php echo $zero == $false ?></td>
    <td><?php echo $zero == $numberone ?></td>
    <td><?php echo $zero == $zero ?></td>
    <td><?php echo $zero == $minusone ?></td>
    <td><?php echo $zero == $stringnumber ?></td>
    <td><?php echo $zero == $void ?></td>
    <td><?php echo $zero == $stringtext ?></td>
  </tr>
  <tr>
    <th>-1</th>
    <td><?php echo $minusone == $true ?></td>
    <td><?php echo $minusone == $false ?></td>
    <td><?php echo $minusone == $numberone ?></td>
    <td><?php echo $minusone == $zero ?></td>
    <td><?php echo $minusone == $minusone ?></td>
    <td><?php echo $minusone == $stringnumber ?></td>
    <td><?php echo $minusone == $void ?></td>
    <td><?php echo $minusone == $stringtext ?></td>
  </tr>
  <tr>
    <th>"1"</th>
    <td><?php echo $stringnumber == $true ?></td>
    <td><?php echo $stringnumber == $false ?></td>
    <td><?php echo $stringnumber == $numberone ?></td>
    <td><?php echo $stringnumber == $zero ?></td>
    <td><?php echo $stringnumber == $minusone ?></td>
    <td><?php echo $stringnumber == $stringnumber ?></td>
    <td><?php echo $stringnumber == $void ?></td>
    <td><?php echo $stringnumber == $stringtext ?></td>
  </tr>
  <tr>
    <th>null</th>
    <td><?php echo $void == $true ?></td>
    <td><?php echo $void == $false ?></td>
    <td><?php echo $void == $numberone ?></td>
    <td><?php echo $void == $zero ?></td>
    <td><?php echo $void == $minusone ?></td>
    <td><?php echo $void == $stringnumber ?></td>
    <td><?php echo $void == $void ?></td>
    <td><?php echo $void == $stringtext ?></td>
  </tr>
  <tr>
    <th>"php"</th>
    <td><?php echo $stringtext == $true ?></td>
    <td><?php echo $stringtext == $false ?></td>
    <td><?php echo $stringtext == $numberone ?></td>
    <td><?php echo $stringtext == $zero ?></td>
    <td><?php echo $stringtext == $minusone ?></td>
    <td><?php echo $stringtext == $stringnumber ?></td>
    <td><?php echo $stringtext == $void ?></td>
    <td><?php echo $stringtext == $stringtext ?></td>
    </tr>
</table>
<span>Гибкое сравнение, также называемое нестрогим сравнением, использует оператор двойного равенства (==) для сравнения значений.
   При гибком сравнении значения сравниваются без учета типа данных. Если значения равны, то результатом сравнения будет true.</span>
<br><br>

<table>
<caption>Задание 2. Таблица сравнения, жесткое === </caption>

<tr>
    <th></th>
    <th>true</th>
    <th>false</th>
    <th>1</th>
    <th>0</th>
    <th>-1</th>
    <th>"1"</th>
    <th>null</th>
    <th>"php"</th>
  </tr>
  <tr>
    <th>true</th>
    <td><?php echo $true === $true ?></td>
    <td><?php echo $true === $false ?></td>
    <td><?php echo $true === $numberone ?></td>
    <td><?php echo $true === $zero ?></td>
    <td><?php echo $true === $minusone ?></td>
    <td><?php echo $true === $stringnumber ?></td>
    <td><?php echo $true === $void ?></td>
    <td><?php echo $true === $stringtext ?></td>
  </tr>
  <tr>
    <th>false</th>
    <td><?php echo $false === $true ?></td>
    <td><?php echo $false === $false ?></td>
    <td><?php echo $false === $numberone ?></td>
    <td><?php echo $false === $zero ?></td>
    <td><?php echo $false === $minusone ?></td>
    <td><?php echo $false === $stringnumber ?></td>
    <td><?php echo $false === $void ?></td>
    <td><?php echo $false === $stringtext ?></td>
  </tr>
  <tr>
    <th>1</th>
    <td><?php echo $numberone === $true ?></td>
    <td><?php echo $numberone === $false ?></td>
    <td><?php echo $numberone === $numberone ?></td>
    <td><?php echo $numberone === $zero ?></td>
    <td><?php echo $numberone === $minusone ?></td>
    <td><?php echo $numberone === $stringnumber ?></td>
    <td><?php echo $numberone === $void ?></td>
    <td><?php echo $numberone === $stringtext ?></td>
  </tr>
  <tr>
    <th>0</th>
    <td><?php echo $zero === $true ?></td>
    <td><?php echo $zero === $false ?></td>
    <td><?php echo $zero === $numberone ?></td>
    <td><?php echo $zero === $zero ?></td>
    <td><?php echo $zero === $minusone ?></td>
    <td><?php echo $zero === $stringnumber ?></td>
    <td><?php echo $zero === $void ?></td>
    <td><?php echo $zero === $stringtext ?></td>
  </tr>
  <tr>
    <th>-1</th>
    <td><?php echo $minusone === $true ?></td>
    <td><?php echo $minusone === $false ?></td>
    <td><?php echo $minusone === $numberone ?></td>
    <td><?php echo $minusone === $zero ?></td>
    <td><?php echo $minusone === $minusone ?></td>
    <td><?php echo $minusone === $stringnumber ?></td>
    <td><?php echo $minusone === $void ?></td>
    <td><?php echo $minusone === $stringtext ?></td>
  </tr>
  <tr>
    <th>"1"</th>
    <td><?php echo $stringnumber === $true ?></td>
    <td><?php echo $stringnumber === $false ?></td>
    <td><?php echo $stringnumber === $numberone ?></td>
    <td><?php echo $stringnumber === $zero ?></td>
    <td><?php echo $stringnumber === $minusone ?></td>
    <td><?php echo $stringnumber === $stringnumber ?></td>
    <td><?php echo $stringnumber === $void ?></td>
    <td><?php echo $stringnumber === $stringtext ?></td>
  </tr>
  <tr>
    <th>null</th>
    <td><?php echo $void === $true ?></td>
    <td><?php echo $void === $false ?></td>
    <td><?php echo $void === $numberone ?></td>
    <td><?php echo $void === $zero ?></td>
    <td><?php echo $void === $minusone ?></td>
    <td><?php echo $void === $stringnumber ?></td>
    <td><?php echo $void === $void ?></td>
    <td><?php echo $void === $stringtext ?></td>
  </tr>
  <tr>
    <th>"php"</th>
    <td><?php echo $stringtext === $true ?></td>
    <td><?php echo $stringtext === $false ?></td>
    <td><?php echo $stringtext === $numberone ?></td>
    <td><?php echo $stringtext === $zero ?></td>
    <td><?php echo $stringtext === $minusone ?></td>
    <td><?php echo $stringtext === $stringnumber ?></td>
    <td><?php echo $stringtext === $void ?></td>
    <td><?php echo $stringtext === $stringtext ?></td>
    </tr>
</table>
   <span>Жесткое сравнение, также называемое строгим сравнением, использует оператор тройного равенства (===) для сравнения значений. 
    При жестком сравнении значения сравниваются с учетом типа данных. Если значения равны и имеют одинаковый тип данных, то результатом сравнения будет true.</span>
</body>
</html>