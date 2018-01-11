<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class ProfileComposer
{
  public function compose(View $view){

    $view ->with("name", "Hakim");
    $view ->with("age", "24");
  }

}

?>
