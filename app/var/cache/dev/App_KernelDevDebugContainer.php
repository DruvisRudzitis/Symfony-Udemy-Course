<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCWJvK0K\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCWJvK0K/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCWJvK0K.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCWJvK0K\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCWJvK0K\App_KernelDevDebugContainer([
    'container.build_hash' => 'CWJvK0K',
    'container.build_id' => 'c8a52b51',
    'container.build_time' => 1658835558,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCWJvK0K');
