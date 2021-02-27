<br>
<h1>Добро пожаловать на наш первый сайт!</h1><br>
<div class="btn-group" role="group" aria-label="Basic example">
    <a class="btn btn-outline-secondary" href="/journal/about" role="button">Список авторов</a>
    <a class="btn btn-outline-secondary" href="/journal/feedback" role="button">Обратная связь</a>
</div>
<br><br>
<div class="table-responsive-md">
    <table class="table table-striped">
        <tr class="table-dark">
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Postcard</th>
        </tr>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        // ! $data получаем выше, когда файл template_view include-руют в классе View и передают данные.
        for ($row_no = 0; $row_no <= $data->num_rows - 1; $row_no++) {
            $data->data_seek($row_no);
            $row = $data->fetch_assoc();
            echo "<tr><td>" . $row['id_news'] . "</td><td><b>" . $row['title'] .
                "</b></td><td>" . $row['content'] . "</td><td><img src='" .
                $row['postcard'] . "' width='200' style='padding:10px;'></td></tr>";
        }
        ?>
    </table>
</div>