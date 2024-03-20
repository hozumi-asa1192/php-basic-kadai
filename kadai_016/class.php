<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題16</title>
</head>
<body>
    <p>
        <?php
        class Food {
            // プロパティの定義
            private $name;
            private $price;

            // メソッドの定義
            public function show_praice(int $price){
                echo $this->price = $price;
            }
            // コンストラクタの定義
            public function __construct(string $name,int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }
        class Animal {
            // プロパティの定義
            private $name;
            private $hight;
            private $weight;

            // メソッドの定義
            public function show_hight(int $hight) {
                echo $this->hight = $hight;
            }

            // コンストラクタの定義
            public function __construct(string $name,int $hight,int $weight){
                $this->name = $name;
                $this->hight = $hight;
                $this->weight = $weight;
            }
        }

        // インスタンス化
        $food = new Food('potato',250);
        $animal = new Animal('dog',60,5000);

        // インスタンスを出力
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';
        $food->show_praice(250);
        echo '<br>';
        $animal->show_hight(60);
        ?>
    </p>
</body>
</html>