$(document).ready(function() {
    var url = 'https://cp.simpple.ru/api/v1/widgets/ratings/753bf174295992b3ca2d0bd4a78d6598/popular&limit=8';
    $.get(url, function(response) {
        // Инициализируем таблицу
        ...
    });
});