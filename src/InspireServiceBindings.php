<?php

namespace Tetravalence\Inspire;

trait InspireServiceBindings
{
    /**
     * All of the service bindings for Inspire package.
     *
     * @var array
     */
    public $serviceBindings = [
       // Template helpers
       'Services\GeneralTemplateTags::class',
    ];
}
