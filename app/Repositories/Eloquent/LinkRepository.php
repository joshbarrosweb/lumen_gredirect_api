<?php

namespace App\Repositories\Eloquent;

use App\Contracts\ILink;
use App\Models\Link;

class LinkRepository implements ILink
{
    protected $entity;

    public function __construct(Link $link)
    {
        $this->entity = $link;
    }

    public function all()
    {
        return $this->entity->all();
    }

    public function show(string $id)
    {
        return $this->entity->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->entity->create($data);
    }

    public function update(string $id, array $data)
    {
        $link = $this->show($id);

        return $link->update($data);
    }

    public function delete(string $id)
    {
        $link = $this->show($id);

        return $link->delete();
    }
}
