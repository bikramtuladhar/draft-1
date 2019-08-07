<?php

namespace App\Http\Controllers;

use App\Test;
use App\Http\Resources\TestCollection;
use App\Http\Resources\TestResource;
 
class TestAPIController extends Controller
{
    public function index()
    {
        return new TestCollection(Test::paginate());
    }
 
    public function show(Test $test)
    {
        return new TestResource($test->___LOAD_RELATIONSHIPS___);
    }

    public function store(Request $request)
    {
        return new TestResource(Test::create($request->all()));
    }

    public function update(Request $request, Test $test)
    {
        $test->update($request->all());

        return new TestResource($test);
    }

    public function destroy(Request $request, Test $test)
    {
        $test->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}