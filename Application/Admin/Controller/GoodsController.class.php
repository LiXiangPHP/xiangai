<?php
namespace Admin\Controller;
// 导入文件上传类
use Think\Upload;
class GoodsController extends AdminController {
    function lists() {
        $this->display();
    }
    public function page(){
        $goodsModel=D('goods');
        $total=$goodsModel->count();
        $pagesize=5;
        $opage= new Page($total, $pagesize);
        $opage->ajax='ajax';
        $this->show=$opage->show();
        $this->goodsList=$goodsModel->relation('cate')->limit($opage->firstRow, $opage->listRows)->select();
        $this->display();
    }

    function insert() {
    	$this->toList=A('category')->toList();
    	$this->display();
    }

    function insertDoit() {
    	$config=array(
    			'savePath'=>'images/'
    		);
    	$up=new Upload($config);
    	// 上传成功 $info 是二维数组, 上传失败 false
    	$info=$up->upload();
    	if($info) {
    		$path=$info['file']['savepath'].$info['file']['savename'];
    		$_POST['img']=$path;
    		// 产生缩略图(自己搞定产生缩略图)
            $image=new \Think\Image();
            // 将图片转换为资源类型
            $image->open($up->rootPath.$path);
            // 获取文件名部分
            $basename=basename($path);
            // 获取路径部分
            $dirname=dirname($path);
            // 裁剪并保存图片
            $image->thumb(100, 100)->save($up->rootPath.$dirname.'/thumb_'.$basename);
            $_POST['thumb']=$dirname.'/thumb_'.$basename;
    	} else {
    		// 获取错误信息
    		$error=$up->getError();
    		$this->error($error);
    	}

    	// 实例化模型
    	$goodsModel=D('goods');
    	// 创建数据对象
    	$data=$goodsModel->create();
    	if(empty($data)){
    		$this->error($goodsModel->getError());
    	}
    	//success()和error() 会自动判断当前请求的方式, 如果是ajax方式, 则以JSON格式数据的返回
    	if($goodsModel->add()) {
    		$this->success('添加成功', U('goods/lists'));
    	} else {
    		$this->error('添加失败');
    	}

    }

    function update() {
    	$id=I('get.id', 0, 'intval'); // 接收ID参数
    	$this->toList=A('category')->toList();
    	$model=D('goods');
    	// 查询图片信息
    	$this->goods=$model->find($id);
    	$this->display();
    }

     function updateDoit() {
    	$config=array(
    			'savePath'=>'images/'
    		);
    	$up=new Upload($config);
    	// 上传成功 $info 是二维数组, 上传失败 false
    	$info=$up->upload();
    	if($info) {
    		$path=$info['file']['savepath'].$info['file']['savename'];
    		$_POST['img']=$path;
    		// 产生缩略图(自己搞定产生缩略图)
            $image=new \Think\Image();
            // 将图片转换为资源类型
            $image->open($up->rootPath.$path);
            $basename=basename($path);
            $dirname=dirname($path);
            $image->thumb(100, 100)->save($up->rootPath.$dirname.'/thumb_'.$basename);
    		$_POST['thumb']=$dirname.'/thumb_'.$basename;
    	} else {
    		// 获取错误信息
    		$error=$up->getError();
    		// $this->error($error);
    	}
		// 实例化模型
    	$goodsModel=D('goods');
    	$id=I('post.id', 0, 'intval');
    	$goods=$goodsModel->find($id);
    	
    	// 创建数据对象
    	$data=$goodsModel->create();
    	if(empty($data)){
    		$this->error($goodsModel->getError());
    	}
    	//success()和error() 会自动判断当前请求的方式, 如果是ajax方式, 则以JSON格式数据的返回
    	if($goodsModel->save()) {
    		// 删除图片
    		if($info && file_exists('./Uploads/'.$goods['goods_img'])){
    			@unlink('./Uploads/'.$goods['goods_img']);
    		}
    		if($info && file_exists('./Uploads/'.$goods['goods_thumb'])) {
    			@unlink('./Uploads/'.$goods['goods_thumb']);
    		}
    		$this->success('编辑成功', U('goods/lists'));
    	} else {
    		$this->error('编辑失败');
    	}

    }


    public function delete() {
    	$id=I('get.id', 0, 'intval'); // 接收ID参数
    	$model=D('goods');
    	// 查询图片信息
    	$goods=$model->find($id);
    	if($model->delete($id)) {
    		// 删除图片
    		if(file_exists('./Uploads/'.$goods['goods_img'])){
    			@unlink('./Uploads/'.$goods['goods_img']);
    		}
    		if(file_exists('./Uploads/'.$goods['goods_thumb'])) {
    			@unlink('./Uploads/'.$goods['goods_thumb']);
    		}
    		$this->success('删除成功');
    	} else {
    		$this->error('删除失败');
    	}
    }
}
