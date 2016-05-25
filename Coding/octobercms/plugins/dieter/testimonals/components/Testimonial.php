<?php namespace Dieter\Testimonals\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Testimonial extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Testimonal default',
            'description' => 'Implements a simple to-do list.'
        ];
    }

    public function defineProperties()
    {
        return [
            'max' => [
                'description'       => 'The most amount of todo items allowed',
                'title'             => 'Max items',
                'default'           => 10,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items value is required and should be integer.'
            ]
        ];
    }


}
