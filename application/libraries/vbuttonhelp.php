<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VButtonHelp extends VButton
{
    
	protected $_name = 'Help';

	public function fetchButton($type = 'Help', $ref = '', $com = false, $override = null, $component = null)
	{
		$text	= "Help";
		$class	= $this->fetchIconClass('help');
		$doTask	= $this->_getCommand($ref, $com, $override, $component);

		$html = "<a href=\"#\" onclick=\"$doTask\" rel=\"help\" class=\"toolbar\">\n";
		$html .= "<span class=\"$class\">\n";
		$html .= "</span>\n";
		$html .= "$text\n";
		$html .= "</a>\n";

		return $html;
	}

	public function fetchId()
	{
		return $this->_parent->getName().'-'."help";
	}

	protected function _getCommand($ref, $com, $override, $component)
	{
		// Get Help URL
        /*
		jimport('joomla.language.help');
		$url = JHelp::createURL($ref, $com, $override, $component);
		$url = htmlspecialchars($url, ENT_QUOTES);
		$cmd = "popupWindow('$url', '".JText::_('JHELP', true)."', 700, 500, 1)";
        */
        $cmd = "popupWindow('')";
		return $cmd;
	}
}
