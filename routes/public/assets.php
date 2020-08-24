<?php

Route::get('templeiro-assets/{path?}', ['uses' => 'AssetController@assets', 'as' => 'templeiro_assets']);
