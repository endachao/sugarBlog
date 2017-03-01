<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Repositories\SettingRepository;
use App\Http\Requests\GeneralSettingRequest;

class SettingController extends Controller
{
	public function __construct (SettingRepository $settingRepository) 
	{
        $this->settingRepository = $settingRepository;
    }

	/**
	 * 通用设置 页面的显示 / 信息加载
	 */
	public function index ()
	{
        $data = $this->settingRepository->getSettingInfo('general_setting');
        $info['data'] = $data->value;

        return view('setting.index', $info);
    }

    /**
     * 通用设置的 更新
     */
    public function store (GeneralSettingRequest $request)
    {
        $this->settingRepository->updataSetting($request->except('_token'), 'general_setting');

        return redirect()->back();
    }

    /**
     * 邮箱设置 页面的显示 / 信息加载
     */
    public function getEmail ()
    {
        $data = $this->settingRepository->getSettingInfo('email_setting');
        $info['data'] = $data->value;

        return view('setting.email', $info);
    }

    /**
     * 邮箱设置的 更新
     */
    public function updataEmailSetting (Request $request)
    {
        $this->settingRepository->updataSetting($request->except('_token'), 'email_setting');

        return redirect()->back();
    }
}
