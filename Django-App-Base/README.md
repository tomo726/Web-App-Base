## Djangoアプリ作成手順

1. `pip install django`
2. `django-admin startproject <プロジェクト名>`
3. `python manage.py startapp <アプリ名>`
4. `settings.py`の`INSTALLED_APPS`に<アプリ名>を追記
5. `<アプリ名>/views.py` に以下のような関数を記入 
```python   
from django.http import HttpResponse

def homePageView(request):
    return HttpResponse("Hello, World!")
```
6. `<プロジェクト>/urls.py` を以下のように変更
```python
from django.contrib import admin
from django.urls import path
from manager.views import homePageView

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', homePageView)
]
```

## データベース作成・操作
1. `<アプリ名>/models.py を編集`
2. `python manage.py makemigrations <アプリ名>` # マイグレーションファイルの作成
* dependencies に親世代のマイグレーションID
* operations に処理の内容
3. `python manage.py migrate` # マイグレーションファイルをデータベースに適用
