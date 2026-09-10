<?php

declare(strict_types=1);

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

putenv('SESSION_DRIVER=array');
$_ENV['SESSION_DRIVER'] = 'array';
$_SERVER['SESSION_DRIVER'] = 'array';

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Kernel::class);
$request = Request::create('/', 'GET');
$response = $kernel->handle($request);

if ($response->getStatusCode() !== 200) {
    fwrite(STDERR, "Static export failed with HTTP {$response->getStatusCode()}.\n");
    exit(1);
}

$outputDirectory = __DIR__.'/../dist';

if (is_dir($outputDirectory)) {
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($outputDirectory, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($iterator as $item) {
        $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
    }
}

if (! is_dir($outputDirectory)) {
    mkdir($outputDirectory, 0755, true);
}

$excludedSourceImages = [
    'cure-quest-app.png',
    'in-stock-app.png',
    'laravel-blog-app.png',
    'me1.png',
    'me2.png',
    'me3.png',
    'me4.png',
    'me_hero.png',
    'medical-trials-app.png',
    'pingcrm-app.png',
    'portfolio-site.png',
];

$copyDirectory = static function (string $source, string $destination) use (&$copyDirectory, $excludedSourceImages): void {
    if (! is_dir($destination)) {
        mkdir($destination, 0755, true);
    }

    foreach (new DirectoryIterator($source) as $item) {
        if ($item->isDot() || in_array($item->getFilename(), ['index.php', 'hot', ...$excludedSourceImages], true)) {
            continue;
        }

        $target = $destination.'/'.$item->getFilename();
        $item->isDir() ? $copyDirectory($item->getPathname(), $target) : copy($item->getPathname(), $target);
    }
};

$copyDirectory(__DIR__.'/../public', $outputDirectory);
file_put_contents($outputDirectory.'/index.html', $response->getContent());
file_put_contents($outputDirectory.'/.nojekyll', '');
file_put_contents($outputDirectory.'/CNAME', "hugosuarez.com\n");

$kernel->terminate($request, $response);

fwrite(STDOUT, "Static site exported to dist/.\n");
