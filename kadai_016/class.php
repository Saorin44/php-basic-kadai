<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編_課題16</title>
 </head>
 
 <body>
<p>
  <?php
  class Food{
    private $name;
    private $price;

    
  public function __construct(string $name,int $price){
  $this->name = $name;
  $this->price = $price;
  }
function show_price(){
  echo $this->price;
}
}
  $food=new Food('potato',250);
  print_r($food);
  ?></p>
<p>
  <?php
  class Animal{
    private $name;
    private $height;
    private $weight;

    
  public function __construct(string $name,int $height,int $weight){
  $this->name = $name;
  $this->height = $height;
  $this->weight = $weight;

  }
function show_height(){
  echo $this->height;
}
}
  $animal=new Animal('dog',26,5000);
  print_r($animal);
  ?></p>
  <P>
<?php
  $food->show_price();
?><br>
  <?php
  $animal->show_height()
?>
  </P>
 </body>
 
 </html>