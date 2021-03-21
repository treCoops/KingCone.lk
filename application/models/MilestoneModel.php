<?php


class MilestoneModel extends CI_Model
{

    function isExistMilestone($title, $date){
        $this->db->select('*');
        $this->db->from('tbl_milestone');
        $this->db->where('milestone_title', $title);
        $this->db->where('milestone_date', $date);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function addMilestone($data){
        $result = $this->db->insert('tbl_milestone', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getMilestones($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_milestone');
        $this->db->where("(`tbl_milestone.milestone_id` LIKE '%$filter%'");
        $this->db->or_where("`tbl_milestone.milestone_title` LIKE '%$filter%'");
        $this->db->or_where("`tbl_milestone.milestone_date` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfMilestones();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfMilestones();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }

    function getRowCountOfMilestones(){

        $this->db->select('*');
        $this->db->from('tbl_milestone');
        $query = $this->db->get();

        return $query->num_rows();
    }

    function getMilestone($id){
        $this->db->select('*');
        $this->db->from('tbl_milestone');
        $this->db->where('milestone_id', $id);

        return $this->db->get()->result();
    }

    function deleteMilestone($id){
        $this->db->where('milestone_id', $id);
        $this->db->delete('tbl_milestone');

        return $this->db->affected_rows();
    }

    function updateMilestone($id, $title, $des, $date){
        $this->db->set('milestone_title',$title);
        $this->db->set('milestone_description',$des);
        $this->db->set('milestone_date',$date);
        $this->db->where('milestone_id',$id);
        $this->db->update('tbl_milestone');

        $result = $this->db->affected_rows();

        return $result;
    }

    function getAllMilestones(){
        $this->db->select('*');
        $this->db->from('tbl_milestone');
//        $this->db->where('partner_status', 1);
        $this->db->order_by("created_time", "desc");

        $result = $this->db->get()->result();

        if($result != null){
            return $result;
        }else{
            return null;
        }
    }

}