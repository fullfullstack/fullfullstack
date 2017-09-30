<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function parseBody()
    {
        $parser = new \cebe\markdown\GithubMarkdown();
        return $parser->parse($this->body);
    }

}
