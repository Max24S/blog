<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListStudents extends Model
{
    private $List=['Max Shcherbinin','Ivan Ivannn','Alex Alexxx'];

    public function GetStudents($id)
    {
        if (!array_key_exists($id,$this->List))
        {
            abort(404,'Такого студента нет');
        }
        return $this->List[$id];
    }
    public function GetNameStudent($name)
    {
        $student=$name;
        return $student;

    }
}
