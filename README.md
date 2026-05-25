# CodeZineNewInLaravel
CodeZine「最新Laravelアップデート解説」のサンプル。

## 各プロジェクトの起動方法
あらかじめ`.env.example`をファイルごとコピー&ペースとして`.env`ファイルとする。その後、プロジェクトフォルダーで以下のコマンドを実行する。
```
% composer install
% php artisan key:generate
% php artisan migrate --seed
```
migrateコマンドで「Would you like to create it?」と質問されたら、yesを選択の上、リターンキーを押下する。さらに、以下のコマンドも実行する。
```
% npm install
% npm run build
```

コマンドの実行が終了したら、以下のコマンドでサーバを起動する。
```
% composer run dev
```
