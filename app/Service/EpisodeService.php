<?php

namespace App\Service;

class EpisodeService extends ApiService
{

    protected function map($show)
    {
        $showDetail = [];

        $showDetail['id'] = $show['id'];
        $showDetail['name'] = $show['name'];
        $showDetail['season'] = $show['season'];
        $showDetail['number'] = $show['number'];
        $showDetail['image'] = $show['image'] != null ? $show['image']['original'] : null;
        $showDetail['releaseDate'] = $show['airdate'];

        return $showDetail;
    }
}
