<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.GNsOZN1' shared service.

return $this->privates['.service_locator.GNsOZN1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'specialtyRepository' => ['privates', 'App\\Repository\\SpecialtyRepository', 'getSpecialtyRepositoryService.php', true],
]);
