<?php
/**
 * 会场签到
 *
 *
 *
 *
 * by 太常系统 www.sxtaichang.com
 */
class sign_memberModel extends Model{
    public function __construct(){
        parent::__construct('sign_member');
    }
    /**
     * 构造检索条件
     *
     * @param int $id 记录ID
     * @return string 字符串类型的返回结果
     */
    private function _condition($condition){
        $condition_str = '';
    
        if ($condition['sign_name'] != ''){
            $condition_str .= " and sign_name like '%". $condition['sign_name'] ."%'";
        }
        if ($condition['sign_mobile'] != ''){
            $condition_str .= " and sign_mobile = '". $condition['sign_mobile'] ."'";
        }
        if ($condition['sign_role'] != 0){
            $condition_str .= " and sign_role = '". $condition['sign_role'] ."'";
        }
        return $condition_str;
    }
    /**
     * 列表
     *
     * @param array $condition 检索条件
     * @param obj $page 分页
     * @return array 数组结构的返回结果
     */
    public function getList($condition,$page=''){
        $condition_str = $this->_condition($condition);
        $param = array();
        $param['table'] = 'sign_member';
        $param['where'] = $condition_str;
        $param['limit'] = $condition['limit'];
        $param['order']	= (empty($condition['order'])?'sign_time desc':$condition['order']);
        $result = Db::select($param,$page);
        return $result;
    }
    /*
     * 更新
     * @param array $update
     * @param array $condition
     * @return bool
     */
    public function modify($update, $condition){
        return $this->where($condition)->update($update);
    }
     /*
     * 删除
     * @param array $condition
     * @return bool
     */
    public function drop($condition){
        return $this->where($condition)->delete();
    }
    /*
     * 增加
     * @param array $param
     * @return bool
     */
    public function save($param){
        return $this->insert($param);
    }
}