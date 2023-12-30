<?php
namespace App\Presenters;

use Carbon\Carbon;
use Laracasts\Presenter\Presenter;

class PostPresenter extends Presenter {
   
    public function publishedDate() {
        return Carbon::parse($this->published_at)->toFormattedDateString();
    }
}