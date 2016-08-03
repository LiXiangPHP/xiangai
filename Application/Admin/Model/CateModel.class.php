<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class CateModel extends RelationModel {

	protected $_link=array(
			'goods'=>array(
					'mapping_type'=>self::HAS_MANY,
					//'class_name'=>
					//'mapping_name'=>
					'foreign_key'=>'cate_id'
				),
			'cate'=>array(
					'mapping_type'=>self::HAS_MANY,
					//'class_name'=>
					//'mapping_name'=>
					'foreign_key'=>'cate_id',
					'parent_key'=>'parent_id'
				)
		);
}