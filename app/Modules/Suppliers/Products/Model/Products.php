<?php

namespace App\Modules\Suppliers\Products\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;



class Products extends Model
{
  use HasFactory, Notifiable, HasUuids, SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $table = 'suppliers_products';
  protected $fillable = [
    'supplier_id',
    'product',
    'description',
    'images',
    'qr_code'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */

}
