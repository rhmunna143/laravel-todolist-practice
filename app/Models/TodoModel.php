<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
    //
    public function getTodoListFromDB()
    {
        return $this->all();
    }

    public function getTodoList()
    {
        return [
            [
                'id' => 1,
                'title' => 'Learn Laravel',
                'description' => 'Learn Laravel from scratch',
                'status' => 'pending',
            ],
            [
                'id' => 2,
                'title' => 'Learn Vue.js',
                'description' => 'Learn Vue.js from scratch',
                'status' => 'pending',
            ],
            [
                'id' => 3,
                'title' => 'Build a project',
                'description' => 'Build a project using Laravel and Vue.js',
                'status' => 'pending',
            ],
        ];
    }

}
