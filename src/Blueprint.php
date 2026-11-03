<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Schema;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Blueprint — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Database\Schema\Contracts\BlueprintInterface
 */
final class Blueprint implements Contracts\BlueprintInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function all(/* ... */): mixed
    {
        // TODO: پیاده‌سازی all مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function column(/* ... */): mixed
    {
        // TODO: پیاده‌سازی column مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function types(/* ... */): mixed
    {
        // TODO: پیاده‌سازی types مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function primary(/* ... */): mixed
    {
        // TODO: پیاده‌سازی primary مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function unique(/* ... */): mixed
    {
        // TODO: پیاده‌سازی unique مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function index(/* ... */): mixed
    {
        // TODO: پیاده‌سازی index مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function foreign(/* ... */): mixed
    {
        // TODO: پیاده‌سازی foreign مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function fullText(/* ... */): mixed
    {
        // TODO: پیاده‌سازی fullText مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function timestamps(/* ... */): mixed
    {
        // TODO: پیاده‌سازی timestamps مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function softDeletes(/* ... */): mixed
    {
        // TODO: پیاده‌سازی softDeletes مطابق مستندات (سند §3 API).
        return null;
    }
}