<?php $this->layout('layouts/layout', [
    'mainTitle' => 'Esta es la página 3'
]) ?>
<p>Hola, otro contenido... </p>
<!--insertamos el parcial-->
<?php $this->insert('partials/some-markup', [
    'courseTitle' => 'Aplicaciones profesionales php'
]); ?>