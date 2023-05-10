<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Панель администратора</title>
    <link rel="stylesheet" href="../admin/style/login.css">
</head>

<body>

<div class="login">
    <h1>ВОЙТИ В АККАУНТ</h1>

    <form action="../admin/admin.php" method="post">
        <div class="form-group">
            <input type="text" id="login" placeholder="admin" name="login">
            <label>Логин</label>
        </div>

        <div class="form-group">
        <input type="password" id="password" placeholder="•••••" name="password">
            <label>Пароль</label>
        <div>

    <button type="submit" class="btn">Войти</button>

    </form>
</div>


</body>
</html>
