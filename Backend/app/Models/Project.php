<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'db_type', 
        'thumbnail', 'challenges', 'solutions', 
        'github_url', 'is_published', 'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function technologies(): BelongsToMany
    {
        // Explicitly defining the pivot table name for clarity
        return $this->belongsToMany(Technology::class, 'project_technology');
    }
}
