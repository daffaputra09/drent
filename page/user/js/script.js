var a;
function pass() {
  if (a == 1) {
    document.getElementById('password').type = 'password';
    document.getElementById('pass-icon').src = 'img/show.svg';
    a = 0;
  } else {
    document.getElementById('password').type = 'text';
    document.getElementById('pass-icon').src = 'img/hide.svg';
    a = 1;
  }
}
var a;
function pass1() {
  if (a == 1) {
    document.getElementById('password1').type = 'password';
    document.getElementById('pass-icon1').src = 'img/show.svg';
    a = 0;
  } else {
    document.getElementById('password1').type = 'text';
    document.getElementById('pass-icon1').src = 'img/hide.svg';
    a = 1;
  }
}

let span = document.getElementsByTagName('span');
let produk = document.getElementsByClassName('produk');
let produk_page = Math.ceil(produk.length / 4);
let l = 0;
let movePer = 44.65;
let maxMove = 200;

//alat baru
let right_mover = () => {
  l = l + movePer;
  if (produk == 1) {
    l = 0;
  }
  for (const i of produk) {
    if (l > maxMove) {
      l = l - movePer;
    }
    i.style.left = '-' + l + '%';
  }
};
let left_mover = () => {
  l = l - movePer;
  if (l <= 0) {
    l = 0;
  }
  for (const i of produk) {
    if (produk_page > 1) {
      i.style.left = '-' + l + '%';
    }
  }
};
span[1].onclick = () => {
  right_mover();
};
span[0].onclick = () => {
  left_mover();
};

//wish icon
var a;
function wish() {
  if (a == 1) {
    document.getElementById('wish-icon').src = 'img/wish.svg';
    a = 0;
  } else {
    document.getElementById('wish-icon').src = 'img/wish-fill.svg';
    a = 1;
  }
}
$(document).ready(function () {
  const minus = $('.quantity__minus');
  const plus = $('.quantity__plus');
  const input = $('.quantity__input');
  minus.click(function (e) {
    e.preventDefault();
    var value = input.val();
    if (value > 1) {
      value--;
    }
    input.val(value);
  });

  plus.click(function (e) {
    e.preventDefault();
    var value = input.val();
    value++;
    input.val(value);
  });
});
