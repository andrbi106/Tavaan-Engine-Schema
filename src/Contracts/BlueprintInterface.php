<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Schema\Contracts;

/**
 * قرارداد Blueprint.
 *
 * @see \Tavaan\Engine\Database\Schema\Blueprint
 * @api 1.0
 */
interface BlueprintInterface
{
    /**
     * متد all.
     *
     * @return mixed
     */
    public function all(/* ... */): mixed;

    /**
     * متد column.
     *
     * @return mixed
     */
    public function column(/* ... */): mixed;

    /**
     * متد types.
     *
     * @return mixed
     */
    public function types(/* ... */): mixed;

    /**
     * متد primary.
     *
     * @return mixed
     */
    public function primary(/* ... */): mixed;

    /**
     * متد unique.
     *
     * @return mixed
     */
    public function unique(/* ... */): mixed;

    /**
     * متد index.
     *
     * @return mixed
     */
    public function index(/* ... */): mixed;

    /**
     * متد foreign.
     *
     * @return mixed
     */
    public function foreign(/* ... */): mixed;

    /**
     * متد fullText.
     *
     * @return mixed
     */
    public function fullText(/* ... */): mixed;

    /**
     * متد timestamps.
     *
     * @return mixed
     */
    public function timestamps(/* ... */): mixed;

    /**
     * متد softDeletes.
     *
     * @return mixed
     */
    public function softDeletes(/* ... */): mixed;
}