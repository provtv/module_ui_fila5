<?php

declare(strict_types=1);

namespace Modules\UI\Adapters\Location;

use Modules\UI\Contracts\LocationDataProviderContract;

/**
 * Fallback quando nessun modulo fornisce dati geografici (es. modulo Geo assente).
 */
final class NullLocationDataProviderAdapter implements LocationDataProviderContract
{
    /**
     * @return array<string, string>
     */
    public function getRegions(): array
    {
        return [];
    }

    /**
     * @return array<string, string>
     */
    public function getProvinces(string $region): array
    {
        return [];
    }

    /**
     * @return array<string, string>
     */
    public function getCaps(string $region, string $province): array
    {
        return [];
    }

    /**
     * @param array<string, mixed> $state
     *
     * @return array<string, mixed>|null
     */
    public function resolve(array $state): ?array
    {
        return null;
    }
}
