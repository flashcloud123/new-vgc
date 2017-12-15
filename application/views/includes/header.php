<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VibGyorCoin ICO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
 -->
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/magnific-popup.css">

    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php  echo base_url('assets/'); ?>css/normalize.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/'); ?>css/space.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/'); ?>blue/style.css">
    <link rel="stylesheet" href="<?php  echo base_url('assets/'); ?>css/responsive.css">
    <script src="<?php  echo base_url('assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <style>

        #clockdiv{
            font-family: sans-serif;
            color: #fff;
            display: inline-block;
            font-weight: 100;
            text-align: center;
            font-size: 30px;
        }

        #clockdiv > div{
            padding: 10px;
            border-radius: 3px;
            background: #00BF96;
            display: inline-block;
        }

        #clockdiv div > span{
            padding: 15px;
            border-radius: 3px;
            background: #00816A;
            display: inline-block;
        }

        .smalltext{
            padding-top: 5px;
            font-size: 16px;
        }
    </style>
</head>

<body data-spy="scroll" data-target="#mainmenu">
  

       <!--Header-area-->
    <header class="relative header-area" id="home">
        <div class="header-bg">
            <div id="particles-js" class="particle" style="    background-color: #159957;
    background-image: linear-gradient(120deg, #155799, #159957);"></div>
            <!-- <div class="header-angle-bg"></div> -->
            <div class="header-overlay hidden visible-xs"></div>
           
        </div>
        <!--Mainmenu-area-->
        <nav class="mainmenu-area smoth navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--Logo-->
                    <a class="navbar-brand" href="#home"><b>VibGyor Coin</b></a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                   <?php $this->load->view('includes/menu'); ?>
                </div>
            </div>
        </nav>
           <!--Mainmenu-area/-->
        <div class="vcenter">
            <div class="container">
            <p class='text-center' style='color:#fff;    font-size: 20px;margin-top: -50px; margin-bottom: 50px;'><?php echo $banner->heading ? $banner->heading :''; ?></p>
                <div class="row text-white">
                    <!--Header-Text-Slider-->
                    <div id="" class="" data-ride="carousel">
                        <div class="" role="listbox">
                            <div class="item active">
                                <div class="row text-white">
                                    <div class="col-xs-12 col-sm-6 col-md-5 ">
                                        <h1 class="headline two-h-s" data-animation="animated fadeInRight" ><?php echo $banner->main_sub_heading ? $banner->main_sub_heading :''; ?> <br/><span style='font-size:20px;'><?php echo $banner->sub_heading ? $banner->sub_heading :''; ?></span></h1>
                                        <div class="space-5"></div>
                                        <div class="four-h-s" data-animation="animated fadeInRight">
                                            <p><?php echo $banner->heading_bottom ? $banner->heading_bottom :''; ?> </p>
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <div class="space-30"></div>
                        <!-- Text-slide-controls -->
                       
                    </div>
                    <!--Header-Text-Slider/-->
                </div>
                <div class="space-30"></div>
            </div>
        </div>
        <div class="header-scroll-btton smoth">
            <a href="#about"><span class="ti-mouse-alt"></span></a>
        </div>
    </header>
    <!--Header-area/-->