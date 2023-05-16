<?php
namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App\Models\Group;


class GroupWidget implements ContractWidget 
{
      public function execute(){
       $data = Group::all();
    
       return view('Widgets::group', compact('data'));
     }
}