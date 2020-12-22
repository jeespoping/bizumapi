<?php

namespace App\BizumApi;

class BizumApiBuilder{

    public function bizumPaginate(){
        return function (){
            return $this->paginate(
                $perPage = request('page.size'),
                $columns = ['*'],
                $pageName = 'page[number]',
                $page = request('page.number')
            )
                ->appends(request()->except('page.number'));
        };
    }

}
