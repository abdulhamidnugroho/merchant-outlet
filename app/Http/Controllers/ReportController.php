<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\CarbonImmutable;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class ReportController extends Controller
{
    private function customPaginate($items, $perPage = 5, $page = null, $options = [])
    {
      $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

      $items = $items instanceof Collection ? $items : Collection::make($items);

      return new LengthAwarePaginator(array_values($items->forPage($page, $perPage)->toArray()), $items->count(), $perPage, $page, $options);
    }

    private function filterDate($date) : array
    {
        $date_begin = CarbonImmutable::createFromFormat('Y-m-d', $date)->startOfMonth(); // YYYY-mm-dd
        $date_end   = $date_begin->endOfMonth();

        return [$date_begin, $date_end];
    }

    /**
     * Get Transaction Report (Merchant)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getMerchantOmzetReport(Request $request)
    {
        $request->validate([
            'date' => 'required'
        ]);

        [$date_begin, $date_end] = $this->filterDate($request->date);

        $data   = Transaction::whereBetween('created_at', [$date_begin, $date_end])
                ->with(['merchant' => function ($query) {
                    $query->select('id', 'merchant_name');
                }])
                ->get();

        // $obj = (object) [
        //     'id'    => null,
        //     'merchant_id' => null,
        //     'outlet_id' => null,
        //     'bill_total' => null,
        //     'created_at' => null,
        //     'merchant' => [
        //         'id' => null,
        //         'merchant_name' => null
        //     ]
        // ];

        // $period = CarbonPeriod::create($date_begin, $date_end);
        // $dates = $period->toArray();

        // $temp = [];

        // foreach ($dates as $date) {
        //     if ($date == $data->created_at) {

        //     }
        //     $obj->created_at = $date;
        //     $temp[] = $obj;
        // }

        $per_page = $request->per_page ?: 5;

        return response()->json([
            'success'   => true,
            'data'      => $this->customPaginate($data, $per_page),
        ], 200);
    }

    /**
     * Get Transaction Report (Outlet)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getMerchantOutletOmzetReport(Request $request)
    {
        $request->validate([
            'date' => 'required'
        ]);

        [$date_begin, $date_end] = $this->filterDate($request->date);

        $data   = Transaction::whereBetween('created_at', [$date_begin, $date_end])
                ->with(['merchant' => function ($query) {
                    $query->select('id', 'merchant_name');
                }, 'outlet' => function ($query) {
                    $query->select('id', 'outlet_name');
                }])
                ->get();
        
        $per_page = $request->per_page ?: 5;

        return response()->json([
            'success'   => true,
            'data'      => $this->customPaginate($data, $per_page),
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
