<?php


class PartnerModel extends CI_Model
{

    function isExistPartner($name){
        $this->db->select('*');
        $this->db->from('tbl_partner');
        $this->db->where('partner_id', $name);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function addPartner($data){
        $result = $this->db->insert('tbl_partner', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getPartners($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_partner');
        $this->db->where("(`tbl_partner.partner_id` LIKE '%$filter%'");
        $this->db->or_where("`tbl_partner.partner_name` LIKE '%$filter%'");
        $this->db->or_where("`tbl_partner.partner_description` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfPartners();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfPartners();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }

    function getRowCountOfPartners(){

        $this->db->select('*');
        $this->db->from('tbl_partner');
        $query = $this->db->get();

        return $query->num_rows();
    }

    function getPartner($id){
        $this->db->select('*');
        $this->db->from('tbl_partner');
        $this->db->where('partner_id', $id);

        return $this->db->get()->result();
    }

    function deletePartner($id){
        $this->db->where('partner_id', $id);
        $this->db->delete('tbl_partner');

        return $this->db->affected_rows();
    }

    function updatePartner($id, $name, $des, $status){
        $this->db->set('partner_name',$name);
        $this->db->set('partner_description',$des);
        $this->db->set('partner_status',$status);
        $this->db->where('partner_id',$id);
        $this->db->update('tbl_partner');

        $result = $this->db->affected_rows();

        return $result;
    }

}