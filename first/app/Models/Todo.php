<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    public  static function getByID($id)
    {
        return self::query()->where('id', $id)->first();
    }
//  public function static getByID($id )
//     {
//         return self::query()->where('id', $id)->first();
//     }

}
