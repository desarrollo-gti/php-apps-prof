<?php $this->layout('layouts/layout', [
    'mainTitle' => 'Página 3'
]); ?>
<h6>Hello, world, esto es contendido incrustado en el layout principal con otro contenido</h6>

<p>
    otro contenido... con el mismo template
</p>
<?php $this->insert('partials/some-markup', [
    'courseTitle' =>'Aplicaciones profesionales en php'
]);