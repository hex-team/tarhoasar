<?php
	class Widget
	{
		private $widget;

		public function __construct ()
		{
			$this -> widget = new TblWidgets();
		}

		public function update ($_params)
		{
			if ($this -> widget -> update($_params['widget'], ['data' => $_params['data'], 'last_update' => NOW])) return true;
		}

		public function get ($_params)
		{
			$result = $this -> widget -> get($_params['widget']);

			return $result;
		}
	}
?>