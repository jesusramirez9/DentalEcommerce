@props(['size' => 35, 'color' => 'gray'])
@php
    switch ($color) {
        case 'gray':
           
            $col = "#374151";

            break;
        case 'white':
        $col = "#FFFFFF";
            break;
        default:
        $col = "gray";
            break;
    }    
@endphp



<i class="fas fa-cart-plus fa-2x"></i>