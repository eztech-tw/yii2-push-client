EzTech PHP Push Helper
======================
EzTech PHP Push Helper<br>
[![Latest Stable Version](https://img.shields.io/packagist/v/eztech-tw/yii2-push-client.svg)](https://packagist.org/packages/eztech-tw/yii2-push-client.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/eztech-tw/yii2-push-client.svg)](https://packagist.org/packages/eztech-tw/yii2-push-client.svg)

安裝
----
這個套件請使用 [composer](http://getcomposer.org/download/) 安裝

執行

```
php composer.phar require --prefer-dist eztech-tw/php-push-client "*"
```

或增加

```
"eztech-tw/php-push-client": "*"
```

到你的 `composer.json` 檔案中

使用
----
首先於設定檔 web.php 中引用此套件，並設定推播伺服器位址和存取權杖，存取權杖可於推播伺服器上頁面產生，以及被推播之APP的BundleID
````
'components' => [
    'EzPush'=>[
        'class' => 'eztechtw\ezpush\EzPushYii',
        'ServerAddress' => 'http://localhost/push/',
        'ApiAccessKey' => 'ue6yJxEnTG5SBhTooD758O4b7wyE417a',
        'Bundleid' => 'assetmanager.pj',
    ],
]
````
建立一個訊息並發送<br>
回傳值若失敗為null，若成功為已新增之內容陣列
````
use eztechtw\ezpush\Message;

$Msg = new Message();
$Msg->title="標題";
$Msg->body="內文";

$response = Yii::$app->EzPush->Push($Msg,"使用者識別");
````