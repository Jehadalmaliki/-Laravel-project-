<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experince extends Model
{
    use HasFactory;
    protected $table = 'experince';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'Company','description','Date','Year','user_id',
	];
    public function users(): BelongsTo
   {
       return $this->belongsTo(User::class, 'foreign_key', 'user_id');
   }
}
