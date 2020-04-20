<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\anfangContent;
use App\Transformers\ContentTransformer;

class AnfangContengController extends Controller
{
    // 获取内容 ,Request $request,QuestionTransformer $transformer
    public function index(Request $request, ContentTransformer $transformer)
    {
        $keyword = $request->input('keyword', '1');
        //$keyword="暗访人员";
        $anfangContent = anfangContent::where('keyname', 'like', '%'.$keyword.'%')->get();
        return $this->response->collection($anfangContent, $transformer);
        //return $this->response->array($anfangContent, $transformer);
    }
}
