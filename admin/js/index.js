//여러글자 타이핑

var typingBool = false;
var typingIdx = 0;
var liIndex = 0;
var liLength = $(".typing-txt>ul>li").length;

// 타이핑될 텍스트를 가져온다
var typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();
typingTxt = typingTxt.split(""); // 한글자씩 자른다.
if (typingBool == false) {
  // 타이핑이 진행되지 않았다면
  typingBool = true;
  var tyInt = setInterval(typing, 80); // 반복동작
}

function typing() {
  $(".typing ul li").removeClass("on");
  $(".typing ul li").eq(liIndex).addClass("on");
  if (typingIdx < typingTxt.length) {
    // 타이핑될 텍스트 길이만큼 반복
    $(".typing ul li").eq(liIndex).append(typingTxt[typingIdx]); // 한글자씩 이어준다.
    typingIdx++;
  } else {
    if (liIndex < liLength - 1) {
      //다음문장으로  가기위해 인덱스를 1증가
      liIndex++;
      //다음문장을 타이핑하기위한 셋팅
      typingIdx = 0;
      typingBool = false;
      typingTxt = $(".typing-txt>ul>li").eq(liIndex).text();

      //다음문장 타이핑전 1초 쉰다
      clearInterval(tyInt);
      //타이핑종료

      setTimeout(function () {
        //1초후에 다시 타이핑 반복 시작
        tyInt = setInterval(typing, 100);
      }, 800);
    } else if (liIndex == liLength - 1) {
      //마지막 문장까지 써지면 반복종료
      clearInterval(tyInt);
    }
  }
}

//전체메뉴 호버했을때 depth 띄우기
$(".menu_list1 , .all_menu1").hover(
  function () {
    $(".all_menu1").show();
  },
  function () {
    $(".all_menu1").hide();
  }
);
$(".menu_list1 , .depth1").hover(
  function () {
    $(this).find(".all_menu2").show();
  },
  function () {
    $(this).find(".all_menu2").hide();
  }
);
$(".depth2").hover(
  function () {
    $(this).find(".all_menu3").show();
  },
  function () {
    $(this).find(".all_menu3").hide();
  }
);
//notice list hover event
$(".notice_list").hover(
  function () {
    $(this).children("a .list1").css("color", "#fff");
    console.log("hi");
  },
  function () {
    $(this).children(".notice .list1").css("color", "#ffd300");
  }
);

//gsap

window.addEventListener("scroll", function () {
  if (window.scrollY > 600) {
    gsap.to(".review_title", {
      x: 600,
      duration: 0.5,
    });
  }
  if (window.scrollY > 1300) {
    gsap.to(".favorite_title", {
      x: 600,
      duration: 0.5,
    });
  }
  if (window.scrollY > 2000) {
    gsap.to(".notice_title", {
      x: 600,
      duration: 0.5,
    });
  }
});

gsap.to(".recommend_title", {
  x: 600,
  duration: 0.5,
});

//메인 인풋 타이핑

const $text = document.querySelector(".typing_txt");

// 글자 모음
const letters = [
  "#기타레슨",
  "#영어과외",
  "#홈페이지 제작",
  "#인테리어",
  "#PPT 제작",
  "#디자인",
  "#운동",
];

// 글자 입력 속도
const speed = 100;
let i = 0;

// 타이핑 효과
const typing_txt = async () => {
  const letter = letters[i].split("");

  while (letter.length) {
    await wait(speed);
    $text.innerHTML += letter.shift();
  }

  // 잠시 대기
  await wait(800);

  // 지우는 효과
  if (letters[i + 1]) remove();
};

// 글자 지우는 효과
const remove = async () => {
  const letter = letters[i].split("");

  while (letter.length) {
    await wait(speed);

    letter.pop();
    $text.innerHTML = letter.join("");
  }

  // 다음 순서의 글자로 지정, 타이핑 함수 다시 실행
  i++;
  typing_txt();
};

// 딜레이 기능 ( 마이크로초 )
function wait(ms) {
  return new Promise((res) => setTimeout(res, ms));
}

// 초기 실행
setTimeout(typing_txt, 1000);

//인풋 포커스 되면 타이핑 지우기

$(".main_search_input").click(function () {
  $(".typing_txt").css("display", "none");
});
$(".main_search_input").blur(function () {
  $(".typing_txt").css("display", "");
});
