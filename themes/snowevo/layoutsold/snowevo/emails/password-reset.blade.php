
<p style="text-align: left;font-size:16px;">{{ trans('default.email_recover_part1', ['name' => $first_name]) }},</p>

<p style="text-align: left;font-size:16px;">{{ trans('default.email_recover_part2', ['name' => env('APP_NAME', 'SiTec')]) }}</p>

<p style="text-align: left;font-size:16px;">
    {{ 
        trans('default.email_recover_part3', [
            'link' => '<a target="_blank" href="'.url('password/reset/'.$token).'">'.trans('default.password_reset').'</a>'
        ]) 
    }}
</p>


<p style="text-align: left;font-size:15px;">{{ trans('default.email_recover_part4') }}</p>

<p style="text-align: left;font-size:15px;">{{ trans('default.email_recover_part5', ['name' => env('APP_NAME', 'SiTec')]) }}</p>

