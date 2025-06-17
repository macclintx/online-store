<?php

    function filterByCategory($category, $array){

        $filter = array_filter($array, function($cat) use($category){
            return $cat['category'] == $category;
        });
        
    }