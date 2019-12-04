<?php

namespace Modules\SettingPdf\Observers;

use Modules\SettingPdf\Entities\SettingPdf;


class SettingPdfObserver {


	public function creating(SettingPdf $setting_pdf) {
		$setting_pdf->statement_responsibility = '';
		$setting_pdf->global_observation = '';
	}


}