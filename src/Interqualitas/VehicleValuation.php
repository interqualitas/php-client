<?php

namespace Interqualitas;

use Interqualitas\ModuleAbstract;

/**
 * The API Calls to interact with vehicle valuations
 * @author Jon Wadsworth <jon@interqualitas.net>
 */
class VehicleValuation
extends ModuleAbstract{
    public function __construct(\Interqualitas $main) {
        parent::__construct($main);
        $this->modulePath = 'api/vehiclevaluation';
    }
}
