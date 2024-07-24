<?php 

namespace Mohammed\MyPackageModule;

use Mohammed\MyPackageModule\Models\Product;

class ProductSearchService
{
    public function search($query)
    {
        return Product::where('name', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();
    }
}
