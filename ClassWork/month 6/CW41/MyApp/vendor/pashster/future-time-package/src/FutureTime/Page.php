<?php
namespace FutureTime;

class Page
{
    public function displayHeader()
    {
        ?>
        <h1>Скрипт "Будущее время"</h1>
        <?php
    }

    public function displayForm()
    {
        ?>
        <form action="">
            <label for="seconds">Сколько секунд прибавить к текущему времени?</label>
            <input type="text" name="seconds" id="seconds" value="<?php echo $_REQUEST["seconds"] ?? "" ?>"/>

            <input type="submit" name="Отправить запрос"/>
        </form>
        <?php
    }

    public function displayFutureTime()
    {
        if (!empty($_REQUEST["seconds"])) {
            $future_time = time() + intval($_REQUEST["seconds"]);
            ?>
            <b>Будущее время:</b>
            <table border="1">
                <tr>
                    <th>День недели</th>
                    <th>День месяца</th>
                    <th>Месяц</th>
                    <th>Год</th>
                    <th>Время</th>
                </tr>
                <tr>
                    <?php
                    print '<td>' . date('l', $future_time) . '</td>';
                    print '<td>' . date('jS', $future_time) . '</td>';
                    print '<td>' . date('F', $future_time) . '</td>';
                    print '<td>' . date('Y', $future_time) . '</td>';
                    print '<td>' . date('h:i:s A', $future_time) . '</td>';
                    ?>
                </tr>
            </table>
            <?php
        }
    }
}