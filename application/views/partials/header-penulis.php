<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>:)</title>
        <link rel="stylesheet" href="<?php echo base_url('semantic/dist/semantic.min.css') ?>">
    </head>
    <body>
        <div class="ui attached stackable menu">
            <div class="ui container">
                <a href="<?= base_url()  ?>" class="item">
                    <i class="home icon"></i> Home
                </a>
                <a class="item">
                    <i class="grid layout icon"></i> Browse
                </a>
                <a class="item">
                    <i class="book icon"></i> Book
                </a>
                <div class="right item">
                    <a class="ui button primary" href="">Create a Review</a>
                    <div class="ui simple dropdown item">
                        Profile
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item"><i class="edit icon"></i> Edit Profile</a>
                            <a href="auth/logout" class="item"><i class="settings icon"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>