<?php
// Массив с фиктивными отзывами:
$reviews = [
    ['name' => 'Иван', 'review' => 'Отличный товар!', 'rating' => 5],
    ['name' => 'Мария', 'review' => 'Быстрая доставка, качественный продукт.', 'rating' => 4],
];

// Проверка отправки формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST['name'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    
    // Добавление нового отзыва в массив
    $reviews[] = ['name' => $name, 'review' => $review, 'rating' => $rating];
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
</head>
<body>

    <h1>Оставить отзыв</h1>

    <!-- Форма для отзыва -->
    <form method="post" action="">
        <label for="name">Ваше имя:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="review">Ваш отзыв:</label><br>
        <textarea id="review" name="review" required></textarea><br><br>
        
        <label for="rating">Оценка (от 1 до 5):</label><br>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>
        
        <input type="submit" value="Добавить отзыв">
    </form>

    <h2>Отзывы покупателей</h2>

    <!-- Вывод отзывов -->
    <?php if (!empty($reviews)): ?>
        <ul>
            <?php foreach ($reviews as $r): ?>
                <li>
                    <strong><?php echo htmlspecialchars($r['name']); ?>:</strong> 
                    <?php echo htmlspecialchars($r['review']); ?> 
                    <em>(Оценка: <?php echo htmlspecialchars($r['rating']); ?>)</em>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Пока нет отзывов.</p>
    <?php endif; ?>

</body>
</html>