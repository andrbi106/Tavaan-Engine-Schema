<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Schema;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Database\Schema\Contracts\SchemaBuilderInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * SchemaBuilderServiceProvider — ثبت سرویس‌های موتور SchemaBuilder.
 */
final class SchemaBuilderServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(SchemaBuilderInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new SchemaBuilder($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('schema', $this->app->get(SchemaBuilderInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            SchemaBuilderInterface::class,
            'schema',
        ];
    }
}