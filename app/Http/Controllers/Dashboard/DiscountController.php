<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\DiscountRequest;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::orderByDesc('id')->paginate( 20,);
        return view('dashboard.discount.index',
                    compact('discounts'));
    }

    public function show(Discount $discount)
    {
        return view('dashboard.discount.show',compact('discount'));
    }

    public function create()
    {
        return view('dashboard.discount.create');
    }

    public function store(DiscountRequest $request)
    {
        Discount::create($request->except('_token'));

        return redirect(route('dashboard.discount.index'));
    }
    public function edit(Discount $discount)
    {
        return view('dashboard.discount.edit',compact('discount'));
    }

    public function update(Request $request,Discount $discount)
    {
        return redirect(route('dashboard.discount.index'));
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();
        
        return redirect(route('dashboard.discount.index'))->with('success',$discount->code. 'was deleted successfully');

    }
}
