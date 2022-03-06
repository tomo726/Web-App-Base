

## ローカル
```
git clone https://github.com/tomo726/flask_d.git
cd flask_d
docker-compose up -d
```

## サーバ (GCP)
- 最初  
Dockerfileのあるディレクトリの中で
```
gcloud builds submit --tag gcr.io/celtic-fact-283407/helloworld  
```
を実行するとイメージがGCPのリポジトリに登録される。  
その後コンテナを作成して公開する
```
gcloud run deploy --region=asia-northeast1 --image gcr.io/celtic-fact-283407/helloworld --platform managed  
```
- 編集      
「継続的デプロイを編集」によってgit pushをすれば自動で更新される  

<!-- ## Compute Engineでサーバ側のエラーチェック(.gitに注意すればローカルのDockerで代用可)
Cloud Runの補助として、sshでインスタンス内部に入り動作確認したり、GPUを使って学習する方法。  
container repositoryからGCEにデプロイを選択し、Cloud Engineのインスタンスにsshし以下のコマンドを実行。  
`
docker run -i -t -e PORT=8080 -p 8080:8080 bce5cedefa07 /bin/bash
` -->

<!-- ## ローカルから細かく行う方法 (不要)
- 最初  
`docker build -t flask_docker .`  
ローカルコンテナの作成:    
`docker run -e PORT=8000 -p 8000:8000 flask_docker`  

サーバにコンテナを上げる:    
tagも毎回付け直す必要がある  
```
docker tag flask_docker gcr.io/integral-cell-280701/flask_docker  
docker push gcr.io/integral-cell-280701/flask_docker  
```
- 編集
1. docker build -t flask_docker .  
2. docker run -i -t -p 8000:8000 flask_docker /bin/bash で編集  
3. docker container cp ローカルファイル [コンテナID]:/app で　ローカルト->コンテナにファイル移動  
4. 別のタブでdocker commit [コンテナID] flask_dockerを実行し、2.をexit  
コンテナ全削除  
docker ps -aq | xargs docker rm -f  
イメージ全削除  
docker images -aq | xargs docker rmi -f   -->


<!-- ## GPUを使う方法
IAMと管理->割り当てからcompute engineのT4とall regionsを１つづつ申請する  
Container RepositoryからGCEで開いてGPUの設定を行う  
一度に存在できるGPUが１つまでなので、インスタンスが2つあるとエラー)
ubuntuを使うとちゃんとドライバとcudaをインストールできた(dockerはgoogleが専用のosを用意するので`cos-extensions install gpu`を実行したけどエラー)  
GPUを使わなくてもGCEは高め  
-> AI Platformを使う -> colabの方がよさげ -->
