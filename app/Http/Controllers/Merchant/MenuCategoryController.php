<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    public function index()
    {
        try {
            $menu_categories = MenuCategory::all();
            return view('merchant.pages.menucategory.index', [
                'getMenuCategories' => $menu_categories
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required'
            ]);
            MenuCategory::create([
                'name' => $request->name
            ]);

            $message = 'Menu category successfully added';
            session()->flash('success', $message);
            return response()->json([
                'success' => true,
                'message' => $message,
            ]);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            session()->flash('error', $errorMessage);
            return response()->json([
                'success' => false,
                'message' => $errorMessage,
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required'
            ]);
            $menu_category = MenuCategory::findOrFail($id);
            $menu_category->update([
                'name' => $request->name
            ]);
            $message = 'Menu category successfully added';
            session()->flash('success', $message);
            return response()->json([
                'success' => true,
                'message' => $message,
            ]);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            session()->flash('error', $errorMessage);
            return response()->json([
                'success' => false,
                'message' => $errorMessage,
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $menu_category = MenuCategory::findOrFail($id);
            $menu_category->delete();
            return redirect()->back()->with('success', 'Menu category successfully deleted');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
