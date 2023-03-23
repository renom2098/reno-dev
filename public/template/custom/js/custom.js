"use strict";

var path = location.pathname.split('/')
var url = location.origin + '/' + path[1]

// nama dari ul and nama dari li 
$('ul.nav-treeview li a').each(function(){
    if ($(this).attr('href').indexOf(url) !== -1) {
        $(this).parent().addClass('active').parent().parent('li').addClass('menu-open')
    }
})