<?php

namespace App\Repositories;

use App\Models\Setting;
use Bosnadev\Repositories\Eloquent\Repository;

class SettingRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Setting::class;
    }

    /**
     * 传递 通用设置 的信息
     */
    public function getSettingInfo($info)
    {
        return Setting::where('key', $info)->first();
    }

    /**
     * 保存/设置/更新 通用/邮箱 设置 的信息
     */
    public function updataSetting($data, $key)
    {
        $generalSetting = Setting::where('key', $key)->first();

        if (!$generalSetting) {
            $datas = [
                'key' => 'general_setting',
                'value' => $data
            ];

            Setting::create($datas);
        } else {
            $generalSetting->value = $data;
            $generalSetting->save();
        }
    }
}