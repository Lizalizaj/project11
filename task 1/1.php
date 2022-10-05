<html>
<head>
<title>Таблица истинности PHP</title>
<style>
<?php echo file_get_contents("style.css"); ?>
</style>
</head>
<body>
<h2>Задание 1</h2>
<p><strong> Действия:</strong> <p>
    <p>1. Создайте PHP-файл для работы с проектом или используйте существующий.<p>
    <p>2. Сделайте вывод пустой таблицы с заголовками при помощи HTML и CSS.<p>
    <p>3. Заполните таблицу значениями операнд А и В, как в примере выше.<p>
    <p>4. Заполните результаты логических операций !A, A || B, A & B, A xor B, используя знания, пройденные в юнитах этого модуля.<p>
    <br><br>
    <p><strong> Задание простое, однако есть некоторые ограничения:</strong> <p>

    <p>1. Результаты всех ячеек в таблице должны быть результатом PHP-вычислений.<p>
    <p>2. Используйте переменные для хранения значений изначальных входных данных A и B.<p>
    <p>3. Используйте работу с логическими операциями для вычисления результатов операций.<p>
    <p>4. Используйте команды вывода для вывода вычислений в HTML-таблицу.<p>
    <p><strong>Результат:</strong><p>
<table border="1">
<tr>
        <td><strong> A </strong></td>
        <td><strong> B </strong></td>
        <td><strong> !A </strong></td> 
        <td><strong> A||B </strong></td>
        <td><strong> A&&B </strong></td>
        <td><strong> A xor B </strong></td>
    </tr>
    <tr> 
        <td><?php $a = false; echo (int)$a; ?></td>
        <td><?php $b = false; echo (int)$b; ?></td>
        <td><?php $a = false; echo (int)!$a ?></td>
        <td><?php echo (int)($a || $b); ?></td>
        <td><?php echo (int)($a && $b); ?></td>
        <td><?php echo (int)($a xor $b); ?></td>
    </tr>
    <tr> 
        <td><?php $a = false; echo (int)$a; ?></td>
        <td><?php $b = true; echo (int)$b; ?></td>
        <td><?php $a = false; echo (int)!$a ?></td>
        <td><?php echo (int)($a || $b); ?></td>
        <td><?php echo (int)($a && $b); ?></td>
        <td><?php echo (int)($a xor $b); ?></td>
    </tr>
    <tr>
        <td><?php $a = true; echo (int)$a; ?></td>
        <td><?php $b = false; echo (int)$b; ?></td>
        <td><?php $a = true; echo (int)!$a ?></td>
        <td><?php echo (int)($a || $b); ?></td>
        <td><?php echo (int)($a && $b); ?></td>
        <td><?php echo (int)($a xor $b); ?></td>
    </tr>
    <tr>
        <td><?php $a = true; echo (int)$a; ?></td>
        <td><?php $b = true; echo (int)$b; ?></td>
        <td><?php $a = true; echo (int)!$a ?></td>
        <td><?php echo (int)($a || $b); ?></td>
        <td><?php echo (int)($a && $b); ?></td>
        <td><?php echo (int)($a xor $b); ?></td>
    </tr>
</table>
</body>
</html>