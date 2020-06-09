<?php
use Illuminate\Support\Collection;

class SeriesCollection extends Collection
{   
    //regular function
    public function firstByTitle($title)
    {
        return $this->first(function($series) use ($title){
            return $series->title === $title;
        });
    }

    //arrow function (has access to the parent scope                                                                )
    // public function firstByTitle($title)
    // {
    //     return $this->first(fn($series) => $series->title === $title);
    // }
}