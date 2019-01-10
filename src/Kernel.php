<?php
use UxGood\MiniFramework\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

use Symfony\Component\Routing\RouteCollectionBuilder;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {

    }

    protected function configureContainer(ContainerBuilder $container)
    {

    }
}
