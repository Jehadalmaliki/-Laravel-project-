<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $table = 'company';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'description','image', 'email',
	];
    /**
     * Get all of the job for the company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function job(): HasMany
    {
        return $this->hasMany(job::class);
    }
    public function getImageAttribute($value){
        return url("images/")."/".$value;

    }
}
