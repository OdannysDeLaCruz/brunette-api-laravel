<?php

namespace App\Http\Controllers;

use App\Modules\Search\Services\SearchService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request, SearchService $searchService)
    {
        $results = $searchService->get($request);

        return response()->json([
            "results" => $results
        ]);
    }
}
