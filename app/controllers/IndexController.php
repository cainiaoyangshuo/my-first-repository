<?php
/**
 * @date 2018/12/6
 * @author: yangshuo5@ucfgroup.com
 */
header("content-type:text/html;charset=utf-8");
class IndexController extends BaseController
{
    public $urls = [
        'ncfph_api' => 'http://yangshuo5.api.ncfphlocal.com/findnews/articleDetail',
    ];

    public function index()
    {
        $request = $_REQUEST;


        $requestMethod = $_SERVER['REQUEST_METHOD'];

        // 把key和value取出来

        $params = array();
        foreach ($request as $key => $value) {
            if ($value == '') {
                continue;
            }
            if ($key == 'url') {
                $params[$key] = $value;
                continue;
            }
        }

        $url = isset($request['url']) ? $request['url'] : '';
        if (empty($url)) {
            return json_encode(['data' => -1, 'msg' => 'url不能为空']);
        }

        $params['timestamp'] = time();
        $params['signature'] = $this->makeSign($params);

        $method = strtolower($requestMethod);
        $res = Curl::$method($url, $params);
        Log::debug('request method: ' . $method .  "  line:" . __LINE__);
        echo json_encode(['data' => $res]);die();
    }

    public function makeSign(array $params, $salt = '/trBxSVzokD9vJSY/Fcj6w')
    {
        ksort($params);

        $paramsJoin = array();

        foreach ($params as $key => $value)
        {
            if (!empty($value)) {
                $paramsJoin[] = "{$key}={$value}";
            }
        }

        $paramsString = implode('&', $paramsJoin).'&key='.$salt;

        return md5($paramsString);
    }

    public function getKey()
    {

    }
}