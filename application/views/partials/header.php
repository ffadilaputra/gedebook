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
            <i class="mail icon"></i> Messages
            </a>
            <div class="ui simple dropdown item">
            More
            <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item"><i class="edit icon"></i> Edit Profile</a>
                <a class="item"><i class="globe icon"></i> Choose Language</a>
                <a class="item"><i class="settings icon"></i> Account Settings</a>
            </div>
            </div>
            <div class="right item">
                <a href="<?php echo base_url() ?>login" class="item">
                     Login
                </a>
                  <a href="<?php echo base_url() ?>register" class="item">
                    Register
                </a>
            </div>
        </div>
    </div>