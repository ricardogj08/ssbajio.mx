<?php helper('form') ?>

<?= $this->extend('templates/backend/default') ?>

<?= $this->section('head') ?>
    <title>
        Backend | Lista de usuarios
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <?php if(session()->has('toast-success')): ?>
        <?= $this->setVar('message', session()->getFlashdata('toast-success'))->include('backend/layouts/toast-success') ?>
    <?php endif ?>
<?= $this->endSection() ?>
