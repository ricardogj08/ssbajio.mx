<?= $this->extend('templates/website/default') ?>

<?= $this->section('content') ?>
    <title>
        <?= service('settings')->get('App.company') ?>
    </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<?= $this->include('website/layouts/header') ?>

	<?= $this->include('website/layouts/footer') ?>
<?= $this->endSection() ?>
