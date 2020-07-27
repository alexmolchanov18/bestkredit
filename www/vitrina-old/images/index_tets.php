<?php
require_once 'MediaBuying.php';
$mediaBuying = new MediaBuying();
$mediaBuying->sendGetParams();
//var_dump($_COOKIE);
//echo "<pre>";
//var_dump($_SERVER);
$promo = "undefined";
if (!empty($_REQUEST['q'])) {
    $promo = substr(htmlspecialchars(trim($_REQUEST['q'])),0,200);
}
$campaign = "undefined";
if (!empty($_REQUEST['utm_campaign'])) {
    $campaign = substr(htmlspecialchars(trim($_REQUEST['utm_campaign'])),0,200);
}
$source = "undefined";
if (!empty($_REQUEST['utm_source'])) {
    $source = substr(htmlspecialchars(trim($_REQUEST['utm_source'])),0,200);
}
$term = "undefined";
if (!empty($_REQUEST['utm_term'])) {
    $term = substr(htmlspecialchars(trim($_REQUEST['utm_term'])),0,200);
}
function gaParseCookie() {
    if (isset($_COOKIE['_ga'])) {
        list($version,$domainDepth, $cid1, $cid2) = split('[\.]', $_COOKIE["_ga"],4);
        $contents = array('version' => $version, 'domainDepth' => $domainDepth, 'cid' => $cid1.'.'.$cid2);
        $cid = $contents['cid'];
    } else $cid = getDefaultTid2();
    return $cid;
}

function getDefaultTid2() {

    $tid2 = "undefined";

    $name = explode(".", $_SERVER['SERVER_NAME']);
    $name = $name[0];

    if (!empty($_GET['tid2'])) {
        $tid2 = $_GET['tid2'];
    } else if(!empty($_COOKIE[$name])) {
        $params = unserialize($_COOKIE[$name]);
        $tid2 = $params[5];
    } else {
        $tid2 = gaGenUUID();
    }

    return $tid2;
}

function gaGenUUID() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        // 16 bits for "time_mid"
        mt_rand(0, 0xffff),
        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand(0, 0x0fff) | 0x4000,
        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand(0, 0x3fff) | 0x8000,
        // 48 bits for "node"
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}
$tid2 = gaParseCookie();

$sdHost = 'https://go.salesdoubler.net';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Выгодные онлайн займы и кредиты на карту - BestKredit</title>
    <meta name="description" content="">
    <!--<script>
window.fakeSearchURL = 'https://googla.live?q=кредит+онлайн&oq=кредит+онлайн&aqs=chrome..69i57j69i60j69i61l2j0l2.5279j0j&nrt=google_organick_result&f+ddefgrgr&kredit_online&sourceid=chrome&ie=UTF-8';
window.siteURL = 'https://bestkredit.org/';
 </script>-->
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHDJPVQ');
    </script>
    <!-- End Google Tag Manager -->

    <!--for-mobile-apps-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--//for-mobile-apps-->
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <!-- Custom-Theme-Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/form.css" type="text/css" media="all">


</head>

<body>


<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHDJPVQ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<!--<script src="./index.min.js"></script>-->
<div class="container">

</div>
<div class="header" id="home" style="border: 0px solid red; border-top: 1px solid #EBEBEB;">
    <div class="container">
        <div class="menu">
            <nav class="navbar navbar-default">
                <div class="header-content">
                    <h1>Самые выгодные онлайн займы<br>и кредиты на карту в Украине!</h1>
                    <h2>Рекомендуем оформить максимум заявок, чтобы увеличить свои шансы получения кредита до 100%
                    </h2>
                </div>
                <!-- Header Content Ends Here -->
                <div class="clearfix"></div>
            </nav>
        </div>
        <!-- Menu Ends -->
    </div>
</div>
<!-- Header Ends -->
<div class="icon-info grayBg" id="what">
    <div class="container">
        <div class="row minWidth">
            <div class="infoMoney row">
                <div class="logoCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1492?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank" id="creditkasa">
                        <img id="creditkasa" src="images/creditkasa.jpg">
                    </a>
                </div>
                <div class="stavkaCredit">	<span>Ставка</span>
                    <p>0% в день</p>
                </div>
                <div class="summCredit">	<span>Сумма</span>
                    <p>10 000 грн</p>
                </div>
                <div class="methodCredit">	<span>Способ</span>
                    <div>
                        <img src="images/icon-card.svg">
                    </div>
                </div>
                <div class="descriptionCredit">	<span>Деньги, на карте за 5 мин</span>
                    <p>Первый кредит 0%</p>	<span>Без кредитной истории</span>
                </div>
                <div class="buttonCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1492?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank">
                        <button id="creditkasa" class="credit">Оформить кредит</button></a>
                </div>
            </div>
        </div>

        <div class="row minWidth" style="position: relative;">
            <div class="specialImg">
                <img src="images/img-special-offer.png" alt=""><span>Наличка и карта</span>
            </div>
            <div class="infoMoney row">
                <div class="logoCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1272?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank" id="svgroshi">
                        <img id="svgroshi" src="images/img-company-sg.svg">
                    </a>
                </div>
                <div class="stavkaCredit">	<span>Ставка</span>
                    <p>2% в день</p>
                </div>
                <div class="summCredit">	<span>Сумма</span>
                    <p>5 000 грн</p>
                </div>
                <div class="methodCredit">	<span>Способ</span>
                    <div>
                        <img src="images/icon-card.svg">
                        <img src="images/icon-money.svg">
                    </div>
                </div>
                <div class="descriptionCredit">	<span>Выдача наличными</span>
                    <p>Без проверки КИ</p>	<span>Большая сеть отделений</span>
                </div>
                <div class="buttonCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1272?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank">
                        <button id="svgroshi" class="credit">Оформить кредит</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row minWidth">
            <div class="infoMoney row">
                <div class="logoCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1571?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank" id="dinero">
                        <img id="dinero" src="images/img-company-dinero.svg">
                    </a>
                </div>
                <div class="stavkaCredit">	<span>Ставка</span>
                    <p>0% в день</p>
                </div>
                <div class="summCredit">	<span>Сумма</span>
                    <p>11 000 грн</p>
                </div>
                <div class="methodCredit">	<span>Способ</span>
                    <div>
                        <img src="images/icon-card.svg">
                    </div>
                </div>
                <div class="descriptionCredit">	<span>Первый кредит 0%</span>
                    <p>Первый кредит 0%</p>	<span>Любая кредитная история</span>
                </div>
                <div class="buttonCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1571?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank">
                        <button id="dinero" class="credit">Оформить кредит</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row minWidth" style="position: relative;">
            <div class="specialImg">
                <img src="images/img-special-offer.png" alt=""><span>95% одобрений</span>
            </div>
            <div class="infoMoney row">
                <div class="logoCredit">
                    <a href="https://go.salesdoubler.net/in/offer/250?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank" id="moneyveo">
                        <img id="moneyveo" src="images/img-company-moneyveo.svg" alt="Отзывы о компании Moneyveo">
                    </a>
                </div>
                <div class="stavkaCredit">	<span>Ставка</span>
                    <p>0% в день</p>
                </div>
                <div class="summCredit">	<span>Сумма</span>
                    <p>15 000 грн</p>
                </div>
                <div class="methodCredit">	<span>Способ</span>
                    <div>
                        <img src="images/icon-card.svg">
                    </div>
                </div>
                <div class="descriptionCredit">	<span>Первый кредит под 0%</span>
                    <p>Выдача 24/7</p>	<span>Деньги на карту за 7 минут</span>
                </div>
                <div class="buttonCredit">
                    <a href="https://go.salesdoubler.net/in/offer/250?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank">
                        <button id="moneyveo" class="credit">Оформить кредит</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row minWidth" style="position: relative;">
            <div class="specialImg">
                <img src="images/img-special-offer.png" alt=""><span>Рекомендуем</span>
            </div>
            <div class="infoMoney row">
                <div class="logoCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1556?aid=65264&dlink=https://cashinski.com.ua/ru/june-bomb/&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank" id="cashinsky">
                        <img id="cashinsky" src="images/cashinsky.jpg">
                    </a>
                </div>
                <div class="stavkaCredit">	<span>Ставка</span>
                    <p>0% в день</p>
                </div>
                <div class="summCredit">	<span>Сумма</span>
                    <p>до 3 000 грн</p>
                </div>
                <div class="methodCredit">	<span>Способ</span>
                    <div>
                        <img src="images/icon-card.svg">
                    </div>
                </div>
                <div class="descriptionCredit">	<span>Одобрение заявок 95%</span>
                    <p>Решение по кредиту - 5 мин</p>	<span>Без кредитной истории</span>
                </div>
                <div class="buttonCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1556?aid=65264&dlink=https://cashinski.com.ua/ru/june-bomb/&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank">
                        <button id="cashinsky" class="credit">Оформить кредит</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row minWidth">
            <div class="infoMoney row">
                <div class="logoCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1610?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank" id="forza">
                        <img id="forza" src="images/forza.png">
                    </a>
                </div>
                <div class="stavkaCredit">	<span>Ставка</span>
                    <p>0% в день</p>
                </div>
                <div class="summCredit">	<span>Сумма</span>
                    <p>4000 грн</p>
                </div>
                <div class="methodCredit">	<span>Способ</span>
                    <div>
                        <img src="images/icon-card.svg">
                    </div>
                </div>
                <div class="descriptionCredit">	<span>Любая кредитная история</span>
                    <p>Первый кредит НОЛЬ %</p>	<span>Хороший % одобрения</span>
                </div>
                <div class="buttonCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1610?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank" id="forza">
                        <button id="forza" class="credit">Оформить кредит</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row minWidth">
            <div class="infoMoney row">
                <div class="logoCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1509?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank" id="alexcredit">
                        <img id="alexcredit" src="images/img-company-alex.svg">
                    </a>
                </div>
                <div class="stavkaCredit">	<span>Ставка</span>
                    <p>0% в день</p>
                </div>
                <div class="summCredit">	<span>Сумма</span>
                    <p>3 000 грн</p>
                </div>
                <div class="methodCredit">	<span>Способ</span>
                    <div>
                        <img src="images/icon-card.svg">
                    </div>
                </div>
                <div class="descriptionCredit">	<span>Деньги, на карте за 5 мин</span>
                    <p>Первый кредит 0%</p>	<span>Любая кредитная история</span>
                </div>
                <div class="buttonCredit">
                    <a href="https://go.salesdoubler.net/in/offer/1509?aid=65264&source=<?php echo $source;?>&campaign=<?php echo $campaign;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $term;?>" target="_blank">
                        <button id="alexcredit" class="credit">Оформить кредит</button>
                    </a>
                </div>
            </div>
        </div>
        <div></div>
        <div class="contact" id="contact">
            <div class="container">
                <div class="padding-contact">
                    <div class="newsletter-title">
                        Подписывайся на рассылку и получайте самые горячие предложения от МФО
                    </div>
                    <form method="post" action="/sputnik.php">
                        <div class="form-panel">
                            <div class="form-line line-1">
                                <input required="" class="firstname" type="text" name="firstname" placeholder="Имя">
                            </div>
                            <div class="form-line line-2">
                                <input required="" class="email" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-line last-line">
                                <input id="mail" class="js-mail-send" type="submit" name="subscribe" value="Подписаться">
                            </div>
                        </div>
                        <div class="js-thanks form-group has-success" style="display:none">
                            <div class="form-control-feedback js-msg-text" style="position:relative; margin-left: 10px; width: 350px">
                                Спасибо. Вы успешно полписались на рассылку.
                            </div>
                        </div>
                        <div class="js-error form-group has-danger" style="display:none;">
                            <div class="form-control-feedback" style="color:#d9534f;position:relative; width: 350px">
                                Ошибка. Ввведите корректные данные.
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- icon-info -->
    <div class="contact" id="contact">
        <div class="container">
            <div class="padding-contact">
                <h3>Условия предоставления кредита</h3>
                <p>Кредит выдается в сумме от 1 000 грн. до 200 000 грн. Процент исчисляется в год использования кредита (согласно Федеральному закону No353-ФЗ) от 30% до 360%. Условия выдаются индивидуально каждому пользователю. Размер неустойки за просрочку оплаты составляет 0,10% от суммы просроченной задолженности за каждый день нарушения обязательств, но не больше 10% от суммы. Пример рассчета Пример расчета: допустим вы берете 60 000 гривен на 6 месяцев под процентную ставку в размере 4,5% в месяц. Переплата за весь период составит 8 100 гривен. То есть вам надо будет вернуть 68 100 гривен. Процентная ставка 0% действует только для тех клиентов, кто ранее не брал займов. При условии полного отсутствия нарушений и задержек платежей по кредиту. Срок кредита составляет от 65 до 365 дней. Возможно как досрочное погашение, так и продление кредита. При досрочном погашении комиссия будет пересчитана таким образом, что пользователь кредита будет платить только за то время, которое реально использовано. Пример расчета: вы оформили кредит на 60 000 гривен, и погасили его досрочно уже через 30 дней. При процентной ставке 4,5% в месяц, общая сумма к возврату составит 31 350 гривен.</p>
                <h3>Пример расчета займа</h3>
                <p>Клиент берет займ размером 900 гривен на срок 90 дней, процент за использование займа – 10% в месяц. Сумма, подлежащая возврату со стороны клиента, составит 1170 гривен, из которых 900 гривен сам займ и 270 гривен – проценты, начисленные за использование займа.</p>
                <h3>Последствия, наступающие при неуплате заемных средств</h3>
                <p>В случае несвоевременной уплаты заемщиком платежей по займу, включая начисленные проценты, в установленный срок, кредитор вправе требовать неустойку, за время просрочки платежа по кредиту. Кредитные организации предоставляют дополнительные три дня, для частичного или полного погашения кредита, с целью помощи кредиторам в форсмажерных ситуациях. Однако если заемщик не вносит необходимых платежей, кредитная организация предупреждает заемщика, используя любой доступный канал связи. Если кредитная организация не может связаться с заемщиком, заемщику начисляется штраф, в среднем штраф составляет 0,1% от общей суммы займа (данные условия уточняйте пожалуйста в момент подписания договора). При существенной просрочке платежей сведения могут быть переданы в реестр должников, а сама задолженность передана в коллекторам. Пожалуйста, платите ваши платежи по кредиту во время, при невозможности своевременной оплаты, сообщите об этом в кредитную организацию, у которой вы брали кредит. Информация о дате погашения кредита, доступна в момент подписания договора. Чем больше вы берете денежных средств в долг, своевременно возвращая их, тем лучше ваша кредитная история. А это значит, что вы сможете получать больше денег под меньший процент и на более долгий срок. Иными словами на более выгодных условиях.</p>
                <h3>Лицензии кредитных организаций</h3>
                <p>SOS Credit - No 163. от 14 января 2016 года. ШвидкоГроші - IК No78. распоряжение от 28.02.2017 р. No438. MyCredit - IK No146, регистрационный номер No16103223, от 20.10.2015 года. CreditPlus - IK No146, регистрационный номер No16103223, от 20.10.2015 года. Alexcredit - 044-3893303 CCloan - ФК No809, No40071779, от 14.04.2016 года. ЕвроГроши - IK No177, регистрационный номер No40203427, от 21.07.2016 года. Море грошей - ИК No151, ЕГРПОУ No76554984 от 10.11.2015 года. Ваша Готiвочка - ФК No 367. от 06.12.2012р. Всем кредит - ЕГРПОУ 41184403, ЕГРПОУ 40125944, ЄДРПОУ 37356833, ЕГРПОУ 40203427, ЕГРПОУ 40071779. Быстрозайм - серия IK No 118 от 24.09.2013 года. CashMe - No 616, No 16102194, от 15.05.2008 года . Альфа банк - 2017 ПАО «Альфа-Банк» (Украина). Лицензия НБУ No61 от 05.10.2011г. Простозайм - ІК No 118, от 24.09.2013 года. Глобал кредит - АВ 614820 от 04.02.2013 года. Credit356 - ЕГРПОУ No 55439877 от 18.05.2017 (бессрочная). Crediton - серия IK No 153 от 31.12.2015г. KLTcredit - ФК No 682 от 29.12.2015г.</p>
                <h3>Требования к заемщикам</h3>
                <p>Возраст от 18 лет</p>
                <p>Гражданство - Украина</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container">
        <div class="col-md-6 col-sm-9">
            <a class="logo-footer" href="#">
                <!--<img src="./images/logotype-creditwallet.svg" alt="logo image">-->
            </a>
            <h4 class="addressFooter">г. Днепр, ул. Яворницкого, 41-Б</h4>
        </div>
        <div class="col-md-6 col-sm-3">
            <div class="iconInfo">
                <a href="#win3">
                    <img src="images/icon-info.png" alt="">
                </a>
            </div>
            <div class="links">
                <ul>
                    <!--<li><a href="#win1">Политика конфиденциальности</a>
                    </li>
                    <li><a href="#win2">Пользовательское соглашение</a>
                    </li>-->
                </ul>
            </div>
        </div>
        <div class="dm-overlay" id="win1">
            <div class="dm-table">
                <div class="dm-cell">
                    <div class="dm-modal">
                        <a href="#close" class="close"></a>
                        <h3>Политика Конфиденциальности</h3>
                        <p>Владелец сайта creditwallet.com.ua (далее Центр по подбору кредитов или Администрация) обязуется сохранять Вашу конфиденциальность в сети Интернет. Настоящая Политика Конфиденциальности, рассказывает о том, как собираются, обрабатываются и хранятся Ваши личные данные. Администрация уделяет большое внимание защите личной информации пользователей. Пользуюсь сайтом Центр по подбору кредитов, пользователь тем самым дает согласие на применение правил сбора и использования данных, изложенных в настоящем документе.</p>	<span>Если Вы не согласны с условиями нашей политики конфиденциальности, не используйте сайт Центр по подбору кредитов!</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dm-overlay" id="win2">
            <div class="dm-table">
                <div class="dm-cell">
                    <div class="dm-modal">
                        <a href="#close" class="close"></a>
                        <h3>Пользовательское соглашение</h3>
                        <p>Администрация не собирает никакой личной информации о пользователе. Однако, личную информацию пользователя могут собирать внешние организации (третьи стороны), предоставляющие инструменты для сбора информации о состоянии сайта. По этой причине, Центр по подбору кредитов снимает с себя ответственность по сохранению конфиденциальности данных пользователя. С Условиями Конфиденциальности третьих сторон, пользователь может ознакомиться на их сайтах.</p>	<span>Дети любых возрастов могут беспрепятственно пользоваться данным сайтом.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dm-overlay" id="win3">
            <div class="dm-table">
                <div class="dm-cell">
                    <div class="dm-modal listMyCredit">
                        <a href="#close" class="close"></a>
                        <h3>г. Днепр, ул. Яворницкого, 41-А.</h3>
                        <!--<ul>
                            <li><a href="#win1">Политика конфиденциальности</a>
                            </li>
                            <li><a href="#win2">Пользовательское соглашение</a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($) {
        $('.js-mail-send').on('click', function(e) {
            e.preventDefault();
            var name = $('input[name="firstname"]').val();
            var email = $('input[name="email"]').val();
            if (!name || !email || !isEmail(email)) {
                $('.js-thanks').hide();
                $('.js-error').fadeIn();
                return true;
            }
            $('.js-error').hide();
            $.post('/sputnik.php', {'name':name, 'email': email}, function(data) {

                $('.js-thanks').fadeIn();
            })
        });

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
    });
</script>


</body>

</html>