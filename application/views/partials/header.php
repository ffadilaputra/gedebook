<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gedebook :)</title>
        <link rel="stylesheet" href="<?php echo base_url('semantic/dist/semantic.min.css') ?>">
    </head>
    <body>
        <div class="ui attached stackable menu">
            <div class="ui container">
                <a class="item" href="<?= base_url() ?>">
                    <b>Gedebook :)</b>
                </a>
                <div class="right item">
                    <div class="ui buttons">
                        <a href="<?php echo base_url() ?>login" class="ui button active">Login</a>
                        <div class="or"></div>
                        <a href="<?php echo base_url() ?>register" class="ui teal button">Register</a>
                    </div>
                </div>
            </div>
        </div>