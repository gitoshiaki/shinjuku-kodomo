# 新宿子ども劇場プロジェクトドキュメント

**目次**
- Getting Started
- Form System

<br />

## Getting Started

**Git入門ドキュメント**  
https://www.backlog.jp/git-guide/  

**Git CUIをインストール**（必須）  
https://git-scm.com/downloads

**リモートリポジトリが自動的に下記URLにデプロイされる**  
https://shinjuku-kodomo.herokuapp.com/

<br />

### ローカルリポジトリを作成  

1. Terminalを開く。 
2. ローカルリポジトリを設置したいディレクトリへ移動する。（この場合デスクトップ）

  ```
  cd ~/Desktop/
  ```

3. リモートリポジトリからプロジェクトをダウンロードする。  

  ```
  git clone https://github.com/gitoshiaki/shinjuku-kodomo.git`
  ```

4. 3で作成されたローカルリポジトリに移動する。今後このディレクトリにいる前提で進める。

  ```
  cd shinjuku-kodomo/
  ```

<br />

### ローカルリポジトリでの更新をリモートに反映させる

1. 更新したファイルをインデックスに登録（この場合、index.htmlとstyle.cssを更新した）

  ```
  git add index.html style.css
  ```
  
2. インデックスに登録されたファイルを新しいバージョンとして記録する

  ```
  git commit -m "index.htmlの一部とstyle.cssの一部を修正"
  ```

3. ローカルリポジトリの記録をリモートリポジトリに反映させる

  ```
  git push origin master
  ```

<br />

## Form System  

**要件**  
- 確認メール自動送信（Google Apps Script のMail APIを使用）
- バリデーション（Javascriptを使用）
- メール内容をAjaxで送信（任意）
- 送信された内容の保存（今回はスプレッドシートへ）

**参考資料**  
- [公式ドキュメント（英語）](https://developers.google.com/apps-script/)
- [初心者向けGAS入門](https://tonari-it.com/google-apps-script-manual/)

<br />

1. Google Appsに[Google Apps Script](https://chrome.google.com/webstore/detail/google-apps-script/eoieeedlomnegifmaghhjnghhmcldobl?hl=ja)を追加
2. Google Driveでプロジェクトフォルダを作成
3. 新規SpreadSheetと新規Google Apps Scriptを作成
4. 各種プログラムを作成（[サンプルコード](https://qiita.com/snowsunny/items/56a85c63598dcfb1b06e#%E3%82%B5%E3%83%B3%E3%83%97%E3%83%AB%E3%82%92%E5%88%A9%E7%94%A8%E3%81%97%E3%81%9F%E4%BD%9C%E3%82%8A%E6%96%B9%E8%AA%AC%E6%98%8E%E3%82%B5%E3%83%B3%E3%83%97%E3%83%AB%E8%A7%A3%E8%AA%AC)）
5. 自動返信メールの内容を作成
6. フォームをHTML/CSSで実装
7. Javascriptでバリデーションを実装
8. 公開、テスト
