<?php

namespace App\Http\Controllers\Merchant;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        try {
            $menus = Menu::with('menucategories')->get();
            return view('merchant.pages.menus.index', [
                'getMenu' => $menus
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function add()
    {
        try {
            $menu_categories = MenuCategory::all();
            return view('merchant.pages.menus.add', [
                'getMenuCategories' => $menu_categories
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $menu = Menu::findOrFail($id);
            $menu_categories = MenuCategory::all();
            return view('merchant.pages.menus.edit', [
                'getMenu' => $menu,
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
                'title' => 'required',
                'img' => 'required|mimes:png,jpg,jpeg,webp|max:5000',
                'price' => 'required',
                'stock' => 'required',
                'description' => 'required',
                'menu_category_id' => 'required'
            ]);

            if ($request->file('img')) {
                $file = $request->file('img');
                $fileName = $file->getClientOriginalName();
                $filePath = 'img-menu/' . $fileName;
                $file->move('img-menu', $fileName);
            }
            Menu::create([
                'title' => $request->title,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'menu_category_id' => $request->menu_category_id,
                'merchant_id' => Auth::user()->id,
                'img' => $filePath,
            ]);
            return redirect()->route('menus')->with('success', 'Menu successfully created');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'description' => 'required',
                'menu_category_id' => 'required',
            ]);

            $menu = Menu::findOrFail($id);
            if ($request->file('img')) {
                $oldFilePath = $menu->img;
                if (\File::exists($oldFilePath)) {
                    \File::delete($oldFilePath);
                }
                $file = $request->file('img');
                $fileName = $file->getClientOriginalName();
                $filePath = 'img-menu/' . $fileName;
                $file->move('img-menu', $fileName);
            } else {
                $filePath = $menu->img;
            }

            $menu->update([
                'title' => $request->title,
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
                'menu_category_id' => $request->menu_category_id,
                'img' => $filePath,
            ]);
            return redirect()->route('menus')->with('success', 'Menu successfully updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $menu = Menu::findOrFail($id);
            $oldFilePath = $menu->img;
            if (\File::exists($oldFilePath)) {
                \File::delete($oldFilePath);
            }
            $menu->delete();
            return redirect()->back()->with('success', 'Menu successfully delete');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
