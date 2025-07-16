<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Турниры - Chess School</title>
        <link rel="stylesheet" href="styles.css" />
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
        <header>
            <img src="images/main/Logo-Photoroom.png" alt="ChessLogo" />
            <nav>
                <ul>
                    <li><a href="index.php">О школе</a></li>
                    <li><a href="branches.php">Филиалы</a></li>
                    <li><a href="tournaments.php" class="active">Турниры</a></li>
                    <li><a href="registration.php">Услуги</a></li>
                </ul>
            </nav>
            <a href="tel:+79876543210" class="telephone"><b>Тел.: +7 987 654 32 10</b></a>
            <img class="tel" src="images/main/Tel.jpg" />
        </header>
        <main>
            <section class="tournaments-hero">
                <div class="tournaments-card">
                    <h1>Ближайшие турниры</h1>
                    
                    <div class="tournament">
                        <h2>Открытый чемпионат Москвы</h2>
                        <p><strong>Дата:</strong> 15-20 октября 2023</p>
                        <p><strong>Место:</strong> Главный филиал, ул. Шахматная, 15</p>
                        <p><strong>Категории:</strong> Все разряды, отдельные группы для детей и взрослых</p>
                        <button>Зарегистрироваться</button>
                    </div>
                    
                    <div class="tournament">
                        <h2>Кубок Chess School</h2>
                        <p><strong>Дата:</strong> 5-7 ноября 2023</p>
                        <p><strong>Место:</strong> Все филиалы (онлайн)</p>
                        <p><strong>Категории:</strong> Ученики школы, группы по уровню</p>
                        <button>Зарегистрироваться</button>
                    </div>
                    
                    <div class="tournament">
                        <h2>Зимний блиц-турнир</h2>
                        <p><strong>Дата:</strong> 15 декабря 2023</p>
                        <p><strong>Место:</strong> Филиал в Санкт-Петербурге</p>
                        <p><strong>Категории:</strong> Быстрые шахматы, контроль времени 5+3</p>
                        <button>Зарегистрироваться</button>
                    </div>
                    
                    <div class="archive-link">
                        <a href="#">Архив прошедших турниров →</a>
                    </div>
                </div>
            </section>
            
            <section class="rules-section">
                <div class="rules-container">
                    <h2>Правила участия</h2>
                    <ul>
                        <li>Регистрация обязательна для всех участников</li>
                        <li>Необходимо иметь при себе удостоверение личности</li>
                        <li>Для детских турниров - согласие родителей</li>
                        <li>Соблюдение шахматного этикета обязательно</li>
                        <li>Оргвзнос зависит от категории турнира (уточняйте при регистрации)</li>
                    </ul>
                </div>
            </section>
        </main>
        <?php include "inc/footer.php" ?>
    </body>
</html>