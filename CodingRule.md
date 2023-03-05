# コーディング規約
1. 以下を利用する
    1. Controller
    1. Service
    1. Repository
    1. Models
        1. Eloquent
        1. Domain
        1. Value

1. 方針
    1. Controller
        1. ログイン判定はMiddleware(?)
    1. Service
        1. Service間でのやり取りはしない。共通化する場合はSharedServiceを使う
    1. Repository
        1. Repositoryはモデル名、テーブル名で分けない。
        1. Repositoryとdomain objectは対になっている。ドメインオブジェクトと画面は基本的に連動する。
        1. リポジトリはエンティティ（集約）の部分的な保存・取得をしてはいけません。 
        1. 原則的にソート、グルーピングもRepositoryのSQLで行う。
    1. Models
        1. Eloquent
            1. Eloquentモデルを入れる
        2. Domain
            1. Domainオブジェクトを入れる
            1. 値をオブジェクトを組み合わせてドメインオブジェクトを表現。（現場で役立つシステム設計）
            1. RepositoryでtoModel()みたいなメソッドを作ってDomainオブジェクトのインスタンスを作る
                1. 配列を使いたくなったら、だいたいドメインオブジェクトになりうる。
        3. Value
            1. Valueオブジェクトを入れる
    1. どこに書くべきか迷ったときは。
        1. Userの重複チェックはUserの一つ上の階層のクラスで判定する
        1. 配列で仮実装する


3. 参考
    1. https://zenn.dev/kohii/articles/e4f325ed011db8