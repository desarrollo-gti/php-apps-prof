<?php $this->layout('layouts/layout', [
    'mainTitle' => 'Página 2'
]); ?>
<h6>Hello, world, esto es contendido incrustado en el layout principal</h6>

<ul>
    <li>Primero</li>
    <li>Segundo</li>
    <li>Tercero</li>
</ul>

<?php $this->start('footerLinks') ?>
<p>
    <a href="#">Link 0</a> |
    <a href="#">Link 1</a> |
    <a href="#">Link 2</a> |
    <a href="#">Link 3</a>
</p>
<?php $this->stop(); ?>
