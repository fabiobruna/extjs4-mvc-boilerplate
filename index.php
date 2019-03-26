<?php

if (session_id() == '') {
    session_start();
}

$configs = include('config.php');
require $configs['connectfile'];
$env = $configs['env'];

$sql    = "select item_oms from autorisatie.aut_items where item_type = 'APP' and item_code = 'BEWON'";

$result = sqlsrv_query($DWH_EAIB, $sql, array(), array('Scrollable' => 'static'));
$row    = sqlsrv_fetch_array($result);

$titel  = $row[0];

if (isset($_SERVER['SERVER_NAME'])) {
    define('__URL', $_SERVER['REQUEST_SCHEME'].$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
} else {
    define('__URL', 'https://dwh.mchaaglanden.local/');
}

define('__APP', 'BEWON');
define('__TITLE', $titel);

include('f:\\web\\autorisatie\\login\\login.php');

$env = $configs['env'];
$jsversie = '<script src="/ext-js-gpl/ext-all.js"></script>';

if ($env === 'dev') {
    $jsversie = '<script src="/ext-js-gpl/ext-all-debug.js"></script>';
}

?>

<!DOCTYPE HTML>

<html lang="nl-NL">
  <head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>HMC - NAAM APP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/ext-js-gpl/packages/ext-theme-classic/build/resources/ext-theme-classic-all.css">
    <link rel="stylesheet" type="text/css" href="css/application.css" />


    <!-- LIBS -->
    <?php echo $jsversie; ?>
    <script type="text/javascript" src="/ext-js-gpl/locale/ext-lang-nl.js"></script>
    <script type="text/javascript" src="app.js"></script>

    <script type="text/javascript">
      var gENV  = <?php echo "'".$env."'" ?>;
    </script>

</head>
  <body>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113237209-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113237209-4');
    </script>

  </body>
</html>
