<?php

$app = new Illuminate\Foundation\Application(
    realpath(__DIR__.'/../')
);


$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    FlCobrancas\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    FlCobrancas\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    FlCobrancas\Exceptions\Handler::class
);


return $app;
