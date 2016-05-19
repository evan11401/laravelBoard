<?php 

namespace App\Services;
use Illuminate\Database\Eloquent\Model;
class MessageBoard extends Model
{

	protected $primaryKey = 'id';
	protected $table = 'board';
	public $timestamps = false;
} 

?>
