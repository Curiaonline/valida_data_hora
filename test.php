<?php
$date = '2012-02-21';

var_dump(validateDate($date));

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

if(!validateDate($date) == true):
    echo '<br />
    <div class="container">
          <div class="alert alert-danger" role="alert">
          Data inválida.<br />
            </div>
    </div>';
    exit;
endif;

echo '<br />';
$hora = '20:02:04';

var_dump(validateHora($hora));

function validateHora($hora, $format = 'H:i:s')
{
    $d = DateTime::createFromFormat($format, $hora);
    return $d && $d->format($format) == $hora;
}

if(!validateHora($hora) == true):
    echo '<br />
    <div class="container">
          <div class="alert alert-danger" role="alert">
          Hora inválida.<br />
            </div>
    </div>';
    exit;
endif;

