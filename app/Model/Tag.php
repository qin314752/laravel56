<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Post;
use App\Model\Video;
class Tag extends Model
{
       /**
     * 获取所有分配该标签的文章
     */
    public function posts()
    {
        return $this->morphedByMany('App\Model\Post', 'taggable');
    }

    /**
     * 获取分配该标签的所有视频
     */
    public function videos()
    {
        return $this->morphedByMany('App\Model\Video', 'taggable');
    }
}
