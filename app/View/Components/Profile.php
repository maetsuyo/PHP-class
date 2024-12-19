<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Profile extends Component
{
  public $name;
  public $age;
  public $gender;

  public function __construct($name, $age, $gender)
  {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }

  public function render(): View|Closure|string
  {
      return view('components.profile');
  }
}