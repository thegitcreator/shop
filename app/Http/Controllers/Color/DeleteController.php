<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Color $color)
    {
        $color->delete();

        return redirect()->route('color.index');
    }
}
