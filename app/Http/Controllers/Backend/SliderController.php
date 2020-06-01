<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestSlider;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.pages.sliders.index')->withSliders($sliders);
    }

    public function create()
    {
        return view('backend.pages.sliders.create');
    }

    public function store(RequestSlider $request)
    {
        $newSlider = new Slider();
        $newSlider->nama_slider = $request->get('nama_slider');
        $newSlider->deskripsi_slider = $request->get('deskripsi_slider');
        $newSlider->status = $request->status;
        if ($request->hasFile('gambar_slider')) {
            $gambar = $request->file('gambar_slider');
            $nama_gambar = date('d-m-y') . '-' . $gambar->getClientOriginalName();
            $gambar->move('gambar_slider', $nama_gambar);
            $newSlider->gambar_slider = $nama_gambar;
        } else {
            $newSlider->gambar_slider = 'default-gambar-slider.png';
        }
        $newSlider->save();
        return redirect()->back()->withStatus('Slider berhasil di tambahkan');
    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('backend.pages.sliders.edit')->withSlider($slider);
    }
    public function update(Request $request, $id)
    {
        # code...
    }

    public function destroy($id)
    {
        # code...
    }
}
