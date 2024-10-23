<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получение данных из формы
    $name = htmlspecialchars($_POST['name']);
    $review = htmlspecialchars($_POST['review']);
    $rating = (int)$_POST['rating'];

    // Проверка на корректный диапазон рейтинга
    if ($rating < 1 || $rating > 5) {
        echo "Ошибка: Рейтинг должен быть в пределах от 1 до 5.";
    } else {
        // Вывод введенных данных
        echo "<h2>Спасибо за ваш отзыв, $name!</h2>";
        echo "<p><strong>Ваш отзыв:</strong> $review</p>";
        echo "<p><strong>Ваш рейтинг:</strong> $rating</p>";
    }
} else {
    echo "Форма не была отправлена.";
}

?>