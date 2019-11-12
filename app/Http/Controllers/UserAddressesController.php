<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAddress;
use App\Http\Requests\UserAddressRequest;

class UserAddressesController extends Controller
{
    // 用户地址列表
    public function index(Request $request)
    {
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }

    // 创建新地址
    public function create()
    {
        return view('user_addresses.create_and_edit', ['address' => new UserAddress()]);
    }

    // 修改提交
    public function store(UserAddressRequest $request)
    {
        $request->user()->addresses()->create($request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return redirect()->route('user_addresses.index');
    }

    // 编辑页
    public function edit(UserAddress $user_address)
    {
        $this->authorize('own', $user_address);

        return view('user_addresses.create_and_edit', ['address' => $user_address]);
    }

    // 更新操作
    public function update(UserAddress $user_address, UserAddressRequest $request)
    {
        $this->authorize('own', $user_address);

        $user_address->update($request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return redirect()->route('user_addresses.index');
    }

    // 删除操作
    public function destroy(UserAddress $user_address)
    {
        $this->authorize('own', $user_address);

        $user_address->delete();

        return [];
        //return redirect()->route('user_addresses.index');
    }
}
