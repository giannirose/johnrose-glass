<?php	
PerchSystem::register_feather('jrfeather');

class PerchFeather_jrfeather extends PerchFeather
{
	public function get_css($opts, $index, $count)
	{	
		$out = array();

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>'//fonts.googleapis.com/css?family=Droid+Sans:400,700',
					'type'=>'text/css'
				));
/*
		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/styles_swift.css',
					'type'=>'text/css'
				));
*/
		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/app.css',
					'type'=>'text/css'
				));

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/foundation.css',
					'type'=>'text/css'
				));

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/foundation_jr.css',
					'type'=>'text/css'
				));

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/styles_jr.css',
					'type'=>'text/css'
				));

		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/flexbox_samples.css',
					'type'=>'text/css'
				));
		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/grid_samples.css',
					'type'=>'text/css'
				));
		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/gridjr.css',
					'type'=>'text/css'
				));
		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/tests.css',
					'type'=>'text/css'
				));
		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/css/blog.css',
					'type'=>'text/css'
				));		
		
		if (!$this->component_registered('html5shiv')) {
			$out[] = $this->_conditional_comment('lt IE 9', $this->_script_tag(array(
					'src'=>$this->path.'/js/html5shiv.js'
				)));
			$this->register_component('html5shiv');
		}
		
		return implode("\n\t", $out)."\n";
	}

	public function get_javascript($opts, $index, $count)
	{
		$out = array();
		
		if (!$this->component_registered('jquery')) {
			$out[] = $this->_script_tag(array(
				'src'=>$this->path.'/js/jquery-1.8.2.min.js'
			));
			$this->register_component('jquery');
		}
		
		if (!$this->component_registered('respond.js')) {
			$out[] = $this->_conditional_comment('lt IE 9', $this->_script_tag(array(
					'src'=>$this->path.'/js/respond.min.js'
				)));
			$this->register_component('respond.js');
		}

		return implode("\n\t", $out)."\n";
	}
}
?>
