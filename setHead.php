<?php
header('Content-Type: text/html; charset=UTF-8');
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
// $url .= $_SERVER['REQUEST_URI'];
$url .= "/notify_repair";
session_start();
error_reporting(error_reporting() & ~E_NOTICE);
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>ระบบแจ้งซ่อม</title>

<!-- Custom fonts for this template-->
<link href="<?php echo $url.'/vendor/fontawesome-free/css/all.min.css';?>" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo $url.'/css/sb-admin-2.css" rel="stylesheet';?>">
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo $url.'/css/custom.css';?>">
<link rel="stylesheet" href="<?php echo $url.'/css/zoom-marker.css';?>">
<link rel="stylesheet" href="<?php echo $url.'/css/easy-loading.css';?>">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo $url.'/js/jquery-ui-1.12.1.custom/jquery-ui.min.css';?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="<?php echo $url.'/js/jquery-3.5.1.js';?>"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

