<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    class Circle{
        public $bankinh;
        public $color;
        public function setcircle($newbankinh, $newcolor){
            $this->bankinh = $newbankinh;
            $this->color = $newcolor;
        }
        public function getcircle(){
            return "Circle co ban kinh la: " . $this->bankinh ." va co mau :" . $this->color;
        }
        public function dientich(){
            return "Dien tich hinh tron la: " . 3.14*($this->bankinh*$this->bankinh);
        }
        public function chuvi(){
            return "Chu vi hinh tron la: " . ($this->bankinh*$this->bankinh)*3.14;
        }
    }
    class cylider extends Circle{
        public $chieucao;
        public function setcircle($newbankinh, $newcolor, $chieucao){
            $this->chieucao = $chieucao;
            parent::setcircle($newbankinh, $newcolor,$chieucao);
        }
        public function thetich(){
            return "The tich hinh tron la: " . $this->chieucao*3.14* $this->bankinh*$this->bankinh;
        }
    }
    $show = new cylider();
    $show->setcircle(10,'den',2);
    echo $show->getcircle();
    echo "<br>";
    echo $show->dientich();
    echo "<br>";
    echo $show->thetich();
    echo "<br>";
    echo $show->chuvi();
?>
</body>
</html>