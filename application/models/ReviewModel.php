<?php


class ReviewModel extends CI_Model
{

    function isExistReview($topic, $name){
        $this->db->select('*');
        $this->db->from('tbl_review');
        $this->db->where('review_topic', $topic);
        $this->db->where('reviewer_name', $name);

        $result = $this->db->get()->result();

        if($result == null){
            return true;
        }else{
            return false;
        }
    }

    function addReview($data){
        $result = $this->db->insert('tbl_review', $data);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function getReviews($param){
        $filter = $param['search'];

        $this->db->select('*');
        $this->db->from('tbl_review');
        $this->db->where("(`tbl_review.review_topic` LIKE '%$filter%'");
        $this->db->or_where("`tbl_review.review_description` LIKE '%$filter%'");
        $this->db->or_where("`tbl_review.reviewer_name` LIKE '%$filter%'");
        $this->db->or_where("`tbl_review.reviewer_designation` LIKE '%$filter%'");
        $this->db->or_where("`tbl_review.review_id` LIKE '%$filter%')");
        $this->db->limit($param['length'],$param['start']);
        $query = $this->db->get();
        $result = $query->result();

        $returnData['data'] =  $result;
        $returnData['recordsTotal'] = $this->getRowCountOfReviews();
        $returnData['draw'] = $param['draw'];

        if($filter == null)
            $returnData['recordsFiltered'] = $this->getRowCountOfReviews();
        else
            $returnData['recordsFiltered'] = $query->num_rows();

        return $returnData;
    }

    function getRowCountOfReviews(){

        $this->db->select('*');
        $this->db->from('tbl_review');
        $query = $this->db->get();

        return $query->num_rows();
    }

    function getReview($id){
        $this->db->select('*');
        $this->db->from('tbl_review');
        $this->db->where('review_id', $id);

        return $this->db->get()->result();
    }

    function deleteReview($id){
        $this->db->where('review_id', $id);
        $this->db->delete('tbl_review');

        return $this->db->affected_rows();
    }

    function updateReview($id, $topic, $des, $reviewer, $reviewerDis, $status){
        $this->db->set('review_topic',$topic);
        $this->db->set('review_description',$des);
        $this->db->set('reviewer_name',$reviewer);
        $this->db->set('reviewer_designation',$reviewerDis);
        $this->db->set('review_status',$status);
        $this->db->where('review_id',$id);
        $this->db->update('tbl_review');

        $result = $this->db->affected_rows();

        return $result;
    }

}