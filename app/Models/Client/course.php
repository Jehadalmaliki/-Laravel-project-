<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $table = 'course';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'Company','Description','Year','user_id',
	];
    public function users(): BelongsTo
   {
       return $this->belongsTo(User::class, 'foreign_key', 'user_id');
   }
}
