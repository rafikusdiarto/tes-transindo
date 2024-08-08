<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        try {
            $user = User::with('userDetail')->findOrFail($id);;
            // $logo = $user->userDetail->logo;
            // dd($user);
            return view('customer.pages.profile.index', [
                'getUser' => $user
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'company_name' => 'required',
                'user_id' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'description' => 'required',
                // 'logo' => 'required|mimes:jpg,jpeg,webp,png|max:5000'
            ]);
            $user = User::findOrFail($id);
            // $userDetail = UserDetail::where('user_id', $id)->get();
            // dd($userDetail);
            if ($request->file('logo')) {
                $oldFilePath = $user->userDetail->logo;
                if (\File::exists($oldFilePath)) {
                    \File::delete($oldFilePath);
                }
                $file = $request->file('logo');
                $fileName = $file->getClientOriginalName();
                $filePath = 'logo/' . $fileName;
                $file->move('logo', $fileName);

            } else {
                $filePath = $user->userDetail->logo;
            }

            $user->userDetail->update([
                'user_id' => $request->user_id,
                'company_name' => $request->company_name,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'logo' => $filePath,
                'description' => $request->description,
            ]);

            return redirect()->back()->with('success', 'Profile successfully update');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function changeStatus(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'required',
            ]);
            $userDetail = UserDetail::where('user_id', $id);
            $userDetail->update([
                'status' => $request->status
            ]);
            $message = ($request->status == 'AVAILABLE') ? 'Customer is already open 😎' : 'We appreciate your hard work. The customer is currently unavailable 😊';

            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
