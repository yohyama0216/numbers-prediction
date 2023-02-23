1. past-result.htmlに過去の数字のhtmlを保存
2. php Converter.php でjson化

numbers3から数字の規則は独立させる

Eloquentでやるように方針を変更。
EntitiesはDrawingResultかな。あまり細かすぎても意味ない気がする

// todo valueオブジェクト続き。
// DrawingResultとDrawingResultのオブジェクト作る。
// RepositoryはDrawingRepositoryのみ
// 

設計方針
Repositoryはモデル名、テーブル名で分けない（分けすぎるのはアンチパターン）
値オブジェクトを導入。
値をオブジェクトを組み合わせてドメインオブジェクトを表現。
ドメインオブジェクトと画面は基本的に連動する。


#予想システム
## 予想対象
1. Numbers3,4
2. LOTO6,LOTO7

### 構成
PHP (Laravel)
Python（その他、機械学習）

/ トップぺ0時
/backtest　バックテスト
 000~999までの数字
 1回前、2回前に出た数字を組み合わせた数字
 過去の数字上位5口かつbox6通りになる数字を買う
 
/drawings 抽選と結果
/statistics 統計