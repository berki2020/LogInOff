<?php include $_SERVER['DOCUMENT_ROOT'] . '/secondTask/script.php'; ?>

<?= $result ?? ''; ?>

<form action="" method="post">
    <input type="text" name="firstNumber" value="<?=$_POST['firstNumber'] ?? ''?>">
    <select name="action">
        <option <?=$_POST['action'] == 'addition' ? 'selected' : ''?> value="addition">+</option>
        <option <?=$_POST['action'] == 'subtraction' ? 'selected' : ''?> value="subtraction">-</option>
        <option <?=$_POST['action'] == 'division' ? 'selected' : ''?> value="division">/</option>
        <option <?=$_POST['action'] == 'multiplication' ? 'selected' : ''?> value="multiplication">*</option>
    </select>
    <input type="text" name="secondNumber" value="<?=$_POST['secondNumber'] ?? ''?>">
    <input type="submit" name="submit" value="Вычислить">
</form>