<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ProductStatusEnum;
use App\QueryBuilders\Product\ProductQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'status'
    ];

    protected $casts = [
        'status' => ProductStatusEnum::class
    ];

    public function newEloquentBuilder(Builder $query)
    {
        return new ProductQueryBuilder($query);
    }
}