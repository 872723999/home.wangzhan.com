<?php

/**
 * @Author: Administrator
 * @Date:   2018-11-14 11:22:45
 * @Last Modified by:   Administrator
 * @Last Modified time: 2019-04-17 13:45:10
 */
namespace app\home\model;
use think\Model;
// 课程表
class WzCourse extends Model
{
    protected $name = 'wz_find_course';
    
    /**
     * @function [根据课程id获取详情]
     * @Author   JFY
     * @DateTime 2019-03-13T23:23:13+0800
     * @return   [type]                   [description]
     */
    public function get_info( $id ){
    	$info = $this->where('id',$id)->find();
    	$info['pic'] = config('admin_path') . $info['pic'];
    	return $info;
    }

}