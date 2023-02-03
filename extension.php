<?php

$paths = array_filter(explode("\n", (string)shell_exec("git ls-files | grep '\.php$'")));
$absolutPaths = array_map(static fn($string) => getcwd() . '/' . $string, $paths);
return [
    'parameters' => [
        'paths' => $absolutPaths,
    ],
];
