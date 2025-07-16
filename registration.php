<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess School - Регистрация</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="manifest" href="/manifest.json">
    <script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => console.log('SW registered:', registration))
            .catch(err => console.log('SW registration failed:', err));
        });
    }
    </script>
</head>
<body>
    <div class="register-phon">
        <div class="phon">
            <div class="container">
                <img src="images/main/Logo-Photoroom.png" alt="Логотип шахматной школы">
                <h3>Регистрация</h3>
                <form action="process_register.php" method="post">
                    <div class="info">
                        <label for="last_name">Фамилия</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Введите Фамилию" required>
                    </div>
                    <div class="info">
                        <label for="firstname">Имя</label>
                        <input type="text" name="first_name" id="first_name" placeholder="Введите Имя" required>
                    </div>
                    <div class="info">
                        <label for="email">Почта</label>
                        <input type="email" name="email" id="email" placeholder="Введите почту" required>
                    </div>
                    <div class="info">
                        <label for="rank">Укажите разряд</label>
                        <select name="rank" id="rank" required>
                            <option value="no chess rank">Без разряда</option>
                            <option value="up to 3rd youth">до 3 юношеского</option>
                            <option value="up to 3rd adult">до 3 взрослого</option>
                            <option value="CMS and above">КМС и выше</option>
                        </select>
                    </div>
                    <div class="info radio">
                        <p>Тип занятий</p>
                        <ul>
                            <li>
                                <label for="online">
                                    <input type="radio" id="online" name="vis_type" value="online" required>
                                    Онлайн
                                </label>
                            </li>
                            <li>
                                <label for="offline">
                                    <input type="radio" id="offline" name="vis_type" value="offline" >
                                    Очно
                                </label>
                            </li>
                        </ul>
                    </div>
                    <button type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>