# Introduction

HTML view plugin for merophp/view-engine.

## Installation

Via composer:

<code>
composer require merophp/html-view
</code>

## Basic Usage

<pre><code>require_once 'vendor/autoload.php';

use Merophp\HtmlViewPlugin\HtmlView;

use Merophp\ViewEngine\ViewEngine;
use Merophp\ViewEngine\ViewPlugin\Collection\ViewPluginCollection;
use Merophp\ViewEngine\ViewPlugin\Provider\ViewPluginProvider;
use Merophp\ViewEngine\ViewPlugin\ViewPlugin;

$collection = new ViewPluginCollection();
$collection->add(
    new ViewPlugin(HtmlView::class),
]);

$provider = new ViewPluginProvider($collection);

$viewEngine = new ViewEngine($provider);

$view = $viewEngine->initializeView();
$view->html('<i>My HTML</i>');
echo $viewEngine->renderView($view);
</code></pre>
