<?php

namespace App\Service;

class ShowService extends ApiService
{

    protected function map($showList)
    {
        $shows = [];
        foreach ($showList as $show) {
            $shows[$show['id']]['id'] = $show['id'];
            $shows[$show['id']]['name'] = $show['name'];
            $shows[$show['id']]['image'] = $show['image'] != null ? $show['image']['original'] : null;
            $shows[$show['id']]['releaseDate'] = $show['airdate'];
        }

        return $shows;
    }
}
