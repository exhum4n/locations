<?php

/** @noinspection PhpIllegalPsrClassPathInspection */

use Exhum4n\Components\Database\Migrations\PostgresMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationCitiesTable extends PostgresMigration
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
        return 'cities';
    }

    /**
     * {@inheritDoc}
     */
    protected function getBlueprint(): Closure
    {
        return function (Blueprint $table): void {
            $table->smallIncrements('id');
            $table->string('name', 50);
            $table->unsignedSmallInteger('region_id');
            $table->unsignedSmallInteger('timezone_id');

            $table->foreign('region_id')
                ->references('id')
                ->on('locations.regions')
                ->onDelete('cascade');

            $table->foreign('timezone_id')
                ->references('id')
                ->on('locations.timezones');
        };
    }
}
