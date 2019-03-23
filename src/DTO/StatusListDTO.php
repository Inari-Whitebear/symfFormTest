<?php

namespace App\DTO;

use App\Entity\Status;

class StatusListDTO
{
    private $statusList;

    public function __construct($statusList)
    {
        $this->statusList = array_map(function (Status $status) {
            return new StatusDTO($status);
        }, $statusList);
    }

    /**
     * @return array
     */
    public function getStatusList(): array
    {
        return $this->statusList;
    }

    /**
     * @param array $statusList
     */
    public function setStatusList(array $statusList): void
    {
        $this->statusList = $statusList;
    }
}