<?php

namespace Tetravalence\Inspired;

trait InspiredServiceBindings
{
    /**
     * All of the service bindings for Inspired package.
     *
     * @var array
     */
    public $serviceBindings = [
       // Template helpers
       'Services\GeneralTemplateTags::class',
    ];
}
