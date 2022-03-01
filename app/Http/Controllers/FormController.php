<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
//use Laravolt\Indonesia\Models\Province;
class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }
 
    public function proses(Request $request)
    {
        Alert::success('Data Telah Terkirim!', 'Selamat Data Anda Sudah Jadi Anggota Pemuda Pancasila');
        $messagesError = [
            'required' => ':attribute ini wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
            'email' => ':attribute harus merupakan email yang valid!!!',
        ];
        
        $this->validate($request,[
            'nama' => 'required|min:5|max:50',
            'no_ktp' => 'required|numeric|min:15',
            'tempat_lahir' => 'required|min:3|max:30',
            'tanggal_lahir' => 'required',
            'sex' => 'required',
            'alamat' => 'required|min:5|max:100',
            'provinsi' => 'required|min:2|max:100',
            'kota' => 'required|min:2|max:100',
            'kecamatan' => 'required|min:2|max:100',
            'kelurahan' => 'required|min:2|max:100',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'religion' => 'required|not_in:--religion',
            'blood_type' => 'required|not_in:--Pilih--',
            'pekerjaan' => 'required',
            'pendidikan' => 'required|not_in:--Pilih--',
            'tinggi' => 'required|numeric',
            'berat' => 'required|numeric|between:2.5,99.99',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
            'examplecheck1' => 'required'
        ],$messagesError);

        $img_link = $this->saveImage( $request , 1);
        $request->image = $img_link;

        return view('proses',['data' => $request]);
    }
    public function saveImage(Request $request, $id)
    {
        $img = $request->image; 
        $img_name = ''; 
        if ($img !== NULL) {
            $img_name = 'image'. $id . "." . $img->extension();
            $img_name = str_replace(' ', '-', strtolower($img_name)); 
            $img->storeAs(null, $img_name, ['disk' => 'public']); 
        }
        return asset('storage') . '/' . $img_name; 
    }
    // public function index()
    // {
    //     $provinces = Province::pluck('name', 'id');

    //     return view('dependent-dropdown.index', [
    //         'provinces' => $provinces,
    //     ]);
    // }
}