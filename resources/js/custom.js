window.showForm = function () {
    var offerForm = document.getElementsByClassName('form-class-todays-offer');
    offerForm[0].style.visibility = 'visible'; 
}
window.delivered = function(nameOforder){
    var food = nameOforder - 1;
    var del = document.getElementsByClassName('all-orders');
    del[food].style.textDecoration = "line-through";
    console.log(food);
}
window.undelivered = function(nameOforder){
    var food = nameOforder - 1;
    var del = document.getElementsByClassName('all-orders');
    del[food].style.textDecoration = "none";
    console.log(food);
}