<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once PATH_THIRD.'hop_no_save_revision/config.php';

class Hop_no_save_revision_acc
{
	var $name			= 'Hop No Save Revision';
	var $id				= 'hop_no_save_revision';
	var $version		= HOP_NO_SAVE_REVISION_VERSION;
	var $description	= 'Remove the "Save revision" button in the publish screen';
	var $sections		= array();

	public function __construct()
	{
		// This allows us to use ee() in older versions of ExpressionEngine
		if(!function_exists('ee')) {
			function ee() {
				return get_instance();
			}
		}
	}

	/**
	* Set Sections
	*
	* Set content for the accessory
	*
	* @access  public
	* @return  void
	*/
	function set_sections()
	{
		// Hide the accessory from the bottom of each CP page
		$this->sections[] = '<script type="text/javascript" charset="utf-8">$("#accessoryTabs a.hop_no_save_revision").parent().remove();</script>';

		// add css, js and html
		ee()->cp->add_to_foot('
		<script type="text/javascript">
			$(document).ready(function() {
				$("#revision_button").hide();
			});
		</script>
		');
	}

}