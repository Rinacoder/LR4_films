<form class="popup_e" id="popup_e">
		<div class="popup__body">
			<div class="popup__content">
					<a  class="popup__close" id="popup__close_e">X</a>
					<a  class="popup__registration" id="popup__registration">Регистрация</a>
					<div class="popup__title">Вход</div>
					<div class="popup__basic">
						<input class="email" type="Email" placeholder="Email" required>
						<input type="password" id="password" class="password" placeholder="Пароль" required  minlength="6">
						<input type="submit" class="entranceBatton" value="ВХОД">
					</div>
				</div>	
		</div>
</form>

<form class="popup_r" id="popup_r">
		<div class="popup__body" >
			<div class="popup__content">
					<a class="popup__close" id="popup__close_r">X</a>
					<a  class="popup__entrance" id="popup__entrance">Вход</a>
					<div class="popup__title">Регистрация</div>
					<div class="popup__basic">
						<input type="text" id="name" class="name"  placeholder="Ваше имя" required pattern="[а-я, А-Я, ,-]+">
						<input type="Email" class="email" id="email" placeholder="Email" required>
						<input type="tel" class="tel" id="tel" placeholder="Номер телефона" required pattern="[0-9]{11}" title="Введите номер телефона. 11 цифр без тире и пробелов">
						<input type="password" class="password" id="password" placeholder="Пароль" required  minlength="6" >
						<input type="password" class="password_cop" id="password_cop" placeholder="Подтвердите пароль" required>
							<p><input type="checkbox" required  class="checkbox" value=""> Согласие на обработку персональных данных</p>
							<input type="submit" class="registrationBatton" id="registrationBatton" value="РEГИСТРАЦИЯ">
					</div>
				</div>	
		</div>
</form>
