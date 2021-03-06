<?php

function search()
{
    global $link;
    $query = $_GET["query"];
    mysqli_real_escape_string($link, $query);
    htmlspecialchars($query);
    $num = 0;
    $result = false;

    if (!empty($query)) {
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else {
            $q = "SELECT * FROM product WHERE manufacturer LIKE '%$query%' OR model LIKE '%$query%'";

            $result = mysqli_query($link, $q);

            if (mysqli_affected_rows($link) > 0) {
                $num = mysqli_num_rows($result);

                $text = '<p>По запросу <b>' . $query . '</b> найдено совпадений: ' . $num . '</p>';
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        }
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $result;
}
?>