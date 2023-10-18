<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'description',
        'start_date',
        'end_date',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id_category' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'id_tag');
    }
}