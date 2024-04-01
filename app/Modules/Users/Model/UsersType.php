<?php

namespace App\Modules\Users\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class UsersType extends Authenticatable
{
  use HasFactory, Notifiable, HasUuids, SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $table = 'user_type';
  protected $fillable = [
    'type',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */

}
