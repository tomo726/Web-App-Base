# LAMP環境

## LAMP環境の構築
```
git clone https://github.com/tomo726/lamp_d.git
cd lamp_d.git
docker-compose up -d
```
`lamp_d/html/sample.php` のような記述で、MySQLにアクセスすることができます。


## クラウドサービスで公開
例えばGCPでは以下のように `docker-compose.yml` ファイルをもとに作成したコンテナを公開することができます。
<!--
クラウドではDockerfileでなくdocker-compose.ymlで複数イメージを作るため、
```
gcloud builds submit --tag gcr.io/celtic-fact-283407/helloworld
gcloud run deploy --region=asia-northeast1 --image gcr.io/celtic-fact-283407/helloworld --platform managed
```
のようにできない。そのため、https://cloud.google.com/community/tutorials/docker-compose-on-container-optimized-os
のようにcompute engineにsshで入ってコンテナを作るかKubernetesを使う必要がある。
-->

`compute engine` で `container optimized os` を選択しインスタンスを作成してssh接続し、以下のコマンドを入力します。
```
docker run docker/compose:1.24.0 version
git clone https://github.com/tomo726/lamp_docker
cd lamp_docker
docker run -d \
    -v /var/run/docker.sock:/var/run/docker.sock \
    -v "$PWD:$PWD" \
    -w="$PWD" \
    docker/compose:1.24.0 up
```
少し待ってポートに注意しつつURLにアクセスすると、外部に公開できていることが確認できます。
