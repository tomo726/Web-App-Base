from flask import Flask, render_template
import os




# app = Flask(__name__)
# htmlファイルはtemplatesの中に入れないと動かない
# デフォルトでhtmlからアクセスできるtemplates以外のフォルダはstaticという名前でなければいけないため以下のように変更
app = Flask(__name__, static_folder='')


# 関数名が同じだとエラーが出る
# .gcloudignoreの存在
# 外部のリポジトリを含む際には.gitファイルを消してディレクトリ名を変更する必要あり (そうしないとディレクトリに白い矢印マークが現れる)
@app.route("/")
def main_html():
    return render_template("main.html")




# 127.0.0.1(=localhost)はループバックアドレス(自分しか見れない)
# 0.0.0.0はワイルドカード, LAN内のすべてのIPに対してあるポートを開放している
# 環境変数にPORT（コンテナのポート）があればその値を、なければ8080を返す
# コンテナの8080ポートがサーバの80番につなげられる仕様？
if __name__ == '__main__':
    app.run(debug=True,host='0.0.0.0',port=int(os.environ.get('PORT', 8080)))