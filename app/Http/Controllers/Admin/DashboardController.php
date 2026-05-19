<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\GalleryItem;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'galleryCount' => GalleryItem::count(),
            'publishedCount' => GalleryItem::published()->count(),
            'messagesCount' => ContactSubmission::count(),
            'unreadCount' => ContactSubmission::unread()->count(),
        ]);
    }
}
