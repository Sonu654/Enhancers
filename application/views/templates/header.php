<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            baseurl=<?php echo base_url(); ?>;
            siteurl=<?php echo site_url();?>;
        </script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Assets/css/isotope.css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        <link href="<?php echo base_url() ?>Assets/css/animate.css" rel="stylesheet" media="screen">
        <style>
            .img{
                max-width: 300px;
            }

            .note{
                font-size: 12px;
                margin-left:-15px;
                border:dotted 1px black;
                padding:5px;
            }

            p{ 
                margin:0px;
            }

            .details{
                border:solid 1px black;
                margin:10px 0;
                padding: 10px;
            }

            .passport{
                height:250px;
                width:200px;
            }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img class="img-responsive img" src="<?php echo base_url(); ?>/Assets/Images/logo.png"/></a>
                </div>
                <!--<div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li> 
                    <li><a href="#">Page 3</a></li> 
                  </ul>
                </div>-->
            </div>
        </nav>

