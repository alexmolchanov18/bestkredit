<?php 
     if($_GET['gclid'] == true){
        $gclid_utm = $_GET['gclid'];
        $gclid = "campaign=${gclid_utm}";
        $cookie_name = "gclid";
        setcookie($cookie_name, $gclid, time() + (86400 * 30), "/");
      }else{
        $gclid = "campaign=";
        $cookie_name = "gclid";
        setcookie($cookie_name, $gclid, time() + (86400 * 30), "/");
      }

?>
<!DOCTYPE html>
<html lang="ru">
    <head>
         <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TG9CL8K');</script>
        <!-- End Google Tag Manager -->
       
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Получи кредит на карту любого банка ✔ До 15 000 грн ✔ Без залога и получителей ✔Нужен только паспорт и код  ➤">
        <title>Возьми кредит под 0% за 8 минут - Bestkredit.org</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
    </head>
    <body class="interactive-header">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TG9CL8K"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <div class="wrapperF">
            <div class="wrapper-block">
                <header class="header">
                    <div class="logo">
                        <img src="image/logo-mob.png" alt="kredit">
                    </div>
                    <div class="top-name" id="form-anch">
                        <p>Кредит на карту онлайн под 0% за 8 минут</p>
                        <p>До 15 000 грн. Только паспорт и код. <br><span>Без залогов, поручителей, и дополнительных документов.</span><br></p>
                    </div>
                    <div class="block-form">
                        <div class="summ-credit">
                            <p class="mob-text">Ваш кредит</p>
                            <div class="desct-culc">
                                <div class="calculate-block">
                                    <p>Вы берете: <span class="audience">5000</span><span> грн</span></p>
                                    <p>Под процент: <span class="per">0.01%</span></p>
                                    <p>Возвращаете: <span class="otd">5 000,5</span><span> грн</span></p>
                                </div>
                            </div>
                            <div class="slider-1 cost-slider"></div>
                            <div class="span-min-max-sum"><span>от 500 грн</span><span class="last-span">до 15000 грн</span></div>
                            <div class="slider-2 cost-slider"></div>
                            <div class="span-min-max-sum">
                                <span>от 61 дня</span>
                                <span>до 180 дней</span>
                            </div>
                        </div>
                        <div class="form">
                            
                            <form id="smForm" action="/smartmoney/" method="post">
                                <input type="text" name="name" id="name" required placeholder="Ваше имя" required>&ensp;<div style="width:5px"></div>
                                <input type="text" name="phone" id="phone" required="" placeholder="Ваш телефон" required >&ensp;<div style="width:5px"></div>
                                <div class="desct-mob">
                                    <div class="calculate-block">
                                        <p>Вам нужно: <span class="audience">5000</span><span> грн</span></p>
                                        <p>Под процент: <span class="per">0.01%</span></p>
                                        <p>Возвращаете: <span class="otd">5 000,5</span><span> грн</span></p>
                                    </div>
                                </div>
                                <button type="submit" id="form-btn" class="hover">Получить кредит</button>
                            </form>
                            <div class="checkbox-box">
                                <input type="checkbox" id="confirmation" checked>
                                <label for="confirmation">Даю согласие на обработку <a href="privacy.html">персональных данных</a> и согласен с <a href="terms.html">условиями использования</a></label></div>
                            </div>
                        </div>
                    </header>
                    <main class="main">
                        <div class="how-to-block">
                            <div class="name-block">
                                <p>Получите деньги на вашу банковскую карту!</p>
                                <p>Взять кредит онлайн просто:</p>
                            </div>
                            <div class="step-block">
                                <div class="step-itm">
                                    <p class="name-step">Оформляете заявку</p>
                                    <div class="img-step"><img src="image/document-img.png" alt=""></div>
                                </div>
                                <div class="step-itm">
                                    <p class="name-step">Ждете 8 минут</p>
                                    <div class="img-step"><img src="image/clock-img.png" alt=""></div>
                                </div>
                                <div class="step-itm">
                                    <p class="name-step">Деньги у вас на карте</p>
                                    <div class="img-step"><img src="image/money-for-card.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="animate-number full-width">
                            <div class="number-block">
                                <div class="number-itm">
                                    <div style="font-size: 58px;color: #fff;font-weight: 600;">20 387</div>
                                    <p>Подано заявок</p>
                                </div>
                                <div class="number-itm">
                                    <div style="font-size: 58px;color: #fff;font-weight: 600;">18 850</div>
                                    <p>Выдано кредитов</p>
                                </div>
                                <div class="number-itm">
                                    <div style="font-size: 58px;color: #fff;font-weight: 600;">2 398</div>
                                    <p>Победители акций</p>
                                </div>
                            </div>
                            <a class="scrollUp" href="#form-anch" style="text-align: center;"><button class="get-money number-btn " id="btn-scroll1">Получить деньги</button></a>
                        </div>
                        <!--             <div class="animate-number full-width">
                            <div class="number-block">
                                <div class="number-itm">
                                    <div id="yes" class="timer spincrement" data-from="0" data-to="30468" data-speed="2000" data-target="#yesyes"></div>
                                    <p>Подано заявок</p>
                                </div>
                                <div class="number-itm">
                                    <div id="no" class="timer spincrement" data-from="0" data-to="27140 " data-speed="2000" data-target="#nono"></div>
                                    <p>Выдано кредитов</p>
                                </div>
                                <div class="number-itm">
                                    <div id="no" class="timer spincrement" data-from="0" data-to="3219 " data-speed="2000" data-target="#nono"></div>
                                    <p>Победители акций</p>
                                </div>
                            </div>
                            <button class="get-money number-btn " id="btn-scroll1">Получить деньги</button>
                        </div> -->
                        <div class="commetns">
                            <div class="comments-block">
                                <div class="name-block">
                                    <p>Отзывы</p>
                                    <hr>
                                </div>
                                <div class='wrap'>
                                    <ul class='carousel is-set'>
                                        <li class='carousel-seat'>
                                            <p>Саша, м. Дубно</p>Позичав гроші в кількох компаніях і випадково знайшов Bestkredit.org. На подив все виявилось швидше, легше, з меншими відсотками порівняно з іншими. Наразі буду користуватись ними.
                                        </li>
                                        <li class='carousel-seat'>
                                            <p>Юля, с. Тарасовка</p>В нашей стране без таких компаний не обойтись. Конечно не все так однозначно, но однозначно, проще, чем в банке.
                                        </li>
                                        <li class='carousel-seat'>
                                            <p>Андрей, г. Киев</p>Пользуюсь, когда срочно нужны деньги
                                        </li>
                                        <li class='carousel-seat'>
                                            <p>Люба, г. Броди</p>Подобається тут брати кредит – дають на вибір багато компаній. Багато пропозицій під 0%. Головне вчасно віддавати і тоді не переплачуєш.
                                        </li>
                                        <li class='carousel-seat'>
                                            <p>Аня С, Бровары</p>Несколько дней назад оформила здесь кредит «Моневео». Деньги получила на банковскую карту, оформила буквально за 20 минут.
                                        </li>
                                        <li class='carousel-seat'>
                                            <p>Максим, г. Черкассы</p>Реально сервис выручает. Бывает такое, что потратишься в ноль, а потом думаешь, за что на работу ездить или пополнить телефон. А тут пришел и взял каких то 700 гривен до зарплаты.
                                        </li>
                                        <li class='carousel-seat'>
                                            <p>Кирилл, с. Новые Петровцы</p>Нахожу здесь кредиты под 0. Удобно, все в одном месте.
                                        </li>
                                        <li class='carousel-seat'>
                                            <p>Настя, г. Тарутино</p>Взяла ребенку на подарок на день рождения. Выплатила в срок, все окей.
                                        </li>
                                        <li class='carousel-seat'>
                                            <p>Марина, г. Харьков</p>Спасибо, выручили, когда нужно было срочно оплатить ремонт стиралки. Переплатила, конечно, но за скорость и легкость получения денег я готова платить.
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class='controls'>
                                    <button class='toggle'><</button>
                                    <button class='toggle' data-toggle='next'>></button>
                                </div> -->
                            </div>
                        </div>
                    </main>
                    <footer class="footer">
                        <div class="footer-logo">
                            <img src="image/logo-mob.png" alt="kredit">
                        </div>
                        <div class="footer-text">
                            
                            <p>
                                Пример расчета займа<br>
                                Soscredit.ua - при взятии в долг 500 грн. на 3 месяцев с продлением, комиссия 445,5 грн., общие затраты на займ составляют 945.50 грн., APR 482%.<br>
                                Miloan.ua - при взятии в долг 3000 грн. на 3 месяцев с продлением, комиссия 3510 грн., общие затраты на займ составляют 6510 грн., APR 619%<br>
                                Mycredit.ua - при взятии в долг 3000 грн. на 3 месяцев с продлением, комиссия 2671 грн., общие затраты на займ составляют 5671 грн., APR 481%.<br>
                                Topcredit.org.ua - при взятии в долг 1000 грн. на 3 месяцев с продлением, комиссия 1325 грн., общие затраты на займ составляют 2325 грн., APR 693%.<br>
                                Vashagotivochka.ua - при взятии в долг 5000 грн. на 3 месяцев с продлением, комиссия 9000 грн., общие затраты на займ составляют 14000 грн., APR 916%.<br>
                                KF.ua - при взятии в долг 10000 грн. на 6 месяцев, комиссия 8775.90 грн., общие затраты на займ составляют 18775.9 грн., APR 259%.<br>
                                Bistrozaim.ua - при взятии в долг 10000 грн. на 3 месяцев, комиссия 18000 грн., общие затраты на займ составляют 28000 грн., APR 915%.<br>
                                Creditkasa.com.ua - при взятии в долг 4000 грн. на 3 месяцев, комиссия 5610 грн., общие затраты на займ составляют 9610 грн., APR 730%.<br>
                                Alexcredit.com.ua - при взятии в долг 5000 грн. на 3 месяцев с продлением, комиссия 5864 грн., общие затраты на займ составляют 10864 грн., APR 620%.<br>
                                Cashinsky.ua - при взятии в долг 1000 грн. на 3 месяцев, комиссия 1661.70 грн., общие затраты на займ составляют 2661.70 грн., APR 851%.<br>
                                Sgroshi.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 5040 грн., общие затраты на займ составляют 8040 грн., APR 860%.<br>
                                Cashup.com.ua - при взятии в долг 1000 грн. на 3 месяцев, комиссия 1061.70 грн., общие затраты на займ составляют 2061.70 грн., APR 547.5%.<br>
                            </p><br>
                            
                            
                            <p>
                                Образец расчета годовой процентной ставки:<br>
                                Пример расчета первого займа: при сумме займа = 1000 грн. плата за пользование средствами составит 0,1 грн. в день, что соответствует % ставке, равной 0,01% в день. APR — 1,5%. Компания выдает займы клиентам на основании договора, который действует до выполнения Сторонами всех обязательств по договору. Клиент может пользоваться займом неограниченный срок в рамках договора, при условии оплаты процентов за пользование займом каждые 10 дней.
                                
                                
                                Пример расчета повторного займа: при сумме займа = 1000 грн. плата за пользование средствами составит 19 грн. в день, что соответствует % ставке, равной 1,9% в день. APR — 693,5%. Компания выдает займы клиентам на основании договора, который действует до выполнения Сторонами всех обязательств по договору. Клиент может пользоваться займом неограниченный срок в рамках договора, при условии оплаты процентов за пользование займом каждые 10 дней.
                            </p><br>
                            
                            <p>
                                Минимальный срок погашения кредита 65 дней. <br>
                                Максимальный срок погашения кредита 365 дней или до выполнения обязательств со стороны заёмщика.
                                Максимальная годовая процентная ставка 693,5%.
                                Пример расчета общей стоимости кредита: 1000грн. тело + ( 1000 грн. тело х 1,9% в день х 90 дней. пример срок кредита) = 2710 гривен.<br>
                                
                                
                                Финансовая ответственность Заемщика в случае невыполнения обязательств по договору займа:<br>
                                • Может быть начат процесс принудительного взыскания долга в судебном порядке или возможна передача права требования долга третьим лицам.
                                • Обязательное начисление пени, которая насчитываются за просроченный платеж в размере 1% от тела просроченного кредита за каждый день просрочки, начиная с первого дня просрочки до момента погашения займа и платы за его пользование.<br>
                                Условия продления договора займа:<br>
                                Заёмщик вправе продлить срок займа, оплатив указанную выше плату за пользование займом. Минимальный срок погашения долга – 65 дней, а максимальный – 365 дней или до выполнения Сторонами всех обязательств по договору.
                            </p>  <br>
                            
                            
                            
                            <p>Контакты  реквизиты кредитных компаний<br>
                                Сredit Plus ООО «АВЕНТУС УКРАИНА»; ЕГРПОУ 41078230; г. Киев, ул. Сурикова 3А<br>
                                SOS Credit ООО «СОС Кредит Холдинг Б.В.»; ЕГРПОУ 39487128; г. Киев, ул. Красногвардейская, 1В<br>
                                ШвидкоГроші ООО «ПОТРЕБИТЕЛЬСКИЙ ЦЕНТР»; ЕГРПОУ 37356833; г. Киев, ул. Саксаганского, 133-А<br>
                                Miloan ООО «МИЛОАН»; ЕГРПОУ 16103409; г. Киев, ул. В. Черновола, 12<br>
                                ЕвроГрошi ООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ «ЕВРОПЕЙСКАЯ КРЕДИТНАЯ ГРУППА»; ЕГРПОУ 40203427; г. Киев, ул. Хорива, 1А<br>
                                Credit 365 ООО «АИА ФИНАНС ГРУПП»; ЕГРПОУ 55439877; г. Киев, ул. Михайловская, 15/1<br>
                                Alex Credit ООО «АЛЕКСКРЕДИТ»; ЕГРПОУ 41346335; г. Днепр, ул. Стартовая, 9-А<br>
                                MyCreditOOO «1БЕЗОПАСНОЕ АГЕНТСТВО НЕОБХОДИМЫХ КРЕДИТОВ»; ЕГРПОУ 39861924; г. Киев, бул. Тараса Шевченко, 11<br>
                            Наш адрес. Киев, ул. Лебедева-Кумача 7В, тел. 0-800-50-10-30 </p><br>
                            
                            
                            <p  align="left" style="text-align:left !important;">Что нужно, чтобы получить кредит онлайн на карту?<br><br>
                                Кредит на карту в Украине можно получить без:<br>
                                -справки о доходах<br>
                                -поручителей<br>
                                -залога<br><br>
                                Взять кредит через Интернет возможно, имея под рукой:<br>
                                -паспорт<br>
                                -идентификационный код<br>
                                -банковскую карту<br><br>
                                Онлайн займ на карту осуществляется после заполнения клиентом заявки на сайте компании. Время заполнения занимает в среднем 5 минут. После она обрабатывается с помощью кредитного скоринга, и затем попадает к менеджеру, который примет решение о выдаче денежных средств.<br>
                                <br>
                                Получить деньги в долг можно только при положительном решении менеджера. Стоит отметить высокую степень одобряемых заявок, которые подаются на сайте компании. 90% заявок получают одобрение. Компании выдают деньги лицам даже с плохой кредитной историей.<br>
                                <br>
                                Условия займа на банковскую карту<br>
                                Условия кредитования:<br>
                                -первый займ составляет от 500 грн. до 10000 грн.<br>
                                -процентная ставка – 1,9% в день в зависимости от взятой суммы<br>
                                -штраф – 1% в день при просрочке платежа<br>
                                -возможность продлить кредитный договор (пролонгация) на 10 дней, оплачивая только проценты по кредиту.<br><br>
                                Кто может взять кредит через интернете?<br>
                                Взять деньги в кредит может:<br>
                                -пенсионер<br>
                                -студент от 18 лет<br>
                                -человек без официального трудоустройства<br>
                                -мама в декрете<br>
                                -военный<br><br>
                                Получить деньги на карту – быстро, выгодно в тот самый момент, когда они Вам понадобились. Взять кредит онлайн на карту в Украине через Интернет актуально тем, кому деньги нужны:
                                <br>
                                -до зарплаты<br>
                                -на покрытие расходов по ремонту автомобиля<br>
                                -на ремонт бытовой техники<br>
                                -на лечение и медицинские препараты<br>
                                -на образование<br>
                                -на покрытие расходов для малых предприятий (кафе, парикмахерская, СТО и др.)<br>
                                -любые другие расходы<br><br>
                                Погасить займы<br>
                                Срочно взять деньги может каждый! Погасить микрокредит также просто, как его и взять.
                                <br>
                                Для этого есть 4 удобных для Вас способа:
                                <br>
                                -через Личный кабинет на сайте компании;
                                -через платежные терминалы;
                                -с помощью Интернет-банкинга банка, в котором Вы обслуживаетесь;
                                -через кассу банка.
                            Онлайн кредитование – удобный способ решить мгновенно свои денежные проблемы.</p><br>
                            
                            
                            <p>Bestkredit.org - это платформа, предлагающая клиенту предложения кредитных организаций. Мы не являемся финансовой организацией, банком или кредитором. Подсчеты носят приблизительный характер, окончательные условия уточняйте на сайте кредитной компании. </p>
                            
                        </div>
                        <div class="footerUpfinance">
                            <p>© 2018. Bestkredit.org. Все права защищены</p>
                        </div>
                    </footer>
                </div>
            </div>
            
            
            <script  src="js/jquery-3.1.1.min.js"></script>
            <script  src="js/jquery-ui.min.js"></script>
            <script  src="js/jquery.ui.touch-punch.min.js"></script>
            <script src="js/jquery.maskedinput.min.js"></script>
            <script src="js/main.js"></script>
            <script>
                $(function(){
                    $(".scrollUp").click(function(e){
                        e.preventDefault();

                        let id = $(this).attr('href');
                        let top = $(id).offset().top;

                        $("body,html").animate({scrollTop: top}, 300);
                    });
                    $("#phone").mask("+389 99 999 99 99"); 
                });
            </script>
            <script>
                $(function(){
                    $("#smForm").submit(function(e){
                        var name = $("input#name").val();
                        var phone = $("input#phone").val();
                        var dataString = 'first_name='+ name + '&phone=' + phone;
                        e.preventDefault();
                        // console.log(dataString);
                        $.ajax({
                            type: "POST",
                            url: "/smartmoney/",
                            data: dataString,
                            success: function() {
                                dataLayer.push({'event': 'Lead'});
                                location.href = "/";
                            }
                        });
                        return false;
                    });
                });
            </script>
        </body>
    </html>