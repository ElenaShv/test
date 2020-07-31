<?php
    //Подключение шапки
    require_once("header.php");
?>
<div id="form_register">
<h2> Форма регистрации </h2>
<form action="" method="post" name="form_register">
<table>
<tr>
<td>Введите ваше имя:</td>
<td><input type="text" name="first_name" required="required"></td>
</tr>
<tr>
<td>Логин</td>
<td><input type="text" name="login" required="required"></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="email" name="email" required="required"></td>
</tr>
<tr>
<td>Введите пароль:</td>
<td><input type="password" name="password1" placeholder="минимум 6 символов"></td></tr>
<tr>
<td>Введите пароль ещё раз:</td>
<td><input type="password" name="password2" placeholder="минимум 6 символов"></td></tr>
<tr>
<td><input type="submit" name="submit_reg" value="Зарегистрироваться"></td>
</tr>
</table>
</form>
</div>

        
<?php
    //Подключение подвала
    require_once("footer.php");
?>    