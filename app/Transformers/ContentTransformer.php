<?php

namespace App\Transformers;

use App\Models\AnfangContent;
use League\Fractal\TransformerAbstract;

class ContentTransformer extends TransformerAbstract
{
    //protected $defaultIncludes =['question'];

    public function transform(AnfangContent $content)
    {
        return [
            'keyword' => $content->keyname,
            'value' => $content->value,
        ];
    }
}
