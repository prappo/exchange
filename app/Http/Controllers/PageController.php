<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function page($id)
    {
        return view('page', compact('id'));
    }

    public function addPageIndex()
    {
        return view('admin.addPage');
    }

    public function pageList()
    {
        return view('admin.pageList');
    }

    public function add(Request $request)
    {
        if ($request->title == "") {
            return "Page Title Required";
        }

        try {
            $page = new Page();
            $page->title = $request->title;
            $page->content = $request->data;
            $page->position = $request->position;
            $page->save();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function editPageIndex($id)
    {
        $data = Page::where('id', $id)->first();
        return view('admin.editPage', compact('data', 'id'));
    }

    public function edit(Request $request)
    {
        try {
            Page::where('id', $request->id)->update([
                'title' => $request->title,
                'content' => $request->data
            ]);
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function delete(Request $request)
    {
        try {
            Page::where('id', $request->id)->delete();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
























