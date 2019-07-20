plus  = document.querySelector('.add1');
minus = document.querySelector('.sub1');
qty   = document.querySelector('#qty');

plus.onclick = () => {
  qty.value = parseInt(qty.value) + 1;
}

minus.onclick = () => {
  qty.value = qty.value <= 1 ? 1 : qty.value - 1;
}
