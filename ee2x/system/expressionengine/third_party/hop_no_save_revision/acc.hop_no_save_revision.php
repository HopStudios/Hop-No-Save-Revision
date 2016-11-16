<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hop_no_save_revision_acc
{
	var $name			= 'Hop No Save Revision';
	var $id				= 'hop_no_save_revision';
	var $version		= '1.0';
	var $description	= 'Remove the "Save revision" button in the publish screen';
	var $sections		= array();

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