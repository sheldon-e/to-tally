var qty = 0;



function tally(val) {
    'use strict';
    qty = document.getElementById("qty").value;
    var nqty = parseInt(qty, 10) + val;
    if (nqty < 0) {
        nqty = 0;
    }
    document.getElementById("qty").value = nqty;
    return nqty;
}