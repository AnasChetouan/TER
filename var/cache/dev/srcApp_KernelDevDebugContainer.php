<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUVRCcxv\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUVRCcxv/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUVRCcxv.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUVRCcxv\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUVRCcxv\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UVRCcxv',
    'container.build_id' => '14bf137e',
    'container.build_time' => 1555934196,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUVRCcxv');
