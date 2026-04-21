<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Product;

class SearchController extends Controller
{
    public function index()
    {
        return view(''search.index'');
    }

    public function results(Request $request)
    {
        $query = $request->query(''q'');
        
        if (!$query) {
            return view(''search.results'', [
                ''query'' => '''',
                ''posts'' => collect(),
                ''products'' => collect(),
                ''total'' => 0
            ]);
        }

        // Search in Posts
        $posts = Post::where(''title'', ''LIKE'', "%{$query}%")
                    ->orWhere(''content'', ''LIKE'', "%{$query}%")
                    ->get();

        // Search in Products
        $products = Product::where(''name'', ''LIKE'', "%{$query}%")
                          ->orWhere(''description'', ''LIKE'', "%{$query}%")
                          ->get();

        $total = $posts->count() + $products->count();

        return view(''search.results'', [
            ''query'' => $query,
            ''posts'' => $posts,
            ''products'' => $products,
            ''total'' => $total
        ]);
    }

    public function advanced()
    {
        return view(''search.advanced'');
    }

    public function advancedResults(Request $request)
    {
        // Implement advanced search results
        return view(''search.advanced_results'');
    }

    public function suggestions(Request $request)
    {
        // Return JSON suggestions
        return response()->json([''suggestions'' => []]);
    }

    public function history()
    {
        return view(''search.history'');
    }

    public function trending()
    {
        return view(''search.trending'');
    }

    public function filters()
    {
        return view(''search.filters'');
    }
}
