<?php

namespace App\Modules\Suppliers\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;



class Supplier extends Model
{
  use HasFactory, Notifiable, HasUuids, SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $table = 'suppliers';
  protected $fillable = [
    'name',
    'description'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */

}
