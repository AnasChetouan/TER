<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPz7Ilun\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPz7Ilun/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPz7Ilun.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPz7Ilun\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPz7Ilun\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Pz7Ilun',
    'container.build_id' => 'd8dd02c8',
    'container.build_time' => 1556129941,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPz7Ilun');
