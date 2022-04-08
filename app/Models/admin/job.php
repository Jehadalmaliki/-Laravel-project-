<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $table = 'job';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'caree_level','governement', 'start_date','expirt_date','description','responsblite','sector','image','file',
	];
  /**
    * Get the company that owns the job
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function company(): BelongsTo
   {
       return $this->belongsTo(company::class, 'foreign_key', 'company_id');
   }
   

}
