<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class ProfileComposer
{
  public function compose(View $view){
      $view ->with("Married", random_int(0,1));
  }

}

?>
