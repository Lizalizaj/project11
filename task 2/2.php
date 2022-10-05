<html>
<head>
<title>Таблица сравнения</title>
<style>
<?php echo file_get_contents("style2.css"); ?>
</style>
</head>
<body>
<h2>Задание 2</h2>
<p><strong>Действия:</strong><p>
    <p>1. Используйте PHP-файл из предыдущего задания<p>
    <p>2. Сделайте вывод двух пустых таблиц с заголовками «Гибкое сравнение в PHP» и «Жёсткое сравнение в PHP» при помощи HTML и CSS..<p>
    <p>3. Заполните таблицы результатами логических выражений гибкого и жёсткого сравнений соответственно. Сравнивайте элементы по оси X и Y, результат поместите в ячейки на пересечении значений.<p>
    <br>
    <p><strong>Задание простое, однако есть некоторые ограничения:</strong><p>
        <p>1. Результаты всех ячеек в таблице должны быть результатом PHP-вычислений.<p>
        <p>2. Используйте переменные для хранения значений.<p>
        <p>3. Используйте команды для вывода вычислений в HTML-таблицу.<p>
            <br><br>
    <p><strong>Результат:</strong><p>
    <p>Гибкое сравнение в PHP<p>
    <table>
    <tr>
        <th><strong></strong></th>
        <th><strong> true </strong></th>
        <th><strong> false </strong></th>
        <th><strong> 1 </strong></th> 
        <th><strong> 0 </strong></th>
        <th><strong> -1 </strong></th>
        <th><strong> "1" </strong></th>
        <th><strong> null </strong></th>
        <th><strong> "php" </strong></th>
    </tr>
    <tr>
        <td><strong> true </strong></td>
        <td><?php var_dump('true' == 'true'); ?></td>
        <td><?php var_dump('true' == 'false'); ?></td>
        <td><?php var_dump('true' == '1'); ?></td>
        <td><?php var_dump('true' == '0'); ?></td>
        <td><?php var_dump('true' == '-1'); ?></td>
        <td><?php var_dump('true' == "1"); ?></td>
        <td><?php var_dump('true' == 'null'); ?></td>
        <td><?php var_dump('true' == "php"); ?></td>
    </tr>
    <tr>
        <td><strong> false </strong></td>
        <td><?php var_dump('false' == 'true'); ?></td>
        <td><?php var_dump('false' == 'false'); ?></td>
        <td><?php var_dump('false' == '1'); ?></td>
        <td><?php var_dump('false' == '0'); ?></td>
        <td><?php var_dump('false' == '-1'); ?></td>
        <td><?php var_dump('false' == "1"); ?></td>
        <td><?php var_dump('false' == 'null'); ?></td>
        <td><?php var_dump('false' == "php"); ?></td>
    </tr>
    <tr>
        <td><strong> 1 </strong></td>
        <td><?php var_dump('1' == 'true'); ?></td>
        <td><?php var_dump('1' == 'false'); ?></td>
        <td><?php var_dump('1' == '1'); ?></td>
        <td><?php var_dump('1' == '0'); ?></td>
        <td><?php var_dump('1' == '-1'); ?></td>
        <td><?php var_dump('1' == "1"); ?></td>
        <td><?php var_dump('1' == 'null'); ?></td>
        <td><?php var_dump('1' == "php"); ?></td>
    </tr>
    <tr>
        <td><strong> 0 </strong></td>
        <td><?php var_dump('0' == 'true'); ?></td>
        <td><?php var_dump('0' == 'false'); ?></td>
        <td><?php var_dump('0' == '1'); ?></td>
        <td><?php var_dump('0' == '0'); ?></td>
        <td><?php var_dump('0' == '-1'); ?></td>
        <td><?php var_dump('0' == "1"); ?></td>
        <td><?php var_dump('0' == 'null'); ?></td>
        <td><?php var_dump('0' == "php"); ?></td>
    </tr>
    <tr>
        <td><strong> -1 </strong></td>
        <td><?php var_dump('-1' == 'true'); ?></td>
        <td><?php var_dump('-1' == 'false'); ?></td>
        <td><?php var_dump('-1' == '1'); ?></td>
        <td><?php var_dump('-1' == '0'); ?></td>
        <td><?php var_dump('-1' == '-1'); ?></td>
        <td><?php var_dump('-1' == "1"); ?></td>
        <td><?php var_dump('-1' == 'null'); ?></td>
        <td><?php var_dump('-1' == "php"); ?></td>
    </tr>
    <tr>
        <td><strong> "1" </strong></td>
        <td><?php var_dump("1" == 'true'); ?></td>
        <td><?php var_dump("1" == 'false'); ?></td>
        <td><?php var_dump("1" == '1'); ?></td>
        <td><?php var_dump("1" == '0'); ?></td>
        <td><?php var_dump("1" == '-1'); ?></td>
        <td><?php var_dump("1" == "1"); ?></td>
        <td><?php var_dump("1" == 'null'); ?></td>
        <td><?php var_dump("1" == "php"); ?></td>
    </tr>

    <tr>
        <td><strong> null </strong></td>
        <td><?php var_dump('null' == 'true'); ?></td>
        <td><?php var_dump('null' == 'false'); ?></td>
        <td><?php var_dump('null'== '1'); ?></td>
        <td><?php var_dump('null' == '0'); ?></td>
        <td><?php var_dump('null' == '-1'); ?></td>
        <td><?php var_dump('null' == "1"); ?></td>
        <td><?php var_dump('null'== 'null'); ?></td>
        <td><?php var_dump('null' == "php"); ?></td>
    </tr>
    <tr>
        <td><strong> "php" </strong></td>
        <td><?php var_dump("php" == 'true'); ?></td>
        <td><?php var_dump("php" == 'false'); ?></td>
        <td><?php var_dump("php"== '1'); ?></td>
        <td><?php var_dump("php" == '0'); ?></td>
        <td><?php var_dump("php" == '-1'); ?></td>
        <td><?php var_dump("php" == "1"); ?></td>
        <td><?php var_dump("php"== 'null'); ?></td>
        <td><?php var_dump("php" == "php"); ?></td>
    </tr>
    </table>
<br><br>
<p>Жесткое сравнение в PHP<p>
    <table>
        <td><strong> true </strong></td>
        <td><strong> false </strong></td>
        <td><strong> 1 </strong></td> 
        <td><strong> 0 </strong></td>
        <td><strong> -1 </strong></td>
        <td><strong> "1" </strong></td>
        <td><strong> null </strong></td>
        <td><strong> "php" </strong></td>
    </table>