<?php
$data =  Session::get('data');
?>
<p>Buen d�a, {{ $data['Nombrealumno'] }}.</p>
<p>Se le recuerda que el d�a {{ $data['Fecha'] }} debe recibir la actividad {{ $data['Nombreactividad'] }} del curso {{ $data['Nombrecurso'] }}, secci�n {{ $data['Seccion'] }}.</p>