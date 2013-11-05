<?php
class ProductionAction extends CommonAction 
{

    public function index()
    {
        $this->assign('pageTitle','商家入驻');
        $this->display();
    }

    public function notice()
    {
        $this->assign('pageTitle','商家入驻须知');
        $this->display();
    }

    public function doPublishProduct()
    {
        
        import('ORG.Net.UploadFile');
        $m=M('production');
        
        $data['href'] = $_POST['plink'];
        $data['category'] = $_POST['pcategory'];
        $data['subcategory'] = $_POST['psubcategory'];
        $data['discount'] = $_POST['discount'];
        $data['original_price'] = $_POST['poriginalprice'];
        $data['discount_price'] = $_POST['pdiscountprice'];
        $data['cname'] = $_POST['cname'];
        $data['cqq'] = $_POST['cqq'];
        $data['cmobile'] = $_POST['cmobile'];
        $data['cemail'] = $_POST['cemail'];
        $data['register_time']=time();
        
        $upload = new UploadFile();// 实例化上传类
        $upload->allowExts  = array('jpg','jpeg','png','gif');// 设置附件上传类型
        $upload->savePath = C('UPLOAD_PATH').getUserDir('Production');// 设置附件上传目录
        $upload->maxSize=209715200;//单位K

        if(!empty($_FILES['pimage']['name']))
        {
            $tmp=$upload->uploadOne($_FILES['pimage']);

            if(empty($tmp))
            {
                $this->error('Picture:'.$upload->getErrorMsg());
            }
            else
            {
                $data['img']=$tmp[0]['savename'];
            }
        }
        $upre=$m->add($data);

        if($upre>0)
        {
            $this->success('上传成功');
        }
        else
        {
            $this->error('上传失败');
        }
        
    }
}