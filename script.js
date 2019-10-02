window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

TweenMax.from('#umbilical', 1.5, {opacity:0, rotation: -30, delay: 0.5, ease: Power4.easeOut});
TweenMax.from('#logo', 1, {opacity:0, delay: 1, ease: Power2.easeIn});
TweenMax.from('#rightNav', 1, {left:200, delay: 1.7, ease: Power2.easeOut});
TweenMax.from('#leftNav', 1, {left:-200, delay: 1.7, ease: Power2.easeOut});
TweenMax.from('#arrow', 1, {top: "85%", opacity:0, delay: 2, ease: Power2.easeOut});

//Logo animations
var controller = new ScrollMagic.Controller();
var tl1 = new TimelineMax();
tl1.add(TweenMax.to("#logo", 1, {width:"6vw", top: "5%", left: "3%", marginTop: 0}));
tl1.to('#arrow', 1, {opacity:0}, "-=1");
tl1.to('#umbilical', 2, {opacity:0, ease: Power2.easeIn}, "-=2");
// tl1.to("#logo", 5, { rotation:"360", ease:Linear.easeNone, repeat:-1}, "-=1");
tl1.to('#logo', 1, {delay: 1, attr:{src:"img/logoMini.png"}}, "-=1");




var scene = new ScrollMagic.Scene({
  triggerElement: "#trigger1",
  triggerHook: 0.9
})
  .setTween(tl1)
  .addTo(controller);



//Block animations

var tl1b = TweenMax.to("#logo", 5, { rotation:"360", ease:Linear.easeNone, repeat:0}, "-=1"); //Set repeat to "-1" for infinite

var scene = new ScrollMagic.Scene({
  triggerElement: "#trigger1",
  triggerHook: 0.9
})
  .setTween(tl1b)
  .addTo(controller)
  .reverse(false);


var tl2 = TweenMax.to('#quo1', 3, {opacity:1});

var scene = new ScrollMagic.Scene({
  triggerElement: "#quo1",
  triggerHook: 0.7
})
  .setTween(tl2)
  .addTo(controller);


var tl3 = new TimelineMax();
tl3.add(TweenMax.to('#overview', 3, {opacity:1}));

var scene = new ScrollMagic.Scene({
  triggerElement: "#overview",
  triggerHook: 0.7
})
  .setTween(tl3)
  .addTo(controller);


var tl4 = new TimelineMax();
tl4.add(TweenMax.to('#concept', 3, {opacity:1}));

var scene = new ScrollMagic.Scene({
  triggerElement: "#concept",
  triggerHook: 0.7
})
  .setTween(tl4)
  .addTo(controller);



var tl5 = new TimelineMax();
tl5.add(TweenMax.to('#narrative', 3, {opacity:1}));

var scene = new ScrollMagic.Scene({
  triggerElement: "#narrative",
  triggerHook: 0.7
})
  .setTween(tl5)
  .addTo(controller);


var tl6 = new TimelineMax();
tl6.add(TweenMax.to('#performance', 3, {opacity:1}));

var scene = new ScrollMagic.Scene({
  triggerElement: "#performance",
  triggerHook: 0.7
})
  .setTween(tl6)
  .addTo(controller);


var tl7 = new TimelineMax();
tl7.add(TweenMax.to('#team', 3, {opacity:1}));

var scene = new ScrollMagic.Scene({
    triggerElement: "#team",
    triggerHook: 0.7
})
    .setTween(tl7)
    .addTo(controller);


var tl8 = new TimelineMax();
tl8.add(TweenMax.to('#contact', 3, {opacity:1}));

var scene = new ScrollMagic.Scene({
    triggerElement: "#contact",
    triggerHook: 0.7
})
    .setTween(tl8)
    .addTo(controller);
