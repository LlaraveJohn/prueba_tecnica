<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Route;

class RouteController extends Controller
{
    public function index() {
        $ruta = Route::select('*')->get();
        return view('route.index')->with(compact('ruta'));
    }

    public function create () {
        return view('route.create');
    }

    public function store (Request $request) {

        $messages = [
            'code.required' => 'Este campo es obligatorio',
            'name.required' => 'Este campo es obligatorio'
        ];

        $rules = [
            'code' => 'required',
            'name' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $ruta = new Route();
        $ruta->code = $request->input('code');
        $ruta->name = $request->input('name');
        $ruta->save();

        return redirect('route');
    }

    public function edit ($id) {
        $ruta = Route::find($id);
        return view('route.create')->with(compact('ruta'))->with('id', $id);
    }

    public function update (Request $request, $id) {

        $messages = [
            'code.required' => 'Este campo es obligatorio',
            'name.required' => 'Este campo es obligatorio'
        ];

        $rules = [
            'code' => 'required',
            'name' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $ruta = Route::find($id);
        $ruta->code = $request->input('code');
        $ruta->name = $request->input('name');
        $ruta->save();

        return redirect('route');
    }

    public function destroy ($id) {

        $ruta = Route::find($id);
        $ruta->delete();

        return back();
    }
}
