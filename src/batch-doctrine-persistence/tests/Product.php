<?php

declare(strict_types=1);

namespace Yokai\Batch\Tests\Bridge\Doctrine\Persistence;

class Product
{
    public $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
