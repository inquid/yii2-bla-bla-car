<?php
/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 2/5/18
 * Time: 10:09 AM
 */

namespace inquid\blablacar;

use inquid\blablacar\models\Error;
use Yii;
use yii\base\Component;
use yii\base\Model;
use yii\base\UserException;
use yii\helpers\Json;
use yii\httpclient\Client;

/**
 * Class HttpClient
 * @package inquid\blablacar
 *
 * @property array $headers
 * @property string $url
 */
class HttpClientV1 extends Component
{
    public $API_VERSION = 'api/v2';
    const URL_BLABLACAR = 'https://public-api.blablacar.com/';
    private $_options = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
    ];
    public $apiKey;

    public function init()
    {
        if (!isset($this->apiKey)) {
            $key = Configuration::find()->where(['system_type' => 'blablacar', 'param' => 'api_key'])->select('system_value')->one();
            if (isset($key)) {
                $this->apiKey = $key->system_value;
            } else {
                throw new UserException("API KEY IS REQUIRED");
            }
        }
    }

    /**
     * @param string $method
     * @param string $path
     * @param null|array $data
     * @return \yii\httpclient\Response
     */
    protected function sendRequest($method, $path, $data = null)
    {
        $client = new Client(['baseUrl' => $this->getUrl() . '/' . $path]);
        $request = $client->createRequest();
        if ($data) {
            $request->setData($data);
        }
        $request->setHeaders($this->getHeaders());
        $request->setMethod($method);
        $request->setOptions($this->_options);
        return $request->send();
    }

    /**
     * @param \yii\httpclient\Response $response
     * @param string $className
     * @param bool $isList
     * @return array|object|Model|Error
     */
    protected function modelResponse($response, $className, $isList = false)
    {
        if ($response && ($headers = $response->getHeaders())) {
            if ($headers->get('http-code') == 200 || $headers->get('http-code') == 201) {
                $content = Json::decode($response->getContent());
                Yii::trace(json_encode($content));
                if ($isList && $className == "inquid\blablacar\models\Trips") {
                    $list = [];
                    foreach ($content as $row) {
                        $row['class'] = $className;
                        $list[] = Yii::createObject($row);
                    }
                    return $list;
                } else {
                    if ($className == null) {
                        return $content;
                    }
                    $content['class'] = $className;
                    return Yii::createObject($content);
                }
            } else {
                return new Error($headers->get('http-code'));
            }
        }
        return new Error(500);
    }

    /**
     * @param \yii\httpclient\Response $response
     * @return boolean|Error
     */
    protected function booleanResponse($response)
    {
        if ($response && ($headers = $response->getHeaders())) {
            if ($headers->get('http-code') == 200 || $headers->get('http-code') == 201) {
                $content = Json::decode($response->getContent());
                if ($content['response'] == 'success') {
                    return true;
                } elseif ($content['response'] == 'error') {
                    return new Error($headers->get('http-code'), $content['message']);
                }
            }
        }
        return new Error(500);
    }

    /**
     * Gets sandbox or production url endpoint
     * @return string
     */
    private function getUrl()
    {
        return self::URL_BLABLACAR . $this->API_VERSION;
    }

    /**
     * @return array headers with auth
     */
    private function getHeaders()
    {
        return [
            "Content-Type: application/json",
            "key: {$this->apiKey}"
        ];
    }
}
