<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use App\Models\House;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $house = House::all();
        return view('house')->with('house',$house);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('ev_no')){

            $house = new House();

            $house->ev_no = $request->input('ev_no');
            $house->adres = $request->input('adres');
            $house->oda_sayisi = $request->input('oda_sayisi');
            $house->metrekare = $request->input('metrekare');
            $house->kat = $request->input('kat');
            $house->fiyat = $request->input('fiyat');
            $house->sahip_ad = $request->input('sahip_ad');
            $house->sahip_soyad = $request->input('sahip_soyad');
            $house->sahip_gsm = $request->input('sahip_gsm');
            $house->sahip_email = $request->input('sahip_email');
            $house->save();
            return redirect('/');
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
        $house = House::find($id);

        return view('create')->with('house',$house);

    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit2($id)
    {
        $house2 = House::find($id);

        return view('create')->with('house2',$house2);

    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit3($id)
    {
        $house3 = House::find($id);

        return view('create')->with('house3',$house3);

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
        if($id){
            $house = House::find($id);
            $house->ev_no = $request->input('ev_no');
            $house->adres = $request->input('adres');
            $house->oda_sayisi = $request->input('oda_sayisi');
            $house->metrekare = $request->input('metrekare');
            $house->kat = $request->input('kat');
            $house->fiyat = $request->input('fiyat');
            $house->save();
            return redirect('/');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, $id)
    {
        if($id){
            $house2 = House::find($id);
            $house2->sahip_ad = $request->input('sahip_ad');
            $house2->sahip_soyad = $request->input('sahip_soyad');
            $house2->sahip_gsm = $request->input('sahip_gsm');
            $house2->sahip_email = $request->input('sahip_email');
            $house2->save();
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hesapla(Request $request, $id)
    {
        if($id){
            $house3 = House::find($id);

            $giris = Carbon ::parse($request->input('giris_tarihi'));
            $cikis = Carbon ::parse($request->input('cikis_tarihi'));

            $gun_farki = $giris -> diffInDays($cikis, false);
            $fiyati = $house3->fiyat;
            $total = $gun_farki * $fiyati;

            return view('create')->with(array('total' => $total, 'house3' => $house3));
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
        $house = House::find($id);
        $house->delete();
        return redirect('/');
    }
}
