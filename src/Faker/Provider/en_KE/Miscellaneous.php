<?php

namespace Faker\Provider\en_KE;

use Faker\Generator;
use Illuminate\Support\Str;

class Miscellaneous extends \Faker\Provider\Base
{
    protected static $policyNumber = array(
        'POL/FKR/MPTK/#######/###/20##',
        'MP/######',
        'P/???/####/20##/######/',
        'P-20##-1##-9###-##-#####',
        '0##?#########'
    );

    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    /**
     * @return string
     */
    public function policyNumber()
    {
        return Str::upper(
            static::bothify($this->generator->parse(static::randomElement(static::$policyNumber)))
        );
    }
}
