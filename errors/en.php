<?php
/**
 * :attribute => input name
 * :params => rule parameters ( eg: :params(0) = 10 of max_length(10) )
 */
return array(
    'alpha'         => ':attribute field must be an alpha value',
    'alpha_numeric' => ':attribute field must be alphanumeric',
    'email'         => ':attribute is not a valid email',
    'equals'        => ':attribute field should be same as :params(0)',
    'exact_length'  => ':attribute field must :params(0) character long',
    'float'         => ':attribute field must be a float',
    'integer'       => ':attribute field must be an integer',
    'ip'            => ':attribute must contain a valid IP',
    'max_length'    => ':attribute can be maximum :params(0) character long',
    'min_length'    => ':attribute must be minimum :params(0) character long',
    'numeric'       => ':attribute field must be numeric',
    'required'      => ':attribute field is required',
    'url'           => ':attribute must contain a valid URL',
);
