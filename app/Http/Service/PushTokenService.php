<?php
/**
 * Created by PhpStorm.
 * User: zfy
 * Date: 2018/4/27
 * Time: 15:47
 */

class PushTokenService
{
    /**
     * @var string
     * @desc 密钥
     */
    private $pem;

    private $apnsHost;
    /**
     * @var array
     * @desc array(
     * 'aps'   => array(
     * 'alert' => array('body' => $message),
     * 'sound' => 'default',
     * 'badge' => 1),
     * 'type'  => $type,
     * 'msg_type'=>$msgType,
     * 'title' => $title,
     * 'msg'   => $msg
     * )
     */
    private $body;

    /**
     * @var array
     * @desc 待推送设备
     */
    private $deviceToken;

    private $passCode;

    private $errMsg;

    private static $developmentHost = "ssl://gateway.sandbox.push.apple.com:2195";
    private static $productionHost = "ssl://gateway.push.apple.com:2195";


    public function __construct(
        $body,
        $deviceToken,
        $env = 'development',
        $pem = '/apns_product.pem',
        $passCode = null
    )
    {
        $this->body = $body;
        $this->deviceToken = $deviceToken;
        $this->apnsHost = $env === 'development' ? PushTokenService::$developmentHost : PushTokenService::$productionHost;
        $this->pem = $pem;
        $this->passCode = $passCode;
    }

    /**
     * @return bool
     */
    public function publish()
    {
        // initialize ssl connection
        $ctx = stream_context_create();
        stream_context_set_option($ctx, "ssl", "local_cert", $this->pem);

        if ($this->passCode) {
            stream_context_set_option($ctx, 'ssl', 'passphrase', $this->passCode);
        }

        $fp = stream_socket_client($this->apnsHost, $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx);
        if (!$fp) {
            if (config('app.debug'))
                $this->errMsg = "Failed to connect: $err $errstr" . PHP_EOL;
            else
                $this->errMsg = "publish failed, please contact with administrator.";
            return false;
        }
        $payload = json_encode($this->body);

        foreach ($this->deviceToken as $token) {
            $msg = chr(0) . pack("n", 32) . pack("H*", str_replace(' ', '', $token)) . pack("n", strlen($payload)) . $payload;
            //echo "sending message :" . $payload ."\n";
            fwrite($fp, $msg);
        }
        fclose($fp);

        return true;
    }

    public function getErr()
    {
        return $this->getErr();
    }
}