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

// データおかしい？　1998-11-30 strpadの問題？

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
        1. ドメインオブジェクト

