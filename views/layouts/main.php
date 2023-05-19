<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/bootstrap.min.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row header">
            <img style="height: 88px; width: 454px;" src="http://www.bormotuhi.net/blue/misc/bormotuhi.net_logo.gif">
        </div>
        <div class="row vb-card">
            <div class="vb-card--blue">
                <div class="d-flex justify-content-between">
                    <div>
                        Наши файлы
                    </div>
                    <div>
                        Пользователи
                    </div>
                    <div>
                        Календарь
                    </div>
                    <div>
                        Новые сообщения [Без флейма]
                    </div>
                    <div>
                        F.A.Q.
                    </div>
                    <div>
                        Игры для андроид
                    </div>
                </div>
            </div>
            <div class="">
                <div class="d-flex justify-content-between">
                    <div class="">
                        Бормотухи.НЕТ
                    </div>
                    <div class="d-flex flex-row">
                        <div class="m-1">
                            <input type="text">
                            <div>
                                Расширенный поиск
                            </div>
                        </div>
                        <div class="d-flex m-1">
                            <div class="">
                                <div>
                                    <img src="http://www.bormotuhi.net/images/misc/username.png">
                                    <input type="text" maxlength="35">
                                </div>
                                <div>
                                    <img src="http://www.bormotuhi.net/images/misc/password.png">
                                    <input type="text" maxlength="35">
                                </div>
                            </div>
                            <div class="m-1">
                                <button>Вход</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vb-card--blue">
                <div class="d-flex justify-content-between">
                    <div>
                        Правила форума
                    </div>
                    <div>
                        Регистрация
                    </div>
                    <div>
                        Все альбомы
                    </div>
                    <div>
                        Сообщения за день
                    </div>
                    <div>
                        Поиск
                    </div>
                </div>
            </div>
        </div>



        <!--main-->

        <?= $content ?>


        <div class="row justify-content-center d-flex mt-5">
            Powered by yii2-forum® Version 0.0.0<br>
            Copyright ©2023, superwebteam, Inc.
        </div>



</body>

</html>