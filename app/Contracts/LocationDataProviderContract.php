<?php

declare(strict_types=1);

namespace Modules\UI\Contracts;

/**
 * Contratto per la risoluzione dati geografici gerarchici (regione/provincia/CAP).
 *
 * L'implementazione reale viene fornita da un modulo esterno (es. Geo) che la
 * registra nel container. Modules\UI non deve mai dipendere direttamente da
 * Modules\Geo\*: questo contratto è il confine architetturale.
 */
interface LocationDataProviderContract
{
    /**
     * @return array<string, string> mappa codice => nome regione
     */
    public function getRegions(): array;

    /**
     * @param string $region codice regione
     *
     * @return array<string, string> mappa codice => nome provincia
     */
    public function getProvinces(string $region): array;

    /**
     * @param string $region   codice regione
     * @param string $province codice provincia
     *
     * @return array<string, string> mappa cap => cap
     */
    public function getCaps(string $region, string $province): array;

    /**
     * Risolve i dati geografici completi a partire dallo stato del form.
     *
     * @param array<string, mixed> $state
     *
     * @return array<string, mixed>|null
     */
    public function resolve(array $state): ?array;
}
