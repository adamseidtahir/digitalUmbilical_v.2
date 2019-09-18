window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}

TweenMax.from('#umbilical', 1.5, {opacity:0, rotation: -30, delay: 0.5, ease: Power4.easeOut});
TweenMax.from('#logo', 1, {opacity:0, delay: 1, ease: Power2.easeIn});
TweenMax.from('#rightNav', 1, {left:200, delay: 1.7, ease: Power2.easeOut});
TweenMax.from('#leftNav', 1, {left:-200, delay: 1.7, ease: Power2.easeOut});
TweenMax.from('#arrow', 1, {top: "85%", opacity:0, delay: 2, ease: Power2.easeOut})

// // overview text scrolling
// var overTopics = document.querySelector('.overTopics').cloneNode(true);
// document.getElementById("overRoll").appendChild(overTopics);
// TweenMax.to('.overTopics',20,{x:-overTopics.offsetWidth,repeat:-1,ease:Linear.easeNone});

// // concept text scrolling
// var conceptTopics = document.querySelector('.conceptTopics').cloneNode(true);
// document.getElementById("conceptRoll").appendChild(conceptTopics);
// TweenMax.to('.conceptTopics',20,{x:-conceptTopics.offsetWidth,repeat:-1,ease:Linear.easeNone});

// // narrative text scrolling
// var narrativeTopics = document.querySelector('.narrativeTopics').cloneNode(true);
// document.getElementById("narrativeRoll").appendChild(narrativeTopics);
// TweenMax.to('.narrativeTopics',24,{x:-narrativeTopics.offsetWidth,repeat:-1,ease:Linear.easeNone});

// // performance text scrolling
// var performanceTopics = document.querySelector('.performanceTopics').cloneNode(true);
// document.getElementById("performanceRoll").appendChild(performanceTopics);
// TweenMax.to('.performanceTopics',30,{x:-performanceTopics.offsetWidth,repeat:-1,ease:Linear.easeNone});

// // team text scrolling
// var teamTopics = document.querySelector('.teamTopics').cloneNode(true);
// document.getElementById("teamRoll").appendChild(teamTopics);
// TweenMax.to('.teamTopics',22,{x:-teamTopics.offsetWidth,repeat:-1,ease:Linear.easeNone});

// // contact text scrolling
// var contactTopics = document.querySelector('.contactTopics').cloneNode(true);
// document.getElementById("contactRoll").appendChild(contactTopics);
// TweenMax.to('.contactTopics',27,{x:-contactTopics.offsetWidth,repeat:-1,ease:Linear.easeNone});






//Logo animations
var controller = new ScrollMagic.Controller();
var tl1 = new TimelineMax();
tl1.add(TweenMax.to("#logo", 1, {width:"6vw", top: "5%", left: "3%", marginTop: 0}));
tl1.to('#arrow', 1, {opacity:0}, "-=1")
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
tl3.to('body', 3, {backgroundImage: "linearGradient(125deg, rgb(0, 47, 183),rgb(0,185,255),rgb(0, 47, 183))"}); //Blue

var scene = new ScrollMagic.Scene({
  triggerElement: "#overview",
  triggerHook: 0.7
})
  .setTween(tl3)
  .addTo(controller);


var tl4 = new TimelineMax();
tl4.add(TweenMax.to('#concept', 3, {opacity:1}));
tl4.to('body', 3, {backgroundImage: "linearGradient(125deg, rgb(182, 55, 55),rgb(255, 169, 169),rgb(180, 31, 56))"}); //Pink


var scene = new ScrollMagic.Scene({
  triggerElement: "#concept",
  triggerHook: 0.7
})
  .setTween(tl4)
  .addTo(controller);



var tl5 = new TimelineMax();
tl5.add(TweenMax.to('#narrative', 3, {opacity:1}));
tl5.to('body', 3, {backgroundImage: "linearGradient(125deg, rgb(0, 47, 183),rgb(0,185,255),rgb(0, 47, 183))"}); //Blue



var scene = new ScrollMagic.Scene({
  triggerElement: "#narrative",
  triggerHook: 0.7
})
  .setTween(tl5)
  .addTo(controller);


var tl6 = new TimelineMax();
tl6.add(TweenMax.to('#performance', 3, {opacity:1}));
tl6.to('body', 3, {backgroundImage: "linearGradient(125deg, rgb(182, 55, 55),rgb(255, 169, 169),rgb(180, 31, 56))"}); //Pink

var scene = new ScrollMagic.Scene({
  triggerElement: "#performance",
  triggerHook: 0.7
})
  .setTween(tl6)
  .addTo(controller);


var tl7 = new TimelineMax();
tl7.add(TweenMax.to('#team', 3, {opacity:1}));
tl7.to('body', 3, {backgroundImage: "linearGradient(125deg, rgb(0, 47, 183),rgb(0,185,255),rgb(0, 47, 183))"}); //Blue

var scene = new ScrollMagic.Scene({
    triggerElement: "#team",
    triggerHook: 0.7
})
    .setTween(tl7)
    .addTo(controller);


var tl8 = new TimelineMax();
tl8.add(TweenMax.to('#contact', 3, {opacity:1}));
tl8.to('body', 3, {backgroundImage: "linearGradient(125deg, rgb(182, 55, 55),rgb(255, 169, 169),rgb(180, 31, 56))"}); //Pink

var scene = new ScrollMagic.Scene({
    triggerElement: "#contact",
    triggerHook: 0.7
})
    .setTween(tl8)
    .addTo(controller);
