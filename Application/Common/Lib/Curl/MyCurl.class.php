<?php
/**
 * Curl.class.php - Curl类
 * @package Common\Lib
 * @author zhaoxz(zhao0309@163.com)
 * @copyright  2016年11月3日 下午2:25:12
 */

namespace Common\Lib\Curl;

class MyCurl {    
    private static  $url = ''; // 访问的url
    private static  $oriUrl = ''; // referer url
    private static  $data = array(); // 可能发出的数据 post,put
    private static  $method; // 访问方式，默认是POST请求
    
    /**
     * 模拟数据提交
     * @param string $url 请求地址
     * @param array  $data 请求地址
     * @param string $method 请求方法
     * @return boolean
     */
    public static function send($url, $data = array(), $method = 'post') {
        //地址为空 非法
        if (!$url){
            return false;
        }
        self::$url = $url;
        self::$method = $method;
        $urlArr = parse_url($url);
        self::$oriUrl = $urlArr['scheme'] .'://'. $urlArr['host'];
        
        //参数格式
        if (!empty($data) && !is_array($data)){
            return false;
        }
        self::$data = $data;
        
        //请求类型
        if (!in_array(self::$method, array('get', 'post', 'put', 'delete'))) {
            return false;
        }
        
        //组装请求
        $func = self::$method . 'Request';
        return self::$func(self::$url);
    }
    /**
     * 基础发起curl请求函数
     * @param int $is_post 是否是post请求
     */
    private  function doRequest($is_post = 1) {
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL, self::$url);//抓取指定网页
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);        
        curl_setopt($ch, CURLOPT_REFERER, self::$oriUrl);// 来源一定要设置成来自本站
        
        //是否https请求 证书等后期用到再扩展
        if (substr(self::$url, 0, 5) == 'https') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        //请求方式 
        if($is_post == 1){
            curl_setopt($ch, CURLOPT_POST, $is_post);
        }
        if (!empty(self::$data)) {
            self::$data = self::dealPostData(self::$data);//格式化数据
            curl_setopt($ch, CURLOPT_POSTFIELDS, self::$data);
        }
        
        $data = curl_exec($ch);//运行curl    
        if($data === false ){
            return false;
        }
        curl_close($ch);
        return $data;
    }
    /**
     * 发起get请求
     */
    public function getRequest() {
        return self::doRequest(0);
    }
    /**
     * 发起post请求
     */
    public function postRequest() {
        return self::doRequest(1);
    }
    /**
     * 处理发起非get请求的传输数据
     * @param array $postData
     */
    public function dealPostData($postData) {
        
        foreach ($postData as $k => $v) {
            $o .= "$k=" . urlencode($v) . "&";
        }
        $postData = substr($o, 0, -1);
        return $postData;
    }
    /**
     * 发起put请求
     */
    public function putRequest($param) {
        return self::doRequest(2);
    }
    
    /**
     * 发起delete请求
     */
    public function deleteRequest($param) {
        return self::doRequest(3);
    }
    
}
/* $curl = new MyCurl('http://www.jumei.com',array(), 'get');
$res = $curl->send(); */
//$res = MyCurl::send('http://www.ipip.net/ip.html',array('ip' => '61.142.206.145'),'post');

//var_dump($res);die();