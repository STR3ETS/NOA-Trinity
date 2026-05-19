<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $items = GalleryItem::ordered()->paginate(15);

        return view('admin.gallery.index', compact('items'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'before_image' => ['required', 'image', 'max:5120'],
            'after_image' => ['required', 'image', 'max:5120'],
            'treatment_type' => ['required', 'in:cryolipolyse,body-sculpting,combinatie'],
            'is_published' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $beforeFile = $request->file('before_image');
        $afterFile = $request->file('after_image');
        $validated['before_image'] = 'gallery/' . $beforeFile->hashName();
        $validated['after_image'] = 'gallery/' . $afterFile->hashName();
        Storage::disk('public')->put($validated['before_image'], $beforeFile->getContent());
        Storage::disk('public')->put($validated['after_image'], $afterFile->getContent());
        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        GalleryItem::create($validated);

        return redirect()->route('admin.gallery.index')->with('success', 'Galerij item aangemaakt.');
    }

    public function edit(GalleryItem $gallery_item)
    {
        return view('admin.gallery.edit', ['item' => $gallery_item]);
    }

    public function update(Request $request, GalleryItem $gallery_item)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'before_image' => ['nullable', 'image', 'max:5120'],
            'after_image' => ['nullable', 'image', 'max:5120'],
            'treatment_type' => ['required', 'in:cryolipolyse,body-sculpting,combinatie'],
            'is_published' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('before_image')) {
            $file = $request->file('before_image');
            $validated['before_image'] = 'gallery/' . $file->hashName();
            Storage::disk('public')->put($validated['before_image'], $file->getContent());
        } else {
            unset($validated['before_image']);
        }

        if ($request->hasFile('after_image')) {
            $file = $request->file('after_image');
            $validated['after_image'] = 'gallery/' . $file->hashName();
            Storage::disk('public')->put($validated['after_image'], $file->getContent());
        } else {
            unset($validated['after_image']);
        }

        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        $gallery_item->update($validated);

        return redirect()->route('admin.gallery.index')->with('success', 'Galerij item bijgewerkt.');
    }

    public function destroy(GalleryItem $gallery_item)
    {
        $gallery_item->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Galerij item verwijderd.');
    }
}
