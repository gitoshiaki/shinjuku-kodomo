## プロジェクトの始め方

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
