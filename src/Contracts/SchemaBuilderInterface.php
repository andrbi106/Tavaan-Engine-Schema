<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Schema\Contracts;

/**
 * قرارداد SchemaBuilder.
 *
 * @see \Tavaan\Engine\Database\Schema\SchemaBuilder
 * @api 1.0
 */
interface SchemaBuilderInterface
{
    /**
     * متد create.
     *
     * @return mixed
     */
    public function create(/* ... */): mixed;

    /**
     * متد table.
     *
     * @return mixed
     */
    public function table(/* ... */): mixed;

    /**
     * متد drop.
     *
     * @return mixed
     */
    public function drop(/* ... */): mixed;

    /**
     * متد dropIfExists.
     *
     * @return mixed
     */
    public function dropIfExists(/* ... */): mixed;

    /**
     * متد rename.
     *
     * @return mixed
     */
    public function rename(/* ... */): mixed;

    /**
     * متد hasTable.
     *
     * @return mixed
     */
    public function hasTable(/* ... */): mixed;

    /**
     * متد hasColumn.
     *
     * @return mixed
     */
    public function hasColumn(/* ... */): mixed;

    /**
     * متد getColumns.
     *
     * @return mixed
     */
    public function getColumns(/* ... */): mixed;

    /**
     * متد getTables.
     *
     * @return mixed
     */
    public function getTables(/* ... */): mixed;

    /**
     * متد introspect.
     *
     * @return mixed
     */
    public function introspect(/* ... */): mixed;
}