<?php

namespace App\Http\Controllers;

use App\Service\EpisodeService;
use App\Service\ShowService;

class MovieController extends Controller
{
    const SHOWS_URL = 'schedule/web?date=2020-05-29&country=US';
    const EPISODE_URL = 'episodes/';

    public function shows()
    {
        return response()->json((new ShowService())->get(self::SHOWS_URL));
    }

    public function episode()
    {
        $id = request()->route('id');
        return response()->json((new EpisodeService())->get(self::EPISODE_URL . $id));
    }
}
