<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class GoodsModel extends RelationModel {
    // 自动映射
    protected $_map=array(
        'name'   => 'goods_name',
        'price'  => 'goods_price',
        'store'  => 'goods_store',
        'img'    => 'goods_img',
        'thumb'  => 'goods_thumb',
        'desc'   => 'goods_desc'
    );

    // 自动验证
    protected $_validate=array(
    		array('goods_name', 'require', '请输入商品名称'),
    		array('goods_price', 'require', '请输入商品价格'),
    		array('goods_price', 'currency', '商品价格格式不对'),
    		array('goods_store', 'require', '请输入商品库存'),
    		array('goods_store', 'number', '商品库存必须为数字'),
    		array('goods_name', 'checkNameSize', '商品名称长度为最少20 最多120', 2, 'callback', 3)
    	);
    // 自动完成
    protected $_auto=array(
    		array('is_delete', '0', 1, 'string'),
    		array('is_on_sale', '0', 1, 'string'),
    		array('is_hot', '0', 1, 'string'),
    		array('is_new', '1', 1, 'string')
    	);

    // 关联模型
    protected $_link=array(
            'cate'=>array(
                    'mapping_type'=>self::BELONGS_TO,
                    // 'classname'
                    'foreign_key'=>'cate_id',
                    'mapping_fields'=>'cate_name',
                    'as_fields'=>'cate_name'
                )
        );
    function checkNameSize($name) {
    	$length=mb_strlen($name);
    	if($length>=20 && $length<=120) {
    		return true;
    	}
    	return false;
    }
}
