<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
</head>
<body>
  <p>
    <?php 
    // クラスを定義する
    class Food {
      // プロパティを定義する
      public $name;
      public $price;

      // コンストラクタの定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドの定義
      public function show_price() {
        echo $this->price;
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);

    // インスタンス$foodの各プロパティを出力する
    print_r($food);
    echo "<br/>";
    // メソッドを実行する
    $food->show_price();
    ?>
  </p>

  <p>
    <?php 
    // クラスを定義する
    class Animal {
      // プロパティを定義する
      public $name;
      public $height;
      public $weight;

      // コンストラクタの定義
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドの定義
      public function show_height() {
        echo $this->height;
      }
    }

    // インスタンス化する
    $animal = new Animal('dog', 60, 5000);

    // インスタンス$animalの各プロパティを出力する
    print_r($animal);
    echo "<br/>";
    // メソッドを実行する
    $animal->show_height();
    ?>
  </p>
  
</body>
</html>