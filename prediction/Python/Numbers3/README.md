検証履歴

RMSE 学習: 1.09, テスト: 2.89
R^2 学習: 0.86, テスト: -0.01



## 機械学習の整理
### R^2
* R-Squaredは，データの当てはまりの良さを表す指標で，学習データに対して計算すると特徴量がどれくらい目的変数を説明しているかがわかり，テストデータに対して計算するとモデルの精度を表す．0から1の間になることから，扱いやすい数字であり，R2=0.5で十分大きな値である
* 基本的にはモデル同士の相対的な比較で使う

### MSE
* MSEは残差の二乗の平均で，損失関数として使われ，学習データにおけるMSEが最小になるようにパラメータを学習することから，評価指標として最もよく使われる指標の一つ
* RMSEは，MSEでは単位が二乗になってしまうため，それを緩和させるためMSEの平方根を取ったもので，目的変数と同じ尺度になるので感覚的に解釈しやすい