const slidePage = document.querySelector(".slidepage");
const firstNextBtn = document.querySelector(".nextBtn");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const nextBtnFourth = document.querySelector(".next-3");
const prevBtnFifth = document.querySelector(".prev-4");
const nextBtnFifth = document.querySelector(".next-4");
const prevBtnSix = document.querySelector(".prev-5");
const nextBtnSix = document.querySelector(".next-5");
const prevBtnSev = document.querySelector(".prev-6");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let max = 7;
let current = 1;

firstNextBtn.addEventListener("click", function(){
  slidePage.style.marginLeft = "-15%";
  bullet[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  current += 1;
});
prevBtnSec.addEventListener("click", function(){
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  current -= 1;
});
nextBtnSec.addEventListener("click", function(){
  slidePage.style.marginLeft = "-30%";
  bullet[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  current += 1;
});
prevBtnThird.addEventListener("click", function(){
  slidePage.style.marginLeft = "-15%";
  bullet[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  current -= 1;
});
nextBtnThird.addEventListener("click", function(){
  slidePage.style.marginLeft = "-45%";
  bullet[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  current += 1;
});
prevBtnFourth.addEventListener("click", function(){
  slidePage.style.marginLeft = "-30%";
  bullet[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  current -= 1;
});
nextBtnFourth.addEventListener("click", function(){
  slidePage.style.marginLeft = "-60%";
  bullet[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  current += 1;
});
prevBtnFifth.addEventListener("click", function(){
  slidePage.style.marginLeft = "-45%";
  bullet[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  current -= 1;
});
nextBtnFifth.addEventListener("click", function(){
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  current += 1;
});
prevBtnSix.addEventListener("click", function(){
  slidePage.style.marginLeft = "-60%";
  bullet[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  current -= 1;
});
nextBtnSix.addEventListener("click", function(){
  slidePage.style.marginLeft = "-90%";
  bullet[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  current += 1;
});
prevBtnSev.addEventListener("click", function(){
  slidePage.style.marginLeft = "-75%";
  bullet[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  current -= 1;
});

submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Thanks");
  }, 800);
});
