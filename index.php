<?php
    require_once "public/components/header.php";
?>
<style>
.sign {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgb(56, 60, 72);
}
form {
    box-sizing: border-box;
    background: rgb(40, 44, 55);
    width: 400px;
    height: 200px;
    border-radius: 4px;
    box-shadow: 0 0 6px rgb(60, 10, 10);
    padding: 20px 40px;
}
input {
    outline: none;
    width: 100%;
    font-size: 1.3rem;
    margin: 10px;
}
input:focus {
    padding: 5px;
}
</style>
<div class="sign flex centerJC centerAI">
    <div>

        <?php
            if(!empty($_GET['msg'])) {
                echo "<script>alert('".$_GET['msg']."'); location.href = 'index'</script>";
                unset($_GET['msg']);
            }
        ?>
    </div>
    <form action="app/sign/signin" class="flex col centerJC centerAI" method="POST">
        <input type="text" placeholder="Логин" name="login">
        <input type="text" placeholder="Пароль" name="pass">
        <input type="submit" value="Войти" name="signin">
    </form>
</div>


