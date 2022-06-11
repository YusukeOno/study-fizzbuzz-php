# study-php-fizzbuzz

## Requirements

Docker and Docker Compose.

## Setup

```
docker compose up -d
docker exec -it study-php-fizzbuzz /bin/bash
```

## Exec

```
cd /app
composer install
php ./src/main.php
```

## Xdebugによるデバッグ手順

1. VS Code Remote ContainersでRepoen in Containerを選択する
2. VS Codeの拡張機能[PHP Debug](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug)をインストールしておく
3. VS Codeで実行元となるmain.phpを開く
4. 実行とデバッグより、Launch currently open scriptを実行する

## PHPUnitによる単体テスト実行手順

実行コマンド
```
./vendor/bin/phpunit
```

設定ファイル ./phpunit.xml.dist
```
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php" colors="true">
    <testsuites>
        <testsuite name="FizzBuzz">
            <directory>./tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

## PHPStanによる静的解析手順

PHPStanを使って静的解析を行うことで、プログラム実行前にソースコードを解析する。

実行コマンド
```
./vendor/bin/phpstan
```

設定ファイル ./phpstan.neon 
```
parameters:
        level: max
        paths:
                - src
                - tests
```

