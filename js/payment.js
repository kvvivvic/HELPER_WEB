let result = document.querySelector(".result_num");
let i = 1;
result.innerHTML = i;
let selectPrice = document.querySelector(".selcet_price_value");
selectPrice.innerHTML = "4,000,000";
$(".minor_btn").on("click", function () {
  $(result).html(function () {
    if (i > 0) {
      let resultValue = result.innerHTML;
      i--;
      result.innerHTML = i;
      let selectPriceValue = i * 4000000;
      selectPrice.innerHTML = selectPriceValue.toLocaleString();
    } else {
      alert("1보다 작을 수 없습니다.");
      result.innerHTML = 1;
    }
  });
});
$(".plus_btn").on("click", function () {
  $(result).html(function () {
    if (i >= 0) {
      let resultValue = result.innerHTML;
      i++;
      result.innerHTML = i;
      let selectPriceValue = i * 4000000;
      selectPrice.innerHTML = selectPriceValue.toLocaleString();
    }
  });
});
