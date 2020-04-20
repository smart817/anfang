<?php

namespace App\Transformers;

use App\Models\anfangContent;
use League\Fractal\TransformerAbstract;

class ContentTransformer extends TransformerAbstract
{
    //protected $defaultIncludes =['question'];

    public function transform(anfangContent $content)
    {
        return [
            'keyword' => $content->keyname,
            'value' => $content->value,
        ];
    }
}
