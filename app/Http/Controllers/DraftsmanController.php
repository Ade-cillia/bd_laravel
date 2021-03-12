<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Draftsman;

class DraftsmanController extends Controller
{
    public static function delete($id){
        Draftsman::destroy($id);
        return redirect('/draftsmanList');
    }
    public static function add(Request $request){
        Draftsman::add($request);
        return redirect('/draftsmanAdd');
    }
    public static function modif(Request $request, $id){
        Draftsman::modif($request, $id);
        return redirect('/draftsmanList');
    }
}
