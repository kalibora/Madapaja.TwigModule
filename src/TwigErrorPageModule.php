<?php
/**
 * This file is part of the Madapaja.TwigModule package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Madapaja\TwigModule;

use BEAR\Resource\RenderInterface;
use BEAR\Sunday\Extension\Error\ErrorInterface;
use Ray\Di\AbstractModule;

class TwigErrorPageModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->bind(RenderInterface::class)->annotatedWith('error_page')->to(ErrorPagerRenderer::class);
        $this->bind(ErrorInterface::class)->to(TwigErrorHandler::class);
        $this->bind(TwigErrorPage::class);
    }
}
