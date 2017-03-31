<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/tintuc.css" type="text/css">
</head>
<body> -->
<!DOCTYPE html>
<html lang="en"><head>
    <title> Đèn Lồng Hội An </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/home.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/header.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/asset/js/home.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
    <style>
        nav.navbar.navbar-default {
            height: 125px;
            margin: 0;
            background: url('<?php echo base_url(); ?>/asset/Images/Header.png');
            border: none;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.46);
        }
        /*style footer*/
        footer{
            height: 50px;
            background-image: url("<?php echo base_url(); ?>/asset/Images/Footerbot.png");
            padding-top: 18px;
            color: #fff;
            font-size: 14px;
        }
        /*style id footer*/
        #footer{
            background-image: url("<?php echo base_url(); ?>/asset/Images/Footertop.png");
            color: #fff;
            padding-top: 30px;
            padding-bottom: 40px;
        }
        .icon-social{
            padding: 0px;
        }
        .icon-social li{
            list-style-type: none;
            float: left;
            padding-right: 10px;
        }
    </style>
</head>
<body>
    <?php $this->load->view('layout/header.php');?>
	<?php if (!empty($template)) {$this->load->view($template);} ?>
 	<footer class="newsFooter">
        <div class="container">
            Copyright &copy; 2017 by <a href="">LongDen</a>
        </div>
    </footer>