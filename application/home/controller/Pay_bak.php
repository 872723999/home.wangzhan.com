<?php
namespace app\home\controller;
// 课程表
use app\home\model\WzCourse;
// 老师表
use app\home\model\WzTeacher;
// 部分表
use app\home\model\WzPart;
// 学科表
use app\home\model\WzClassType;
// 学科小类表
use app\home\model\WzClassSmallType;
// 包表
use app\home\model\WzPackage;

use think\db;

// 支付
class Pay extends Common{
    public function initialize(){
        parent::initialize();
        // 课程表
        $this->course_model = new WzCourse();
        // 老师表
        $this->teacher_model = new WzTeacher();
        // 部分表
        $this->part_model = new WzPart();
        // 学科表
        $this->classType_model = new WzClassType();
        // 学科小类表
        $this->classSmallType_model = new WzClassSmallType();
        // 包表
        $this->package_model = new WzPackage();

        // 学科列表
        $classType_list = $this->classType_model->get_list();
        // 学科小类列表
        // $classSmallType_list = $this->classSmallType_model->get_list();

        $this->assign([
            'classType_list'    => $classType_list,
            // 'classSmallType_list'   => $classSmallType_list,
        ]);
    }

    /**
     * @function [支付页面]
     * @Author   JFY
     * @DateTime 2019-04-08T18:18:20+0800
     * @return   [type]                   [description]
     */
    public function index(){
        $data = input();
        $course_info = $this->course_model->where('id',$data['kecheng_id'])->find();
        $this->assign([
            'course_info'   => $course_info,
        ]);
        return $this->fetch();
    }

}