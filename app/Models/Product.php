<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    /**
     * @var mixed
     */
    private $img;
    private $name;
    private $brand;
    private $categories;
    private $status;
}
