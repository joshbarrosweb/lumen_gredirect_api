<?php

namespace App\Services;

use App\Repositories\Eloquent\LinkRepository;

class LinkService
{
    protected $repository;

    public function __construct(LinkRepository $linkRepository)
    {
        $this->repository = $linkRepository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function show(string $id)
    {
        return $this->repository->show($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(string $id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete(string $id)
    {
        return $this->repository->delete($id);
    }
}
