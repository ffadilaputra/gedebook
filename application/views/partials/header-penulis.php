<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$session_data = $this->session->userdata('logged_in');
$data['username'] = $session_data['username'];
$data['ava'] = $session_data['ava'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Gedebook</title>
        <link rel="stylesheet" href="<?php echo base_url('semantic/dist/semantic.min.css') ?>">
        <link rel="icon" href="<?php echo base_url('/assets/img/gedebook.png'); ?> ">
    </head>
    <body>
        <div class="ui attached stackable menu">
            <div class="ui container">
                <a class="item" href="<?= base_url() ?>">
                    <b>Gedebook :)</b>
                </a>
                <a href="<?= base_url()  ?>" class="item">
                    <i class="home icon"></i> Home
                </a>
                <a class="item">
                    <i class="grid layout icon"></i> Browse
                </a>
                <a href="<?php echo base_url('books') ?>" class="item">
                    <i class="book icon"></i>Your Book
                </a>
                <div class="right item">
                    <a class="ui button primary" href="<?php echo base_url('books/create') ?>">Publish Your Book</a>
                    <div class="ui simple dropdown item">
                        <img class="ui avatar image" src="<?php echo base_url('assets/uploads') ?>/<?= $session_data['ava']; ?>">
                        Hello,<span><?= $session_data['username']; ?></span>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a href="<?php echo base_url('writer/profile') ?>" class="item"><i class="edit icon"></i> Edit Profile</a>
                            <a class="item"><i class="settings icon"></i> Logout</a>
                            <!-- Modal -->
                            <div class="ui basic modal">
                                <div class="ui icon header">
                                    Are you sure to logout ?
                                </div>
                                <div class="content">
                                    <center>
                                    <img class="ui small circular" src="<?php echo base_url('assets/img/logout.png') ?>">
                                    </center>
                                </div>
                                <div class="actions">
                                    <div class="ui red basic cancel inverted button">
                                        <i class="remove icon"></i>
                                        No
                                    </div>
                                    <a class="ui green ok inverted button" href="<?php echo base_url('auth/logout') ?>"><i class="checkmark icon"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>