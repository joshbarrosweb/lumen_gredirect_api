<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use App\Services\LinkService;
use App\Http\Resources\LinkResource;
use App\Http\Requests\StoreUpdateLink;

class LinkController extends Controller
{
    protected $linkService;

    public function __construct(LinkService $linkService)
    {
        $this->linkService = $linkService;
    }

    public function index()
    {
        $links = $this->linkService->all();

        return LinkResource::collection($links);
    }

    public function show($id)
    {
        $link = $this->linkService->show($id);

        return new LinkResource($link);
    }

    public function store(StoreUpdateLink $request)
    {
        $link = $this->linkService->create($request->validated());

        return new LinkResource($link);
    }

    public function update(StoreUpdateLink $request, $id)
    {
        $this->linkService->update($id, $request->validated());

        return response()->json([
            'updated' => true
        ]);
    }

    public function destroy($id)
    {
        $this->linkService->delete($id);

        return response()->json([], 204);
    }
}
