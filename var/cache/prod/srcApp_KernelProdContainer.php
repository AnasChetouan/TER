<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWGlXJyZ\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWGlXJyZ/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerWGlXJyZ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerWGlXJyZ\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerWGlXJyZ\srcApp_KernelProdContainer([
    'container.build_hash' => 'WGlXJyZ',
    'container.build_id' => '36740383',
    'container.build_time' => 1556316399,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWGlXJyZ');
