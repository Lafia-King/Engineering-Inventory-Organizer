<?php

/** @author Unknown
 *@author Unknown (unknown)
 */

define("DB_HOST", 'localhost');
define("DB_NAME", 'inventorydb');
define("DB_PORT", 3306);
define("DB_USER","root");
define("DB_PWORD","");

define("LOG_LEVEL_SEC",0);
define("LOG_LEVEL_DB_FAIL",0);

define("PAGE_SIZE",10);

	/**
	 *@method void adb()
	 *@method int log_error($level, $code, $msg, $mysql_msg = "NONE")
	 *@method boolean connect()
	 *@method array fetch()
	 *@method boolean query($str_sql)
	 *@method int get_num_rows()
	 *@method int get_insert_id()
	 */

class adb {

	/**error description*/
    var $str_error;
    /*error code*/
    var $error;
    /*db connection link*/
    var $link;
    /* Every error log has a 4 digit code. The first two digits(prefix) tells you which class logged the error*/
    var $er_code_prefix;
    /* query result resource*/
    var $result;

	/**
	 *@return void Returns the number of pregnant women who are anaemic 
	 */
    function adb() {
       
        $this->er_code_prefix=1000;
        $this->link=false;
        $this->result = false;
    }

    /**
     *@return int Returns log errors if any
     */
    function log_error($level, $code, $msg, $mysql_msg = "NONE") {
        $er_code = $this->er_code_prefix + $code;
		//call to a predefined function 
        $log_id = log_msg($level, $er_code, $msg, $mysql_msg);
        //if log id is false return 0;
        if (!$log_id) {
            return 0;
        }

        //display this code to user
        $this->error="$er_code-$log_id";
        return $log_id;
    }

    /**
	*return void Creates connection to database
	*/
    function connect() {

        if($this->link)
        {
            return true;
        }
        //try to connect to db
        $this->link = mysql_connect(DB_HOST , DB_USER, DB_PWORD);
		
        if (!$this->link) {
            //if connection fail log error and set $str_error
            //echo "not connected";	//debug line
            $this->log_error(LOG_LEVEL_DB_FAIL,1, "connection failed  in db:connect()", mysql_error());
            return false;
        }
		//echo "connected";
        if (!mysql_select_db(DB_NAME)) {
            
            $log_id = $this->log_error(LOG_LEVEL_DB_FAIL,2, "select db failed   in db:connect()", mysql_error($this->link));
            return false;
        }

        return true;
    }

        
	/**
	*@return array Return a row from a dataset
	*/
    function fetch() {
        return mysql_fetch_assoc($this->result);
    }

    /**
	*@return boolean Connect to db and run a query 
	*/
    function query($str_sql) {
		
        if (!$this->connect()) {		
            return false;
        }
        
        $this->result = mysql_query($str_sql,$this->link);
        if (!$this->result) {
            $this->log_error(LOG_LEVEL_DB_FAIL, 4, "query failed", mysql_error($this->link));
            return false;
        }

        return true;
    }
	
	/**
	*@return int Returns number of rows in current dataset
	*/
    function get_num_rows() {
        return mysql_num_rows($this->result);
    }
	/**
	*@return int Returns last auto generated id 
	*/
    function get_insert_id() {
        return mysql_insert_id($this->link);
    }
	
}

?>
