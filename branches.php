<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Филиалы - Chess School</title>
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
                    <li><a href="branches.php" class="active">Филиалы</a></li>
                    <li><a href="tournaments.php">Турниры</a></li>
                    <li><a href="registration.php">Услуги</a></li>
                </ul>
            </nav>
            <a href="tel:+79876543210" class="telephone"><b>Тел.: +7 987 654 32 10</b></a>
            <img class="tel" src="images/main/Tel.jpg" />
        </header>
        <main>
            <section class="branches-hero">
                <div class="branches-card">
                    <h1>Наши филиалы</h1>
                    <div class="branch">
                        <h2>Москва (Главный филиал)</h2>
                        <p><strong>Адрес:</strong> ул. Шахматная, 15</p>
                        <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
                        <p><strong>Часы работы:</strong> Пн-Пт: 10:00-20:00, Сб-Вс: 9:00-18:00</p>
                    </div>
                    
                    <div class="branch">
                        <h2>Санкт-Петербург</h2>
                        <p><strong>Адрес:</strong> Невский пр., 123</p>
                        <p><strong>Телефон:</strong> +7 (812) 987-65-43</p>
                        <p><strong>Часы работы:</strong> Пн-Пт: 11:00-19:00, Сб: 10:00-17:00</p>
                    </div>
                    
                    <div class="branch">
                        <h2>Казань</h2>
                        <p><strong>Адрес:</strong> ул. Кремлевская, 45</p>
                        <p><strong>Телефон:</strong> +7 (843) 456-78-90</p>
                        <p><strong>Часы работы:</strong> Пн-Пт: 12:00-20:00, Сб: 10:00-16:00</p>
                    </div>
                    
                    <div class="branch">
                        <h2>Екатеринбург</h2>
                        <p><strong>Адрес:</strong> ул. Ленина, 78</p>
                        <p><strong>Телефон:</strong> +7 (343) 234-56-78</p>
                        <p><strong>Часы работы:</strong> Пн-Пт: 11:00-19:00, Сб: 10:00-15:00</p>
                    </div>
                </div>
            </section>
            
            <section class="map-section">
                <h2>Мы на карте</h2>
                <div class="map-container">
                    <!-- Здесь будет карта -->
                    <img src="images/branches/map-placeholder.jpg" alt="Карта филиалов" />
                </div>
            </section>
        </main>
        <?php include "inc/footer.php" ?>
    </body>
</html>