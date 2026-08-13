<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Profile;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $profiles = Profile::query()
            ->where('status', 'approved')
            ->latest()
            ->get();

        return response()
            ->view('sitemap', [
                'profiles' => $profiles,
            ])
            ->header('Content-Type', 'application/xml');
    }
}
