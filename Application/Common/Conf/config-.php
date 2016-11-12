<?php
return array(
    /* 鏁版嵁搴撹缃� */
    'DB_TYPE'               =>  'mysql',     // 鏁版嵁搴撶被鍨�
    'DB_HOST'               =>  '192.168.1.5', // 鏈嶅姟鍣ㄥ湴鍧�
    'DB_NAME'               =>  'pad_shop',          // 鏁版嵁搴撳悕
    'DB_USER'               =>  'root',      // 鐢ㄦ埛鍚�
    'DB_PWD'                =>  'root',          // 瀵嗙爜
    'DB_PORT'               =>  '3306',        // 绔彛
    'DB_PREFIX'             =>  'pad_',    // 鏁版嵁搴撹〃鍓嶇紑
    'DB_PARAMS'             =>  array(), // 鏁版嵁搴撹繛鎺ュ弬鏁�    
    'DB_DEBUG'  	          =>  TRUE, // 鏁版嵁搴撹皟璇曟ā寮� 寮�鍚悗鍙互璁板綍SQL鏃ュ織
    'DB_FIELDS_CACHE'      =>  true,        // 鍚敤瀛楁缂撳瓨
    'DB_CHARSET'            =>  'utf8',      // 鏁版嵁搴撶紪鐮侀粯璁ら噰鐢╱tf8
    'DB_DEPLOY_TYPE'        =>  1, // 鏁版嵁搴撻儴缃叉柟寮�:0 闆嗕腑寮�(鍗曚竴鏈嶅姟鍣�),1 鍒嗗竷寮�(涓讳粠鏈嶅姟鍣�)
    'DB_RW_SEPARATE'        =>  true,       // 鏁版嵁搴撹鍐欐槸鍚﹀垎绂� 涓讳粠寮忔湁鏁�
    'DB_MASTER_NUM'         =>  1, // 璇诲啓鍒嗙鍚� 涓绘湇鍔″櫒鏁伴噺
    'DB_SLAVE_NO'           =>  '', // 鎸囧畾浠庢湇鍔″櫒搴忓彿
    
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin','Api','Cli'),
    'DEFAULT_MODULE'        =>    'Admin',
    
    /* URL璁剧疆 */
    'URL_CASE_INSENSITIVE'  =>  false,   // 榛樿false 琛ㄧずURL鍖哄垎澶у皬鍐� true鍒欒〃绀轰笉鍖哄垎澶у皬鍐�
    'URL_MODEL'               =>  1,       // URL璁块棶妯″紡,鍙�夊弬鏁�0銆�1銆�2銆�3,浠ｈ〃浠ヤ笅鍥涚妯″紡锛�
    // 0 (鏅�氭ā寮�); 1 (PATHINFO 妯″紡); 2 (REWRITE  妯″紡); 3 (鍏煎妯″紡)  榛樿涓篜ATHINFO 妯″紡
    
    'APP_SUB_DOMAIN_DEPLOY'   => true, // 寮�鍚瓙鍩熷悕鎴栬�匢P閰嶇疆
    'APP_SUB_DOMAIN_RULES'    =>    array(
        'dev.admin.pad-phone.com'=>'Admin',
        'dev.mapi.pad-phone.com'=>'ManageApi',
        'dev.rapi.pad-phone.com'=>'RoomApi',

        'test.admin.pad-phone.com'=>'Admin',
        'test.mapi.pad-phone.com'=>'ManageApi',
        'test.rapi.pad-phone.com'=>'RoomApi',
        //鏈満娴嬭瘯鍦板潃
        'test.admin.my.com'=>'Admin',
        'test.mapi.my.com'=>'ManageApi',
        'test.rapi.my.com'=>'RoomApi',
    ),
    
    //涓嶢PP鐨勬帴鍙ｅ叕閽�
    'SIGNKEY'               =>  '0D68B9B5D701DFE4A227191573295C99',//APP 鍏挜, 鍘熶覆锛歊OOM_API_PRIVATE_20161109@%*)PAD-PHONE
    
    //缂撳瓨閰嶇疆
    'DATA_CACHE_PREFIX' => 'Redis_',//缂撳瓨鍓嶇紑
    'DATA_CACHE_TYPE'=>'Redis',//榛樿鍔ㄦ�佺紦瀛樹负Redis
    'DATA_CACHE_TIME'       => 24*60*60,      // 鏁版嵁缂撳瓨鏈夋晥鏈� 0琛ㄧず姘镐箙缂撳瓨
    
    //Redis 閰嶇疆
    'REDIS_RW_SEPARATE' => false, //Redis璇诲啓鍒嗙 true 寮�鍚�
    'REDIS_HOST'=>'192.168.1.252', //redis鏈嶅姟鍣╥p锛屽鍙扮敤閫楀彿闅斿紑锛涜鍐欏垎绂诲紑鍚椂锛岀涓�鍙拌礋璐ｅ啓锛屽叾瀹僛闅忔満]璐熻矗璇伙紱
    'REDIS_PORT'=>'6379',//绔彛鍙�
    'REDIS_TIMEOUT'=>'300',//瓒呮椂鏃堕棿
    
    
    'SHOW_PAGE_TRACE' => true,//鏄剧ず椤甸潰璋冭瘯淇℃伅
    
    //璧勬簮鏈嶅姟鍣�
    'FASTDFS_SERVER' => array(
        array(
            'host' => '192.168.1.252',
            'port' => '22122',
        ),
    ),

);