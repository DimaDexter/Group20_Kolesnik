<?php
echo "Задача №4 - Создать форму с полем ввода ссылки для товара и обрабатывать ее методом POST.</br>
Задача №5</br> 5.1.	Проганять название ссылки через функцию транслита и приводить ссылки в нижний регистр</br>
5.2.	Проверять с помощью валидации ссылку на символы “- /”  начале и конце строки.</br>
5.3.	Обрезать такие символы или заменять их пустотой</br></br>";
?>
<form method="POST">
	<input type="url" name="url" value="" placeholder="Введите ccылку">
	<input type="submit" name="butt" value="Обработать">
</form>

<?php

function translit($url) {        
    $trans = array('А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 
                   'Е' => 'E', 'Ё' => 'Jo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 
                   'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 
                   'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 
                   'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch', 
                   'Ш' => 'Sh', 'Щ' => 'Shh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 
                   'Э' => 'Je', 'Ю' => 'Ju', 'Я' => 'Ja',
                    
                   'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 
                   'е' => 'e', 'ё' => 'jo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 
                   'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 
                   'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 
                   'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 
                   'ш' => 'sh', 'щ' => 'shh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 
                   'э' => 'je', 'ю' => 'ju', 'я' => 'ja');

    $url = strtr($url, $trans);    // Заменяем кириллицу согласно массиву замены
    $url = mb_strtolower($url);    // В нижний регистр
    $url = trim($url, "-");        // Удаляем начальные и конечные '-'
    return $url;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    if ($_POST["url"]) {
        echo translit($_POST['url']);
    } else {
        echo "Ссылка не введена!";
    }
}

?>
