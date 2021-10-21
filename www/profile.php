<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
if ($_SESSION['user']['name2']===NULL){
    $_SESSION['user']['name2']='Атлет';
}
header('content-type: text/html; charset=utf-8');
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
    <title>СВОБОДА CrossFit</title>
</head>

<body id="acc-main">
    <header>
        <div class="container-fluid main-menu">
            <div class="logo"><img src="images/svoboda_logo.png" alt=""></div>
            <div class="menu">
                <a href="index.php#link0" class="menu-link">О НАС
                    <div class="under-block"></div>
                </a>
                <a href="index.php#link1" class="menu-link">АБОНЕМЕНТЫ
                    <div class="under-block"></div>
                </a>
                <a href="index.php#link2" class="menu-link">ТРЕНЕРЫ
                    <div class="under-block"></div>
                </a>
                <a href="index.php#link3" class="menu-link">КОНТАКТЫ
                    <div class="under-block"></div>
                </a>
                <a class="login disabled"><img src="images/login_menu.svg" alt=""></a>
            </div>
        </div>
    </header>
    <main>
        <div class="account">
            <div class="info">
                <h2 class="user-name">Добро пожаловать в СВОБОДУ, <?=$_SESSION['user']['name2']?>!</h2>
                <div class="string">
                    <p class="first-text">Номер телефона: </p>
                    <p class="second-text active" id="output-1">+7 (999) 999 99 99</p>
                </div>
                <div class="string">
                    <p class="first-text">Номер абонемента: </p>
                    <p class="second-text"><?=$_SESSION['user']['abon']?></p>
                </div>
                <div class="string">
                    <p class="first-text">Текущий абонемент: </p>
                    <p class="second-text" id="output-2">Отсутствует</p>
                </div>
                <div class="string">
                    <p class="first-text">Статус абонемента: </p>
                    <p class="second-text active" id="output-3">Ожидается оплата</p>
                </div>
                <div class="string">
                    <p class="first-text">Дата следующего продления: </p>
                    <p class="second-text active" id="output-4">Ожидается первая оплата</p>
                </div>
                <form action="vendor/logout.php">
                <button>
                    ВЫЙТИ
                    <img src="images/logout.svg" alt="">
                </button>
                </form>
            </div>
            <div class="card">
                <p class="number" id="output-5">000</p>
                <div class="second">
                     <img src="images/svoboda_logo.png" alt="SVOBODA" class="logo">
                    <p id="output-6">ВАШЕ ИМЯ</p>
                </div>
            </div>
        </div>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script src="scripts/jquery.min.js"></script>
<script>
    const o1 = document.getElementById("output-1");
    const o2 = document.getElementById("output-2");
    const o3 = document.getElementById("output-3");
    const o4 = document.getElementById("output-4");
    const o5 = document.getElementById("output-5");
    const o6 = document.getElementById("output-6");

    let temp1 = <?=$_SESSION['user']['phone']?>;
    temp1 = temp1.toString();
    o1.innerHTML = '+7 (' + temp1.slice(0,3) + ') '+temp1.slice(3, 6)+'-'+temp1.slice(6, 8)+'-'+temp1.slice(8, 10);

    let temp2 = <?=$_SESSION['user']['type']?>;
    temp2 = temp2.toString();
    switch(temp2) {
    case '0':
        o2.innerHTML = 'Дневной безлимит';
        break;
    case '1':
        o2.innerHTML = 'Полный безлимит';
        break;
    case '2':
        o2.innerHTML = 'Танцевальный абонемент';
        break;
    case '3':
        o2.innerHTML = 'Тхэквондо';
        break;        
    }

    let temp3 = "<?=$_SESSION['user']['date']?>";
    let a = temp3.slice(0,4), b = temp3.slice(5,7), c = temp3.slice(8,10);
    let date = new Date(temp3);
    let curdate = new Date();
    let active = Math.ceil((date.getTime() - curdate.getTime()) / (1000 * 3600 * 24));

    if (active<=0) {
        o4.innerHTML = c + '.' + b + '.' + a + ' (до следующего продления 0 дней)'
        o3.innerHTML = 'Ожидает оплаты';
    }
    else{        
        o4.innerHTML = c + '.' + b + '.' + a + ' (до следующего продления '+ active +' дней)'
        o3.innerHTML = 'Активен';
    }

    o5.innerHTML = "<?=$_SESSION['user']['abon']?>";
    o6.innerHTML = "<?=$_SESSION['user']['name2']?>".toUpperCase()+" "+"<?=$_SESSION['user']['name1']?>".toUpperCase();

</script>


</html>