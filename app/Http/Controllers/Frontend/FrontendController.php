<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Blogs\Blog;
use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use App\Repositories\Frontend\Pages\PagesRepository;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
//        $settingData = Setting::first();
//        $google_analytics = $settingData->google_analytics;
        return view('frontend.index');

    }

    public function blogs()
    {
        $blogs = Blog::all();
        return view('frontend.blogs', compact($blogs,'blogs'));
    }
    /**
     * show page by $page_slug.
     */
    public function showPage($slug, PagesRepository $pages)
    {
        $result = $pages->findBySlug($slug);

        return view('frontend.pages.index')
            ->withpage($result);
    }
}
