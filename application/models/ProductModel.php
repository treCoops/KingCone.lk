<?php


class ProductModel extends CI_Model
{

    function isExistSProduct($name){
        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $this->db->where('sp_name', $name);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function isExistFlavour($name){
        $this->db->select('*');
        $this->db->from('tbl_flavour');
        $this->db->where('flavour_name', $name);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function addSProduct($data){
        $result = $this->db->insert('tbl_seasonal_products', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function addFlavour($data){
        $result = $this->db->insert('tbl_flavour', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getSProducts($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $this->db->where("(`tbl_seasonal_products.sp_name` LIKE '%$filter%'");
        $this->db->or_where("`tbl_seasonal_products.sp_description` LIKE '%$filter%'");
        $this->db->or_where("`tbl_seasonal_products.sp_id` LIKE '%$filter%'");
        $this->db->or_where("`tbl_seasonal_products.sp_price` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfgetSProducts();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfgetSProducts();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }

    function getRowCountOfgetSProducts(){

        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $query = $this->db->get();

        return $query->num_rows();
    }

    function getFlavours($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_flavour');
        $this->db->where("(`tbl_flavour.flavour_name` LIKE '%$filter%'");
        $this->db->or_where("`tbl_flavour.flavour_description` LIKE '%$filter%'");
        $this->db->or_where("`tbl_flavour.flavour_id` LIKE '%$filter%'");
        $this->db->or_where("`tbl_flavour.flavour_price` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfGetFlavours();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfGetFlavours();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }

    function getRowCountOfGetFlavours(){

        $this->db->select('*');
        $this->db->from('tbl_flavour');
        $query = $this->db->get();

        return $query->num_rows();
    }

    function getSProduct($id){
        $this->db->select('*');
        $this->db->from('tbl_seasonal_products');
        $this->db->where('sp_id', $id);

        return $this->db->get()->result();
    }

    function deleteSProduct($id){
        $this->db->where('sp_id', $id);
        $this->db->delete('tbl_seasonal_products');

        return $this->db->affected_rows();
    }

    function getFlavour($id){
        $this->db->select('*');
        $this->db->from('tbl_flavour');
        $this->db->where('flavour_id', $id);

        return $this->db->get()->result();
    }

    function deleteFlavour($id){
        $this->db->where('flavour_id', $id);
        $this->db->delete('tbl_flavour');

        return $this->db->affected_rows();
    }

    function updateSProduct($id, $name, $des, $price, $visibility){
        $this->db->set('sp_name',$name);
        $this->db->set('sp_description',$des);
        $this->db->set('sp_price',$price);
        $this->db->set('sp_active_status',$visibility);
        $this->db->where('sp_id',$id);
        $this->db->update('tbl_seasonal_products');

        $result = $this->db->affected_rows();

        return $result;
    }

    function updateFlavour($id, $name, $des, $price, $visibility){
        $this->db->set('flavour_name',$name);
        $this->db->set('flavour_description',$des);
        $this->db->set('flavour_price',$price);
        $this->db->set('flavour_status',$visibility);
        $this->db->where('flavour_id',$id);
        $this->db->update('tbl_flavour');

        $result = $this->db->affected_rows();

        return $result;
    }

}