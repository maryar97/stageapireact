<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCP5Wa34\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCP5Wa34/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCP5Wa34.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCP5Wa34\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCP5Wa34\App_KernelDevDebugContainer([
    'container.build_hash' => 'CP5Wa34',
    'container.build_id' => 'a998f819',
    'container.build_time' => 1709714901,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCP5Wa34');