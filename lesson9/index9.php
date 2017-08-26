
<?php echo "Задача №1 - Создать форму для ввода логина, имени, емейла и пароля клиента.</br>

Задача №2 - Принимать данные методом POST и сделать обработку по регулярному выражению каждого поля:</br>
1.	Логин должен быть только на латинице, не меньше чем 4 буквы и может содержать только цифры.</br>
2.	Имя может содержать только кирилицу (большие и маленькие), знак дефиса, и не должен содержать цифр.</br>
3.	Емейл должен быть только на латинице, может содержать точки и дефисы.</br>
4.	Пароль не меньше чем 4 символа, разрешены латиница, цифры, знаки /-*?</br></br>" 
?>

<!-- Форма для обработки логина, имя, почты и пароля.  -->
<form method="post">
	<input type="text" name="login" value="" placeholder="Введите логин">
	<input type="text" name="name" value="" placeholder="Введите имя">
	<input type="email" name="email" value="" placeholder="Введите email">
	<input type="password" name="pass" value="" placeholder="Введите пароль">
	<input type="submit" name="submit" value="Отправить">
</form>

<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

//Проверка для логина

if ($_POST['login']) {
	$preg = '/^[a-zA-Z0-9]{4,}$/';
	$check = preg_match($preg, $_POST['login']);
	if($check == true) {
	    echo "Ух ты, логин прокатил!</br>";
	} else {
	    echo "Не корректный логин!</br>";
	}
}

//Проверка для имени

if ($_POST['name']) {
	$preg3 = '/[-а-яА-Я]{2,}/';
	$check3 = preg_match($preg3, $_POST['name']);
	if($check3 == true) {
	    echo "Ух ты, имя прокатило!</br>";
	} else {
	    echo "Не корректное имя!</br>";
	}
}

//Проверка для почты

if ($_POST['email']) {
	$preg2 = '/^[A-Za-z0-9][A-Za-z0-9\.\-_]/';
	$check2 = preg_match($preg2, $_POST['email']);
	if($check2 == true) {
	    echo "Ух ты, email прокатил!</br>";
	} else {
	    echo "Не корректный email!</br>";
	}
}

//Проверка для пароля

if ($_POST['pass']) {
	$preg1 = '/^(?=.*\d)(?=.*[a-z])?(?!.*\s).*$/';
	$check1 = preg_match($preg1, $_POST['pass']);
	if($check1 == true) {
	    echo "Ух ты, пароль прокатил!</br>";
	} else {
	    echo "Не корректный пароль!</br>";
	}
}
echo "<hr>";
?>

