<br>
<h1>Список авторов нашего сайта</h1><br>
<div class="btn-group" role="group" aria-label="Basic example">
    <a class="btn btn-outline-secondary" href="/journal/" role="button">На главную</a>
    <a class="btn btn-outline-secondary" href="/journal/feedback" role="button">Обратная связь</a>
</div>
<br><br>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Ф.И.О.</th>
        <th>Возраст</th>
        <th>Узнать подробнее</th>
    </tr>

    <?php

    for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
        $data->data_seek($row_no);
        $row = $data->fetch_assoc();
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['fio'] .
            "</td><td>" . $row['age'] . "</td><td>
         <a href='/journal/about/author/?id=" . $row['id'] .
            "' target='_blank'>Подробнее</a></td></tr>";
    }

    ?>
</table>