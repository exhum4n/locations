<?php

/** @noinspection PhpIllegalPsrClassPathInspection */

use Exhum4n\Components\Database\Migrations\PostgresMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationTimezonesTable extends PostgresMigration
{
    /**
     * {@inheritDoc}
     */
    protected function getSchema(): string
    {
        return 'locations';
    }

    /**
     * {@inheritDoc}
     */
    protected function getTable(): string
    {
        return 'timezones';
    }

    /**
     * {@inheritDoc}
     */
    protected function getBlueprint(): Closure
    {
        return function (Blueprint $table): void {
            $table->smallIncrements('id');
            $table->string('name', 50);
            $table->string('description', 50);
        };
    }
}
