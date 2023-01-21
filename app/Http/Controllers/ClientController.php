<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use App\Route;

class ClientController extends Controller
{
    public function index() {
        $cliente = Client::select('clients.*', 'routes.name AS nombre_ruta')
                           ->join('routes', 'clients.route_id', '=', 'routes.id')
                            ->get();

        return view('client.index')->with(compact('cliente'));
    }

    public function create () {
        $ruta = Route::select('*')->get();
        return view('client.create')->with(compact('ruta'));
    }

    public function store (Request $request) {

        $messages = [
            'document.required' => 'Este campo es obligatorio',
            'name.required' => 'Este campo es obligatorio',
            'surname.required' => 'Este campo es obligatorio',
            'phone.required' => 'Este campo es obligatorio',
            'latitude.required' => 'Este campo es obligatorio',
            'longitude.required' => 'Este campo es obligatorio',
            'ruta.required' => 'Este campo es obligatorio'
        ];

        $rules = [
            'document' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'ruta' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $cliente = new Client();
        $cliente->document = $request->input('document');
        $cliente->name = $request->input('name');
        $cliente->surname = $request->input('surname');
        $cliente->phone = $request->input('phone');
        $cliente->latitude = $request->input('latitude');
        $cliente->longitude = $request->input('longitude');
        $cliente->route_id = $request->input('ruta');
        $cliente->save();

        return redirect('client');
    }

    public function edit ($id) {
        $ruta = Route::select('*')->get();
        $cliente = Client::find($id);
        return view('client.create')->with(compact('ruta', 'cliente'))->with('id', $id);
    }

    public function update (Request $request, $id) {

        $messages = [
            'document.required' => 'Este campo es obligatorio',
            'name.required' => 'Este campo es obligatorio',
            'surname.required' => 'Este campo es obligatorio',
            'phone.required' => 'Este campo es obligatorio',
            'latitude.required' => 'Este campo es obligatorio',
            'longitude.required' => 'Este campo es obligatorio',
            'ruta.required' => 'Este campo es obligatorio'
        ];

        $rules = [
            'document' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'ruta' => 'required'
        ];

        $this->validate($request, $rules, $messages);

        $cliente = Client::find($id);
        $cliente->document = $request->input('document');
        $cliente->name = $request->input('name');
        $cliente->surname = $request->input('surname');
        $cliente->phone = $request->input('phone');
        $cliente->latitude = $request->input('latitude');
        $cliente->longitude = $request->input('longitude');
        $cliente->route_id = $request->input('ruta');
        $cliente->save();

        return redirect('client');
    }

    public function destroy ($id) {

        $cliente = Client::find($id);
        $cliente->delete();

        return back();
    }
}
