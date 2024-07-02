<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $equipment = DB::table('equipment')->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->take(3)->get();
        return view('index',['equipment' => $equipment]);
    }

    public function contact()
    {
        $aboutText = DB::table('contactusinfo')->where('id_info', '=', '1')->first();

        return view('hubungikami', ['contact' => $aboutText]);
    }

    public function hubungikami(Request $request)
    {
        DB::table('contactus')->insert([
            'nama_visit' => $request->fullname,
            'email_visit' => $request->email,
            'telp_visit' => $request->contactno,
            'pesan' => $request->message,
        ]);
        return redirect()->back();
    }

    public function about()
    {
        $aboutText = DB::table('tblpages')->where('type', '=', 'aboutus')->first();
        return view('about-us', ['about' => $aboutText->detail]);
    }

    public function faqs()
    {
        $aboutText = DB::table('tblpages')
                        ->where('type', '=', 'faqs')
                        ->first();
        return view('faqs', ['faqs' => $aboutText->detail]);
    }

    public function privacypolicy()
    {
        $aboutText = DB::table('tblpages')->where('type', '=', 'privacy')->first();
        return view('privacypolicy', ['privacy' => $aboutText->detail]);
    }

    public function regist()
    {

        return view('regist');
    }

    public function profile()
    {

        return view('profile');
    }

    public function gantiprofile(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'equipmentnumber' => 'required',
            'address' => 'required',

        ]);
        $ktpname='';
        $kkname='';

        if($contents=$request->file('ktp')){

            $request->validate ([
                'ktp' => 'max:10240'
            ], [
                'ktp.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $ktpname = $this->uploadfile(storage_path('uploads'), $contents, storage_path('uploads/' . Auth::user()->ktp));
        }

        if($contents=$request->file('kk')){

            $request->validate ([
                'kk' => 'max:10240'
            ], [
                'kk.max' => 'Jangan besar-besar file kknya max 10 mb'
            ]);

            $kkname = $this->uploadfile(storage_path('uploads'), $contents, storage_path('uploads/' . Auth::user()->kk));

        }

        $data=[
            'name' => $request->fullname,
            'email' => $request->email,
            'number' => $request->equipmentnumber,
            'alamat' => $request->address,
        ];

        if(!empty($ktpname)) {
            $data['ktp'] = $ktpname;
        }

        if(!empty($kkname)) {
            $data['kk'] = $kkname;
        }

        DB::table('users')->where('id', '=', Auth::id())->update($data);

        return redirect()->back();
    }

    public function foto($filename)
    {
        return Image::make(storage_path('uploads/' . $filename))->response();
    }

    public function uploadfile($path, $contents, $oldfile=null)
    {
        if(!empty($oldfile)) {
            unlink($oldfile);
        }

            $name=rand() . time() . $contents->getClientOriginalName();

            $contents->move($path,$name);
            return $name;
    }

    public function registuser(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'equipmentnumber' => 'required',
            'alamat' => 'required',
            'ktp' => 'required',
            'kk' => 'required',
            'password' => 'required|confirmed',
            'setuju' => 'required',

        ]);
        $ktpname='';
        $kkname='';

        if($contents=$request->file('ktp')){

            $request->validate ([
                'ktp' => 'max:10240'
            ], [
                'ktp.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $ktpname = $this->uploadfile(storage_path('uploads'), $contents);
        }

        if($contents=$request->file('kk')){

            $request->validate ([
                'kk' => 'max:10240'
            ], [
                'kk.max' => 'Jangan besar-besar file kknya max 10 mb'
            ]);

            $kkname = $this->uploadfile(storage_path('uploads'), $contents);

        }

        $data=[
            'name' => $request->fullname,
            'email' => $request->email,
            'number' => $request->equipmentnumber,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
            'created_at' => \Carbon\Carbon::now(),
        ];

        if(!empty($ktpname)) {
            $data['ktp'] = $ktpname;
        }

        if(!empty($kkname)) {
            $data['kk'] = $kkname;
        }

        DB::table('users')->insert($data);

        return redirect('regist')->with(['success' => 'Akun berhasil dibuat!']);
    }

    public function updatepassword()
    {
        return view('updatepassword');
    }

    public function updatepassworduser(Request $request)
    {
        $request->validate([
            'currentpassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user=DB::table('users')->where('id', '=', Auth::id())->first();

        if(Hash::check($request->currentpassword, $user->password)){
            DB::table('users')->where('id', '=', Auth::id())->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with(['success' => 'Password berhasil diubah']);
        }

            return redirect()->back()->with(['error' => 'New password harus sama']);
    }

    public function detailequipment($id)
    {
        $kategori = DB::table('kategori')->get()->first();
        $equipment = DB::table('equipment')->where('id_equipment', $id)->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->first();
        return view('detailequipment',['equipment' => $equipment, 'kategori' => $kategori]);

    }

    public function daftarequipment()
    {
        $kategori = DB::table('kategori')->get();
        $equipment = DB::table('equipment')->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->Paginate(5);
        $jumlahequipment = DB::table('equipment')->get()->count();
        $equipmentterbaru = DB::table('equipment')->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->orderByDesc('id_equipment')->take(4)->get();

        return view('daftarequipment',[
            'jumlahequipment' => $jumlahequipment,
            'kategori' => $kategori,
            'equipment' => $equipment,
            'equipmentterbaru' => $equipmentterbaru,
        ]);
    }

    public function cariequipment(Request $request)
    {
        $namakategori = $request->namakategori;
        $kategori = DB::table('kategori')->get();
        $jumlahequipment = DB::table('equipment')->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->where('nama_kategori', $namakategori)->get()->count();
        $equipment = DB::table('equipment')->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->where('nama_kategori', $namakategori)->Paginate(5);
        $equipmentterbaru = DB::table('equipment')->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->orderByDesc('id_equipment')->take(4)->get();

        return view('daftarequipment',[
            'jumlahequipment' => $jumlahequipment,
            'kategori' => $kategori,
            'equipment' => $equipment,
            'equipmentterbaru' => $equipmentterbaru,
        ]);

    }

}
