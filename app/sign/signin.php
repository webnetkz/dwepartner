<?php
if(!empty($_POST['signin'])) {
    session_start();
    require_once '../db/db.php';
	if(!empty($_POST['login']) && !empty($_POST['pass'])) {


		$login = trim($_POST['login']);
		$login = htmlentities($login);

		$pass = trim($_POST['pass']);
		$pass = htmlentities($pass);

		$sql = 'SELECT * FROM partners WHERE login = "'.$login.'"';
		$res = $pdo->query($sql);
		$res = $res->fetch(PDO::FETCH_ASSOC);

		if($pass == $res['pass']) {
			header('Location: ../../panel?auth='.$login);
		} else {
            $msg = 'Проверьте логин и пароль';
            header('Location: ../../index?msg='.$msg);
		}
	} else {
        $msg = 'Логин или пароль не заполнены';
        header('Location: ../../index?msg='.$msg);
	}
}