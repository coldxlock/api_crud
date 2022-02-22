<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCategory;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $repository;

    public function __construct(Category $model)
    {
        $this->repository = $model;       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('visualizar_categorias')) {
            abort(403, 'Not Authorized');
        }

        $categories = $this->repository->get();

        return CategoryResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCategory $request)
    {
        if (Gate::denies('criar_categoria')) {
            abort(403, 'Not Authorized');
        }

        $data = $request->validated();

        $data['url'] = Str::slug($data['title'],'-');
        $category = $this->repository->create($data);

        return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $url
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Gate::denies('visualizar_categoria')) {
            abort(403, 'Not Authorized');
        }

        $category = $this->repository->where('id', $id)->firstOrFail();

        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $url
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCategory $request, $id)
    {
        if (Gate::denies('editar_categoria')) {
            abort(403, 'Not Authorized');
        }

        $category = $this->repository->where('id', $id)->firstOrFail();

        $category->update($request->validated());

        return response()->json(['message' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies('deletar_categoria')) {
            abort(403, 'Not Authorized');
        }

        $category = $this->repository->where('id', $id)->firstOrFail();

        $category->delete();

        return response()->json(['message' => 'success'], 204);
    }
}