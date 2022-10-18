<?php

namespace App\Http\Controllers;

use App\Http\Requests\PertandinganRequest;
use App\Klasemen;
use App\Pertandingan;
use App\Tim;
use Illuminate\Http\Request;

class KlasemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        # code...
        $peserta = [['nama'=>'Cristiano', 'umur'=>21],['nama'=>'Ronaldo', 'umur'=> 23], ['nama'=>'Lionel', 'umur'=>22]];

        print_r($peserta);

    }

    public function testStore(Request $request)
    {
        # code...
        $luasPersegi = $request->panjang * $request->panjang;

        echo $luasPersegi;

        return redirect()->back()->with('success', 'Hasilnya adalah '.$luasPersegi);
    }

    public function index()
    {
        $tim = Tim::all();
        $klasemen = Klasemen::orderBy('poin','desc')->get();
        return view('pages.klasemen', compact('tim', 'klasemen'));
    }


    public function store(PertandinganRequest $request)
    {
        $data = $request->all();
        Pertandingan::create($data);

        if ($data['score_home'] > $data['score_away']) {
            # code...
            $tim = Klasemen::find($data['id_tim_home']);
            $tim->update([
                'poin' => $tim->poin + 3,
            ]);
        } elseif ($data['score_home'] < $data['score_away']) {
            # code...
            $tim = Klasemen::find($data['id_tim_away']);
            $tim->update([
                'poin' => $tim->poin + 3,
            ]);
        } elseif ($data['score_home'] = $data['score_away']) {
            # code...
            $timHome = Klasemen::find($data['id_tim_home']);
            $timHome->update([
                'poin' => $timHome->poin + 1,
            ]);

            $timAway = Klasemen::find($data['id_tim_away']);
            $timAway->update([
                'poin' => $timAway->poin + 1,
            ]);
        }

        return redirect()->back()->with('success', 'Klasemen Telah Diupdate');
    }

}
