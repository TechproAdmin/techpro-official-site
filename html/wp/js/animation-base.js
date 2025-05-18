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
//			#headerのアニメーション
// 



// const headerH2 = new SplitText('.header .first-view .text h2 .catch', { type: 'words,chars,lines' });
// const headerH1 = new SplitText('.header .first-view .text h1 .catch', { type: 'words,chars,lines' });

// gsap.set([headerH2.words, headerH1.chars], { autoAlpha: 0, y: 100, rotationX: 5 });
// gsap.set('.header .first-view .text ul li', { autoAlpha: 0, y: 100 });

// const headerAnimation = gsap.timeline();

// headerAnimation
// .from('.header nav .logo', { autoAlpha: 0, x: -100, filter: 'blur(30px)' })
// .from('.header nav ul li', { autoAlpha: 0, y: 60, stagger: 0.1 }, '<')
// .to(headerH2.words, { autoAlpha: 1, y: 0, rotationX: 0, stagger: 0.05, ease: 'power2.out' })
// .to(headerH1.chars, { autoAlpha: 1, y: 0, rotationX: 0, stagger: 0.025, ease: 'power2.out' }, '-=0.1')
// .to('.header .first-view .text ul li', { autoAlpha: 1, y: 0, stagger: 0.06 }, '-=0.2')
// .from('.header .first-view .text .sentence', { autoAlpha: 0, y: 100 }, '-=0.2')
// .from('.header .first-view .splide', { autoAlpha: 0, y: 200, x: 200 }, '<')





// start -----------------------------------------------------------------------------------//
//
//			.featureのアニメーション
//

const featureTitleAnimation = gsap.timeline({
	defaults: {
		autoAlpha: 0,
		filter: "blur(30px)",
		x: -100,
		y: 100,
		duration: 0.75,
	},
	scrollTrigger: {
		trigger: ".feature",
		start: 'top 45%',
	},
});
  
featureTitleAnimation
.from(".feature .container .title .text h3", { duration: 1.0 })
.from(".feature .container .title .text p", {}, "<")
.from(".feature .container .title .thumb", { x: 100 }, "<")



// .feature .container .box-wrapper .box 要素を配列として取得
const featureBoxes = gsap.utils.toArray(".feature .container .box-wrapper .box");

// 各ボックスに対してアニメーションを設定
featureBoxes.forEach((target) => {
  // 子要素の取得
  const thumb = target.querySelector(".top .thumb");
  const textElements = target.querySelectorAll(".top .text .en, .top .text h3");
  const textLi = target.querySelectorAll(".top .text ul li");
  const geometory = target.querySelector(".top .text .geometory");
  const sentence = target.querySelector(".bottom .sentence");

  // タイムラインの作成とデフォルト設定
  const featureBoxAnimation = gsap.timeline({
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
  featureBoxAnimation
    .from(thumb, { duration: 1.0 })
    .from(textElements, {}, "<")
    // .from(textLi, { x: 100, stagger: 0.1 }, "-=0.5")
    .from(geometory, { x: 100 }, "<")
    // .from(sentence, { x: 100 }, "<");
});



// start -----------------------------------------------------------------------------------//
//
//			.serviceのアニメーション
//

const serviceTitleAnimation = gsap.timeline({
	defaults: {
		autoAlpha: 0,
		filter: "blur(30px)",
		scale: 2,
		duration: 1.15,
	},
	scrollTrigger: {
		trigger: ".service .title",
		start: 'top 70%',
	},
});
  
serviceTitleAnimation
.from('.service .container .title h3', {})
.from('.service .container .title h2', {}, "<")



// .service .container .box-wrapper .box 要素を配列として取得
const serviceBoxes = gsap.utils.toArray(".service .container .box-wrapper .box");

// 各ボックスに対してアニメーションを設定
serviceBoxes.forEach((target) => {
  // 子要素の取得
  const thumbElements = target.querySelectorAll(".thumb-wrapper .thumb");
  const textElements = target.querySelectorAll(".text .back, .text .inset .semi-title .number, .text .inset .semi-title h3, .text .inset .sentence");

  // タイムラインの作成とデフォルト設定
  const serviceBoxAnimation = gsap.timeline({
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
  serviceBoxAnimation
    .from(thumbElements, { x: (i) => i % 2 === 0 ? -100 : 100, stagger: 0.1, duration: 1.0 })
    .from(textElements, { stagger: 0.1 }, "<=0.25");
});

// start -----------------------------------------------------------------------------------//
//
//			.newsのアニメーション
//

// .newsセクションのタイトルアニメーション
const flowTitleAnimation = gsap.timeline({
	defaults: {
		autoAlpha: 0,
		filter: "blur(30px)",
		scale: 2,
		duration: 1.15,
	},
	scrollTrigger: {
		trigger: ".news .title",
		start: 'top bottom',
	},
});
  
flowTitleAnimation
.from('.news .container .title h3', {})
.from('.news .container .title h2', {}, "<");

// .newsセクションのボックスアニメーション
gsap.from(".news .container .box-wrapper .box", {
	autoAlpha: 0,
	y: 100,
	filter: "blur(30px)",
	stagger: 0.3,
	duration: 0.75,
	scrollTrigger: {
		trigger: ".news .container .box-wrapper",
		start: 'top 80%',
	},
});

gsap.fromTo(
  '.news-box dt, .news-box dd',
  {
    opacity: 0,
    x: -50,
  },
  {
    opacity: 1,
    x: 0,
    stagger: {
      each:0.1,
      from:'start'
    },
    scrollTrigger:{
      trigger: '.news-box',
      start: 'top 70%',
    }
  }
);

// start -----------------------------------------------------------------------------------//
//
//			.recruitのアニメーション
//

const recruitTitleAnimation = gsap.timeline({
	defaults: {
		autoAlpha: 0,
		filter: "blur(30px)",
		scale: 2,
		duration: 1.15,
	},
	scrollTrigger: {
		trigger: ".recruit .title",
		start: 'top 70%',
	},
});
  
recruitTitleAnimation
.from('.recruit .container .title h3', {})
.from('.recruit .container .title h2', {}, "<")



// .recruit .container .box-wrapper .box 要素を配列として取得
const recruitBoxes = gsap.utils.toArray(".recruit .container .box-wrapper .box");

// 各ボックスに対してアニメーションを設定
recruitBoxes.forEach((target) => {
  // 子要素の取得
  const thumbElements = target.querySelectorAll(".thumb-wrapper .thumb");
  const textElements = target.querySelectorAll(".text .back, .text .inset .semi-title .number, .text .inset .semi-title h3, .text .inset .sentence");

  // タイムラインの作成とデフォルト設定
  const recruitBoxAnimation = gsap.timeline({
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
  recruitBoxAnimation
    .from(thumbElements, { x: (i) => i % 2 === 0 ? -100 : 100, stagger: 0.1, duration: 1.0 })
    .from(textElements, { stagger: 0.1 }, "<=0.25");
});


// start -----------------------------------------------------------------------------------//
//
//			.ctaのアニメーション
//

// .cta 要素を配列として取得
const ctaElements = gsap.utils.toArray(".cta");

ctaElements.forEach((target) => {
  // 子要素の取得
  const inner = target.querySelector(".cta .container .inner");
  const h2 = target.querySelector(".cta .container h2");
  const sentence = target.querySelector(".cta .container .inner .block .sentence");
  const blockLi = target.querySelectorAll(".cta .container .inner .block ul li");
  const blockForm = target.querySelectorAll(".cta .container .inner .block .form");

  // タイムラインの作成とデフォルト設定
  const ctaAnimation = gsap.timeline({
    defaults: {
      autoAlpha: 0,
      filter: "blur(30px)",
      y: 100,
      duration: 0.75,
    },
    scrollTrigger: {
      trigger: target,
      start: 'top 90%',
    },
  });

  // アニメーションの定義
  ctaAnimation
    .from(inner, { filter: "blur(60px)", duration: 1.0 })
    .from(h2, { x: -100, duration: 1.0 }, "<")
    .from(sentence, { x: -100 }, "<")
    .from(blockLi, { x: 100, stagger: 0.1 }, "<")
    .from(blockForm, { x: 100 }, "<");
});



// start -----------------------------------------------------------------------------------//
//
//			.company_bodyのアニメーション
//


//代表挨拶
gsap.fromTo(
  '.company_body .greeting h2',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.company_body',
      start: 'top bottom',
    }
  }
);

gsap.fromTo(
  '.greeting .box-wrapper',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.greeting .catch ',
      start: 'top 70%',
    }
  }
);

//メンバー紹介 タイトル
gsap.fromTo(
  '.company_body .container .staff h2',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.staff',
      start: 'top 70%',
    }
  }
);


//メンバー紹介 各カード
let fadeInStaff = document.querySelectorAll('.staff .box-wrapper .box');
fadeInStaff.forEach((fadeIn)=>{
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

//会社概要 タイトル
gsap.fromTo(
  '.company_body .container .company_overview h2',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.company_overview',
      start: 'top 70%',
    }
  }
);

//会社概要 内容
gsap.fromTo(
  '.company_overview .table_company',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.company_overview .table_company',
      start: 'top 70%',
    }
  }
);

//google_map
gsap.fromTo(
  '.google_map',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.google_map',
      start: 'top 70%',
    }
  }
);


//テックプロパティジャパンの企業理念 タイトル
gsap.fromTo(
  '.company_body .container .philosophy h2',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.philosophy',
      start: 'top 70%',
    }
  }
);

//テックプロパティジャパンの企業理念 内容
gsap.fromTo(
  '.about_philosophy',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.about_philosophy',
      start: 'top 70%',
    }
  }
);

//CSR活動 タイトル

gsap.fromTo(
  '.company_body .container .csr h2',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.csr',
      start: 'top 70%',
    }
  }
);

//CSR活動 内容
gsap.fromTo(
  '.csr .box-wrapper .text',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.csr .box-wrapper .text',
      start: 'top 70%',
    }
  }
);


// start -----------------------------------------------------------------------------------//
//
//			service_bodyのアニメーション
//

// const service_bodyAnimation= gsap.timeline({
// 	defaults: {
// 		autoAlpha: 0,
// 		filter: "blur(30px)",
// 		x: -100,
// 		y: 100,
// 		duration: 0.75,
// 	},
// 	scrollTrigger: {
// 		trigger: ".servicepage",
// 		start:'top center',
// 	},
// });

// service_bodyAnimation
// .from(".service_list .catch", { duration: 1.0 })


// gsap.fromTo(
//   '.items',
//   {
//     opacity: 0,
//     x: 30,
//     y: 30,
//   },
//   {
//     opacity: 1,
//     x: 0,
//     y: 0,
//     stagger: 0.2,
//     scrollTrigger: {
//       trigger:'.items',
//       start:'top 70%',
//     },
//   }
// )


//サービス一覧 タイトル
gsap.fromTo(
  '.service_body h2',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.service_body',
      start: 'top bottom',
    }
  }
);


//サービス一覧 各カード
let fadeIns = document.querySelectorAll('.service_body .box-wrapper .box');
fadeIns.forEach((fadeIn)=>{
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



//利回り20%倶楽部 タイトル
gsap.fromTo(
  'section.club20_body',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: 'section.club20_body',
      start: 'top bottom',
    }
  }
);

//利回り20%倶楽部 サービスの特徴
gsap.fromTo(
  '.top_common_head',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.club20_features',
      start: 'top 70%',
    }
  }
);


let fadeInClub20 = document.querySelectorAll('.club20_features .box-wrapper .box');
fadeInClub20.forEach((fadeIn)=>{
  gsap.fromTo(
    fadeIn,
    {
      opacity:0,
    },
    {
      opacity:1,
      duration: 2.0,
      ease: "power1.inOut",
      scrollTrigger:{
        trigger: fadeIn,
        start: 'top 70%',
      }
    }
  );
});

//利回り20%倶楽部 紹介物件例
gsap.fromTo(
  '.shoukai',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.shoukai',
      start: 'top 70%',
    }
  }
);

//新築アパートプラン タイトル
gsap.fromTo(
  'section.new_apartment_body',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: 'section.new_apartment_body',
      start: 'top bottom',
    }
  }
);

//新築アパートプラン サービスの特徴
gsap.fromTo(
  '.new_apartment_features .top_common_head .new_apartment_common_ttl',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.new_apartment_features',
      start: 'top 70%',
    }
  }
);

let fadeInNewApartment = document.querySelectorAll('.new_apartment_features .box-wrapper .box');
fadeInNewApartment.forEach((fadeIn)=>{
  gsap.fromTo(
    fadeIn,
    {
      opacity:0,
    },
    {
      opacity:1,
      duration: 2.0,
      ease: "power1.inOut",
      scrollTrigger:{
        trigger: fadeIn,
        start: 'top 70%',
      }
    }
  );
});


//不動産査定 タイトル
gsap.fromTo(
  'section.assessment_body',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: 'section.assessment_body',
      start: 'top bottom',
    }
  }
);

//不動産査定 サービスの特徴
gsap.fromTo(
  '.assessment_features .top_common_head .assessment_common_ttl',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: '.assessment_features',
      start: 'top 70%',
    }
  }
);

let fadeInAssessment = document.querySelectorAll('.assessment_features .box-wrapper .box');
fadeInAssessment.forEach((fadeIn)=>{
  gsap.fromTo(
    fadeIn,
    {
      opacity:0,
    },
    {
      opacity:1,
      duration: 2.0,
      ease: "power1.inOut",
      scrollTrigger:{
        trigger: fadeIn,
        start: 'top 70%',
      }
    }
  );
});

//不動産査定 - ご所有の不動産、査定してみませんか？
gsap.fromTo(
  '.innerlink',
  {
    opacity:0,
  },
  {
    opacity:1,
    duration: 2.0,
    ease: "power1.inOut",
    scrollTrigger:{
      trigger: ".innerlink",
      start: 'top 70%',
    }
  }
);



// start -----------------------------------------------------------------------------------//
//
//			.footerのアニメーション
//

// 要素の取得
// const footer = document.querySelector('.footer');
// const footerLogoPlane = document.querySelector('.logo .plane');
// const footerLogoWhite = document.querySelector('.logo .white');
// const footerLinks = footer.querySelectorAll('.container .top nav ul li a, .container .privacy p a, .container .copyright small');

// 初期設定
// gsap.set(footer, {
//   backgroundImage: "linear-gradient(90deg, rgba(210,210,210,1) 0%, rgba(255,255,255,1) 100%)"
// });
// gsap.set(footerLinks, { color: "#111" });
// gsap.set(footerLogoWhite, { autoAlpha: 0 });

// アニメーションの定義
// const footerAnimation = gsap.timeline({
//   scrollTrigger: {
//     trigger: footer,
//     start: 'top 45%',
//   },
// });

// footerAnimation
// .to(footer, {
// backgroundImage: "linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 100%)",
// duration: 1.25,
// })
// .to(footerLogoPlane, { autoAlpha: 0 }, "<")
// .to(footerLogoWhite, { autoAlpha: 1 }, "<")
// .to(footerLinks, { color: "#fff", stagger: 0.25 }, "<=0.5");


