<?
echo '<form method="POST" action="/vendor/signup.php">';
echo '<input type="hidden" name="firstname" value="$firstname">';
echo '<input type="hidden" name="lastname" value="$lastname">';
echo '<input type="hidden" name="day" value="$day">';
echo '<input type="hidden" name="moth" value="$moth">';
echo '<input type="hidden" name="year" value="$year">';
echo '<b>Род занятий:</b><br>';
echo '<input type="text" name="biznes" size="20"><br>';
echo '<b>Ваше сообщение:</b><br>';
echo '<textarea rows="2" name="content" cols="20"></textarea><br>';
echo '<input type="submit" value="Отправить" name="B1">';
echo '</form>';

?>