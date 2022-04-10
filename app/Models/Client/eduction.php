<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eduction extends Model
{
    use HasFactory;
    protected $table = 'eduction';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'University','description','Date','Year','user_id',
	];
    public function users(): BelongsTo
   {
       return $this->belongsTo(User::class, 'foreign_key', 'user_id');
   }
}
