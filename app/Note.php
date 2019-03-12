<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|string|null title
 * @property array|string|null content
 * @property  user_id
 * @method static find(int $id)
 */
class Note extends Model
{
    protected $table = 'notes';
    public $primaryKey = 'id';
    public $timestamps = true;
}
