<?php

declare(strict_types=1);

namespace App\QueryBuilders\Product;

use App\Enums\ProductStatusEnum;
use Illuminate\Database\Eloquent\Builder;

class ProductQueryBuilder extends Builder
{
    public function withStatus(ProductStatusEnum $status): self
    {
        return $this->where('status', $status->value);
    }

    public function withName(string $name): self
    {
        return $this->where('name', 'like', "%{$name}%");
    }

    public function withContent(string $content): self
    {
        return $this->whereNotNull('content');
    }
}