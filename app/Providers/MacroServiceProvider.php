<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blueprint::macro('organization', function () {
            return tap(
                $this->foreignUuid('organization_id'),
                fn (ForeignIdColumnDefinition $column) =>
                $column
                    ->constrained()
                    ->cascadeOnDelete()
            );
        });

        Blueprint::macro('dropOrganization', function () {
            $this->dropForeign(['organization_id']);
            $this->dropColumn('organization_id');

            return $this;
        });
    }
}
