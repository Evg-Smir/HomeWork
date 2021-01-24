<?php
$flag = true;
for ($i = 0; $i < 19; $i++)
{
    $flag &= isset($_POST[strval($i + 1)]);
}
$array = [false, false, true, false, false, false, false, false, true,
    true, false, false, true, true, false, false, false, false, true];
$count = 0;
if ($flag)
{
    for ($i = 0; $i < 19; $i++)
    {
        if ($array[$i] == boolval($_POST[strval($i + 1)]))
            $count++;
    }
    if ($count > 15)
        echo $_POST['firstname']." Ваш результат - ".$count.". У вас покладистый характер";
    elseif ($count >= 8 && $count <= 15)
        echo $_POST['firstname']." Ваш результат - ".$count.". Вы не лишены недостатков, но с вами можно ладить";
    else
        echo $_POST['firstname']." Ваш результат - ".$count.". Вашим друзьям можно посочувствовать";
}
else
{
    echo "Что-то не удалось";
}
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="11.01(АНКЕТА).php" method="post">
    <p>Ваше имя:<br>
        <input type="text" name="firstname" /></p>
    <p><b>1) Считаете ли Вы, что у многих ваших знакомых хороший характер?</b></p>
    <input name="1" type="radio" value="1">Да<br>
    <input name="1" type="radio" value="0">Нет<br>

    <p><b>2) Раздражают ли Вас мелкие повседневные обязанности?</b></p>
    <input name="2" type="radio" value="1">Да<br>
    <input name="2" type="radio" value="0">Нет<br>

    <p><b>3) Верите ли Вы, что ваши друзья преданы Вам?</b></p>
    <input name="3" type="radio" value="1">Да<br>
    <input name="3" type="radio" value="0">Нет<br>

    <p><b>4) Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</b></p>
    <input name="4" type="radio" value="1">Да<br>
    <input name="4" type="radio" value="0">Нет<br>

    <p><b>5) Способны ли Вы ударить собаку или кошку?</b></p>
    <input name="5" type="radio" value="1">Да<br>
    <input name="5" type="radio" value="0">Нет<br>

    <p><b>6) Часто ли Вы принимаете лекарства?</b></p>
    <input name="6" type="radio" value="1">Да<br>
    <input name="6" type="radio" value="0">Нет<br>

    <p><b>7) Часто ли Вы меняете магазин, в который ходите за продуктами?</b></p>
    <input name="7" type="radio" value="1">Да<br>
    <input name="7" type="radio" value="0">Нет<br>

    <p><b>8) Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</b></p>
    <input name="8" type="radio" value="1">Да<br>
    <input name="8" type="radio" value="0">Нет<br>

    <p><b>9) Тяготят ли Вас общественные обязанности?</b></p>
    <input name="9" type="radio" value="1">Да<br>
    <input name="9" type="radio" value="0">Нет<br>

    <p><b>10) Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</b></p>
    <input name="10" type="radio" value="1">Да<br>
    <input name="10" type="radio" value="0">Нет<br>

    <p><b>11) Часто ли Вам приходят в голову мысли о Вашей невезучести?</b></p>
    <input name="11" type="radio" value="1">Да<br>
    <input name="11" type="radio" value="0">Нет<br>

    <p><b>12) Сохранилась ли у Вас фигура по сравнению с прошлым?</b></p>
    <input name="12" type="radio" value="1">Да<br>
    <input name="12" type="radio" value="0">Нет<br>

    <p><b>13) Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</b></p>
    <input name="13" type="radio" value="1">Да<br>
    <input name="13" type="radio" value="0">Нет<br>

    <p><b>14) Нравится ли Вам семейная жизнь?</b></p>
    <input name="14" type="radio" value="1">Да<br>
    <input name="14" type="radio" value="0">Нет<br>

    <p><b>15) Злопамятны ли Вы?</b></p>
    <input name="15" type="radio" value="1">Да<br>
    <input name="15" type="radio" value="0">Нет<br>

    <p><b>16) Находите ли Вы, что стоит погода, типичная для данного времени года?</b></p>
    <input name="16" type="radio" value="1">Да<br>
    <input name="16" type="radio" value="0">Нет<br>

    <p><b>17) Случается ли Вам с утра быть в плохом настроении?</b></p>
    <input name="17" type="radio" value="1">Да<br>
    <input name="17" type="radio" value="0">Нет<br>

    <p><b>18) Раздражает ли Вас современная живопись?</b></p>
    <input name="18" type="radio" value="1">Да<br>
    <input name="18" type="radio" value="0">Нет<br>

    <p><b>19) Надоедает ли Вам присутствие чужих детей в доме более одного часа?</b></p>
    <input name="19" type="radio" value="1">Да<br>
    <input name="19" type="radio" value="0">Нет<br>

    <p><button type="submit" name="btn">Submit</button></p>
</form>

</body>
</html>
