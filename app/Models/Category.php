<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'slug'];
    protected $guarded = ['id'];

    public function posts() {
        return $this->hasMany(Post::class);
    }

}

// Post::create([
//     'category_id' => 2,
//     'title' => 'Judul Ketiga',
//     'slug' => 'judul-ketiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates alias dicta unde itaque adipisci excepturi,',
//     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates alias dicta unde itaque adipisci excepturi, rem ut eaque, dolorum id saepe libero reprehenderit.Vero reiciendis autem dolorem. Animi voluptas reprehenderit repellat unde incidunt magni natus quae quasi exercitationem harum sunt quidem, velit temporibus ullam nihil nostrum tempora voluptatum adipisci odio quos provident nulla in obcaecati quia.</p> <p>Rerum hic officia delectus doloremque, quam iusto consequatur tempora commodi nesciunt obcaecati minima ab accusantium explicabo esse harum quas recusandae debitis praesentium sint soluta eaque porro. Dolores porro iusto alias maxime ipsum consequuntur explicabo animi architecto reiciendis cum. Nemo, ipsum. Cumque quasi rerum eligendi?</p>' 
// ]);

