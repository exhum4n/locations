<?php

/** @noinspection PhpIllegalPsrClassPathInspection */

use Exhum4n\Components\Database\Migrations\PostgresMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationRegionsTable extends PostgresMigration
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
        return 'regions';
    }

    /**
     * {@inheritDoc}
     */
    protected function getBlueprint(): Closure
    {
        return function (Blueprint $table): void {
            $table->tinyIncrements('id');
            $table->string('name', 50);
            $table->unsignedSmallInteger('country_id');

            $table->foreign('country_id')
                ->references('id')
                ->on('locations.countries')
                ->onDelete('cascade');
        };
    }
}
