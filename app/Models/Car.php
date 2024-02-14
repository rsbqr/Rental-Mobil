<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'car';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

}
