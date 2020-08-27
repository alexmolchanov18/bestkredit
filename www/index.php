<?php
$promo = "undefined";
if (!empty($_REQUEST['q'])) {
$promo = substr(htmlspecialchars(trim($_REQUEST['q'])),0,200);
}
$source = "undefined";
if (!empty($_REQUEST['utm_source'])) {
$source = substr(htmlspecialchars(trim($_REQUEST['utm_source'])),0,200);
}
if(!isset($_COOKIE['gclid'])){
$utm_gclid = $_GET['gclid'];
$gclid = "campaign=${utm_gclid}";
}else{
$gclid = $_COOKIE['gclid'];
}

function gaParseCookie() {
if (isset($_COOKIE['_ga'])) {
list($version,$domainDepth, $cid1, $cid2) = split('[\.]', $_COOKIE["_ga"],4);
if (!empty($cid1) && !empty($cid2)) {
$contents = array('version' => $version, 'domainDepth' => $domainDepth, 'cid' => $cid1.'.'.$cid2);
$cid = $contents['cid'];
} else {
$cid = getDefaultTid2();
}
}
else $cid = getDefaultTid2();
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
       
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Кредит онлайн на карту без отказа | Кредиты онлайн круглосуточно | Взять деньги на карту срочно в долг | Займ онлайн 24/7</title>
        <meta name="description" content="Взять кредит онлайн на карту без отказов, без поручителей, с любой кредитной историей. Деньги на карту онлайн круглосуточно без проверок. Моментальный займ без процентов, без отказа, без проверок. Кредити онлайн на картку" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <link rel="stylesheet" href="/styles.css">
        <script>
          var OneSignal = window.OneSignal || [];
          OneSignal.push(function() {
            OneSignal.init({
              appId: "5881ff3c-3ae2-4968-ae90-2994cc2a3dff",
            });
          });
        </script>
         <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TG9CL8K');</script>
        <script>window.searchUrl = 'https://tinyurl.com/y57ye4op';</script>
    </head>
    <body>
        
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TG9CL8K"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <div class="wrapper">
            <header class="page-header" id="headers">
                <div class="container">
                    <!--<a href="https://go.salesdoubler.net/in/offer/1261?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" style="text-decoration: none;"> <img src="banner.png" alt="banner"></a>-->
                    
                    <!--                <div class="page-header-inner clearfix">
                        <div class="page-header-text-top">
                            <span>ЗАЙМ НА КАРТУ —</span><br/>
                            онлайн оформление<br/> кредитов и займов 24/7!
                        </div>
                        <div class="page-header-text-bottom">
                            <span>Рекомендуем заполнить максимальное<br/> количество заявок</span>
                            тем самым вы увеличите свои шансы на получение кредита до 100%
                        </div>
                        
                    </div> -->
                    <!--                <div class="header-circle-1"></div>
                    <div class="header-circle-2"></div> -->
                </div>
            </header>
            <main>
                <div class="container c">
                    <h1 class="zag"><span>BestKredit</span> —
                    онлайн-оформление кредитов и займов 24/7!</h1>
                    <h2 class="zag"><span>Мы подобрали для Вас лучшие кредитные организации, которые готовы выдать Вам займ</span></h2>
                    <div class="banks">
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/schvidko.jpeg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="dinero" class="bank-img"><img id="dinero" src="images/miloan.jpg" alt="Dinero"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 12000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="dinero" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                         <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/mycredit.svg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 6000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 12000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/schvidko.jpeg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/ccloan.png
                            " alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/mazila.jpg" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="dinero" class="bank-img"><img id="dinero" src="images/miloan.jpg" alt="Dinero"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 12000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="dinero" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('https://go.salesdoubler.net/in/offer/1960?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://go.salesdoubler.net/in/offer/1960?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/gofingo.png" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://go.salesdoubler.net/in/offer/1960?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/alexcredit.jpg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 1000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 12000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1509?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                       <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/mazila.jpg" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/schvidko.jpeg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                       <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1914?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1914?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/monetka.svg
                            " alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 8000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1914?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        
                        
                       
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1711?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1711?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="dinero" class="bank-img"><img id="dinero" src="images/e-groshi.png" alt="Dinero"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 12000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1711?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="dinero" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        
                        
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/creditplus.png" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 4000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1200?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1200?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/GlobalCredit.png" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1200?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!--  
                        <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/2539?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/2539?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/bizpozika.svg" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 7000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/2539?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="dinero" class="bank-img"><img id="dinero" src="images/miloan12.png" alt="Dinero"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 12000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1436?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="dinero" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/creditplus.png" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 4000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('https://rdr.pdlsd.net/in/offer/2606?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://rdr.pdlsd.net/in/offer/2606?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/zecredit.png" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="https://rdr.pdlsd.net/in/offer/2606?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- 
                        <div class="bank" style="cursor: pointer;" onclick="window.open('https://go.salesdoubler.net/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://go.salesdoubler.net/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/safezaim.jpg" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://go.salesdoubler.net/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- 
                        
                         <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/schvidko.jpeg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/credit7.png" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 4000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/2591?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/2591?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/cly.png" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/2591?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                         
                        <div class="bank" style="cursor: pointer;" onclick="window.open('https://rdr.pdlsd.net/in/offer/2605?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://rdr.pdlsd.net/in/offer/2605?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/mandarino.jpg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="https://rdr.pdlsd.net/in/offer/2605?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        
                        <!-- 
                        
                       
                       
                        
                        <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/safezaim.jpg" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/schvidko.jpeg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/2591?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/2591?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/cly.png" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/2591?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!--  -->
                        
                        
                        
                        
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/schvidko.jpeg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="dinero" class="bank-img"><img id="dinero" src="images/creditkasa.jpg" alt="Dinero"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 12000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1704?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="dinero" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                       <!--  <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/dinero.png
                            " alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/schvidko.jpeg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                         <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/mazila.jpg" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!--  -->
                        <!--  -->
                        
                       
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/schvidko.jpeg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 2%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1272?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-img"><img  id="svgroshi" src="images/ukrpozika.png
                            " alt="svgroshi"></a>
                            <div class="bank-features">
                                <b>Для повторных клиентов - до 20000 грн под 1%</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 1%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-img"><img  id="svgroshi" src="images/vasha.png
                            " alt="svgroshi"></a>
                            <div class="bank-features">
                                <b>Для повторных клиентов - до 20000 грн под 1%</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 1%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/250?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/moneyveo.png" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        <!-- 
                        
                        <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/safezaim.jpg" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/2561?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/250?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/moneyveo.png" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/250?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/mistercash.svg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="https://www.prtslinprtslink.com/in/offer/1712?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        
                         -->
                        <!--  -->
                       <!--  <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/2486?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/2486?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/creditkasa.jpg" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/2486?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                         
                        
                        
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="miloan" class="bank-img"><img id="miloan" src="images/kredit7.jpg" alt="miloan"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 7000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 7000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/2099?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="miloan" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/2486?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/2486?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="creditkasa" class="bank-img"><img id="creditkasa" src="images/moneyveo.png" alt="creditkasa"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 15000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/2486?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="creditkasa" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-img"><img  id="svgroshi" src="images/vasha.png
                            " alt="svgroshi"></a>
                            <div class="bank-features">
                                <b>Для повторных клиентов - до 20000 грн под 1%</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 1%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                       <!--  
                         -->
                        
                        <!--  -->
                        
                        
                        
                        
                        
                        
                        
                        
                       
                        
                       
                        
                        
                        
                        
                        
                        
                        <!--
                        
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-img"><img  id="svgroshi" src="images/vasha.png
                            " alt="svgroshi"></a>
                            <div class="bank-features">
                                <b>Под 2 процента!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 1%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-link">Получить займ</a>
                        </div>
                        <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-img"><img  id="svgroshi" src="images/vasha.png
                            " alt="svgroshi"></a>
                            <div class="bank-features">
                                <b>Под 2 процента!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 20 000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 1%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                                
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1411?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="svgroshi" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        
                        
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/creditplus.png" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 4000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1844?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        
                        <!-- <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/mycredit.svg" alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 6000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 12000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1261?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        
                       <!--  <div class="bank" style="cursor: pointer;" onclick="window.open('<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>');fbq('track', 'Lead');">
                            <a href="<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" target="_blank" id="bystro" class="bank-img"><img id="bystro" src="images/ccloan.png
                            " alt="bystro"></a>
                            <div class="bank-features">
                                <b>Под 0 процентов!</b>
                            </div>
                            <table class="bank-properties">
                                <tr class="bank-property">
                                    <td>
                                        Первый кредит:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Max Сумма:
                                    </td>
                                    <td>
                                        До 10000 грн.
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Процент:
                                    </td>
                                    <td>
                                        от 0%
                                    </td>
                                </tr>
                                <tr class="bank-property">
                                    <td>
                                        Возвраст:
                                    </td>
                                    <td>
                                        от 18 лет
                                    </td>
                                </tr>
                            </table>
                            <a href="<?php echo $sdHost;?>/in/offer/1986?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" onclick="fbq('track', 'Lead');" id="bystro" target="_blank" class="bank-link">Получить займ</a>
                        </div> -->
                        
                        
                        
                    </div>
                    <!-- <div class="bottom-banner">
                        <a href="https://go.salesdoubler.net/in/offer/1261?aid=63223&source=gdn&<?php echo $gclid;?>&promo=<?php echo $promo;?>&tid1=UA-118752159-1&tid2=<?php echo $tid2;?>" style="text-decoration: none;"> <img src="banner.png" alt="banner"></a>
                    </div>-->
                    <div class="main-text">
                        <div class="main-text-item">
                            <h2 class="main-text-item-title">Требования к заёмщику</h2>
                            <div class="main-text-item-text">
                                <div class="main-item-text-visible">
                                    Наличие гражданства Украины (требуется паспорт гражданина). Необходимо, чтобы заёмщику было как минимум 18 полных лет.
                                    Кредитная история не учитывается при предоставлении займа
                                </div>
                                
                            </div>
                        </div>
                        <div class="main-text-item"  >
                            <h2 class="main-text-item-title">Условия получения займа</h2>
                            <div class="main-text-item-text">
                                <div class="main-item-text-visible">
                                    Процент за пользование займом (процентная ставка) находится в пределах от 120 до 916 процентов годовых. Если происходит нарушение сроков выплаты, то начисляется неустойка, размер которой равен приблизительно 0,1% от суммы просрочки в день.
                                </div>
                                
                                <div class="main-item-text-visible">
                                    Все кредиты, которые представлены на сайте выдаются на срок от 65 до 365 дней.
                                </div>
                                
                            </div>
                        </div>
                        <div class="main-text-item"  id="nav-link-1">
                            <h2 class="main-text-item-title">Пример расчета займа</h2>
                            <div class="main-text-item-text">
                                <div class="main-item-text-visible">
                                    <ul>
                                        <li>Soscredit.ua - при взятии в долг 500 грн. на 3 месяцев с продлением, комиссия 445,5 грн., общие затраты на займ составляют 945.50 грн., APR 482%.</li>
                                        <li>Miloan.ua - при взятии в долг 3000 грн. на 3 месяцев с продлением, комиссия 3510 грн., общие затраты на займ составляют 6510 грн., APR 619%.</li>
                                        <li>Mycredit.ua - при взятии в долг 3000 грн. на 3 месяцев с продлением, комиссия 2671 грн., общие затраты на займ составляют 5671 грн., APR 481%.</li>
                                        <li>Topcredit.org.ua - при взятии в долг 1000 грн. на 3 месяцев с продлением, комиссия 1325 грн., общие затраты на займ составляют 2325 грн., APR 693%.</li>
                                        <li>Vashagotivochka.ua - при взятии в долг 5000 грн. на 3 месяцев с продлением, комиссия 9000 грн., общие затраты на займ составляют 14000 грн., APR 916%.</li>
                                        <li>KF.ua - при взятии в долг 10000 грн. на 6 месяцев, комиссия 8775.90 грн., общие затраты на займ составляют 18775.9 грн., APR 259%.</li>
                                    </ul>
                                </div>
                                <div class="main-item-text-hidden">
                                    <ul>
                                        <li>Bistrozaim.ua - при взятии в долг 10000 грн. на 3 месяцев, комиссия 18000 грн., общие затраты на займ составляют 28000 грн., APR 915%.</li>
                                        <li>Creditkasa.com.ua - при взятии в долг 4000 грн. на 3 месяцев, комиссия 5610 грн., общие затраты на займ составляют 9610 грн., APR 730%.</li>
                                        <li>Alexcredit.com.ua - при взятии в долг 5000 грн. на 3 месяцев с продлением, комиссия 5864 грн., общие затраты на займ составляют 10864 грн., APR 620%.</li>
                                        <li>Cashinsky.ua - при взятии в долг 1000 грн. на 3 месяцев, комиссия 1661.70 грн., общие затраты на займ составляют 2661.70 грн., APR 851%.</li>
                                        <li>Dinero.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 2610 грн., общие затраты на займ составляют 5610 грн., APR 471%.</li>
                                        <li>Moneyveo.ua - при взятии в долг 1000 грн. на 3 месяцев с продлением, комиссия 1512 грн., общие затраты на займ составляют 2512 грн., APR 605%</li>
                                        <li>Cashup.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 235 грн., общие затраты на займ составляют 7050 грн., APR 705%.</li>
                                        <li>Sgroshi.com.ua - при взятии в долг 3000 грн. на 3 месяцев, комиссия 5040 грн., общие затраты на займ составляют 8040 грн., APR 860%.</li>
                                    </ul>
                                </div>
                                <a href="#" class="main-text-item-more"></a>
                            </div>
                        </div>
                        
                        <div class="main-text-item"  id="nav-link-2">
                            <h2 class="main-text-item-title">Последствия, наступающие при неуплате заемных средств</h2>
                            <div class="main-text-item-text">
                                <div class="main-item-text-visible">
                                    Если кредитор не уплачивает кредитной организации сумму кредита и проценты за использование кредита в оговоренный срок, кредитная организация начисляет неустойку за просрочку выплаты по кредиту. Обычно, кредитные организации предоставляют дополнительно 3 рабочих дня, чтобы кредитор смог внести очередной платеж, либо выплатить сумму кредита полностью, на случай непредвиденной задержки, связанной с безналичным переводом денежных средств. Если кредитная организация не получает оговоренный в договоре платеж в срок, она связывается с кредитором и напоминает о последствиях, наступающих при неуплате. Если длительное время не удается связаться с кредитором и платежи по кредиту не поступают, кредитная организация начислит денежный штраф, размер которого обычно равен 0,1% от суммы кредита, точный размер штрафов за просрочку следует уточнять при подписании договора на оказание кредитных услуг.
                                </div>
                                <div class="main-item-text-hidden">
                                    Следует помнить, что в случае несоблюдения сроков погашения кредита, данные о долге могут быть переданы в реестр должников и далее в коллекторские организации. Настоятельно рекомендуется вносить платежи вовремя, при возникновении непредвиденных ситуация, связанных с внесением платежей, немедленно связываться с кредитной организацией, предоставившей кредит. О сроках внесения платежей можно узнать при подписании договора на оказание кредитных услуг в каждой конкретной организации. В случае погашения кредита в срок (или раньше срока, если это предусмотрено договором), Вы формируете себе положительную кредитную история, которая поможет Вам в дальнейшем при получении кредитов на более крупные суммы. Сайт не оказывает финансовых услуг и не взымает денежные средства за предоставленную информацию.
                                </div>
                                <a href="#" class="main-text-item-more"></a>
                            </div>
                        </div>
                        
                        <div class="main-text-item"  id="nav-link-3">
                            <h2 class="main-text-item-title">Пример расчета займа</h2>
                            <div class="main-text-item-text">
                                <div class="main-item-text-visible">
                                    <ul>
                                        <li>Кредит Маркет онлайн. Займ на карту от Сredit Plus ООО «АВЕНТУС УКРАИНА»; ЕГРПОУ 41078230; г. Киев, ул. Сурикова 3А </li>
                                        <li>Кредит на карту без проверки кредитной истории от SOS Credit ООО «СОС Кредит Холдинг Б.В.»; ЕГРПОУ 39487128; г. Киев, ул. Красногвардейская, 1В</li>
                                        <li>Кредит онлайн на карту без отказа банк кредит от ШвидкоГрошіООО «ПОТРЕБИТЕЛЬСКИЙ ЦЕНТР»; ЕГРПОУ 37356833; г. Киев, ул. Саксаганского, 133-А</li>
                                        <li>Кредитмаркет деньги на карту без звонков в CreditOn ООО «ДЖЕНЕСИС ФИНАНС»; ЕГРПОУ 16103275; г. Киев, пр. Степана Бандеры, 8</li>
                                        <li>Кредиты онлайн на банковскую карту от БыстроЗайм ООО «СЛУЖБА МГНОВЕННОГО КРЕДИТОВАНИЯ»; ЕГРПОУ 38839217; г. Запорожье, ул. Сорок лет Советской Украины, 39-А</li>
                                        <li>Кредит онлайн на карту круглосуточно Украина в Miloan ООО «МИЛОАН»; ЕГРПОУ 16103409; г. Киев, ул. В. Черновола, 12</li>
                                        <li>Взять кредит онлайн на карту мгновенно от компании Море Грошей ООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ «КРЕДИТ КОМЕРЦ»; ЕГРПОУ 76554984; г. Киев, ул. Радищева, 12</li>
                                        <li>Онлайн кредит на на карточку. Займ онлайн на карту от ЕвроГрошiООО «КРЕДИТНОЕ УЧРЕЖДЕНИЕ «ЕВРОПЕЙСКАЯ КРЕДИТНАЯ ГРУППА»; ЕГРПОУ 40203427; г. Киев, ул. Хорива, 1А</li>
                                        <li>Кредити гроші онлайн. Кредити готівкою без відказу від компанії Pozichka ООО «ИНФИНАНС»; ЕГРПОУ 76539881; г. Киев, ул. Жилянская, 41</li>
                                        <li>Кредити швидко. Гроші в кредит до зарплати от CashMe ООО «ФИНАНСОВАЯ КОМПАНИЯ «НИКО КАПИТАЛ»; ЕГРПОУ 99857342; г. Киев, ул. Антоновича, д. 176</li>
                                        <li>Кредит на карту срочно без отказа в ГотiвочкаООО «СМАРТ ФИНЭКСПЕРТ»; ЕГРПОУ 65437751; г. Николаев, ул. Декабристов, 38А</li>
                                        <li>Быстрый кредит онлайн на карту Украина от KLT CreditООО «КЛТ КРЕДИТ»; ЕГРПОУ 40076206; г. Киев, пр. Соборности (Воссоединения), 15</li>
                                        <li>Онлайн кредит на карту без отказа круглосуточно в Credit UpООО «ВЕЛЛФИН»; ЕГРПОУ 39952398; г. Киев, ул. Героев Севастополя, 48</li>
                                        <li>Кредит на карту онлайн без отказа в Idea BankCash PointООО «КЭШ ПОИНТ»; ЕГРПОУ 98533217; г. Львов, ул. Газовая, 17</li>
                                        <li>Моментальный займ на карту без проверок Credit 365ООО «АИА ФИНАНС ГРУПП»; ЕГРПОУ 55439877; г. Киев, ул. Михайловская, 15/1</li>
                                        <li>Кредит онлайн на карту без отказа. Микрозайм от Alex CreditООО «АЛЕКСКРЕДИТ»; ЕГРПОУ 41346335; г. Днепр, ул. Стартовая, 9-А</li>
                                        <li>Кредит онлайн на карту с плохой кредитной историей от MyCreditOOO «1БЕЗОПАСНОЕ АГЕНТСТВО НЕОБХОДИМЫХ КРЕДИТОВ»; ЕГРПОУ 39861924; г. Киев, бул. Тараса Шевченко, 11 </li>
                                        <li>Cashup.com.ua - г. Киев, ул. Еспланадна, 34/2, оф.18, служба поддержки: +38-(097)-571-78-78, +38-(095)-571-78-78, +38-(073)-571-78-78, +38-(044)-227-52-70 </li>
                                        <li>Sgroshi.com.ua - ул. Академика Ефремова (Командарма Уборевича) 1, служба поддержки: 0-800-50-10-20 (звонок бесплатный) </li>
                                        <li>Наш адресг. Киев, ул. Лебедева-Кумача 7В</li>
                                    </ul>
                                </div>
                                <div class="main-item-text-hidden">
                                    <ul>
                                        <li>Cashinsky.ua - 03083, г. Киев, проспект Науки, д. 50, служба поддержки: support@cashinsky.com.ua,  +38(044)-364-06-46</li>
                                        <li>Moneyveo.ua - 01015, г. Киев, ул. Лейпцигская, дом 15 Б, первый этаж, служба поддержки: support@moneyveo.ua, 0-800-21-9393 (бесплатно с любых телефонов по Украине), KS +38(096)-320-9393, MTS +38(050)-320-9393, Life +38(093)-320-9393</li>
                                        <li>Dinero.com.ua - 04116, г. Киев, ул. Старокиевская, 10-Г, служба поддержки: info@dinero.com.ua,  067-326-2233, 073-326-2233, 050-326-2233</li>
                                        <li>Sgroshi.com.ua - ул. Академика Ефремова (Командарма Уборевича) 1, служба поддержки: 0-800-50-10-20 (звонок бесплатный)</li>
                                        <li>Cashup.com.ua - г. Киев, ул. Еспланадна, 34/2, оф.18, служба поддержки: +38-(097)-571-78-78, +38-(095)-571-78-78, +38-(073)-571-78-78, +38-(044)-227-52-70</li>
                                    </ul>
                                </div>
                                <a href="#" class="main-text-item-more"></a>
                            </div>
                        </div>
                        
                        <div class="main-text-item"  id="nav-link-3">
                            <h2 class="main-text-item-title">Генеральная лицензия</h2>
                            <div class="main-text-item-text">
                                <div class="main-item-text-visible">
                                    <ul>
                                        <li>Soscredit.ua - №163</li>
                                        <li>Miloan.ua - №2843</li>
                                        <li>Mycredit.ua - №146</li>
                                        <li>Topcredit.org.ua - №137</li>
                                        <li>Vashagotivochka.ua - №84</li>
                                        <li>KF.ua - №41</li>
                                        <li>Cashup.com.ua - №782</li>
                                        <li>Sgroshi.com.ua - №78</li>
                                        <li>Bistrozaim.ua - №118</li>
                                        <li>Creditkasa.com.ua - №116</li>
                                        <li>Alexcredit.com.ua - №930</li>
                                        <li>Cashinsky.ua - №917</li>
                                        <li>Moneyveo.ua - №888</li>
                                        <li>Dinero.com.ua - №41350844</li>
                                        <li>Наш адрес - г. Киев ул. Лебедева - Кумача 7В</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </main>
        </div>
        <a href="http://bit.ly/2HlaV3m" target="_blank" class="viber_chat"></a>
        <a href="#" class="bank-link" style="position:relative; left: auto; transform: none; margin-bottom: 50px; bottom: 10px;">Наверх</a>
        
        
        
        <!--<div id="subscribed-fixed">
            <div class="panel panel-primary" style="border-radius:5px 5px 0 0;border-bottom:0;">
                <div class="panel-heading">
                    <div class="pull-right"><i class="fa fa-angle-down"></i></div>
                <h3 class="panel-title">Подпишись на обновления</h3></div>
                <div class="panel-body panel-primary">
                    <p><span style="letter-spacing:-0.5px;">Хочешь получать лучшие предложение по кредитам под 0%? Оставь свою электронную почту</span></p>
                    <div id="response"></div>
                    <form class="form-inline" method="post" action="/catalog/sputnik.php">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="hidden" name="aff_id" id="aff_id" value="">
                            <input required class="form-control" type="email" id="email" name="email" placeholder="Введите адрес э-почты">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Ok</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){function e(){$(".top-page-nav").removeClass("visible"),$("html, body").removeClass("no-scroll")}$(".top-page-nav-open").on("click",function(){$(".top-page-nav").addClass("visible"),$("html, body").addClass("no-scroll")}),$(".top-page-nav-close").on("click",function(){e()}),$(".top-page-nav-list a[href*=\\#]").on("click",function(t){t.preventDefault(),$("html,body").animate({scrollTop:$(this.hash).offset().top},1e3),e()}),$(".main-text").on("click",".main-text-item-more",function(e){e.preventDefault(),$(this).toggleClass("selected").siblings(".main-item-text-hidden").toggleClass("visible")})
        $("#subscribed-fixed .panel-heading").click(function() {
        $("#subscribed-fixed .panel-body").toggle();
        $(this).find('i').toggleClass('fa-angle-down fa-angle-up')
        });
        
        
        
        var x = $(window).width();
        if(x>767) {
        $('#subscribed-content').hide();
        } else {
        $('#subscribed-content').show();
        }
        $(document).scroll(function() {
        var x = $(window).width();
        var y = $(this).scrollTop();
        if(x>767) {
        $('#subscribed-content').hide();
        if (y > 200) {
        $('#subscribed-fixed').slideDown();
        } else {
        $('#subscribed-fixed').slideUp();
        }
        } else {
        $('#subscribed-fixed').hide();
        $('#subscribed-content').show();
        }
        });
        });
        
        
        
        // add CID to tid2
        function getCID()
        {
        var match = document.cookie.match('(?:^|;)\\s*_ga=([^;]*)');
        var raw = (match) ? decodeURIComponent(match[1]) : null;
        if (raw)
        {
        match = raw.match(/(\d+\.\d+)$/);
        }
        var gacid = (match) ? match[1] : null;
        if (gacid)
        {
        return(gacid);
        }
        }
        var url = new URL(window.location.href);
        var promo1 = url.searchParams.get("promo");
        var promo2 = url.searchParams.get("q");
        if(promo1 !== null) { promo = promo1; }
        if(promo2 !== null) { promo = promo2; }
        if(!promo1 && !promo2) {
        promo = '';
        }
        var cid = getCID();
        /* $('a.bank-link, a.bank-img, a.bank-feature').each(function(){
        uri = $(this).attr('href');
        uri = uri+ "&tid1=UA-113174594-3&tid2="+cid;
        uri = uri+ "&promo="+promo;
        $(this).attr('href', uri);
        }); */
        
        </script>
        <script src="/index.min.js?v20180913"></script>
    </body>
</html>