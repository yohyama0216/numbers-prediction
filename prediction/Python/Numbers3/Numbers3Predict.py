import loadData as lD
import buildData as bD
import predictRandomForest as RF

numbersData = []
# index = 0
# for p in range(0,4):
#     numbersData.append([p,p**3,1])

numbersData = lD.loadNumbers3Data()
# print(numbersData)
start = 1
end = 800

df = bD.build(numbersData,range(start,end),1,(end * 3) + 1) # endで一ずれる？
df.dropna(inplace=True)
# print(df)
X_columns = bD.createColumns('col',4,end)
y_columns = bD.createColumns('col',1,None)
print(y_columns)
X = df[X_columns].values  # 説明変数
y = df[y_columns].values     # 目的変数

# print(X_columns)
# print(y_columns)
RF.predictRandomForestRegression(X,y)


# データ100 / test_size=0.7 RMSE 学習: 1.08, テスト: 2.92 / R^2 学習: 0.86, テスト: -0.02
# データ500 / test_size=0.7 RMSE 学習: 1.08, テスト: 2.90 / R^2 学習: 0.86, テスト: -0.01
# データ800 / test_size=0.7 RMSE 学習: 1.09, テスト: 2.89 / R^2 学習: 0.86, テスト: -0.01
# 上がらないので変える
# estimatorを100から150に変えた
# データ800 / test_size=0.7 RMSE 学習: 1.09, テスト: 2.87 / R^2 学習: 0.86, テスト: -0.01