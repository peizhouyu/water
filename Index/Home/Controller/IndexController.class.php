<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {      //输出banner
        $BannerModel = M('banner');
        $BannerInfo = $BannerModel->where('isdel=0')->order('number desc')->select();
        $this->assign('bannerlist', $BannerInfo);
        //获取图片新闻
        $news_picModel = M('news_pic');
        $news_picInfo = $news_picModel->order('id desc')->select();
        $this->assign('news_pic', $news_picInfo);
        //获取站内动态
        $news_zhanneiModel = M('websitebusiness_content');
        $map['type'] = array('neq', jiaoliuhui);
        $news_zhanneiInfo1 = $news_zhanneiModel->where($map)->order('id desc')->limit(3)->select();

        $map['type'] = array('eq', jiaoliuhui);
        $news_zhanneiInfo2 = $news_zhanneiModel->where($map)->order('id desc')->limit(4)->select();

        $this->assign('news_zhannei1', $news_zhanneiInfo1);
        $this->assign('news_zhannei2', $news_zhanneiInfo2);

        $productModel = M('productshow_content');
        $productInfo = $productModel->order('id desc')->limit(3)->select();
        $this->assign('productlist', $productInfo);


        $this->display();
    }

    //主导航实现方法
    public function NavSelect()
    {
        $aim = I('get.aim');
        $id = I('get.id');
        switch ($aim) {
            case gaikuang;                                              //工作站概况菜单逻辑
                $newsModel = M('overview_content');
                switch ($id) {
                    case 0;
                        $condition['type'] = "gaikuang";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "工作站概况";
                        $data['name2'] = "工作站概况";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 1;
                        $condition['type'] = "zuzhijigou";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "工作站概况";
                        $data['name2'] = "组织机构";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 2;
                        $condition['type'] = "zizhijieshao";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "工作站概况";
                        $data['name2'] = "资质介绍";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 3;
                        $condition['type'] = "jishuzhuangbei";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "工作站概况";
                        $data['name2'] = "技术装备";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 4;
                        $condition['type'] = "huojiangchengguo";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "工作站概况";
                        $data['name2'] = "获奖成果";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 5;
                        $condition['type'] = "lianxiwomen";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "工作站概况";
                        $data['name2'] = "联系我们";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                }
                break;
            case yewu;                                                                      //站内业务菜单逻辑
                $newsModel = M('websitebusiness_content');
                switch ($id) {
                    case 0;
                        $condition['type'] = "tuijiehui";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "站内业务";
                        $data['name2'] = "推介会";
                        $this->assign('data', $data);
                        $this->display('communicateList');
                        break;
                    case 1;
                        $condition['type'] = "jiaoliuhui";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "站内业务";
                        $data['name2'] = "交流会";
                        $this->assign('data', $data);
                        $this->display('communicateList');
                        break;
                    case 2;
                        $condition['type'] = "shuilituiguang";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "站内业务";
                        $data['name2'] = "水利推广";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 3;
                        $condition['type'] = "dianxingxiangmu";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "站内业务";
                        $data['name2'] = "典型项目";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;

                }
                break;
            case zhanshi;                                                                       //产品展示菜单逻辑
                $newsModel = M('productshow_content');
                switch ($id) {
                    case 0;
                        $condition['type'] = "fangzaijianzai";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "产品展示";
                        $data['name2'] = "防灾减灾";
                        $this->assign('data', $data);
                        $this->display('productList');
                        break;
                    case 1;
                        $condition['type'] = "nongtianshuili";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "产品展示";
                        $data['name2'] = "农田水利";
                        $this->assign('data', $data);
                        $this->display('productList');
                        break;
                    case 2;
                        $condition['type'] = "shuiligongcheng";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "产品展示";
                        $data['name2'] = "水利工程";
                        $this->assign('data', $data);
                        $this->display('productList');
                        break;
                    case 3;
                        $condition['type'] = "anquanyinshui";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "产品展示";
                        $data['name2'] = "农村安全饮水";
                        $this->assign('data', $data);
                        $this->display('productList');
                        break;
                    case 4;
                        $condition['type'] = "shuiziyuankaifa";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "产品展示";
                        $data['name2'] = "水资源开发与节约保护";
                        $this->assign('data', $data);
                        $this->display('productList');
                        break;
                    case 5;
                        $condition['type'] = "shuishengtai";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "产品展示";
                        $data['name2'] = "水生态与水环境";
                        $this->assign('data', $data);
                        $this->display('productList');
                        break;
                    case 6;
                        $condition['type'] = "shuilixinxihua";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "产品展示";
                        $data['name2'] = "水利信息化";
                        $this->assign('data', $data);
                        $this->display('productList');
                        break;
                    case 7;
                        $condition['type'] = "shuiliguanli";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "产品展示";
                        $data['name2'] = "水利管理及其他";
                        $this->assign('data', $data);
                        $this->display('productList');
                        break;
                }
                break;
            case xinwen;                                                                        //新闻中心菜单逻辑
                switch ($id) {
                    case 0;
                        $newsModel = M('news_gonggao');
                        $newsInfo = $newsModel->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "新闻中心";
                        $data['name2'] = "公示公告";
                        $this->assign('data', $data);
                        $this->display('notice');
                        break;
                    case 1;
                        $newsModel = M('news_zhannei');
                        $newsInfo = $newsModel->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "新闻中心";
                        $data['name2'] = "站内动态";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 2;
                        $newsModel = M('news_kejidongtai');
                        $newsInfo = $newsModel->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "新闻中心";
                        $data['name2'] = "水利科技";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 3;
                        $newsModel = M('news_pic');
                        $newsInfo = $newsModel->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "新闻中心";
                        $data['name2'] = "图片新闻";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 4;
                        $newsModel = M('news_video');
                        $newsInfo = $newsModel->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "新闻中心";
                        $data['name2'] = "视频新闻";
                        $this->assign('data', $data);
                        $this->display('videoList');
                        break;

                }
                break;
            case fagui;                                                                         //政策法规菜单逻辑
                $newsModel = M('policies_content');
                switch ($id) {
                    case 0;
                        $condition['type'] = "shengnei";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "政策法规";
                        $data['name2'] = "省内政策";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                    case 1;
                        $condition['type'] = "guojia";
                        $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                        $this->assign('list', $newsInfo);
                        $data['name1'] = "政策法规";
                        $data['name2'] = "国家政策";
                        $this->assign('data', $data);
                        $this->display('list');
                        break;
                }

                        break;
                    case fuwu;                                                                      //服务中心菜单逻辑
                        $newsModel = M('service_content');
                        switch ($id) {
                            case 0;
                                $condition['type'] = "rencaipeixun";
                                $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                                $this->assign('list', $newsInfo);
                                $data['name1'] = "服务中心";
                                $data['name2'] = "人才培训";
                                $this->assign('data', $data);
                                $this->display('list');
                                break;
                            case 1;
                                $condition['type'] = "xiangguanxiazai";
                                $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                                $this->assign('list', $newsInfo);
                                $data['name1'] = "服务中心";
                                $data['name2'] = "相关下载";
                                $this->assign('data', $data);
                                $this->display('list');
                                break;
                        }
                        break;
                    case jiaoliu;                                                                   //合作交流菜单逻辑
                        $newsModel = M('exchange_content');
                        switch ($id) {
                            case 0;
                                $condition['type'] = "huoban";
                                $newsInfo = $newsModel->where($condition)->order('id desc')->select();
                                $this->assign('list', $newsInfo);
                                $data['name1'] = "合作交流";
                                $data['name2'] = "合作伙伴";
                                $this->assign('data', $data);
                                $this->display('list');
                                break;
                        }
                        break;
                }

        }


    }
