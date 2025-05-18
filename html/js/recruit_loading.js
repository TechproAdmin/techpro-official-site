gsap.registerPlugin(SplitText);

// スプリットテキスト設定
const splitText = new SplitText(".loading_recruit .main", { type: "chars" });

const loading = document.querySelector(".loading_recruit");
const loadingBg = document.querySelector(".loading_recruit .bg");

const headerH2 = new SplitText(".main-view .text h2 .catch", { type: "words,chars,lines" });
const headerH1 = new SplitText(".main-view .text h1 .catch", { type: "words,chars,lines" });
const scroll = new SplitText(".mv_scroll", { type: "words,chars,lines" });

const entry = document.querySelector(".top-sec01__btn");

gsap.set(loading, { autoAlpha: 1 });
gsap.set(".loading_recruit .main", { autoAlpha: 0 });
gsap.set([headerH2.chars, headerH1.chars], { autoAlpha: 0, y: 100, rotationX: 5 });
gsap.set(entry,{ autoAlpha: 0, x: -100, rotationX: 5 });
gsap.set([scroll.lines],{ autoAlpha: 0, y: 100, rotationX: 5 });



// ローディングアニメーション
function loadingAnimation() {
	const tl = gsap.timeline();

	tl.to(".loading_recruit .main", { autoAlpha: 1, duration: 0.01 })
	.from(splitText.chars, { opacity: 0, stagger: 0.125, ease: "power1.in", duration: 0.05 })
    .to(splitText.chars, { opacity: 0, stagger: 0.01, ease: "power3.inOut", duration: 0.05 }, "+=0.1")
    .to(loadingBg, { autoAlpha: 0, yPercent: -100, ease: "power3.inOut", duration: 1.0 }, "+=0.3")
    .to(loading, { autoAlpha: 0, ease: "power3.inOut", duration: 2.0, 
		onComplete: () => {
			loading.style.display = "none";
		},
    })

  return tl;
}

// ヘッダーアニメーション
function headerAnimation() {
  const tl = gsap.timeline();

  tl.from(".header nav .logo", { autoAlpha: 0, x: -100, filter: "blur(30px)" })
    .from(".header nav ul li", { autoAlpha: 0, y: 60, stagger: 0.1 }, "<")
    // H2とH1を同時にアニメーション
    .to([headerH2.chars, headerH1.chars], {
      autoAlpha: 1,
      y: 0,
      textShadow: "0 0 20px #00fff7",
      stagger: { each: 0.05, from: "random" },
      ease: "power3.out",
      duration: 0.5
    }, "<") // ← ここがポイント！同時開始
    .to([headerH2.chars, headerH1.chars], {
      textShadow: "0 0 0px #00fff7",
      duration: 0.3,
      stagger: { each: 0.05, from: "random" },
      ease: "power2.out"
    }, "-=0.4")
    // ボタンも同時に
    .fromTo(entry, 
      { autoAlpha: 0, y: 60, scale: 0.7 },
      { 
        autoAlpha: 1, 
        y: 0, 
        scale: 1.05, 
        boxShadow: "0 8px 32px #fff", 
        duration: 0.5, 
        ease: "power2.out" 
      }, 
      "<" // ← ここでも同時開始指定
    )
    .to(entry, {
      scale: 1,
      boxShadow: "0 0px 0px #00fff7",
      duration: 0.3,
      ease: "power2.out"
    }, "-=1.7")
    .to(scroll.lines, { 
      autoAlpha: 1, 
      y: 0, 
      rotationX: 0, 
      stagger: 0.05, 
      ease: "power2.out" 
    }, "<"); // ← スクロール要素も同時に

  return tl;
}


// 開始処理
function openingEffect() {
  const masterTimeline = gsap.timeline();
  
  masterTimeline.add(loadingAnimation()).add(headerAnimation(), "-=2") // ローディング終了後、ヘッダーを少し重ねて開始
}

// 実行
openingEffect();

