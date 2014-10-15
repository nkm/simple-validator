<?php
/**
 * :attribute => el nombre del campo
 * :params => parámetros pasados a la regla ( p.ej: :params(0) = 10 de max_length(10) )
 */
return array(
    'alpha'         => 'El campo :attribute ha de contener exclusivamente letras',
    'alpha_numeric' => 'El campo :attribute ha de contener exclusivamente caracteres alfanuméricos',
    'email'         => ':attribute no es un email válido',
    'equals'        => 'El campo :attribute ha de ser igual a :params(0)',
    'exact_length'  => 'El campo :attribute ha de tener una longitud de :params(0) caracteres exactamente',
    'float'         => 'El campo :attribute ha de ser un número de coma flotante',
    'integer'       => 'El campo :attribute ha de ser un número entero',
    'ip'            => ':attribute ha de contener una dirección IP válida',
    'max_length'    => ':attribute ha de tener un máximo de :params(0) caracteres de longitud',
    'min_length'    => ':attribute ha de tener un mínimo de :params(0) caracteres de longitud',
    'numeric'       => 'El campo :attribute ha de ser numérico',
    'required'      => 'El campo :attribute es obligatorio',
    'url'           => ':attribute ha de contener una dirección URL válida',
);
