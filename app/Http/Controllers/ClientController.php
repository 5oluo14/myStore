<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    public function index() {
        $records = Client::when(request('from_date'), function ($q) {
            $q->where('created_at', '>=', request('from_date'))
                ->where('created_at', '<=', request('to_date'));
        })
            ->when(request('client'), function ($q) {
                $q->where('name', 'like', '%' . request('client') . '%');
            })
            ->when(request('phone'), function ($q) {
                $q->where('phone', 'like', '%' . request('phone') . '%');
            })
            ->when(request('email'), function ($q) {
                $q->where('email', 'like', '%' . request('email') . '%');
            })
            ->when(request('address'), function ($q) {
                $q->where('address', 'like', '%' . request('address') . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        $create_route = 'clients.create';
        $edit_route = 'clients.edit';
        $destroy_route = 'clients.destroy';
        return view('admin.clients.index', compact('records', 'create_route', 'edit_route', 'destroy_route'));

    }

    public function create() {
        $store_route = 'clients.store';
        return view('admin.clients.create', compact('store_route'));
    }

    public function store(ClientRequest $request)
    {
        $data = $request->validated();
        $client = Client::create($data);
        return redirect()->route('clients.index')->with('success', __('تم الاضافة بنجاح'));

    }
    public function update(ClientRequest $request, Client $client)
    {
        $data = $request->validated();
        $client->update($data);
        return redirect()->route('clients.index')->with('success', __('تم التعديل بنجاح'));
    }

    public function edit($id) {
        $update_route = 'clients.update';
        $record = Client::findOrFail($id); 
        return view('admin.clients.edit', compact('update_route', 'record'));
    }

    public function destroy (Client $client) {
        $id = $client->id;
        $client->delete();
        return response()->json([
            'status' => 1,
            'message' => __('تم الحذف بنجاح'),
            'id' => $id
        ]);
    }
}