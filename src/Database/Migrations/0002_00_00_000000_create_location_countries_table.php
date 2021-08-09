<?php

/** @noinspection PhpIllegalPsrClassPathInspection */

use Exhum4n\Components\Database\Migrations\PostgresMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationCountriesTable extends PostgresMigration
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
        return 'countries';
    }

    /**
     * {@inheritDoc}
     */
    protected function getBlueprint(): Closure
    {
        return function (Blueprint $table): void {
            $table->smallIncrements('id');
            $table->string('name', 50);
            $table->string('code', 5);
            $table->unsignedSmallInteger('currency_id');
        };
    }
}
