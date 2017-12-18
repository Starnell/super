<?php

namespace Common;
class Upload{
    protected $fileName;    //用来获取$fileInfo
    protected $maxSize;     //允许上传的最大大小，默认2M
    protected $allowMime;
    protected $allowExt;    //允许上传的文件的扩展名，默认为图片
    protected $uploadPath;  //上传路径，默认当前文件夹下的uploads/
    protected $imgFlag;     //是否开启检测真实图片，默认开启
    protected $fileInfo;
    protected $error;
    protected $ext;
    protected $destination;
    protected $uniName;
    protected $res=array();
    public function __construct(
        $fileName,
        $uploadPath='uploads/',
        $maxSize=2097152,
        $imgFlag=true,
        $allowExt=array('jpeg','jpg','png','gif'),
        $allowMime=array('image/jpeg','image/png','image/gif')){

        $this->fileName=$fileName;
        $this->maxSize=$maxSize;
        $this->allowMime=$allowMime;
        $this->allowExt=$allowExt;
        $this->uploadPath=$uploadPath;
        $this->imgFlag=$imgFlag;
        $this->fileInfo=$_FILES[$this->fileName];
    }

    public function uploadFile(){
        if ($this->checkError()&&$this->checkSize()&&$this->checkExt()&&$this->checkMime()&&$this->checkFlag()&&$this->checkHTTPPOST()){
            $this->checkUploadPath();
            $this->uniName=md5(uniqid(microtime(true),true));
            $this->destination=$this->uploadPath.'/'.$this->uniName.'.'.$this->ext;
            if (@move_uploaded_file($this->fileInfo['tmp_name'],$this->destination)){
                $this->res['destination']=$this->destination;
                return $this->res;
            }else{
                $this->error='文件移动失败';
                //$this->showError();
                $this->res['error']=$this->error;
                return $this->res;
            }
        }else{
            //$this->showError();
            $this->res['error']=$this->error;
            return $this->res;
        }
    }
    /*
     * 检测目录是否存在
     */
    protected function checkUploadPath(){
        if (!file_exists($this->uploadPath)){
            mkdir($this->uploadPath,0777,true);
        }
    }
    /*
     * 检测上传文件是否出错
     */
    protected function checkError(){
        if (!is_null($this->fileInfo)){
            if ($this->fileInfo['error']>0){
                switch ($this->fileInfo['error']){
                    case 1:
                        $this->error='上传文件超过了PHP配置文件中的upload_max_filesize选项的值';
                        break;
                    case 2:
                        $this->error= '超过了表单MAX_FILE_SIZE限制的大小';
                        break;
                    case 3:
                        $this->error= '文件部分被上传';
                        break;
                    case 4:
                        $this->error= '没有选择上传文件';
                        break;
                    case 6:
                        $this->error= '没有找到临时目录';
                        break;
                    case 7:
                        $this->error= '文件写入失败';
                        break;
                    case 8:
                        $this->error= '系统错误';
                        break;
                }
                return false;
            }else{
                return true;
            }
        }else{
            $this->error='文件上传出错';
            return false;
        }
    }
    /*
     * 检测大小
     */
    protected function checkSize(){
        if ($this->fileInfo['size']>$this->maxSize){
            $this->error='上传文件过大';
            return false;
        }
        return true;
    }
    /*
     * 检测扩展名
     */
    protected function checkExt(){
        $this->ext=strtolower(pathinfo($this->fileInfo['name'],PATHINFO_EXTENSION));
        if (!in_array($this->ext,$this->allowExt)){
            $this->error='不允许的扩展名';
            return false;
        }else{
            return true;
        }
    }
    /*
     * 检测文件类型
     */
    protected function checkMime(){
        if (!in_array($this->fileInfo['type'],$this->allowMime)){
            $this->error='不允许的文件类型';
            return false;
        }
        return true;
    }
    /*
     * 检测是否为真实的图片类型
     */
    protected function checkFlag(){
        if ($this->imgFlag){
            if (!@getimagesize($this->fileInfo['tmp_name'])){
                $this->error='不是真实图片';
                return false;
            }
        }
        return true;
    }
    /*
     * 检测上传方式
     */
    protected function checkHTTPPOST(){
        if (!is_uploaded_file($this->fileInfo['tmp_name'])){
            $this->error='文件不是通过HTTP POST方式上传';
            return false;
        }
        return true;
    }
    /*
     * 显示错误
     */
    protected function showError(){
        exit('<span style="color:red">'.$this->error.'</span>');
    }

}