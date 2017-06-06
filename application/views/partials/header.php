<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>:)</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/prettyPhoto.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/custom-styles.css') ?>">
    </head>
    <body class="home">
        <!-- Color Bars (above header)-->
        <div class="color-bar-1"></div>
        <div class="color-bar-2 color-bg"></div>
        
        <div class="container">
            
            <div class="row header"><!-- Begin Header -->
            
            <!-- Logo
            ================================================== -->
            <div class="span5 logo">
                <a href="#"><img src="<?php echo base_url() ?>assets/img/piccolo-logo.png" alt="" /></a>
                <h5>Big Things... Small Packages</h5>
            </div>
            
            <!-- Main Navigation
            ================================================== -->
            <div class="span7 navigation">
                <div class="navbar hidden-phone">
                    
                    <ul class="nav">
                        <li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="index.htm">Home <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.htm">Full Page</a></li>
                                <li><a href="index-gallery.htm">Gallery Only</a></li>
                                <li><a href="index-slider.htm">Slider Only</a></li>
                            </ul>
                        </li>
                        <li><a href="features.htm">Features</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="page-full-width.htm">Full Width</a></li>
                                <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                                <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                                <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                                <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                                <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                                <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                                <li><a href="gallery-single.htm">Gallery Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-style1.htm">Blog Style 1</a></li>
                                <li><a href="blog-style2.htm">Blog Style 2</a></li>
                                <li><a href="blog-style3.htm">Blog Style 3</a></li>
                                <li><a href="blog-style4.htm">Blog Style 4</a></li>
                                <li><a href="blog-single.htm">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="page-contact.htm">Contact</a></li>
                    </ul>
                    
                </div>
                <!-- Mobile Nav
                ================================================== -->
                <form action="#" id="mobile-nav" class="visible-phone">
                    <div class="mobile-nav-select">
                        <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                            <option value="">Navigate...</option>
                            <option value="index.htm">Home</option>
                            <option value="index.htm">- Full Page</option>
                            <option value="index-gallery.htm">- Gallery Only</option>
                            <option value="index-slider.htm">- Slider Only</option>
                            <option value="features.htm">Features</option>
                            <option value="page-full-width.htm">Pages</option>
                            <option value="page-full-width.htm">- Full Width</option>
                            <option value="page-right-sidebar.htm">- Right Sidebar</option>
                            <option value="page-left-sidebar.htm">- Left Sidebar</option>
                            <option value="page-double-sidebar.htm">- Double Sidebar</option>
                            <option value="gallery-4col.htm">Gallery</option>
                            <option value="gallery-3col.htm">- 3 Column</option>
                            <option value="gallery-4col.htm">- 4 Column</option>
                            <option value="gallery-6col.htm">- 6 Column</option>
                            <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                            <option value="gallery-single.htm">- Gallery Single</option>
                            <option value="blog-style1.htm">Blog</option>
                            <option value="blog-style1.htm">- Blog Style 1</option>
                            <option value="blog-style2.htm">- Blog Style 2</option>
                            <option value="blog-style3.htm">- Blog Style 3</option>
                            <option value="blog-style4.htm">- Blog Style 4</option>
                            <option value="blog-single.htm">- Blog Single</option>
                            <option value="page-contact.htm">Contact</option>
                        </select>
                    </div>
                </form>
            </div>
    </div><!-- End Header -->