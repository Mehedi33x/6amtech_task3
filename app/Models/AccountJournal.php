<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountJournal extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

}
