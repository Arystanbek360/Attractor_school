<?php
require('function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kino</title>
</head>
<body>

<h1>Скрипт "Расписание кинотеатра"</h1>
<form action="task1.php" method="GET">
    <label for="ticket">Введите текст</label><br>
    <textarea rows="7" cols="80" name="ticket" id="ticket" value="<?php echo $_GET["ticket"] ?? "" ?>"></textarea><br>
    <input type="submit" name="Отправить">
</form>

<?php if (!empty($_GET["ticket"])) { ?>
    <b>Рассписание кинотеатра:</b>
    <?php
    $ticket = $_REQUEST["ticket"];
    printTableResult($ticket);
    ?>
<?php } ?>

</body>
</html>
