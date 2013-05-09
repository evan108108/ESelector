<?php
class ESelectorBehavior extends CActiveRecordBehavior
{
	public function selector($attributes, $default=false)
	{
		$selector = $this->Owner;
		foreach(explode('.', $attributes) as $attribute) {
			if( !isset($selector->$attribute) ) {
				return $default;
			}
			$selector = $selector->$attribute;
		}		
		return $selector;
	}
}
