<?php

declare(strict_types=1);

namespace Modules\UI\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;
use Modules\UI\Providers\UIServiceProvider;
use Modules\UI\Tests\Support\EnsuresUiDatabaseSchema;
use Modules\User\Models\User;
use Modules\User\Providers\UserServiceProvider;
use Modules\Xot\Tests\XotBaseTestCase;

/**
 * Base test case for UI module.
 *
<<<<<<< HEAD
 * Uses shared sqlite from fixcity_data.sqlite (no RefreshDatabase).
=======
 * Uses shared sqlite from database.sqlite (no RefreshDatabase).
 * Uses shared sqlite from database.sqlite (no RefreshDatabase).
>>>>>>> 92912795 (.)
 */
abstract class TestCase extends XotBaseTestCase
{
    use DatabaseTransactions;
    use EnsuresUiDatabaseSchema;

    /** @var list<string> */
    protected $connectionsToTransact = ['xot', 'sqlite', 'user'];

    /**
     * @return array<int, class-string>
     */
    protected function getPackageProviders(Application $app): array
    {
        return [
            ...parent::getPackageProviders($app),
            UserServiceProvider::class,
            UIServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

<<<<<<< HEAD
        $database = database_path('fixcity_data.sqlite');
=======
        $database = database_path('database.sqlite');
>>>>>>> 92912795 (.)

        /** @var array<string, array<string, mixed>> $connections */
        $connections = config('database.connections', []);

        foreach (array_keys($connections) as $connection) {
            if ('sqlite' !== config("database.connections.{$connection}.driver")) {
                continue;
            }

            $this->app['config']->set("database.connections.{$connection}.database", $database);
            DB::purge($connection);
        }

        config(['auth.providers.users.model' => User::class]);

        $this->ensureUiSchema();
    }
}
