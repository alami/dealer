<?php

namespace App\Http\Controllers;

use App\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DealerController extends Controller
{
    public function index()
    {
        $dealers = Dealer::all();
        return view('dealer', ['dealers'=>$dealers, 'layout'=>'index']);
    }
    public function create()
    {
        $dealers = Dealer::all();
        return view('dealer', ['dealers'=>$dealers, 'layout'=>'create']);
    }
    public function store(Request $request)
    {
        $dealer = new Dealer();
        $dealer->businessName = $request->input('businessName');
        $dealer->region = $request->input('region');
        $dealer->address = $request->input('address');
        $dealer->address1 = $request->input('address1');
        $dealer->square = $request->input('square');
        $dealer->phone = $request->input('phone');
        $dealer->email = $request->input('email');
        $dealer->slug = Str::slug($request->input('businessName'), "-");
        $dealer->save();
        return redirect('/');
    }
    public function show($id)
    {
        $dealer = Dealer::find($id);
        $dealers = Dealer::all();
        return view('dealer', ['dealers'=>$dealers, 'dealer'=>$dealer, 'layout'=>'show']);
    }
    public function edit($id)
    {
        $dealer = Dealer::find($id);
        $dealers = Dealer::all();
        return view('dealer', ['dealers'=>$dealers, 'dealer'=>$dealer, 'layout'=>'edit']);
    }
    public function update(Request $request, $id)
    {
        $dealer = Dealer::find($id);
        $dealer->businessName = $request->input('businessName');
        $dealer->region = $request->input('region');
        $dealer->address = $request->input('address');
        $dealer->address1 = $request->input('address1');
        $dealer->square = $request->input('square');
        $dealer->phone = $request->input('phone');
        $dealer->email = $request->input('email');
        $dealer->save();
        return redirect('/');
    }
    public function destroy($id)
    {
        $dealer = Dealer::find($id);
        $dealer->delete();
        return redirect('/');
    }
}
