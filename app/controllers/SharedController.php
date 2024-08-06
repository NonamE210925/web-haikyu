<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * user_username_value_exist Model Action
     * @return array
     */
	function user_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * user_email_value_exist Model Action
     * @return array
     */
	function user_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("user");
		return $exist;
	}

	/**
     * video_id_cover_option_list Model Action
     * @return array
     */
	function video_id_cover_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,judul AS label FROM cover_video ORDER BY judul ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_about Model Action
     * @return Value
     */
	function getcount_about(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM about";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_covervideo Model Action
     * @return Value
     */
	function getcount_covervideo(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM cover_video";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_karakter Model Action
     * @return Value
     */
	function getcount_karakter(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM karakter";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_quotes Model Action
     * @return Value
     */
	function getcount_quotes(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM quotes";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_teams Model Action
     * @return Value
     */
	function getcount_teams(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM teams";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_video Model Action
     * @return Value
     */
	function getcount_video(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM video";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
