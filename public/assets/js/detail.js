'use strict'

function passCheck(confirm){
  var input1 = password.value;
  var input2 = confirm.value;
  if(input1 != input2){
    confirm.setCustomValidity("入力値が一致しません。");
  }else{
    confirm.setCustomValidity('');
  }
}