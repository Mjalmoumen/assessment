<?php

namespace Mohammed\MyPackageModule\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mohammed\MyPackageModule\Models\Product;
use Mohammed\MyPackageModule\ProductSearchService;

class MyPackageController extends Controller
{
    protected $productSearchService;

    public function __construct(ProductSearchService $productSearchService)
    {
        $this->productSearchService = $productSearchService;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = $this->productSearchService->search($query);

        //return view('mypackage.search', ['results' => $results]);
        return view('search', ['results' => $results]);

    }
}
