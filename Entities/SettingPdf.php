<?php

namespace Modules\SettingPdf\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Portal\Entities\EventSetting;

class SettingPdf extends Model
{
	protected $fillable = ['id', 'statement_responsibility', 'global_observation'];


	public function event_setting()
	{
		return $this->morphOne(EventSetting::class, 'configurable');
	}
}

