<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.pages.product.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        DB::beginTransaction();
        try {
            $dom = new \domdocument();
            $dom->loadHtml($request->deskripsi_produk, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getelementsbytagname('img');

            foreach ($images as $k => $img) {
                $data = $img->getattribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);

                $data = base64_decode($data);

                $image_name = time() . '-' . Str::slug($request->get('nama_produk'), '-') . $k . '.png';
                $path =   public_path() . '/' . 'gambar-produk' . '/' . $image_name;

                file_put_contents($path, $data);

                $img->removeattribute('src');
                $img->setattribute('src', $path);
            }


            $diskripsiProduct = $dom->savehtml();
            $newProduct = new Product();
            $newProduct->nama_produk = $request->get('nama_produk');
            $newProduct->diskripsi = $diskripsiProduct;
            $newProduct->merk = $request->get('merk_produk');
            $newProduct->nomor_produk = $request->get('nomor_produk');
            $newProduct->tipe_produk = $request->get('tipe_produk');
            $newProduct->max_power = $request->get('max_power');
            $newProduct->certificate = $request->get('certificate');
            $newProduct->payment = $request->get('payment');
            $newProduct->warrant = $request->get('warrant');
            $newProduct->tag = 'Belum tersedia';
            $newProduct->category = $request->get('kategori');
            $newProduct->status = $request->get('status');
            $newProduct->create_by = Auth::user()->name;

            $newProduct->save();
            DB::commit();
            return redirect()->back()->with(['status' => 'Produk Berhasil Disimpan!']);
        } catch (\Throwable $th) {
            throw $th;
            DB::rollback();
            return redirect()->back()->withStatus('Produk Gagal disimpan')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back()->with(['status' => 'Data produk berhasil dihapus']);
    }
}
