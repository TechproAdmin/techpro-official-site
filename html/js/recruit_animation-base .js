// GSAPとSplitTextのプラグインを登録
gsap.registerPlugin(SplitText, ScrollTrigger);

// 共通のSplitText処理を関数化
function splitAndAnimate(selector, staggerDelay) {
  const split = new SplitText(selector, { type: "words,chars,lines" });
  const chars = split.chars;
  gsap.set(chars, { autoAlpha: 0, scale: 0, y: 30, rotationX: 10 });
  return gsap.to(chars, {
    autoAlpha: 1,
    scale: 1,
    y: 0,
    rotationX: 0,
    stagger: staggerDelay,
    transformOrigin: "0% 50%",
    ease: "power2.out",
  });
}


// start -----------------------------------------------------------------------------------//
//
//			.about_usのアニメーション
//

const AboutUsTitleAnimation = gsap.timeline({
	defaults: {
		autoAlpha: 0,
		filter: "blur(30px)",
		x: -100,
		y: 100,
		duration: 0.75,
	},
	scrollTrigger: {
		trigger: ".about_us",
		start: 'top 45%',
	},
});
  
AboutUsTitleAnimation
.from(".about_us .container .title .text h3", { duration: 1.0 })
.from(".about_us .container .title .text h4", { duration: 0.8 })
.from(".about_us .container .title .text p", {}, "<")
.from(".about_us .container .title .thumb", { x: 100 }, "<")



// .about_us .container .box-wrapper .box 要素を配列として取得
const AboutUsBoxes = gsap.utils.toArray(".about_us .container .box-wrapper .box");

// 各ボックスに対してアニメーションを設定
AboutUsBoxes.forEach((target) => {
  // 子要素の取得
  const thumb = target.querySelector(".top .thumb");
  const textElements = target.querySelectorAll(".top .text .en, .top .text h3, .top .text h4");
  const textLi = target.querySelectorAll(".top .text ul li");
  const geometory = target.querySelector(".top .text .geometory");
  const sentence = target.querySelector(".bottom .sentence");

  // タイムラインの作成とデフォルト設定
  const AboutUsBoxAnimation = gsap.timeline({
    defaults: {
      autoAlpha: 0,
      filter: "blur(30px)",
      x: -100,
      y: 100,
      duration: 0.75,
    },
    scrollTrigger: {
      trigger: target,
      start: 'top 70%',
    },
  });

  // アニメーションの定義
  AboutUsBoxAnimation
    .from(thumb, { duration: 1.0 })
    .from(textElements, {}, "<")
    // .from(textLi, { x: 100, stagger: 0.1 }, "-=0.5")
    .from(geometory, { x: 100 }, "<")
    // .from(sentence, { x: 100 }, "<");
});




//Value タイトル
gsap.fromTo(
  '.value .container .text',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 1.5,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.value',
      start: 'top 70%',
    }
  }
);

//Value 各カード
let fadeInValue = document.querySelectorAll('.value .container .value_box');
fadeInValue.forEach((fadeIn)=>{
  gsap.fromTo(
    fadeIn,
    {
      opacity:0,
    },
    {
      opacity:1,
      duration: 1.0,
      ease: "power1.inOut",
      scrollTrigger:{
        trigger: fadeIn,
        start: 'top 70%',
      }
    }
  );
});


//position_recruit タイトル
gsap.fromTo(
  '.position_recruit .container .text',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 1.5,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.position_recruit',
      start: 'top 70%',
    }
  }
);

//position_recruit 各カード
let fadeInPositionRecruit = document.querySelectorAll('.position_recruit .container .card_wrap');
fadeInPositionRecruit.forEach((fadeIn)=>{
  gsap.fromTo(
    fadeIn,
    {
      opacity:0,
    },
    {
      opacity:1,
      ease: "power1.inOut",
      scrollTrigger:{
        trigger: fadeIn,
        start: 'top 70%',
      }
    }
  );
});


//culture タイトル
gsap.fromTo(
  '.culture .container .text',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 1.5,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.culture',
      start: 'top 70%',
    }
  }
);

//culture 各パネル
gsap.fromTo(
  '.culture .container .threeColumns .column',
  {
    opacity:0,
    x:80,
  },
  {
    opacity:1,
    x:0,
    duration:1.0,
    stagger:0.1,
    scrollTrigger:{
      trigger: '.culture',
      start: 'top 30%',
    }
  }
);

//FAQ タイトル
gsap.fromTo(
  '.faq .container .text',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 1.5,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.faq',
      start: 'top 70%',
    }
  }
);

//FAQ 各質問＆答え
let fadeInFaq = document.querySelectorAll('.faq .container .faq-list__item .col-1,.faq .container .faq-list__item .qa');
fadeInFaq.forEach((fadeIn)=>{
  gsap.fromTo(
    fadeIn,
    {
      opacity:0,
    },
    {
      opacity:1,
      duration: 1.0,
      ease: "power1.inOut",
      scrollTrigger:{
        trigger: fadeIn,
        start: 'top 70%',
      }
    }
  );
});