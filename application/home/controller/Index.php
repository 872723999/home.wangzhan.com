<?php
namespace app\home\controller;
// 课程类型表
use app\home\model\WzClassType;
// 课程小类表
use app\home\model\WzClassSmallType;
// 课程表
use app\home\model\WzCourse;
// 课程包
use app\home\model\WzPackage;
// 文章表
use app\home\model\WzArticle;
// 订单表
use app\home\model\WzOrder;

class Index extends Common{
    public function initialize(){
        parent::initialize();
    	// 学科表
        $this->class_type_model = new WzClassType();
        // 课程表
    	$this->course_model = new WzCourse();
        // 课程包
        $this->package_model = new WzPackage();
        // 文章表
        $this->article_model = new WzArticle();
        // 学科列表
        $classType_list = $this->class_type_model->get_list();
        // 小类型表
        $this->class_small_type_model = new WzClassSmallType();
        // 订单表
        $this->order_model = new WzOrder();
        $this->assign([
            'classType_list'    => $classType_list,
        ]);
    }
    public function index(){
        $data = input();
        // 学科列表
        
        $list_all = $this->course_model->where('class_type_id','<>','')->where('is_tui',1)->limit(8)->select()->toArray();
        $list1 = $this->course_model->where('class_type_id',1)->where('is_tui',1)->limit(8)->select()->toArray();
        $list2 = $this->course_model->where('class_type_id',3)->where('is_tui',1)->limit(8)->select()->toArray();
        $list3 = $this->course_model->where('class_type_id',10)->where('is_tui',1)->limit(8)->select()->toArray();
        
        // 课程列表
        // $course_list = $this->course_model->get_list('id,title,small_title,describe,price,pic,cang,class_type_id',$data['class_type_id']);
        // 课程包列表
        $package_list = $this->package_model->where('is_tui',1)->limit(1)->select()->toArray();
        // 文章表
        $article_list = $this->article_model->where('is_tui',1)->select()->toArray();
        // 小类型1
        $small_type_list1 = $this->class_small_type_model->where('class_type_id','like',"%1%")->select();
        // 小类型2
        $small_type_list2 = $this->class_small_type_model->where('class_type_id','like',"%10%")->select();
        // 小类型3
        $small_type_list3 = $this->class_small_type_model->where('class_type_id','like',"%3%")->select();

        // foreach ($list_all as $key => &$val) {
        //     $val['buy_num'] = $this->order_model->get_num(['course_id'=>$val['id']]);
        // }

        $this->assign([
            'list'  => $list,
            'list_all'   => $list_all,
            'package_list'  => $package_list,
            'article_list'  => $article_list,
            'admin_path'    => config('admin_path'),
            'small_type_list1'  => $small_type_list1,
            'small_type_list2'  => $small_type_list2,
            'small_type_list3'  => $small_type_list3,
            'list_all'  => $list_all,
            'list1'  => $list1,
            'list2'  => $list2,
            'list3'  => $list3,

        ]);
        return $this->fetch();
    }

    public function gsjj(){
        return $this->fetch();
    }
}