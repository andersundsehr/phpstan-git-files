<?php

$paths = array_filter(explode("\n", (string)shell_exec("git ls-files | grep '\.php$'")));
$prefix = getcwd() . '/';
$paths = array_map(static fn($path) => $prefix . $path, $paths);
return [
    'parameters' => [
        'paths' => $paths,
    ],
];
