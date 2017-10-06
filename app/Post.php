<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post
{
    //
    public $id;
    public $title;
    public $content;
 
    public function __construct($id, $title, $content)
    {
        $this->id  = $id;
        $this->title   = $title;
        $this->content = $content;
    }
}
