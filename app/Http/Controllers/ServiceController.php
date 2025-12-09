<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        $serviceData = $request->all();
        if (isset($serviceData['id'])) {
            $update = service::where('id', $serviceData['id'])->update($serviceData);
            if ($update) {
                echo 'updated';
                echo "<a href=" . route('service.view') . ">View</a>";
            }
        } else {
            unset($serviceData['id']);
            $saveData = service::insert($serviceData);
            if ($saveData) {
                echo 'saved';
                echo "<a href=" . route('service.view') . ">View</a>";
            } else {
                echo 'error';
            }
        }
    }
    public function view()
    {
        $serviceData = service::all();
        return view('view', compact('serviceData'));
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $serviceData = service::find($id);
        return view('add', compact('serviceData'));
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $destroy = service::where('id', $id)->delete($id);
        if ($destroy) {
            echo 'deleted';
            echo "<a href=" . route('service.view') . ">View</a>";
        } else {
            echo 'error';
        }
    }
}
