<?php
use Nabble\SemaltBlocker\Blocker;

class SemaltBlockerModule extends MainClass {
	public function beforeInit(){
		$cfg = new CMSConfig();
		$action = isset($cfg->semalt_blocker_action) ? strval($cfg->semalt_blocker_action) : "";
		Blocker::protect($action);
	}	
}