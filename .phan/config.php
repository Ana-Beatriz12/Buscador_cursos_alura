<?php

return [

    "target_php_version" => '8.0.30',

    'directory_list' => [
        'src',
        'vendor/psr/http-message/src', 
        'vendor/symfony/dom-crawler',
        'vendor/guzzlehttp/guzzle'
    ],

    "exclude_analysis_directory_list" => [
        'vendor/'
    ],

    'autoload_file' => __DIR__ . '/vendor/autoload.php',

    'plugins' => [
        'AlwaysReturnPlugin',
        'DollarDollarPlugin',
        'DuplicateArrayKeyPlugin',
        'DuplicateExpressionPlugin',
        'PregRegexCheckerPlugin',
        'PrintfCheckerPlugin',
        'SleepCheckerPlugin',
 
        'UnreachableCodePlugin',
        'UseReturnValuePlugin',
        'EmptyStatementListPlugin',
        'LoopVariableReusePlugin',
    ],
];