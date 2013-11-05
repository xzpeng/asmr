<?php
class VipAction extends CommonAction 
{

    public function index()
    {

        $this->assign('pageTitle','实名认证');
        $this->display();
    }

    public function register()
    {
        $list=$_POST;
        if(empty($list['name']))
        {
            $this->error('身份证号不能为空');
        }
        
        if(empty($_FILES['idcard_a']['name'])||empty($_FILES['idcard_b']['name']))
        {
            $this->error('请上传正反面两张身份证图片');
        }
        $m=M('vip');
        
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->allowExts  = array('jpg','jpeg','png','gif');// 设置附件上传类型
        $upload->savePath = C('UPLOAD_PATH').getUserDir('idcard');// 设置附件上传目录
        $upload->maxSize=2097152;//单位K
        
        $tmpa=$upload->uploadOne($_FILES['idcard_a']);
        if(empty($tmpa))
        {
            $this->error('身份证正面:'.$upload->getErrorMsg());
        }
        else
        {
            if(!empty($carda))
            {
                unlink(C('UPLOAD_PATH').getUserDir('idcard').$carda);
            }
            $carda=$tmpa[0]['savename'];
        }

        $tmpb=$upload->uploadOne($_FILES['idcard_b']);
        if(empty($tmpb))
        {
            $this->error('身份证反面:'.$upload->getErrorMsg());
        }
        else
        {
            if(!empty($cardb))
            {
                unlink(C('UPLOAD_PATH').getUserDir('Idcard').$cardb);
            }
            $cardb=$tmpb[0]['savename'];
        }

        $carda=$carda?$carda:"";
        $cardb=$cardb?$cardb:"";
        $data['idcard_a']=$carda;
        $data['idcard_b']=$cardb;
        $data['name']=$list['name'];
        $data['age']=$list['age'];
        $data['qq']=$list['qq'];
        $data['mobile']=$list['mobile'];
        $data['address']=$list['address'];
        $data['register_time']=time();

        $ex=$m->add($data);
        if($ex>0)
        {
            $this->success('提交成功');
        }
        else
        {
            $this->success('提交失败');
        }
        
    }

    public function doPublishProduct()
    {
        
        import('ORG.Net.UploadFile');
        $m=M('vip');
        
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
        $upload = new UploadFile();// 实例化上传类
        $upload->allowExts  = array('jpg','jpeg','png','gif');// 设置附件上传类型
        $upload->savePath = C('UPLOAD_PATH').getUserDir('Vip');// 设置附件上传目录
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