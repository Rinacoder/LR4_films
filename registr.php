<?php
	require "conect.php";
	require "function/registr.php";


if (isset($_POST["register_submit"]))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$pass = $_POST["password"];
	$pass_cop = $_POST["password_cop"];


	if($pass == $pass_cop)
	{
		
		storeUser($connection, $name, $email, $tel, $pass);
		
	}
	else{
		echo <<<HTML
	
			<style>
				.popup_r {
					display: block;
				}
			</style>
	
	HTML;
	}

}


?>
<!DOCTYPE html>
<form class="popup_r" name="popup_r" id="popup_r" method="post" action="/index.php">
		<div class="popup__body" >
			<div class="popup__content">
					<a class="popup__close" id="popup__close_r">X</a>
					<a  class="popup__entrance" id="popup__entrance">Вход</a>
					<div class="popup__title">Регистрация</div>
					<div class="popup__basic">
						<input type="text" id="name" name="name"
						value="<?= $name ?? "" ?>"
						class="name"  placeholder="Ваше имя" required pattern="[а-я, А-Я, ,-]+">
						<input type="Email" name="email"
						value="<?= $email ?? "" ?>"
						class="email" id="email" placeholder="Email" required>
						<input type="tel" name="tel" 
						value="<?= $tel ?? "" ?>"
						class="tel" id="tel" placeholder="Номер телефона" required pattern="[0-9]{11}" title="Введите номер телефона. 11 цифр без тире и пробелов">
						<input type="password" name="password" class="password" id="password" placeholder="Пароль" required  minlength="6" >
						<input type="password" name="password_cop" 
						class="password_cop"
						id="password_cop"
						placeholder="Подтвердите пароль" required >
							<p><input type="checkbox" name="checkbox" required  class="checkbox" value=""> Согласие на обработку персональных данных</p>
							<input type="submit" name="register_submit" class="registrationBatton" id="registrationBatton" value="РEГИСТРАЦИЯ">
					</div>
				</div>	
		</div>
</form>
