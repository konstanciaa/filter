<?php

namespace App\Repository;

use App\Model\Data;
use Psr\Log\LoggerInterface;

class DataRepository
{

    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Data collection retrieved');

        return [
            new Data(
                1,
                12345,
                'Transportrechnung',
                'Test Rechnung',
                'DB',
                235,
            ),
            new Data(
                2,
                12346,
                'Transportgutschrift',
                'Test Rechnung',
                'ASF',
                276,
            ),
            new Data(
                3,
                12347,
                'Transportgutschrift',
                'Test Rechnung',
                'EL',
                190,
            )
        ];
    }
}
