<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ["id"];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'price' => 'double',
    ];

   public function customer()
   {
       return $this->belongsTo(Customer::class,'customer_id','id');
   }

   public function type()
   {
       return $this->belongsTo(JobType::class,'type_id','id');
   }
}
