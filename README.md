# 渡邉邸 工人まつり 出店者募集サイト

新潟県関川村の重要文化財「渡邉邸」で開催される工人まつりの出店者募集サイトです。

## プロジェクト概要

| 項目 | 内容 |
|------|------|
| サイト名 | 渡邉邸 工人まつり 出店者募集サイト |
| 公開 URL | https://kotetsu.tech/koujin-matsuri/ |
| 使用言語 | PHP 8.x / HTML5 / Tailwind CSS / Vanilla JavaScript |
| ホスティング | VPS (Nginx + PHP-FPM) 環境 |

## ディレクトリ構成

```
koujin-matsuri/
├── public/                 # Webルート
│   ├── index.php           # メインページ（ルーティング兼ビュー出力）
│   ├── assets/
│   │   ├── css/
│   │   │   └── custom.css  # カスタムCSS
│   │   ├── js/
│   │   │   └── main.js     # JavaScript機能
│   │   └── img/            # 画像ファイル
│   │       ├── hero.jpg    # ヒーロー画像
│   │       ├── flyer.png   # フライヤー画像
│   │       └── favicon.png # ファビコン
│   └── docs/               # 出店要項PDF等
├── src/                    # PHPロジック
│   ├── config.php          # 設定ファイル（イベント日程など）
│   ├── helpers.php         # ユーティリティ関数
│   └── templates/          # ビューテンプレート
│       ├── header.php      # ヘッダー
│       ├── footer.php      # フッター
│       └── sections/       # セクション別テンプレート
│           ├── hero.php    # ヒーローセクション
│           ├── about.php   # イベント概要
│           ├── guideline.php # 出店要項
│           ├── access.php  # アクセス情報
│           └── entry.php   # 出店申込
└── README.md
```

## 主要機能

### フロントエンド機能
- **レスポンシブデザイン**: Tailwind CSSによるモバイルファースト設計
- **スムーズスクロール**: ナビゲーション連動
- **モーダル表示**: フライヤー画像の拡大表示
- **モバイルメニュー**: ハンバーガーメニュー実装
- **アクセシビリティ**: キーボードナビゲーション、フォーカス管理
- **SEO対応**: OGPメタタグ、構造化データ

### バックエンド機能
- **設定管理**: `config.php`による一元管理
- **テンプレートシステム**: セクション別ファイル分割
- **XSS対策**: `htmlspecialchars()`によるサニタイズ

## ローカル開発環境の構築

### 必要な環境
- PHP 8.0以上
- Composer（パッケージ管理）
- Node.js（開発ツール）

### セットアップ手順

1. **リポジトリのクローン**
   ```bash
   git clone [repository-url] koujin-matsuri
   cd koujin-matsuri
   ```

2. **PHP内蔵サーバーで起動**
   ```bash
   cd public
   php -S localhost:8000
   ```

3. **ブラウザでアクセス**
   ```
   http://localhost:8000
   ```

### 開発用Docker環境（オプション）

```dockerfile
# Dockerfile
FROM php:8.2-apache
COPY public/ /var/www/html/
COPY src/ /var/www/src/
RUN chown -R www-data:www-data /var/www/
```

```bash
# Docker起動
docker build -t koujin-matsuri .
docker run -p 8080:80 koujin-matsuri
```

## 本番環境デプロイ

### Nginx設定例

```nginx
server {
    server_name kotetsu.tech;
    root /var/www/html/kotetsu.tech/koujin-matsuri/public;

    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    # 静的ファイルキャッシュ
    location ~* \.(?:css|js|jpe?g|png|webp|gif|svg)$ {
        expires 30d;
        add_header Cache-Control "public, immutable";
    }

    # セキュリティヘッダー
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header Referrer-Policy "no-referrer-when-downgrade" always;
}
```

### デプロイスクリプト例

```bash
#!/bin/bash
# deploy.sh

# バックアップ
cp -r /var/www/html/kotetsu.tech/koujin-matsuri /var/www/backups/koujin-matsuri-$(date +%Y%m%d)

# 新しいファイルをアップロード
rsync -av --exclude='.git' ./ /var/www/html/kotetsu.tech/koujin-matsuri/

# 権限設定
chown -R www-data:www-data /var/www/html/kotetsu.tech/koujin-matsuri/
chmod -R 755 /var/www/html/kotetsu.tech/koujin-matsuri/

# Nginx設定リロード
systemctl reload nginx

echo "デプロイ完了"
```

## カスタマイズ方法

### 1. イベント情報の更新

来年の開催時は `src/config.php` のみ編集：

```php
return [
    'event_year'    => 2025,          // 年度を更新
    'event_dates'   => '11月21日（土）・22日（日）', // 日程更新
    'form_url'      => 'https://forms.google.com/...' // 新しいフォームURL
    // その他の設定...
];
```

### 2. デザインのカスタマイズ

**Tailwindカラーパレット変更**（`src/templates/header.php`）:
```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#8B0000',    // メインカラー
                secondary: '#DAA520',  // アクセントカラー
                accent: '#2D4A22'      // サブカラー
            }
        }
    }
}
```

**カスタムCSS追加**（`public/assets/css/custom.css`）:
```css
/* 新しいスタイルを追加 */
.custom-button {
    /* カスタムボタンスタイル */
}
```

### 3. セクションの追加・変更

新しいセクションを追加する場合：

1. `src/templates/sections/new-section.php` を作成
2. `public/index.php` にinclude文を追加
3. `src/templates/header.php` のナビゲーションにリンクを追加

## パフォーマンス最適化

### 画像最適化
```bash
# WebP変換
cwebp -q 80 hero.jpg -o hero.webp
cwebp -q 80 flyer.png -o flyer.webp

# サイズ最適化
mogrify -resize 1920x1080> -quality 85 *.jpg
```

### CSS/JS最小化
```bash
# CSS最小化
npx cleancss -o public/assets/css/custom.min.css public/assets/css/custom.css

# JS最小化
npx terser public/assets/js/main.js -o public/assets/js/main.min.js -c -m
```

## セキュリティ対策

### 実装済み対策
- XSS対策：`htmlspecialchars()`によるエスケープ処理
- CSRF対策：フォーム送信はGoogle Formsを利用
- ファイルアップロード制限：アップロード機能なし
- SQLインジェクション対策：データベース不使用

### 推奨する追加対策
```nginx
# セキュリティヘッダー（Nginx設定）
add_header Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; img-src 'self' data: https:;";
add_header X-Frame-Options "SAMEORIGIN";
add_header X-Content-Type-Options "nosniff";
```

## トラブルシューティング

### よくある問題と解決方法

**Q: PHPエラーが表示される**
```bash
# PHPエラーログ確認
tail -f /var/log/php/error.log
```

**Q: Tailwind CSSが読み込まれない**
- CDNの接続確認
- `<script src="https://cdn.tailwindcss.com"></script>` が正しく記述されているか確認

**Q: 画像が表示されない**
```bash
# ファイル権限確認
ls -la public/assets/img/
# 権限修正
chmod 644 public/assets/img/*
```

**Q: JavaScriptが動作しない**
- ブラウザのコンソールでエラー確認
- `public/assets/js/main.js` の読み込み確認

## メンテナンス

### 定期メンテナンス項目
- [ ] Google Formの動作確認（月1回）
- [ ] 画像ファイルの最適化（年1回）
- [ ] セキュリティアップデート適用（適宜）
- [ ] バックアップ作成（週1回）

### ログ管理
```bash
# アクセスログローテーション
logrotate /etc/logrotate.d/nginx

# エラーログ確認
grep "ERROR" /var/log/nginx/error.log
```

## ライセンス

このプロジェクトは MIT License の下で公開されています。

## 更新履歴

| 日付 | バージョン | 変更内容 |
|------|------------|----------|
| 2024-07-02 | 1.0.0 | 初回リリース |

## サポート

技術的な質問やバグ報告は以下まで：
- Email: info@kotetsu.tech
- 開発者: Claude Code

---

© 2024 渡邉邸 工人まつり実行委員会