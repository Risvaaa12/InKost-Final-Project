<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Packages;
use App\Models\Comunity;
use App\Models\Rates;
use App\Models\Discs;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Packages::all();
        $title = "Daftar Kost";
        $package = new Packages;
        if (isset($_GET['s'])) {
            $s = $_GET['s'];
            $package = $package->where('package_name', 'like', "%$s%");
        }

        if(isset($_GET['package_id'])&&$_GET['package_id']!=''){
            $package=$package->where('comunity_id', $_GET['package_id']);
        }

        $package = $package->paginate(3);
        $packages=Packages::all();
        //$rates=Rates::all();
        $comunities=Comunity::all();
        //$discs=Discs::all();
        return view('admin.daftar', compact('title', 'package','comunities'));
    }
    
    public function comunity($id){
        //memanggil kelompok berdasarkan id_kelompok_tani
        $comunity=Comunity::where('comunity_id',$id)->first();
        //menampilkan nama kelompok pada title
        $title='owner'.$comunity->comunity_name;
        //memanggil daftar petani berdasarkan kelompok
        $package=$comunity->package;
        $comunities=Comunity::all();
        return view('admin.daftarpaket',compact('title','package','comunities'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $title = "Input Package Kost";
        $packages=Packages::all();
        $rates=Rates::all();
        $comunities=Comunity::all();
        //$discs=Discs::all();
        return view('admin.create', compact('title', 'packages', 'rates', 'comunities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Tidak Boleh Kosong!',
            'numeric'  => 'Harus angka!',
        ];
        $validasi = $request->validate([
            'package_name'=>'required:packages|max:255',
            'package_desc'=>'required:packages|max:255',
            'package_rate'=>'numeric:packages',
            'package_disc'=>'numeric:packages',
            'location'=>'required:packages|max:255',
            'comunity_id'=>'required:packages|max:255',
            'feature_img'=>'required:mimes:jpg,bmp,png|max:1024'
        ],$message);
        try {
            $fileName = time() . $request->file('feature_img')->getClientOriginalName();
            $path = $request->file('feature_img')->storeAs('features_img',$fileName);
            $validasi['feature_img'] = $path;
            $validasi['package_id'] = Auth::id();
            $packages=Packages::all();
            //$rates=Rates::all();
            $comunities=Comunity::all();
            //Packages::create($validasi);
            $response = Packages::create($validasi);
            return redirect('admin')->with('success','Data berhasil tersimpan');
        }catch (\Exception $e){
            echo $e->getMessage();
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
        
        $title = "Edit Daftar Kost";
        //$package=Packages::all();
        $package = Packages::where('package_id', $id)->get()->first();
        //$package = Packagaes::find($id);
        $comunities=Comunity::all();
        $comunity=Comunity::where('comunity_id', $id)->get()->first();
        //$comunities=Comunities::find($id);
        return view('admin.create', compact('title', 'package', 'comunities','comunity'));
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
        $message = [
            'required' => 'Kurang Lengkap',
            'numeric'  => 'Hanya Angka',
        ];
        $validasi = $request->validate([
            'package_name'=>'required:packages|max:255',
            'package_desc'=>'required:packages|max:255',
            'package_rate'=>'numeric:packages',
            'package_disc'=>'numeric:packages',
            'location'=>'required:packages|max:255',
            'comunity_id'=>'required:packages|max:255',
            'feature_img'=>'mimes:jpg,bmp,png|max:1024'
        ],$message);
        try {
            if($request->hasFile('feature_img')){
                $fileName=time().$request->file('feature_img')->getClientOriginalName();
                $path=$request->file('feature_img')->storeAs('features_img',$fileName);
                $validasi['feature_img'] = $path;
                //$package=Packages::find($id);
                $package = Packages::where('package_id', $id)->get()->first();
                Storage::delete($package->feature_img);
            }
            //$validasi['package_id'] = Auth::id();
            //Packages::where('package_id', $id)->update($validasi);
            //$package = Packagaes::find($id);
            $comunities=Comunity::all();
            $response = Packages::find($id)->update($validasi);
            return redirect('admin')->with('success','Data berhasil di update');      
        }catch (\Exception $e){
            echo $e->getMessage();
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Packages::where('package_id', $id)->get()->first();
        //$package=Packages::find($id);
        if($package != null){
            Storage::delete($package->feature_img);
            $package = Packages::where('package_id', $id)->get()->first();
            //$package=Packages::find($package->package_id);
            Packages::where('package_id', $id)->delete();
        }

        return redirect('admin')->with('success','Data berhasil di hapus');
    }
}
