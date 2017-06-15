<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'L`attribut doit être accepté.',
    'active_url'           => 'L`attribut: n`est pas une URL valide.',
    'after'                => 'L attribut: doit être une date après: date.',
    'after_or_equal'       => 'L attribut: doit être une date après ou égale à: date.',
    'alpha'                => 'L attribut: ne peut contenir que des lettres.',
    'alpha_dash'           => 'L attribut: ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'L attribut: ne peut contenir que des lettres et des nombres.',
    'array'                => 'Lattribut: doit être un tableau.',
    'before'               => 'L attribut: doit être une date antérieure: date.',
    'before_or_equal'      => 'L attribut: doit être une date antérieure ou égale à: date.',
    'between'              => [
        'numeric' => 'L`attribut: doit être compris entre: min et: max.',
        'file'    => 'L`attribut: doit être compris entre: min et: kilobytes max.',
        'string'  => 'L`attribut: doit être entre: min et: les caractères max.
',
        'array'   => 'L`attribut: doit avoir entre: min et: les éléments max.
',
    ],
    'boolean'              => 'Le champ: attribut doit être vrai ou faux.',
    'confirmed'            => 'La confirmation de l`attribut ne correspond pas.',
    'date'                 => 'L`attribut: n`est pas une date valide.',
    'date_format'          => 'L`attribut: ne correspond pas au format: format.',
    'different'            => 'L`attribut: et: les autres doivent être différents.',
    'digits'               => 'L`attribut: doit être: chiffres des chiffres.
',
    'digits_between'       => 'L`attribut: doit être compris entre: min et: les chiffres max.
',
    'dimensions'           => 'L`attribut: possède des dimensions d`image non valides
.',
    'distinct'             => 'Le champ: attribut a une valeur en double.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
