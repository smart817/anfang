<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
use Image;
use Illuminate\Support\Facades\Storage;
use App\Models\Timu;

class TimuController extends Controller
{
    //
    /**
     * 一个表单提交，其中有图片上传的云存储例子.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tijiao(Request $request)
    {
        $data = $request->all();
        /*
        $qsown = new Question;
        $qsown->wx_openid = $openid;
        $qsown->question = $question;
     	$qsown->a = $a;
      	$qsown->b = $b;
     	$qsown->c = $c;
        $qsown->d = $d;
        $qsown->answer = $answer;
        $user =User::where('wx_openid',$openid)->first();
        $qsown->user_name = $user->name;
        $qsown->status = 0;  //状态：0等待审核，1审核通过，2审核未通过，3删除
        $qsown->created_at = time();
        $qsown->updated_at = time();
        $qsown->save();*/

        $timu = new timu;
        $timu['1_11'] = $data['1_11'];
        $timu['1_12'] = $data['1_12'];
        $timu['1_13'] = $data['1_13'];
        $timu['1_2'] = "金融机构简称";
        $timu['1_3'] = "网点名称";
        $timu['2'] = 0;
        $timu['3'] = 1;
        $timu->save();
        //$data = $request->all();
    }
    public function storeQiniu(Request $request)
    {
        //
        $data = $request->all();
        $file = $request->file('file') ;
        if (!$file) {
            return back() ;
        }
        if (!$file->isValid()) {
            return back() ;
        }
        //文件mime
        $mine = $request -> file -> getMimeType();
        // //原始文件名
        // $file['originName'] = $request -> avatar -> getClientOriginalName();
        // //文件尺寸
        $filesize = filesize($file);

        // 需要填写你的 Access Key 和 Secret Key
        $accessKey = env('QINIU_ACCESSKEY');
        $secretKey = env('QINIU_SECRETKEY');
        // 构建鉴权对象
        $auth = new Auth($accessKey, $secretKey);
        // 要上传的空间
        $bucket = env('QINIU_BUCKET');
        // 生成上传 Token
        $token = $auth->uploadToken($bucket);
        // 要上传文件的本地路径

        $filePath = $file->getRealPath();
        // 上传到七牛后保存的文件名

        $date = time();
        $key = 'demo/'.$date.'.'.$file->getClientOriginalExtension();
        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        if ($err !== null) {
            return response()->json(['ResultData'=>'失败','info'=>'失败']);
        } else {
            $fileVo['fileName'] = $ret['key'];
            $fileVo['fileStyle'] = $mine;
            $fileVo['Etag'] = $ret['hash'];
            $fileVo['fileSize'] = trans_byte($filesize);
            $fileVo['fileStore'] = "标准存储";
            $fileVo['fileLink'] = env('QINIU_DOMAIN').$ret['key'];
            return $fileVo;
        }
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) { //判断文件是否是 POST的方式上传
            $tmp = $request->file('file');
            //$img = Image::make($tmp);
            $path = '/image'; //public下的article
            if ($tmp->isValid()) { //判断文件上传是否有效
                $FileType = $tmp->getClientOriginalExtension(); //获取文件后缀

                $FilePath = $tmp->getRealPath(); //获取文件临时存放位置

                $FileName = date('Y-m-d') . uniqid() . '.' . $FileType; //定义文件名

                Storage::disk('image')->put($FileName, file_get_contents($FilePath)); //存储文件
                // $img = Image::make(public_path($path . '/' . $FileName));
                // /* 在右下角添加水印，偏移量为10px */
                // //$img->insert(public_path($path . '/' . $FileName), 'bottom-22222222222222222right', 100, 100);
                // // 插入客户经理名称
                // $fontPath = public_path('font/msyh.ttc');
                // $img->text('李白', 100, 100, function ($font) use ($fontPath) {  //左边距，上边距
                //     $font->file($fontPath);
                //     $font->size(24);
                //     $font->valign('left');
                // });

                // $img->save(public_path($path . '/' . $FileName));

                /* 上面的逻辑可以通过链式表达式搞定 */
                // $img = Image::make('./image/abc.jpg')
                //     ->resize(300, 300)
                //     ->insert('./image/def.jpg', 'bottom-right', 15, 10)
                //     ->save('./image/new_abc.jpg');
                return $data = [
                    'status' => 0,
                    'path' => "http://".$_SERVER["HTTP_HOST"].$path . '/' . $FileName //文件路径
                ];
            }
        }
    }
}


    /*
    文件名demo/1587397107.png
    文件类型image/png
    ETagFpIsIfYeqSmpqXEO6DnYfTGwx6Jo
    文件大小266.07 KB
    存储类型标准存储
    文件链接http://q93e9hk5m.bkt.clouddn.com/demo/1587397107.png
    */
function trans_byte($byte)
{
    $KB = 1024;

    $MB = 1024 * $KB;

    $GB = 1024 * $MB;

    $TB = 1024 * $GB;

    if ($byte < $KB) {
        return $byte . "B";
    } elseif ($byte < $MB) {
        return round($byte / $KB, 2) . "KB";
    } elseif ($byte < $GB) {
        return round($byte / $MB, 2) . "MB";
    } elseif ($byte < $TB) {
        return round($byte / $GB, 2) . "GB";
    } else {
        return round($byte / $TB, 2) . "TB";
    }
}
