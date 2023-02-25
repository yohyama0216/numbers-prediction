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
        1. （若干、曖昧）
    1. Repository
        1. Repositoryはモデル名、テーブル名で分けない。
        1. Repositoryとdomain objectは対になっている。ドメインオブジェクトと画面は基本的に連動する。
        1. リポジトリはエンティティ（集約）の部分的な保存・取得をしてはいけません。 
    1. Models
        1. Eloquent
            1. Eloquentモデルを入れる
        2. Domain
            1. Domainオブジェクトを入れる
            1. 値をオブジェクトを組み合わせてドメインオブジェクトを表現。（現場で役立つシステム設計）
            1. RepositoryでtoModel()みたいなメソッドを作ってDomainオブジェクトのインスタンスを作る
        3. Value
            1. Valueオブジェクトを入れる
    1. 


3. 参考
    1. https://zenn.dev/kohii/articles/e4f325ed011db8