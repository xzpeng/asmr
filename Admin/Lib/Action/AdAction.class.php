<?php
class AdAction extends CommonAction
{
	public function index()
	{
		cookie('index_url',__SELF__,session('life_time'));

		import('ORG.Xly.Paging');
		$map = array();

        $m=M('ad');
        $type=M('type');
        $total=$m->where($map)->count();
        $paging=new Paging($total, 20);
        $field=array('id','title','type','img','auth','display','link','discribe','add_time');
        $result=$m->where($map)->order($order)->field($field)->limit($paging->start,$paging->displayrows)->select();
        for($i=0;$i<count($result);$i++)
        {
            $result[$i]['img']=getImageUploadDir('ad', 'get').$result[$i]['img'];
            $result[$i]['haveHref']=$result[$i]['href']?'#f00':'#666';
            switch ($result[$i]['type']) {
            	case 'index':
            		$result[$i]['typezh'] = '首页幻灯片';
            		break;
            	case 'sub1':
            		$result[$i]['typezh'] = '子页幻灯片';
            		break;
            	case 'sub2':
            		$result[$i]['typezh'] = '子页固定位';
            		break;
            }
        }
        $this->assign('list',$result);
        $this->assign('pageshow',$paging->show());
        $this->display();

	}

	public function add()
	{
		$this->display();
	}
	
	public function doAdd()
	{
		$list=$_POST;
		if(empty($list['type'])||empty($list['title']))
		{
			$this->error('广告类型和标题不能为空');
		}
		if(empty($_FILES['image']['name']))
		{
			$this->error('请上传广告图');
		}

		import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->allowExts  = array('jpg','jpeg','png','gif');// 设置附件上传类型
        $upload->savePath = getImageUploadDir('ad');// 设置附件上传目录
        $upload->maxSize=2097152;//单位K
        $tmp=$upload->uploadOne($_FILES['image']);
        if(empty($tmp))
        {
            $this->error('广告图片:'.$upload->getErrorMsg());
        }
        else
        {
            $data['img']=$tmp[0]['savename'];
        }

		$m=M('ad');

		$data['type']=$list['type'];
		$data['title']=$list['title'];
		$data['link']=$list['link'];
		$data['discribe']=$list['discribe'];
		$data['add_time']=time();

		$result=$m->add($data);
		var_dump($data);die;
		if($result>0)
		{
			$this->success('发布成功');
		}
		else
		{
			$this->error('发布失败');
		}
	}
	
	//上传略缩图
	private function imageUp()
	{
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->allowExts  = array('jpg','jpeg','png','gif','swf');// 设置附件上传类型
		$upload->savePath = C('UPLOAD_PATH').getUserDir('Images');// 设置附件上传目录
		$upload->maxSize=2097152;//单位K
		if($upload->upload())
		{
			$info =  $upload->getUploadFileInfo();
			return $info[0]['savename'];
		}
		else
		{
			$this->error('广告图上传失败，'.$upload->getErrorMsg());
		}
	}
	
	
	
	
}