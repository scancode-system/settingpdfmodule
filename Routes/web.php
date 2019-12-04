<?php

Route::prefix('settingpdf')->group(function() {
    Route::put('{setting_pdf}', 'SettingPdfController@update')->name('settingpdf.update');
});
