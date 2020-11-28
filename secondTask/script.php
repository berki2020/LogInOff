<?php

if (!empty($_POST['firstNumber']) && !empty($_POST['secondNumber'])) {
    if (preg_match('#^[0-9]*[.]?[0-9]+$#', $_POST['firstNumber']) && preg_match('#^[0-9]*[.]?[0-9]+$#', $_POST['secondNumber'])) {
        $result = 'результат: ';
        switch ($_POST['action']) {
            case 'addition':
                $result .= ($_POST['firstNumber'] + $_POST['secondNumber']);
                break;
            case 'subtraction':
                $result .=  ($_POST['firstNumber'] - $_POST['secondNumber']);
                break;
            case 'division':
                $result .=  ($_POST['firstNumber'] / $_POST['secondNumber']);
                break;
            case 'multiplication':
                $result .=  ($_POST['firstNumber'] * $_POST['secondNumber']);
                break;
        }
    } else {
        $result = 'Неверный формат данных';
    }
} else {
    if (!empty($_POST)) {
        $result = 'Заполните оба поля';
    }
}

