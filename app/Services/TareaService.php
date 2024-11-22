<?php

namespace App\Services;

use App\Repositories\Interface\TareaRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class TareaService
{

    public function __construct(
        private TareaRepositoryInterface $tareaRepository
    )
    {
    }

    public function all()
    {
        return $this->tareaRepository->all();
    }

    public function find(string $id)
    {
        return $this->tareaRepository->find($id);
    }

    public function create(array $data)
    {
        $data['completada'] = false;
        $data['user_id'] = Auth::user()->id;
        return $this->tareaRepository->create($data);
    }

    public function update(object $model, array $data)
    {
        return $this->tareaRepository->update($model, $data);
    }

    public function delete(string $id)
    {
        return $this->tareaRepository->delete($id);
    }
}
