#予想システム
## 予想対象
1. Numbers3,4
2. LOTO6,LOTO7

### 構成
PHP (Laravel)
Python（その他、機械学習）

### 画面一覧
1. トップページ　/
    1. ？？？
1. 抽選結果 /drawings 最新の20件のみ表示 ページングする
1. 集計    /count
    1. /numbers
        1. /2021/ 年での集計
            1. /01 月での集計　曜日ごととか？

1. バックテスト /backtest　バックテスト


### 実装予定
件数での絞り込み
数字での絞り込み
ソート
引っ張りでの回数カウント

### 反省
ServiceとRepositoryを導入したが、どちらのクラスもゴチャゴチャになってしまった。

https://qiita.com/shosho/items/abf6423283f761703d01
#### Lazy loading
```
//lazy loading
$books = App\Book::all(); //クエリを1回発行したあと、

foreach ($books as $book) {
    echo $book->author->name; //booksの冊数分（N回）だけ発行される。
}
```
#### eager_loading 
```
//Eager loading
$books = App\Book::with('author')->get(); //クエリが発行されるのは2回だけ

foreach ($books as $book) {
    echo $book->author->name;
}
```
with の引数に配列を使って、複数のリレーションデータをとることもできる。

$books = App\Book::with(['author', 'publisher'])->get();


アプリの目的
1. Laravelに慣れる
    1. Eloquent
        1. CRUD
        1. EagerLoading
    1. Blade
    1. POST,GETなどのリクエストの処理
    1. ログイン判定
    1. バッチ
    1. マイグレーション
1. 設計に慣れる
    1. データベース設計
        1. テーブル設計
    1. クラス設計
        1. Service
        1. Repository
        1. ドメインオブジェクト、値オブジェクト、ファーストクラスコレクション
1. コーディングルールなど
    1. PHPCS .\vendor\bin\phpcs.bat --standard=phpcs.xml
    1. PHPCBF .\vendor\bin\phpcbf.bat --standard=phpcs.xml
        1. （手作業で修正したときに余計なところまで変換してしまった気もするが、後で対応）
    1. PHPUnit あとで
    1. PHPStan　あとで
1. 品質とスピードのバランス
    1. 値オブジェクトは大事だが、初期構築で作ると堅牢にはなるがその分の時間がかかる。
    1. 最初はRepositoryを作らずServiceからEloquentでDBから値を取得する
    1. 画面に必要な値はドメインオブジェクトというかDTO的なクラスを作って、そこに値を全部入れる。何かしらの処理、計算などの処理も全部そのクラスに入れる。
    1. こうすれば、最低限の秩序を保った状態で高速に作れると思う。
    1. ある程度、落ち着いたら値オブジェクトなどを定義して堅牢にしていく。テストはそのタイミングで書く。


todo
テーブルまとめる
Lotoにも取り組む
連続数時 123->124みたいなのも実装する　SQLなら楽勝？
バッチはインポートで使う。

フォーム、表などはコンポーネント化する
bootstrapの標準でデザインをする　チーとシート使ってもいいかも？


