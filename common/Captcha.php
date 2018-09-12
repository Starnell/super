<?php
namespace common;
class Captcha{

    public function create(){
        $image=imagecreatetruecolor(100, 30);
        //设置背景为白色,默认为黑色
        $bgColor=imagecolorallocate($image, 255, 255, 255);
        //填充颜色，把所有与(x，y)颜色相同的点都涂成bgColor
        imagefill($image, 0, 0, $bgColor);
        $code='';  //保存验证码的变量
        for($i=0; $i<4; $i++){
            $fontSize=1500;  //字体大小为6px
            $fontColor=imagecolorallocate($image, rand(0,120), rand(0,120), rand(0,120));
            //字母数字混合字典
            $data='3456789qwertyuipkjhgfdsaxcvbnmQWERTYUIPLKJHGFDSAXCVBNM';
            //取从0到末尾这一段中的随机一个字符
            $fontContent=substr($data, rand(0,strlen($data)),1);
            $code.=$fontContent;
            $x=rand(5,10)+($i*100/4);
            $y=rand(5,10);
            imagestring($image, $fontSize, $x, $y, $fontContent, $fontColor);
        }
        /**
         * 设置干扰点（200个）
         */
        for($i=0; $i<200; $i++){
            $pointColor= imagecolorallocate($image, rand(50,200),rand(50,200), rand(50,200));
            //画两百个随机位置随机颜色的点
            imagesetpixel($image, rand(1,99), rand(1,29), $pointColor);
        }
        /**
         * 设置干扰线（3条）
         */
        for($i=0; $i<3; $i++){
            $lineColor=imagecolorallocate($image, rand(80,220), rand(80,220), rand(80,220));
            //画三条随机位置随机颜色的线
            imageline($image, rand(1,99), rand(1,29), rand(1,99), rand(1,29), $lineColor);
        }

        //把生成的验证码保存到session服务器
        $_SESSION['code']=strtolower($code);
        header('content-type:image/png');
        imagepng($image);
        imagedestroy($image);
    }

}