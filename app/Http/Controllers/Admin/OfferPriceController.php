<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\OfferPrice;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OfferPriceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $data=OfferPrice::all();
        return view('admin.offer-price.index', compact('data'));
    }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {

    }

    /**
     * update the Permission for dashboard.
     *
     * @param Request $request
     * @return Builder|Model|object
     */
    public function edit($slider)
    {

    }

    /**
     * update a permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Request $request,$id)
    {


    }


    /**
     * Delete more than one permission.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function destroy($slider)
    {


        $allRows = OfferPrice::find([$slider]);
        foreach ($allRows as $row) {
            $row->delete();
        }
        return 1;
    }



}


