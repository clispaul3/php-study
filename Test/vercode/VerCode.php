<?php
namespace vercode;
$result_code = new VerCode();
// echo $result_code->str;
$result_code->outImage();
class VerCode
{
    protected $number;
    protected $type;
    protected $width;
    protected $height;
    protected $str;
    protected $image;
    function __construct($number = 4,$type = 3,$width = 100,$height = 30)
    {
        $this->number = $number;
        $this->type = $type;
        $this->height = $height;
        $this->width = $width;
        $this->str = $this->createCode();
    }
    function __get($name)
    {
        if($name='str')
        {
            return $this->str;
        }
        return false;
    }
    function createCode(){
        $code = null;
        switch($this->type){
            case 1:
               $code = $this->getNumCode();
               break;
            case 2:
               $code = $this->getCharCode();
               break;
            case 3:
               $code = $this->getNumCharCode();
               break;
            default:
               $code = null;
               break;
        }
        return $code;
    }
    protected function getNumCode(){
        $str = join('',range(0,9));
        return substr(str_shuffle($str),0,$this->number);
    }
    protected function getCharCode(){
        $str = join('',range('a','z'));
        $str = $str.strtoupper($str);
        return substr(str_shuffle($str),0,$this->number);
    }
    protected function getNumCharCode(){
        $str = $this->getNumCode().$this->getCharCode();
        return substr(str_shuffle($str),0,$this->number);
    }
    function outImage(){
        $this->createImage();
        $this->fillBgcolor();
        $this->drawChar();
        $this->drawDisturb();
        $this->show();
    }
    protected function createImage(){
        $this->image = imagecreatetruecolor($this->width,$this->height);
    }
    protected function fillBgcolor(){
        imagefill($this->image,0,0,$this->lightColor());
    }
    protected function lightColor(){
        return imagecolorallocate($this->image,mt_rand(133,255),mt_rand(133,255),mt_rand(133,255));
    }
    protected function darkColor(){
        return imagecolorallocate($this->image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
    }
    protected function drawChar(){
        $width = ceil($this->width/$this->number);
        for($i=0;$i<$this->number;$i++){
            $x = mt_rand($i*$width+5,($i+1)*$width-10);
            $y = mt_rand(0,$this->height-15);
            imagechar($this->image,5,$x,$y,$this->code[$i],$this->darkColor());
        }
    }
    protected function drawDisturb(){
        for($i=0;$i<150;$i++){
            $x = mt_rand(0,$this->width);
            $y = mt_rand(0,$this->height);
            imagesetpixel($this->image,$x,$y,$this->lightColor());
        }
    }
    protected function show(){
        header('Content-type:image/png');
        imagepng($this->image);
    }
    public function __destruct()
    {
        imagedestroy($this->image);
    }
}