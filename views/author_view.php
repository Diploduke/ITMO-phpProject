<br>
<h1>Информация об авторе</h1><br>
<div class="btn-group" role="group" aria-label="Basic example">
    <a class="btn btn-outline-secondary" href="/journal/" role="button">На главную</a>
    <a class="btn btn-outline-secondary" href="/journal/feedback" role="button">Обратная связь</a>
</div>
<br><br>
<?php
for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
    $data->data_seek($row_no);
    $row = $data->fetch_assoc();
    echo "
    <table class='table'>
        <tr><td>" . $row['id'] . "</td></tr>
        <tr><td>" . $row['fio'] . "</td></tr>
        <tr><td>" . $row['age'] . "</td></tr>
        <tr><td>" . $row['location'] . "</td></tr>
        <tr><td>" . $row['additional'] . "</td></tr>
    </table>  ";
}
?>