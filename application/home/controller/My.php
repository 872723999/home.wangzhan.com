<?php
namespace app\home\controller;
// 课程表
use app\home\model\WzCourse;
// 学科表
use app\home\model\WzClassType;
// 前台用户表
use app\home\model\WzUser;
// 订单表
use app\home\model\WzOrder;
// 老师表
use app\home\model\WzTeacher;
// 包表
use app\home\model\WzPackage;
use think\db;
// 个人中心
class My extends Common{
    public function initialize(){
    	// 课程表
        $this->course_model = new WzCourse();
    	// 前台用户表
        $this->user_model = new WzUser();
        // 学科表
        $this->classType_model = new WzClassType();
        // 学科列表
        $this->classType_list = $this->classType_model->get_list();
        // 订单表
        $this->order_model = new WzOrder();
        // 老师表
        $this->teacher_model = new WzTeacher();
        // 包表
        $this->package_model = new WzPackage();
        $this->assign([
            'classType_list'    => $this->classType_list,
        ]);
        parent::initialize();
    }
    // 个人中心
    public function index(){

    	if(empty($this->uid)){
    		$this->redirect('home/user/login');
    	}else{

            $data = input();

            // 成功订单列表
            $order_list = $this->order_model->where('user_id',$this->uid)->where('status',1)->where('course_id','<>','')->select();
            $num1 = 0;
            $num2 = 0;
            $num3 = 0;
            if(!empty($order_list)){
                foreach ($order_list as $key => $val) {
                    $tmp_ids .= $val['course_id'] . ',';
                }
                $course_ids = rtrim($tmp_ids,',');
                if(empty($data['course_type'])){
                    $map = [];
                }else{
                    $map['class_type_id'] = $data['course_type'];
                }
                $course_list = $this->course_model->whereIn('id',$course_ids)->where( $map )->select()->toArray();
                $teacher_list = change_key($this->teacher_model->select()->toArray());

                foreach ($course_list as $key => &$val) {
                    if($val['class_type_id']==1){
                        $num1 = $num1 + 1;
                    }
                    if($val['class_type_id']==2){
                        $num2 = $num2 + 1;
                    }
                    if($val['class_type_id']==3){
                        $num3 = $num3 + 1;
                    }
                    $val['teacher_id'] = $teacher_list[$val['teacher_id']]['name'];
                    $course_ids .= $val['id'] . ',';
                }

            }else{
                $course_list = [];
            }


            $this->assign([
                'course_list'   => $course_list,
                'num'   => count($course_list),
                'num1'  => $num1,
                'num2'  => $num2,
                'num3'  => $num3,
            ]);

    	}

    	return $this->fetch();
    }

    /**
     * @function [我的订单]
     * @Author   JFY
     * @DateTime 2019-04-11T17:46:23+0800
     * @return   [type]                   [description]
     */
    public function order_list(){
        
        $data = input();
        $order_type = [
            1 => '课程',
            2 => '课程包'
        ];
        
        if($data['order_type']==1){
            // 课程
            $order_list=Db::name('wz_order')
                ->field('o.id,o.status,c.title,c.pic') 
                ->alias('o')
                ->join('wz_find_course c','c.id = o.course_id')
                ->where('o.user_id',$this->uid)
                ->select();

        }else{
            // 课程包
            $order_list=Db::name('wz_order')
                ->field('o.id,o.status,p.title,p.pic') 
                ->alias('o')
                ->join('wz_package p','p.id = o.package_id')
                ->where('o.user_id',$this->uid)
                ->select();
        }

        $this->assign([
            'order_type'    => $order_type,
            'order_list'    => $order_list
        ]);
    	return $this->fetch();
    }
}