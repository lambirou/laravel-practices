<?php

namespace App\Actions\Product;

use App\Models\Product;

final class ValidateProductAction
{
    public function __invoke(array $data, Product $product = null): array
    {
        $validatedData = validator($data, [
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ])->validate();

        if ($product) {
            $validatedData['image'] = $product->image;
        }

        if (isset($validatedData['image'])) {
            $validatedData['image'] = $validatedData['image']->store('products', 'public');
        }

        return $validatedData;
    }
}