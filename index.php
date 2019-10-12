<?php
/********Function to create log *******/
if(isset($_GET['log']) ==  'yes'){
	create_log(array("DATA"),"LogDetails");
}else{
	// Nothing.
}

function create_log($data = array(), $filename="") {
        $filename = empty($filename) ? 'details' : $filename;
        $file = $filename."-".date('Y-m-d').".log";
		//$SystemPath = $_SERVER["DOCUMENT_ROOT"]."/log/";
        $SystemPath = getcwd()."/log-files/"; 
        file_put_contents($SystemPath.$file, "---- Request from {$_SERVER['REMOTE_ADDR']} / @ " . date("Y-m-d H:i:s") . " / \n" . var_export($data, true) . "\n---- End request\n\n", FILE_APPEND);
}
?>