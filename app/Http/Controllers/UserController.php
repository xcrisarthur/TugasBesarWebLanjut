<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();

        return view('profile.index', [
            'pickUsers' => $user,
        ]);
    }

//    public function profile()
//    {
////        $user = Auth::user(); // Mengambil pengguna yang sedang masuk
////        return view('profile.index', ['user' => $user]);
//
//        $user = Auth::user()->user_id; // Ganti 1 dengan id user yang diinginkan
//        return view('profile.index', ['user' => $user]);
//    }

    public function updatePhoto(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validasi request jika diperlukan

        $user = Auth::user();

        // Hapus foto profil sebelumnya jika ada
        if ($user->foto) {
            Storage::delete($user->foto);
        }

        // Simpan foto profil baru
        $email = $user->email;
        $extension = $request->file('photo')->getClientOriginalExtension();
        $filename = $email . '.' . $extension;
        $request->file('photo')->storeAs('public/img', $filename);

//        $path = $request->file('photo')->store('public/img');
//        $filename = str_replace('public/', '', $path);

        // Update kolom 'foto' pada tabel 'l_user'
        $user->foto = $filename;
        $user->save();

        return redirect()->back()->with('success', 'Foto profil berhasil diunggah.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());

        return back()->with('success', 'Profile updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
