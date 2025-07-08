<?php

    

    function filterByCategory($category, $array){

        $filter = array_filter($array, function($cat) use($category){
            
            return $cat['category'] == $category;
        });

        if ($category === 'all'){
            return $array;
        }else{
            return $filter;
        }
        
        
    }



    function addToCart($id, $quantity, &$array){

        $new_stockQuantity = $array[$id - 1]['stock_quantity'] - $quantity;

        $array[$id - 1]['stock_quantity'] = $new_stockQuantity;
        
        return $array[$id - 1];
    }

    
