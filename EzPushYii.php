<?php

namespace eztechtw\ezpush;

/**
 * This is just an example.
 */
class EzPushYii extends \yii\base\Component
{
    public function __construct()
    {
        parent::__construct();
        //EzPush::$ServerAddress=$this->ServerAddress;
        //EzPush::$ApiAccessKey=$this->ApiAccessKey;
    }

    /**
     * @var string 推播伺服器位址
     */
    public $ServerAddress = "https://localhost/push/";
    /**
     * @var string 存取權杖，可於推播伺服器產生
     */
    public $ApiAccessKey = "ApiAccessKey";
    /**
     * @var string 存取權杖，可於推播伺服器產生
     */
    public $Bundleid = "Bundleid";

    /**
     * 發送推播，請先建立一個 Message 物件來傳送
     * @param string $_bundleid
     * @param string $_subscriber
     * @param Message $_message
     * @return array 回傳陣列物件，或失敗為null
     */
    public function Push($_message, $_subscriber, $_bundleid = null)
    {
        EzPush::$ServerAddress = $this->ServerAddress;
        EzPush::$ApiAccessKey = $this->ApiAccessKey;
        if (isset($_bundleid)) {
            return EzPush::Push($_message, $_subscriber, $_bundleid);
        }
        return EzPush::Push($_message, $_subscriber, $this->Bundleid);
    }

    /**
     * 取得 Bundleid 列表，伺服器無法連線將回傳null
     * ["Bundleid"=>"說明"]
     * @return array
     */
    public function BundleidList()
    {
        EzPush::$ServerAddress = $this->ServerAddress;
        EzPush::$ApiAccessKey = $this->ApiAccessKey;
        return EzPush::BundleidList();
    }

    /**
     * 上傳使用者Token
     * @param string $_bundleid
     * @param string $_subscriber
     * @param string $_token
     * @param string $_platform
     * @return array 回傳陣列物件，或失敗為null
     */
    public function addClientToken($_token,$_subscriber,$_bundleid,$_platform){
        EzPush::$ServerAddress = $this->ServerAddress;
        EzPush::$ApiAccessKey = $this->ApiAccessKey;
        return EzPush::addClientToken($_token,$_subscriber,$_bundleid,$_platform);
    }

    /**
     * 全部標示已讀
     * @param string $_bundleid
     * @param string $_subscriber
     * @return array 回傳陣列物件，或失敗為null
     */
    public function markAllAsRead($_subscriber,$_bundleid){
        EzPush::$ServerAddress = $this->ServerAddress;
        EzPush::$ApiAccessKey = $this->ApiAccessKey;
        return EzPush::markAllAsRead($_subscriber,$_bundleid);
    }
}
