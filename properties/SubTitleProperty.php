<?php

namespace app\properties;

class SubTitleProperty extends \luya\admin\base\Property
{
    public function varName()
    {
        return 'SubTitle';
    }    
    
    public function label()
    {
        return 'Sub Title';
    }
    
    public function type()
    {
        return self::TYPE_TEXT;
    }
	public function defaultValue()
	{
		return 'Smart People Innovation';
	}
}