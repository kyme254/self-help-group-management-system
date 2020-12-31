<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * users_email_value_exist Model Action
     * @return array
     */
	function users_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * users_username_value_exist Model Action
     * @return array
     */
	function users_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("users");
		return $exist;
	}

	/**
     * getcount_users Model Action
     * @return Value
     */
	function getcount_users(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM users";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_comment Model Action
     * @return Value
     */
	function getcount_comment(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM comment";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_complaints Model Action
     * @return Value
     */
	function getcount_complaints(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM complaints";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_staff Model Action
     * @return Value
     */
	function getcount_staff(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM staff";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_member Model Action
     * @return Value
     */
	function getcount_member(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM member";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_events Model Action
     * @return Value
     */
	function getcount_events(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM events";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_contributions Model Action
     * @return Value
     */
	function getcount_contributions(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM contributions";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_desciplinary Model Action
     * @return Value
     */
	function getcount_desciplinary(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM desciplinary";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_logisticasset Model Action
     * @return Value
     */
	function getcount_logisticasset(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM logistic_asset";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_project Model Action
     * @return Value
     */
	function getcount_project(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM project";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_loanpayment Model Action
     * @return Value
     */
	function getcount_loanpayment(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM loanpayment";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_expenses Model Action
     * @return Value
     */
	function getcount_expenses(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM expenses";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_bankinfo Model Action
     * @return Value
     */
	function getcount_bankinfo(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM bank_info";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
