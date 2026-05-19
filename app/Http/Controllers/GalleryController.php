<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $query = GalleryItem::published()->ordered();

        if ($request->has('type') && in_array($request->type, ['cryolipolyse', 'body-sculpting', 'combinatie'])) {
            $query->where('treatment_type', $request->type);
        }

        $items = $query->get();
        $activeFilter = $request->get('type', 'alles');

        return view('gallerij', compact('items', 'activeFilter'));
    }
}
