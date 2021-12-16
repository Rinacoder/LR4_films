<?php
	require "conect.php";
	require "function/login.php";

if(isset($_POST["entrance_submit"]))
{
	$email = $_POST["email"];
	$pass = $_POST["password"];

	$user = fetchUserByEmail($connection, $email);
	
	
	if(!$user || !password_verify($pass,$user["password"]))
	{
		$isNoteAuth = true;
		?>
		
			<style>
				.popup_e {
					display: block;
				}
				.alert{
					background: #be1717;
					margin: 0 45px;
					padding: 10px;
					border-radius: 5px;
					border: 1px solid #ff0000;
				}
				.alert{
						display: none;
					}
			</style>
	<?php
	}
	else{
	?>
			<style>
				
				.alert{
					display: none;
				}
			</style>
	<?php
	}
}

?>

<form class="popup_e" id="popup_e" method="post" action="/index.php">
		<div class="popup__body">
			<div class="popup__content">
					<a  class="popup__close" id="popup__close_e">X</a>
					<a  class="popup__registration" id="popup__registration">Регистрация</a>
					<div class="popup__title">Вход</div>
					<div class="popup__basic">
						<?php
						if(isset($isNoteAuth))
						{
							?>
							<div class="alert alert-danger" role="alter">
							Неверный логин или пароль
							</div>
							<?php
							
						}
						?>
						<input class="email"
						value="<?= $email ?? "" ?>"
						name="email" type="Email" placeholder="Email" required>
						<input type="password" name="password" id="password" class="password" placeholder="Пароль" required  minlength="6">
						<input type="submit" name="entrance_submit" class="entranceBatton" value="ВХОД">
					</div>
				</div>	
		</div>
</form>