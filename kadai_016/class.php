<?php
// クラスを定義する
class Food{
    // プロパティを定義する
    private $name;
    private $price;

    // メソッドを定義する
    public function set_price(int $price){
        $this->price =$price;
    }
    public function show_price(){
        echo $this->price;
    }

    // コンストラクタを定義する
    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }
}

// インスタンス化する
$food = new Food('potato', 250);

// インスタンス$foodの各プロパティの値を出力する
print_r($food);
echo '<br>';


// クラスを定義する
class Animal{
    // プロパティを定義する
    private $name;
    private $height;
    private $weight;

    // メソッドを定義する
    public function set_height(int $height){
        $this->height =$height;
    }
    public function show_height(){
        echo $this->height;
    }

    // コンストラクタを定義する
    public function __construct(string $name, int $height, int $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
  }
}

// インスタンス化する
$animal = new Animal('dog', 60, 5000);

// インスタンス$animalの各プロパティの値を出力する
print_r($animal);
echo '<br>';


// それぞれのクラスに作成したメソッドにアクセスする
$food->show_price();
echo '<br>';
$animal->show_height();
echo '<br>'
?>