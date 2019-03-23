<?php

namespace App\DTO;

use App\Entity\Status;

class StatusDTO
{
    /**
     * @var Status
     */
    private $status;

    private $id;

    public function __construct(Status $status)
    {
        $this->status = $status;
        $this->id = $status->getId();
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param Status $status
     */
    public function setStatus(Status $status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
}