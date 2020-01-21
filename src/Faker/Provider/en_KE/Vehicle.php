<?php


namespace Faker\Provider\en_KE;


use Faker\Generator;
use Illuminate\Support\Str;

class Vehicle extends \Faker\Provider\Base
{
    protected $generator;

    protected static $vehicleRegistration = array('KA? ###?','KB? ###?','KC? ###?');

    protected static $vin = array('KA? ###?','KB? ###?','KC? ###?');

    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    /**
     * Get vehicle registration number
     *
     * @param string $regex
     *
     * @return string
     */
    public function vehicleRegistration() : string
    {
        return Str::upper(
			static::bothify($this->generator->parse(static::randomElement(static::$vehicleRegistration)))
		);
    }
}
