<?php

    function getNormalString($string, $min = false, $max = false, $textMin = null, $textMax = null, $isNumber = false) {

        $array['state'] = 1;
        $array['text'] = $string;

        $array['text'] = trim($array['text']);

        // Экранирование спец.символов
        $array['text'] = quotemeta($array['text']);
        // END Экранирование спец.символов

        // Удаляем html теги
        $array['text'] = strip_tags($array['text']);
        // END Удаляем html теги

        if ($isNumber) {
            $array['text'] = preg_replace('![^0-9]+!', '', $array['text']);
        }

        // Проверка на длинну
        if (strlen($array['text']) > $max && $max) {
            $array['state'] = 0;
            $array['text'] = $textMax ? $textMax : 'Длинно';

            return $array;
        } elseif (strlen($array['text']) < $min && $min) {
            $array['state'] = 0;
            $array['text'] = $textMin ? $textMin : 'Коротко';

            return $array;
        } else {
            return $array;
        }
        // END Проверка на длинну
    }

    if (isset($_POST['message'])) {
        $_POST['message'] = getNormalString($_POST['message'], 10, 170, 'Слишком короткое сообщение', 'Слишком длинное сообщение');
    }

    if (isset($_POST['username'])) {
        $_POST['username'] = getNormalString($_POST['username'], 2, 20, 'Короткое имя', 'Слишком длинное имя');
    }

    if (isset($_POST['phone'])) {
        $_POST['phone'] = getNormalString($_POST['phone'], 2, 11, 'Короткий номер телефона', 'Длинный номер телефона', true);

    }

    if (isset($_POST)) {
        echo json_encode($_POST);
    }