<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWhH3xGB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWhH3xGB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWhH3xGB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWhH3xGB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWhH3xGB\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WhH3xGB',
    'container.build_id' => 'd7277051',
    'container.build_time' => 1553086645,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWhH3xGB');
