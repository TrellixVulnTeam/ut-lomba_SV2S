<?php

class CourseUser extends CI_Model{
    public function getAll(){
        return $this->db->get('course_user')->result();
    }
    public function getById($id){
        return $this->db->get_where('course_user', ['ID_CU' => $id])->row();
    }
    public function get($param){
        return $this->db->get('course_user', $param)->result();
    }
    public function insert($param){
        $this->db->insert('course_user', $param);
    }
    public function update($param){
        $this->db->where('ID_CU', $param['ID_CU'])->update('course_user', $param);
    }
    public function delete($param){
        $this->db->delete('course_user', ['ID_CU' => $param]);
    }
}