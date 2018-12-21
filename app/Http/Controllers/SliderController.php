<?php

namespace App\Http\Controllers;

use App\bottomSlider;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSliderIndex()
    {
        return view('admin.addSlider');
    }

    public function addBottomSliderIndex()
    {
        return view('admin.addBottomSlider');
    }

    public function sliderList()
    {
        return view('admin.sliderList');
    }

    public function bottomSliderList()
    {
        return view('admin.bottomSliderList');
    }

    public function add(Request $request)
    {
        try {
            $slider = new Slider();
            $slider->name = $request->name;
            $slider->image = $request->image;
            $slider->save();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function addBottomSlider(Request $request)
    {
        try {
            $slider = new bottomSlider();
            $slider->name = $request->name;
            $slider->image = $request->image;
            $slider->save();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function edit($id)
    {
        $data = Slider::where('id', $id)->first();
        return view('admin.editSlider', compact('id', 'data'));
    }

    public function update(Request $request)
    {
        try {
            Slider::where('id', $request->id)->update([
                'name' => $request->name,
                'image' => $request->image
            ]);

            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function delete(Request $request)
    {
        try {
            Slider::where('id', $request->id)->delete();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }


    }

    public function bottomSliderDelete(Request $request)
    {
        try {
            Slider::where('id', $request->id)->delete();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }


    }
}
