<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MySampleResourceController extends Controller
{
    public function index()
    {
        return response('MySampleResourceController @ index done');
    }
    public function store(Request $request)
    {
        return response('MySampleResourceController @ index store');
    }
    public function show($id)
    {
        return response('MySampleResourceController @ show done');
    }
    public function update(Request $request, $id)
    {
        return response('MySampleResourceController @ update done');
    }
    public function destroy($id)
    {
        return response('MySampleResourceController @ destroy done');
    }
}
