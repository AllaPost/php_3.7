
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получение данных из формы
    $order_id = htmlspecialchars($_POST['order_id']);
    $cancel_reason = htmlspecialchars($_POST['cancel_reason']);

    // Вывод введенных данных
    echo "<h2>Заказ №$order_id был отменен.</h2>";
    echo "<p><strong>Причина отмены:</strong> $cancel_reason</p>";
} else {
    echo "Форма не была отправлена.";
}
?>