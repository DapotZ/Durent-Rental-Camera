<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function admindashboard()
    {
        $kategori = DB::table('kategori')->get()->count();
        $equipment = DB::table('equipment')->get()->count();
        $users = DB::table('users')->get()->count();
        $contactus = DB::table('contactus')->get()->count();
        return view('admin.admindashboard', [
            'kategori' => $kategori,
            'equipment' => $equipment,
            'users' => $users,
            'contactus' => $contactus,

        ]);
    }

    public function kelolakategori()
    {
        $kategori = DB::table('kategori')->get();
        return view('admin.kelolakategori',['kategori' => $kategori]);
    }

    public function tambahkategori()
    {
        return view('admin.tambahkategori');
    }

    public function simpankategori(Request $request)
    {
        DB::table('kategori')->insert([
            'nama_kategori' => $request->kategori,
        ]);

        $successSoundUrl = asset('sounds/UEZRX57-removing-a-plug.mp3'); // Ganti dengan path sesuai lokasi file suara berhasil

        session()->flash('success', 'Barang berhasil ditambahkan');
        session()->flash('soundUrl', $successSoundUrl);
        return redirect('kelolakategori')->with(['success' => 'kategori berhasil ditambahkan']);

    }

    public function editkategori($id)
    {
       $kategori = DB::table('kategori')->where('id_kategori', $id)->first();
       return view('admin.editkategori', ['kategori' => $kategori]);
    }

    public function ubahkategori(Request $request, $id)
    {
        DB::table('kategori')->where('id_kategori', $id)->update(['nama_kategori' => $request->nama_kategori]);
        return redirect('kelolakategori')->with(['success' => 'kategori berhasil diubah']);
    }

    public function hapuskategori($id)
    {
        DB::table('kategori')->where('id_kategori', $id)->delete();
        return back()->with(['success' => 'kategori berhasil dihapus']);
    }

    public function kelolaequipment()
    {
        $equipment = DB::table('equipment')->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->get();
        return view('admin.kelolaequipment',['equipment' => $equipment]);
    }

    public function tambahequipment()
    {
        $kategori = DB::table('kategori')->get();
        return view('admin.tambahequipment',['kategori' => $kategori]);
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
    public function insertequipment(Request $request)
    {
        $request->validate([
            'nametitle' => 'required',
            'deskripsi' => 'required',
            'price' => 'required',
            'modelyear' => 'required',
            'jumlah' => 'required',
            'img1' => 'required',
            'img2' => 'required',
            'img3' => 'required',
            'img4' => 'required',
            'img5' => 'required',

        ]);
        $img1='';
        $img2='';
        $img3='';
        $img4='';
        $img5='';

        if($contents=$request->file('img1')){

            $request->validate ([
                'img1' => 'max:10240'
            ], [
                'img1.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img1 = $this->uploadfile(storage_path('uploads'), $contents);
        }
        if($contents=$request->file('img2')){

            $request->validate ([
                'img2' => 'max:10240'
            ], [
                'img2.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img2 = $this->uploadfile(storage_path('uploads'), $contents);
        }
        if($contents=$request->file('img3')){

            $request->validate ([
                'img3' => 'max:10240'
            ], [
                'img3.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img3 = $this->uploadfile(storage_path('uploads'), $contents);
        }
        if($contents=$request->file('img4')){

            $request->validate ([
                'img4' => 'max:10240'
            ], [
                'img4.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img4 = $this->uploadfile(storage_path('uploads'), $contents);
        }
        if($contents=$request->file('img5')){

            $request->validate ([
                'img5' => 'max:10240'
            ], [
                'img5.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img5 = $this->uploadfile(storage_path('uploads'), $contents);
        }

        $data=[
            'nama_equipment' => $request->nametitle,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->price,
            'id_kategori' => $request->kategori,
            'tahun' => $request->modelyear,
            'jumlah' => $request->jumlah,
            'image1' => $img1 ?? '',
            'image2' => $img2 ?? '',
            'image3' => $img3 ?? '',
            'image4' => $img4 ?? '',
            'image5' => $img5 ?? '',
        ];
        DB::table('equipment')->insert($data);
        return redirect('kelolaequipment')->with(['success' => 'Data berhasil ditambah']);
    }

    public function hapusequipment($id)
    {
        DB::table('equipment')->where('id_equipment', $id)->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
    }

    public function editequipment($id)
    {
        $kategori = DB::table('kategori')->get();
        $equipment = DB::table('equipment')->where('id_equipment', $id)->join('kategori', 'equipment.id_kategori', '=', 'kategori.id_kategori')->first();
        return view('admin.editequipment',['equipment' => $equipment, 'kategori' => $kategori]);
    }

    public function ubahequipment(Request $request, $id)
    {
        $request->validate([
            'nametitle' => 'required',
            'deskripsi' => 'required',
            'price' => 'required',
            'modelyear' => 'required',
            'jumlah' => 'required',

        ]);
        $img = [];

        if($contents=$request->file('img1')){

            $request->validate ([
                'img1' => 'max:10240'
            ], [
                'img1.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img[0] = $this->uploadfile(storage_path('uploads'), $contents);
        }
        if($contents=$request->file('img2')){

            $request->validate ([
                'img2' => 'max:10240'
            ], [
                'img2.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img[1] = $this->uploadfile(storage_path('uploads'), $contents);
        }
        if($contents=$request->file('img3')){

            $request->validate ([
                'img3' => 'max:10240'
            ], [
                'img3.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img[2] = $this->uploadfile(storage_path('uploads'), $contents);
        }
        if($contents=$request->file('img4')){

            $request->validate ([
                'img4' => 'max:10240'
            ], [
                'img4.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img[3] = $this->uploadfile(storage_path('uploads'), $contents);
        }
        if($contents=$request->file('img5')){

            $request->validate ([
                'img5' => 'max:10240'
            ], [
                'img5.max' => 'Jangan besar-besar file ktpnya max 10 mb'
            ]);

            $img[4] = $this->uploadfile(storage_path('uploads'), $contents);
        }

        $data=[
            'nama_equipment' => $request->nametitle,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->price,
            'id_kategori' => $request->kategori,
            'tahun' => $request->modelyear,
            'jumlah' => $request->jumlah,
        ];

        for($i = 0; $i < 5; $i++) {
            if(!empty($img[$i])) {
                $data['image' . $i + 1] = $img[$i];
            }
        }

        DB::table('equipment')->where('id_equipment', $id)->update($data);
        return redirect('kelolaequipment')->with(['success' => 'Data berhasil diubah']);
    }

    public function kelolauser()
    {
        $users = DB::table('users')->get();
        return view('admin.kelolauser',['users' => $users]);
    }

    public function kelolasewa()
    {
        return view ('admin.kelolasewa');
    }

    public function kelolacontact()
    {
        $contactus = DB::table('contactus')->get();
        return view ('admin.kelolacontact', ['contactus' => $contactus]);
    }

    public function changestatus($id)
    {
        $contactus = DB::table('contactus')->where('id_cu', $id)->first();
        return view('admin.changestatus', ['contactus' => $contactus]);
    }

    public function ubahstatus(Request $request, $id)
    {
        DB::table('contactus')->where('id_cu', $id)->update(['status' => $request->status]);
        return redirect('kelolacontact')->with(['success' => 'Status berhasil diubah']);
    }

    public function tentangkami()
    {
        $tblpages = DB::table('tblpages')->where('type', '=', 'aboutus')->first();
        return view ('admin.tentangkami', ['about' => $tblpages->detail ]);
    }

    public function ubahtentangkami(Request $request)
    {
        DB::table('tblpages')->where('type', '=', 'aboutus')->update([
            'detail' => $request->tentangkami
        ]);

        return redirect()->back()->with(['success' => 'Data berhasil diubah']);
    }

    public function FAQs()
    {
        $tblpages = DB::table('tblpages')->where('type', '=', 'FAQs')->first();
        return view ('admin.FAQs', ['FAQs' => $tblpages->detail]);
    }

    public function ubahFAQs(Request $request)
    {
        DB::table('tblpages')->where('type', '=', 'FAQs')->update([
            'detail' => $request->FAQs
        ]);

        return redirect()->back()->with(['success' => 'Data berhasil diubah']);
    }

    public function privacy()
    {
        $tblpages = DB::table('tblpages')->where('type', '=', 'privacy')->first();
        return view ('admin.privacypolicy', ['privacy' => $tblpages->detail]);
    }

    public function ubahprivacy(Request $request)
    {
        DB::table('tblpages')->where('type', '=', 'privacy')->update([
            'detail' => $request->privacy
        ]);

        return redirect()->back()->with(['success' => 'Data berhasil diubah']);
    }

    public function updatecontact()
    {
        $contactusinfo = DB::table('contactusinfo')->get();
        return view('admin.updatecontact', ['contactusinfo' => $contactusinfo]);
    }

    public function ubahcontact(Request $request)
    {
        DB::table('contactusinfo')->where('id_info', '=', '1')->update([
            'alamat_kami' => $request->address,
            'email_kami' => $request->email,
            'telp_kami' => $request->contactno,
        ]);

        return redirect()->back()->with(['success' => 'Data berhasil diubah']);
    }

    public function laporan()
    {
        return view ('admin.laporan');
    }

    public function ubahpassword()
    {
        return view ('admin.updatepasswordadmin');
    }

    public function updatepasswordadmin(Request $request)
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

    public function showresetpassword($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        return view('admin.resetpassword', compact('user'));
    }

    public function resetpassword($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $password = '12345678';

        $hashedPassword = bcrypt($password);


        DB::table('users')->where('id', $id)->update(['password' => $hashedPassword]);

        return redirect('kelolauser')->with(['success' => 'Password berhasil diubah']);


    }

}
