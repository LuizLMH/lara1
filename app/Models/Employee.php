<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   public $fillable = [
        'nome',
        'email',
   ];
}


$employee = new Employee();

$employee->createOrUpdate([
    'nome' => 'luiz',
    'email' => 'luiz@gmail.com',
]);

// Eloquent ORM
