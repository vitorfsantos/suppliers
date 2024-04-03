<?php

namespace App\Modules\Address\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;



class Address extends Model
{
  use HasFactory, Notifiable, HasUuids, SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $table = 'address';
  protected $fillable = [
    'supplier_id',
    'store_id',
    'CEP',
    'city',
    'state',
    'street',
    'number'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */

}
