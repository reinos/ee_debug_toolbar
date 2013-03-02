<?php
/**
 * Memory Panel
 *
 * @author Christopher Imrie
 */
require_once PATH_THIRD . "ee_debug_toolbar/classes/Eedt_base_panel.php";

class Eedt_memory_panel extends Eedt_base_panel
{
	protected $name = "memory";
	
	public function __construct()
	{
		parent::__construct();
		$this->button_label = $this->EE->toolbar->filesize_format(memory_get_peak_usage()).' '.ini_get('memory_limit');
	}	
}