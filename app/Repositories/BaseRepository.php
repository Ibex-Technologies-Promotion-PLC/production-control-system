<?php

namespace App\Repositories;
use App\Contracts\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    public function all()
    {
        return $this->model->all();
    }

    public function paginate(int $perpage = 10)
    {
        return $this->model->paginate($perpage);
    }

    public function allWith($relation)
    {
        return $this->model->with($relation)->get();
    }

    public function store(array $array)
    {
        try {
            $data = $this->model->create($array);
            session()->flash("positive", "Registration Successful!");
            return $data;
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function fetch(int $id)
    {
        // try {
            return $this->model->findOrFail($id);
        // } catch (\Exception $e) {
        //     echo $e->getMessage();
        //     exit;
        // }
    }

    public function fetchWith(int $id, $relation)
    {
        return $this->model->fetch($id)->with($relation); // sıkıntılı
    }

    public function update(array $array, int $id)
    {
        if ($data = $this->fetch($id)->update($array)) {
            session()->flash("positive", 'Update successful!');
            return $this->fetch($id);
        }
    }

    public function delete(int $id)
    {
        if($this->fetch($id)->delete())
            return response()->json(['message' =>'Successfully deleted!'], 202);
    }


    /**********************************************
     ****** Helpers *******************************
     *********************************************/
    public function getModelPath() : string
    {
        return get_class($this->model);
    }

    public function getModel()
    {
        return $this->model;
    }

}
