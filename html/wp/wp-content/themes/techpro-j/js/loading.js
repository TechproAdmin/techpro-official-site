gsap.registerPlugin(SplitText);

// スプリットテキスト設定
const splitText = new SplitText(".loading .main", { type: "chars" });
const taglineSplit = new SplitText(".loading .tagline", { type: "chars, words" });

const loading = document.querySelector(".loading");
const loadingBg = document.querySelector(".loading .bg");
const video = document.querySelector("video");

const headerH2 = new SplitText(".first-view .text h2 .catch", { type: "words,chars,lines" });
const headerH1 = new SplitText(".first-view .text h1 .catch", { type: "words,chars,lines" });
const scroll = new SplitText(".mv_scroll", { type: "words,chars,lines" });

gsap.set(loading, { autoAlpha: 1 });
gsap.set([".loading .main", ".loading .tagline"], { autoAlpha: 0 });
gsap.set([headerH2.chars, headerH1.chars], { autoAlpha: 0, y: 100, rotationX: 5 });
gsap.set([scroll.lines],{ autoAlpha: 0, y: 100, rotationX: 5 });

// ローディングアニメーション
function loadingAnimation() {
	const tl = gsap.timeline();

	tl.to([".loading .main", ".loading .tagline"], { autoAlpha: 1, duration: 0.01 })
	.from(splitText.chars, { opacity: 0, stagger: 0.125, ease: "power1.in", duration: 0.05 })
    .from(taglineSplit.chars, { opacity: 0, yPercent: 0, stagger: 0.075, ease: "power1.in", duration: 0.05 }, "<")
    .to(splitText.chars, { opacity: 0 }, "+=0.1")
    .to(taglineSplit.chars, { opacity: 0 }, "<")
    .to(loadingBg, { autoAlpha: 0, duration: 1.0 }, "+=0.3")
    .to(loading, { autoAlpha: 0, ease: "power3.inOut", duration: 1.0, 
		onComplete: () => {
			loading.style.display = "none";
		},
    })

  return tl;
}

// ヘッダーアニメーション
function headerAnimation() {
  const tl = gsap.timeline();

  tl.from(video, { autoAlpha: 1})
    .from(".header nav .logo", { autoAlpha: 0, x: -100, filter: "blur(30px)" })
    .from(".header nav ul li", { autoAlpha: 0, y: 60, stagger: 0.1 }, "<")
    // .to(headerH2.chars, { autoAlpha: 1, y: 0, rotationX: 0, stagger: 0.05, ease: "power2.out" })
    // .to(headerH1.chars, { autoAlpha: 1, y: 0, rotationX: 0, stagger: 0.025, ease: "power2.out" }, "-=0.1")
    // .to(scroll.lines, { autoAlpha: 1, y: 0, rotationX: 0, stagger: 0.05, ease: "power2.out" }, "-=0.5")

    .to([headerH2.chars, headerH1.chars], { autoAlpha: 1, duration: 2 }, "<")
    .to(scroll.lines, { 
      autoAlpha: 1, 
      y: 0, 
      rotationX: 0, 
      stagger: 0.05, 
      ease: "power2.out" 
    }, "<"); 

  return tl;
}

// 開始処理
function openingEffect() {
  const masterTimeline = gsap.timeline();
  
  masterTimeline.add(loadingAnimation()).add(headerAnimation(), "-=2") // ローディング終了後、ヘッダーを少し重ねて開始
}

// 実行
openingEffect();
