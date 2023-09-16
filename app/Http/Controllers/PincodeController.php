<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductTranslation;
use App\Models\Category;
use App\Models\ProductTax;
use App\Models\AttributeValue;
use App\Models\Cart;
use Carbon\Carbon;
use Combinations;
use CoreComponentRepository;
use Artisan;
use Cache;
use Str;
use App\Services\ProductService;
use App\Services\ProductTaxService;
use App\Services\ProductFlashDealService;
use App\Services\ProductStockService;
use Illuminate\Support\Facades\DB;

public function checkPincode(Request $request)
{
    $pincode = $request->input('pincode');
    
    // Perform your pincode availability check logic here
    $availability = DB::table('pincode')
        ->where('pincode', $pincode)
        ->count();

    if ($availability > 0) {
        return response()->json(['message' => 'Pincode is available for delivery']);
    } else {
        return response()->json(['message' => 'Pincode is not available for delivery']);
	}
}

?>
