# test1

## 概要
このプロジェクトは確認テストでのお問い合わせフォーム作成を目的としたものです。


## 環境構築
・Dockerビルド
1.git clone git@github.com:coachtech-material/laravel-docker-template.git
2.docker-compose up -d

・Laravel環境構築
1.docker-compose exec php bash
2.composer install
3.データベースに接続するために.envファイルを作成
  .envファイルは、.env.exampleファイルをコピーして作成
  cp .env.example .env
  作成後、環境変数を設定
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

・使用技術
PHP 8.4.2
Laravel 8.83.8
MySQL 15.1

・URL
開発環境：http://localhost/
phpMyAdmin:http://localhost:8080/