let isLoaded = false;
window.onload = () => {
  isLoaded = true;
  window.document.body.style.visibility = "unset";
  let tl = gsap.timeline();
  tl.set(".hide-text", { autoAlpha: 1 });
  tl.fromTo(
    "main",
    { opacity: 0 },
    { opacity: 1, duration: 0.4, ease: Power4.easeInOut }
  );
  tl.from(".header-content", {
    y: "-200%",
    duration: 0.5,
    ease: Power4.easeInOut,
  });
  tl.from(".hide-text", {
    stagger: 0.05,
    duration: 0.5,
    y: "100%",
    ease: Power4.easeInOut,
  });
  tl.fromTo(
    ".floating-content",
    { opacity: 0, y: "50%" },
    { opacity: 1, y: "5%" }
  );
  tl.fromTo(
    ".hero .fadeInUp",
    { stagger: 0.15, opacity: 0, y: "100%" },
    {
      stagger: 0.15,
      duration: 0.5,
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    },
    "-=50%"
  );
  tl.fromTo(
    ".side-text",
    { opacity: 0, y: "100%" },
    {
      duration: 3.5,
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    },
    "-=50%"
  );
  tl.fromTo(
    ".hero-image",
    { opacity: 0, y: "100%" },
    {
      opacity: 1,
      y: "0%",
      ease: Power4.easeInOut,
      duration: 2,
    },
    "-=150%"
  );
  tl.fromTo(
    ".bg-blob",
    {
      scale: 0,
      rotate: 0,
    },
    {
      duration: 3,
      scale: 1,
      rotate: 360,
      ease: Power4.easeInOut,
    },
    "-=60%"
  );
  gsap.to(".bg-blob", {
    duration: 5,
    rotate: 360,
    repeat: -1,
    ease: Linear.easeNone,
  });
  gsap.fromTo(
    ".food-card-item",
    { opacity: 0, y: "100%" },
    {
      scrollTrigger: ".food-card-item",
      stagger: 0.2,
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".add-ons .big-title",
    { opacity: 0, y: "100%" },
    {
      scrollTrigger: ".add-ons .big-title",
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".tab-switcher",
    { opacity: 0, y: "100%" },
    {
      scrollTrigger: ".tab-switcher",
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".add-on-card-item",
    { opacity: 0, y: "100%" },
    {
      stagger: 0.15,
      delay: 0.6,
      scrollTrigger: { trigger: ".add-on-cards-cont" },
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    document.querySelector(".banner-content").children,
    { opacity: 0, y: "100%" },
    {
      stagger: 0.15,
      delay: 0.6,
      scrollTrigger: { trigger: ".banner-content" },
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".organic-products .big-title",
    { opacity: 0, y: "100%" },
    {
      scrollTrigger: ".organic-products .big-title",
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".organic-cards-cont .left .overlay",
    {
      width: "396px",
    },
    {
      width: "0px",
      scrollTrigger: ".organic-cards-cont .left .overlay",
      delay: 0.4,
      duration: 1.5,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    document.querySelector(".organic-cards-cont .left .content").children,
    {
      opacity: 0,
      x: "100%",
    },
    {
      x: "0%",
      opacity: 1,
      scrollTrigger: ".organic-cards-cont .left .overlay",
      delay: 0.4,
      duration: 1.7,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".mini-product-card-item",
    { opacity: 0, x: "100%" },
    {
      stagger: 0.1,
      x: "0%",
      scrollTrigger: {
        trigger: ".mini-product-card-item",
      },
      duration: 1,
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".test-cont .big-title",
    { opacity: 0, y: "100%" },
    {
      scrollTrigger: ".test-cont .big-title",
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".test-card-item",
    { opacity: 0, y: "100%" },
    {
      stagger: 0.15,
      scrollTrigger: ".test-card-item",
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".blog .big-title",
    { opacity: 0, y: "100%" },
    {
      scrollTrigger: ".blog .big-title",
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  gsap.fromTo(
    ".test-card-item",
    { opacity: 0, y: "100%" },
    {
      stagger: 0.15,
      scrollTrigger: ".test-card-item",
      y: "0%",
      opacity: 1,
      ease: Power4.easeInOut,
    }
  );
  let scrlTl = gsap.timeline({
    scrollTrigger: {
      trigger: ".blog-cards-cont",
      toggleActions: "play none reverse none",
    },
  });
  scrlTl.fromTo(
    ".blog-card",
    { opacity: 0, y: "100%" },
    {
      stagger: 0.15,
      y: "0%",
      opacity: 1,
      duration: 1.4,
      ease: Power4.easeInOut,
    }
  );
  scrlTl.fromTo(
    ".blog-card .overlay",
    { height: "250px" },
    {
      stagger: 0.16,
      height: "0px",
      duration: 1.2,
      ease: Power4.easeInOut,
    },
    "-=80%"
  );
};
