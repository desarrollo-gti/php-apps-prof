<?php $this->layout('layouts/layout', [
    'mainTitle' => 'Esta es la página 2'
]) ?>
<h2>Hola</h2>
<p>codigo de la página</p>

<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
</ul>

<?php $this->start('footerLinks'); ?>
<p>
    <a href="#">Link 0</a>
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
</p>
<?php $this->stop(); ?>

<?php $this->start('footerJS') ?>
<script></script>
<?php $this->stop() ?>