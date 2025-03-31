<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'qr_code'];

    public function entryExitRecords()
    {
        return $this->hasMany(EntryExitRecord::class);
    }
}
