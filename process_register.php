<?php
// Настройки подключения к БД
$host = 'localhost';
$dbname = 'chess-school';
$username = 'root';
$password = '';

try {
    // Подключаемся к базе данных
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Получаем данные из формы
    $last_name = htmlspecialchars($_POST['last_name']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $rank = htmlspecialchars($_POST['rank']);
    $vis_type = htmlspecialchars($_POST['vis_type']);
    
    // Проверяем обязательные поля
    if (empty($vis_type)) {
        die("Ошибка: Не выбран тип занятий");
    }
    
    // Проверяем email на уникальность
    $check_email = $conn->prepare("SELECT email FROM registrations WHERE email = ?");
    $check_email->execute([$email]);
    
    if ($check_email->rowCount() > 0) {
        die("Ошибка: Этот email уже зарегистрирован");
    }
    
    // Подготавливаем SQL-запрос
    $stmt = $conn->prepare("INSERT INTO registrations 
        (last_name, first_name, email, rank, vis_type) 
        VALUES (:last_name, :first_name, :email, :rank, :vis_type)");
    
    // Выполняем запрос с именованными параметрами
    $stmt->execute([
        ':last_name' => $last_name,
        ':first_name' => $first_name,
        ':email' => $email,
        ':rank' => $rank,
        ':vis_type' => $vis_type
    ]);
    
    // Перенаправляем на страницу успеха
    header("Location: registration_success.php");
    exit();
    
} catch(PDOException $e) {
    // В случае ошибки выводим сообщение
    die("Ошибка регистрации: " . $e->getMessage());
}
?>