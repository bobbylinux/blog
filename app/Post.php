<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    
    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    /**
     *
     */
    public function tags()
    {
        //any post may have many tags

        //any tag may be applied to many posts
        return $this->belongsToMany(Tag::class);
    }

    public function addComment($body) 
    {
        /*Comment::create([
            'body' => $body,
            'post_id' => $this->id
        ]);*/

        $this->comments()->create(compact('body'));
    }

    public function scopeFilter($query,$filters)
    {
        if (isset($filters['month']) && $month = $filters['month']) {
            $query->whereMonth('created_at',Carbon::parse($month)->month);
        }
        if (isset($filters['year']) && $year = $filters['year']) {
            $query->whereYear('created_at',$year);
        }
    }

    public static function archives()
    {
        return static::selectRaw("trim(to_char(created_at, 'YYYY')) yeard, trim(to_char(created_at, 'Month')) monthd,count(1) published")
        ->groupBy('yeard','monthd')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }
}
