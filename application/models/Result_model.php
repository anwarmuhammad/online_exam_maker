<?php
Class Result_model extends CI_Model
{
	
 
 function result_list($limit,$status='0'){
	$result_open=$this->lang->line('open');
	$logged_in=$this->session->userdata('logged_in');
	$uid=$logged_in['uid'];
	  
		
	if($this->input->post('search')){
		 $search=$this->input->post('search');
		 $this->db->or_where('cste_users.email',$search);
		 $this->db->or_where('cste_users.first_name',$search);
		 $this->db->or_where('cste_users.last_name',$search);
		 $this->db->or_where('cste_users.contact_no',$search);
		 $this->db->or_where('cste_result.rid',$search);
		 $this->db->or_where('cste_quiz.quiz_name',$search);
 
	 }else{
		 $this->db->where('cste_result.result_status !=',$result_open);
	 }
	 	if($logged_in['su']=='0'){
			$this->db->where('cste_result.uid',$uid);
		}
		
	 	if($status !='0'){
			$this->db->where('cste_result.result_status',$status);
		}
		
		
		
		$this->db->limit($this->config->item('number_of_rows'),$limit);
		$this->db->order_by('rid','desc');
		$this->db->join('cste_users','cste_users.uid=cste_result.uid');
		$this->db->join('cste_quiz','cste_quiz.quid=cste_result.quid');
		$query=$this->db->get('cste_result');
		return $query->result_array();
		
	 
 }
 
 function quiz_list(){
	 $this->db->order_by('quid','desc');
$query=$this->db->get('cste_quiz');	
return $query->result_array();	 
 }
 
 
 function no_attempt($quid,$uid){
	 
	$query=$this->db->query(" select * from cste_result where uid='$uid' and quid='$quid' ");
		return $query->num_rows(); 
 }
 
 
 function remove_result($rid){
	 
	 $this->db->where('cste_result.rid',$rid);
	 if($this->db->delete('cste_result')){
		  $this->db->where('rid',$rid);
		  $this->db->delete('cste_answers');
		 return true;
	 }else{
		 
		 return false; 
	 }
	 
	 
	 
 }
 
 
 function generate_report($quid,$gid){
	$logged_in=$this->session->userdata('logged_in');
	$uid=$logged_in['uid'];
	$date1=$this->input->post('date1');
	 $date2=$this->input->post('date2');
		
		if($quid != '0'){
			$this->db->where('cste_result.quid',$quid);
		}
		if($gid != '0'){
			$this->db->where('cste_users.gid',$gid);
		}
		if($date1 != ''){
			$this->db->where('cste_result.start_time >=',strtotime($date1));
		}
		if($date2 != ''){
			$this->db->where('cste_result.start_time <=',strtotime($date2));
		}

	 	$this->db->order_by('rid','desc');
		$this->db->join('cste_users','cste_users.uid=cste_result.uid');
		$this->db->join('cste_group','cste_group.gid=cste_users.gid');
		$this->db->join('cste_quiz','cste_quiz.quid=cste_result.quid');
		$query=$this->db->get('cste_result');
		return $query->result_array();
 }
 
 
 
 
 
 function get_result($rid){
	$logged_in=$this->session->userdata('logged_in');
	$uid=$logged_in['uid'];
		if($logged_in['su']=='0'){
			$this->db->where('cste_result.uid',$uid);
		}
		$this->db->where('cste_result.rid',$rid);
	 	$this->db->join('cste_users','cste_users.uid=cste_result.uid');
		$this->db->join('cste_group','cste_group.gid=cste_users.gid');
		$this->db->join('cste_quiz','cste_quiz.quid=cste_result.quid');
		$query=$this->db->get('cste_result');
		return $query->row_array();
	 
	 
 }
 
 
 function last_ten_result($quid){
		$this->db->order_by('percentage_obtained','desc');
		$this->db->limit(10);		
	 	$this->db->where('cste_result.quid',$quid);
	 	$this->db->join('cste_users','cste_users.uid=cste_result.uid'); 
		$this->db->join('cste_quiz','cste_quiz.quid=cste_result.quid');
		$query=$this->db->get('cste_result');
		return $query->result_array();
 }
 
 
 
   function get_percentile($quid,$uid,$score){
  $logged_in =$this->session->userdata('logged_in');
$gid= $logged_in['gid'];
$res=array();
	$this->db->where("cste_result.quid",$quid);
	 $this->db->group_by("cste_result.uid");
	 $this->db->order_by("cste_result.score_obtained",'DESC');
	$query = $this -> db -> get('cste_result');
	$res[0]=$query -> num_rows();

	
	$this->db->where("cste_result.quid",$quid);
	$this->db->where("cste_result.uid !=",$uid);
	$this->db->where("cste_result.score_obtained <=",$score);
	$this->db->group_by("cste_result.uid");
	 $this->db->order_by("cste_result.score_obtained",'DESC');
	$querys = $this -> db -> get('cste_result');
	$res[1]=$querys -> num_rows();
		
   return $res;
  
  
 }
 
 
 
 
 
 
 
 
 
 
 
 
 

}












?>