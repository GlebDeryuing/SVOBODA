<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,500;1,600;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="images/icon.png"> 
    <title>СВОБОДА CrossFit</title>
</head>

<body>
    <header>
        <div class="container-fluid main-menu">
            <div class="logo"><img src="images/svoboda_logo.png" alt=""></div>
            <div class="menu">
                <a href="#link0" class="menu-link selected">О НАС
                    <div class="under-block"></div>
                </a>
                <a href="#link1" class="menu-link">АБОНЕМЕНТЫ
                    <div class="under-block"></div>
                </a>
                <a href="#link2" class="menu-link">ТРЕНЕРЫ
                    <div class="under-block"></div>
                </a>
                <a href="#link3" class="menu-link">КОНТАКТЫ
                    <div class="under-block"></div>
                </a>
                <a class="menu-link login">
                    <form action="profile.php" onsubmit='return check_session();' method="post">
                        <button type="submit">
                            <img src="images/login_menu.svg" alt="">
                        </button>
                    </form>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div id="id01" class="modal">
            <form class="modal-content" action="vendor/signin.php" onsubmit="return validate_authform();" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                    <img src="images/svoboda_logo.png" alt="SVOBODA" class="avatar">
                    <h2>ВОЙТИ В ЛИЧНЫЙ КАБИНЕТ</h2>
                </div>
                <div class="container">
                    <label for="uname">НОМЕР АБОНЕМЕНТА</label>
                    <input type="number" placeholder="Введите номер абонемента (число на углу клубной карты)" name="uname" required id="1n">
                    <label for="psw">ПАРОЛЬ</label>
                    <input type="password" placeholder="Введите пароль" name="psw" required id="1p">
                    <span class="reg-link">КУПИЛИ АБОНЕМЕНТ ВПЕРВЫЕ? <a onclick="document.getElementById('id02').style.display='block'; document.getElementById('id01').style.display='none';" >ЗАРЕГЕСТИРОВАТЬСЯ</a></span>
                    <button type="submit">ВОЙТИ</button>
                </div>
            </form>
        </div>

        <div id="id02" class="modal">
            <form class="modal-content" action="vendor/signup.php" onsubmit="return validate_regform();">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
                    <img src="images/svoboda_logo.png" alt="SVOBODA" class="avatar">
                    <h2>РЕГИСТРАЦИЯ ЛИЧНОГО КАБИНЕТА</h2>
                </div>
                <div class="container">
                    <label for="name">НОМЕР АБОНЕМЕНТА</label>
                    <input type="number" placeholder="Введите номер абонемента (число на углу клубной карты)" name="login" required id="2n">
                    <label for="phone">НОМЕР ТЕЛЕФОНА</label>
                    <input type="text" placeholder="Введите номер телефона" name="phone" required id="phone">
                    <label for="pass">ПАРОЛЬ</label>
                    <input type="password" placeholder="Введите пароль" name="pass" required id="2p0">
                    <label for="pass2">ПОВТОРИТЕ ПАРОЛЬ</label>
                    <input type="password" placeholder="Повторите пароль" name="pass2" required id="2p1">
                    <button type="submit">ЗАРЕГИСТИРОВАТЬСЯ</button>
                </div>
            </form>
        </div>
        <div class="error-block">
            <img src="images/close.svg" alt="error" class="icon">
            <div class="info">
                <h3 id="error-h"></h3>
                <p id="error-p"></p>
            </div>
        </div>

        <div class="about" id="link0">
            <div class="text-block">
                <h2>КРОССФИТ-ЗАЛ "СВОБОДА"</h2>
                <div>
                    <h5>ЧТО ТАКОЕ КРОССФИТ?</h5>
                    <p>
                        Кроссфит – это вид функциональных тренировок, как правило объединяющий в себе кардионагрузки, гимнастические и силовые упражнения. Одна из главных особенностей кроссфита – прохождение кругов, каждый из которых делится на этапы.<br>                        Кроссфит не требует узкоспециализированной программы тренировок, настроенной на развитие определенной группы мышц. Каждая тренировка включает комплексы и упражнения не только на разные группы мышц, но и те задания, что повысят
                        вашу выносливость, гибкость и координацию.<br> Кроссфит – это комьюнити. Уже после первых тренировок вы начнете понимать значение терминов, которые используются в этом сообществе: «киппинг», «емом», «вод» и так далее (emom – every
                        minute on minute; wod – workout of the day).<br>
                    </p>
                </div>
                <div>
                    <h5>ПОЧЕМУ ИМЕННО "СВОБОДА"?</h5>
                    <p>
                        СВОБОДА CrossFit - самый крупный кроссфит-зал в Костроме и области. Кроме размеров, зал оснащен огромным числом оборудования и инвентаря для всех типов тренировок. Опытный тренерский состав поможет научиться правильно выполнять упражнения, составить личные
                        рекомендации относительно тренировок, упражнений и их количества, поможет определиться с правильной диетой в зависимости от Ваших целей.<br> СВОБОДА CrossFit предлает несколько видов абонементов, включающих
                        в себя тренировки в разное время, среди которых вы сможете выбрать удобный для вас вариант. Заниматься в СВОБОДЕ - быть свободным от комплексов, страхов и слабостей человеком.<br>
                    </p>
                </div>
            </div>
            <div class="image">
                <img src="images/svoboda.png" alt="">
            </div>
        </div>
        <div class="sub" id="link1">
            <img src="images/card.png" alt="" class="parallax-card" id="card1">
            <img src="images/card.png" alt="" class="parallax-card" id="card2">
            <img src="images/card.png" alt="" class="parallax-card" id="card3">
            <div class="image">
                <img src="images/card.png" alt="" id="easter-egg">
                <img src="images/card.png" alt="">
            </div>
            <div class="text-block">
                <h2>АБОНЕМЕНТЫ НАШЕГО ЗАЛА</h2>
                <div>
                    <h5>ЧТО МЫ ПРЕДЛАГАЕМ?</h5>
                    <p>
                        Кроме тренировок по многофункциональному многоборью (то есть кроссфита), наш зал также предлагает несколько тренировок разнообразных направленностей. Среди них и растяжка, которая поможет восстановиться после тренировки, и детские танцевальные тренировки
                        (hip-hop, jazz), которые сделают из каждого желающего превосходного танцора, и тхеквондо, которое поможет ребенку укрепить своё физическое состояние, выносливость и силу духа.
                    </p>
                </div>
                <div>
                    <h5>ЦЕНЫ И ВИДЫ АБОНЕМЕНТОВ?</h5>
                    <p>
                        Каждый абонемент включает в себя тренировки с тренером. Выбрать тренера можно при покупке абонемента. В отсутвии вашего тренера, его тренировки будут проводится другими тренерами.
                    </p>
                    <div class="subs">
                        <div>
                            <div class="upper">
                                <h5>
                                    ФУНКЦИОНАЛЬНОЕ МНОГОБОРЬЕ (ДНЕВНОЙ БЕЗЛИМИТ)
                                </h5>
                                <h5>
                                    2500
                                </h5>
                            </div>
                            <p>
                                Безлимитное количетсво посещений дневных тренировок по функциональному многоборью (кроссфит) в течении месяца. Возможность самостоятельного посещения зала и занатий без тренера до 16:00 в любой день недели.
                            </p>
                        </div>
                        <div>
                            <div class="upper">
                                <h5>
                                    ФУНКЦИОНАЛЬНОЕ МНОГОБОРЬЕ (ПОЛНЫЙ БЕЗЛИМИТ)
                                </h5>
                                <h5>
                                    2800
                                </h5>
                            </div>
                            <p>
                                Безлимитное количетсво посещений дневных и вечерних тренировок по функциональному многоборью (кроссфит) в течении месяца. Возможность самостоятельного посещения зала и занатий без тренера с открытия и до закрытия зала в любой день недели.
                            </p>
                        </div>
                        <div>
                            <div class="upper">
                                <h5>
                                    ФУНКЦИОНАЛЬНОЕ МНОГОБОРЬЕ (РАЗОВАЯ ТРЕНИРОВКА)
                                </h5>
                                <h5>
                                    350
                                </h5>
                            </div>
                            <p>
                                Единоразовое посещение любой тренировки в группе или в дневной, или в вечерней группе. Возможно также использование абонемента для единоразового самостоятельного посещения зала и занятий без тренера в любое время с открытия и до закрытия зала.
                            </p>
                        </div>
                        <div>
                            <div class="upper">
                                <h5>
                                    ТХЕКВОНДО (АБОНЕМЕНТ НА МЕСЯЦ)
                                </h5>
                                <h5>
                                    1200
                                </h5>
                            </div>
                            <p>
                                Возможность посещать все тренировки по тхеквондо, которые проводятся по выходным дням. Занятия проводятся для детей до 16 лет. Для всех остальных возможно проведение занятий в индивидуальном формате.
                            </p>
                        </div>
                        <div>
                            <div class="upper">
                                <h5>
                                    ТАНЦЕВАЛЬНЫЕ ГРУППЫ (АБОНЕМЕНТ НА МЕСЯЦ)
                                </h5>
                                <h5>
                                    2000
                                </h5>
                            </div>
                            <p>
                                Возможность посещать все тренировки по выбранному танцевальному направлению (jazz/hip-hop), которые проводятся 3 дня в неделю по специальному расписанию. Занятия проводятся для детей до 16 лет. Для всех остальных возможно проведение занятий в индивидуальном
                                формате.
                            </p>
                        </div>
                        <div>
                            <div class="upper">
                                <h5>
                                    РАСТЯЖКА
                                </h5>
                                <h5>
                                    до 300 за тренировку
                                </h5>
                            </div>
                            <p>
                                Посещение занятия по растяжке под личным наблюдением тренера. Стоимость зависит от количества приобретаемых за раз занятий. Разовая тренировка обойдется в 300 рублей, абонемент на 4 тренировки - 1000 рублей, на 8 - 1800 рублей, на 20 - 3000 рублей.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trainers" id="link2">
            <div id="carouselInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="8000">
                        <div class="d-flex w-100">
                            <div class="first-trainer">
                                <img src="images/trainer1.png" alt="">
                                <div class="text">
                                    <h2>ЮРИЙ ИСОЧКА</h2>
                                    <ul>
                                        <li>- тренерский стаж более 3 лет</li>
                                        <li>- высшее образование в области физкультуры и спорта</li>
                                        <li>- действующий CrossFit-атлет</li>
                                        <li>- призер соревнований по функциональному многоборью</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="second-trainer">
                                <img src="images/trainer2.png" alt="">
                                <div class="text">
                                    <h2>АЛЕКСАНДР СЕМЕНИХИН</h2>
                                    <ul>
                                        <li>- высшее образование в области физкультуры и спорта</li>
                                        <li>- сертифицированный персональный тренер FPA</li>
                                        <li>- тренерский стаж более 10 лет</li>
                                        <li>- действующий кроссфит-атлет</li>
                                        <li>- призер крупнейших турниров России</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                        <div class="d-flex w-100">
                            <div class="first-trainer">
                                <img src="images/trainer3.png" alt="">
                                <div class="text">
                                    <h2>НИКОЛАЙ СМИРНОВ</h2>
                                    <ul>
                                        <li>- тренерский стаж более 5 лет</li>
                                        <li>- высшее образование в области физкультуры и спорта</li>
                                        <li>- действующий CrossFit-атлет</li>
                                        <li>- инструктор-методист по лечебной физкультуре</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="second-trainer">
                                <img src="images/trainer4.png" alt="">
                                <div class="text">
                                    <h2>МАКСИМ МЯСОЕДОВ</h2>
                                    <ul>
                                        <li>- тренерский стаж более 5 лет</li>
                                        <li>- дипломированный диетолог-консультант</li>
                                        <li>- действующий CrossFit-атлет</li>
                                        <li>- инструктор-методист по лечебной физкультуре</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="contacts" id="link3">
            <h2>НАШИ КОНТАКТЫ</h2>
            <div class="text-line">
                <div class="text-block">
                    <p class="first-text">ГДЕ МЫ НАХОДИМСЯ:</p>
                    <p class="second-text">г. Кострома, ул. Станкостроительная, д. 5Б, 3 этаж</p>
                </div>
                <div class="text-block">
                    <p class="first-text">КОНТАКТНЫЙ НОМЕР ТЕЛЕФОНА:</p>
                    <p class="second-text">+7 (960) 744-47-07</p>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7808.957946001432!2d41.005915559135154!3d57.751577287866176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1bf4f423fb8133a8!2z0KHQstC-0LHQvtC00LAg0JrRgNC-0YHRgdGE0LjRgg!5e0!3m2!1sru!2sru!4v1621187475684!5m2!1sru!2sru"
            allowfullscreen="" loading="lazy"></iframe>
        <div class="contacts"></div>

        <footer>
            <div class="left-block">
                <a href="#link0" class="menu-link ">О НАС</a>
                <a href="#link1" class="menu-link">АБОНЕМЕНТЫ</a>
                <a href="#link2" class="menu-link">ТРЕНЕРЫ</a>
                <a href="#link3" class="menu-link">КОНТАКТЫ</a>
            </div>
            <div class="logo">
                <img src="images/svoboda_logo.png" alt="">
            </div>
            <div class="right-block">
                <p class="social-media-header">МЫ В СОЦИАЛЬНЫХ СЕТЯХ</p>
                <a href="" class="menu-link">
                    <img src="images/vk.svg" alt="" class="social-media-logo"> ВКОНТАКТЕ
                </a>
                <a href="" class="menu-link">
                    <img src="images/instagram.svg" alt="" class="social-media-logo"> INSTARGAM
                </a>
                <a href="" class="menu-link">
                    <img src="images/facebook.svg" alt="" class="social-media-logo"> FACEBOOK
                </a>
            </div>
        </footer>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script src="scripts/parallax.js"></script>
<script src="scripts/jquery.min.js"></script>
<!-- Подключение jQuery плагина Masked Input -->
<script src="scripts/jquery.maskedinput.min.js"></script>
<script>
    // Get the modal
    var modal = document.getElementById('id01');
    var modal2 = document.getElementById('id02');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal || event.target == modal2) {
            modal.style.display = "none";
        }
    }

    function validate_authform() {
        let name = document.getElementById('1n');
        let pass = document.getElementById('1p');
        if (name.value.length < 3 || name.value.length > 4) {
            show_error("АБОНЕМЕНТ НЕ СУЩЕСТВУЕТ", "Номера абонемента не существует. Проверьте данные, сверив их с числом на уголке пластиковой клубной карты.");
            return false;
        }
        if (pass.value.length < 6) {
            show_error("ПАРОЛЬ СЛИШКОМ КОРОТКИЙ", "Введенный пароль короче 6 символов. Короткие пароли не могут обеспечить необходимую безопасность.");
            return false;
        }

        return true;
    }

    function validate_regform() {
        let name = document.getElementById('2n');
        let pass = document.getElementById('2p0');
        let pass1 = document.getElementById('2p1');
        let phone = document.getElementById('phone');
        if (name.value.length < 2) {
            show_error("АБОНЕМЕНТ НЕ СУЩЕСТВУЕТ", "Номера абонемента не существует. Проверьте данные, сверив их с числом на уголке пластиковой клубной карты.");
            return false;
        }
        if (pass.value.length < 6) {
            show_error("ПАРОЛЬ СЛИШКОМ КОРОТКИЙ", "Введенный пароль короче 6 символов. Такие пароли нельзя зарегистрировать, поэтому и войти с ним невозможно.");
            return false;
        }
        if (pass.value != pass1.value) {
            show_error("ПАРОЛИ НЕ СОВПАДАЮТ", "Введенный пароль не совпадает с паролем в графе его подтверждения. Проверьте их соответствие и повторите попытку.");
            return false;
        }
        return true;
    }
    var err = document.getElementsByClassName('error-block')[0];
    var h = document.getElementById('error-h');
    var p = document.getElementById('error-p');
    var isActive = false;

    function show_error(name, text) {
        if (!isActive) {
            err.style.display = "flex";
            setTimeout(function() {
                err.style.opacity = "1";
                h.textContent = name;
                p.textContent = text;
            }, 300);
            isActive = true;
            setTimeout(hide_error, 5000);
        }

    }

    function hide_error() {
        err.style.opacity = "0";
        setTimeout(function() {
            err.style.display = "none";
        }, 300);
        isActive = false;
    }

    function check_session(){
        let a = "<?= isset($_SESSION['user'])?>";
        if (a=="1") {
            return true;            
        }
        else {
        document.getElementById('id01').style.display='block';
        return false;
        }
    }

    $(function() {
        $("#phone").mask("+7 (999) 999 99 99");
    });

    $('img').attr('draggable', false);
</script>


</html>