<br>
<h1>Оставьте обратную связь о нашем сайте!</h1><br>
<div class="btn-group" role="group" aria-label="Basic example">
    <a class="btn btn-outline-secondary" href="/journal/" role="button">На главную</a>
    <a class="btn btn-outline-secondary" href="/journal/about" role="button">Список авторов</a>
</div>
<br><br>
<div class="row">
    <div class="col-md-6">
        <!-- <form action="/journal/feedback/send" method="POST"> -->
        <form method="POST">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Введите ваше имя" name="user" value="" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Введите вашу электронную почту" value="" name="email" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="comment" placeholder="Введите ваш комментарий" value="" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" onclick="checkform()">Отправить</button>
                <button type="reset" class="btn btn-secondary">Очистить</button>
            </div>
        </form>
    </div>
</div>

<script>
    {
        "use strict";

        let myForm = document.getElementsByTagName('form')[0];

        function sendData() {
            let xhr = new XMLHttpRequest(),
                feedbackForm = document.forms[0],
                formData = new FormData(feedbackForm);
            xhr.open("POST", '/journal/feedback/send')
            xhr.onloadend = function() {
                if (xhr.status == 200) {
                    if (xhr.response == 1) {
                        alert('Добавлено!');
                    } else {
                        alert(xhr.response);
                    }
                } else {
                    alert("Ошибка " + this.status);
                }
            };
            xhr.send(formData);
        }

        function checkmail(email) {
            let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (reg.test(email) == false) {
                alert('E-mail указан неверно!');
                return false;
            } else {
                return true;
            }
        }

        function checkform() {
            if (myForm[0].value != "" && myForm[1].value != "" &&
                myForm[2].value != "") {
                if (checkmail(myForm[1].value)) {
                    sendData();
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

    }
</script>