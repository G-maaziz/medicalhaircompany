!function(n,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(n="undefined"!=typeof globalThis?globalThis:n||self).EmblaCarousel=e()}(this,(function(){"use strict";function n(n,e){var t={start:function(){return 0},center:function(n){return r(n)/2},end:r};function r(n){return e-n}return{measure:function(r){return"number"==typeof n?e*Number(n):t[n](r)}}}function e(n,e){var t=Math.abs(n-e);function r(e){return e<n}function o(n){return n>e}function i(n){return r(n)||o(n)}return{constrain:function(t){return i(t)?r(t)?n:e:t},length:t,max:e,min:n,reachedAny:i,reachedMax:o,reachedMin:r,removeOffset:function(n){return t?n-t*Math.ceil((n-e)/t):n}}}function t(n,r,o){var i=e(0,n),u=i.min,a=i.constrain,c=n+1,s=d(r);function d(n){return o?Math.abs((c+n)%c):a(n)}function f(){return s}function l(n){return s=d(n),p}var p={add:function(n){return l(f()+n)},clone:function(){return t(n,f(),o)},get:f,set:l,min:u,max:n};return p}function r(){var n=[];var e={add:function(t,r,o,i){return void 0===i&&(i=!1),t.addEventListener(r,o,i),n.push((function(){return t.removeEventListener(r,o,i)})),e},removeAll:function(){return n=n.filter((function(n){return n()})),e}};return e}function o(n){var e=n;function t(n){return e/=n,o}function r(n){return"number"==typeof n?n:n.get()}var o={add:function(n){return e+=r(n),o},divide:t,get:function(){return e},multiply:function(n){return e*=n,o},normalize:function(){return 0!==e&&t(e),o},set:function(n){return e=r(n),o},subtract:function(n){return e-=r(n),o}};return o}function i(n){return n?n/Math.abs(n):0}function u(n,e){return Math.abs(n-e)}function a(n,e){for(var t=[],r=0;r<n.length;r+=e)t.push(n.slice(r,r+e));return t}function c(n){return Object.keys(n).map(Number)}function s(n){return n[d(n)]}function d(n){return Math.max(0,n.length-1)}function f(n,e,t,a,c,s,d,f,l,p,m,g,v,h,x){var b=n.scroll,y=n.cross,M=["INPUT","SELECT","TEXTAREA"],S=o(0),w=o(0),T=o(0),E=r(),A=r(),P={mouse:2.5,touch:3.5},B={mouse:5,touch:7},D=c?5:16,I=!1,O=!1,z=!1,L=!1;function k(n){if(!(L="mousedown"===n.type)||0===n.button){var e,r,o=u(a.get(),d.get())>=2,i=L||!o,c=(e=n.target,r=e.nodeName||"",!(M.indexOf(r)>-1)),f=o||L&&c;I=!0,s.pointerDown(n),T.set(a),a.set(d),p.useBaseMass().useSpeed(80),function(){var n=L?document:t;A.add(n,"touchmove",N).add(n,"touchend",C).add(n,"mousemove",N).add(n,"mouseup",C)}(),S.set(s.readPoint(n,b)),w.set(s.readPoint(n,y)),v.emit("pointerDown"),i&&(z=!1),f&&n.preventDefault()}}function N(n){if(!O&&!L){if(!n.cancelable)return C();var t=s.readPoint(n,b).get(),r=s.readPoint(n,y).get(),o=u(t,S.get()),i=u(r,w.get());if(!(O=o>i)&&!z)return C()}var c=s.pointerMove(n);!z&&c&&(z=!0),f.start(),a.add(e.applyTo(c)),n.preventDefault()}function C(){var n=m.byDistance(0,!1).index!==g.get(),t=s.pointerUp()*(c?B:P)[L?"mouse":"touch"],r=function(n,e){var t=g.clone().add(-1*i(n)),r=t.get()===g.min||t.get()===g.max,o=m.byDistance(n,!c).distance;return c||Math.abs(n)<20?o:!h&&r?.6*o:x&&e?.5*o:m.byIndex(t.get(),0).distance}(e.applyTo(t),n),o=function(n,e){if(0===n||0===e)return 0;if(Math.abs(n)<=Math.abs(e))return 0;var t=u(Math.abs(n),Math.abs(e));return Math.abs(t/n)}(t,r),d=u(a.get(),T.get())>=.5,f=n&&o>.75,b=Math.abs(t)<20,y=f?10:D,M=f?1+2.5*o:1;d&&!L&&(z=!0),O=!1,I=!1,A.removeAll(),p.useSpeed(b?9:y).useMass(M),l.distance(r,!c),L=!1,v.emit("pointerUp")}function j(n){z&&n.preventDefault()}return{addActivationEvents:function(){var n=t;E.add(n,"touchmove",(function(){})).add(n,"touchend",(function(){})).add(n,"touchstart",k).add(n,"mousedown",k).add(n,"touchcancel",C).add(n,"contextmenu",C).add(n,"click",j)},clickAllowed:function(){return!z},pointerDown:function(){return I},removeAllEvents:function(){E.removeAll(),A.removeAll()}}}function l(n,e,t){var r,u,a=(r=2,u=Math.pow(10,r),function(n){return Math.round(n*u)/u}),c=o(0),s=o(0),d=o(0),f=0,l=e,p=t;function m(n){return l=n,v}function g(n){return p=n,v}var v={direction:function(){return f},seek:function(e){d.set(e).subtract(n);var t,r,o,u,a=(t=d.get(),(o=0)+(t-(r=0))/(100-r)*(l-o));return f=i(d.get()),d.normalize().multiply(a).subtract(c),(u=d).divide(p),s.add(u),v},settle:function(e){var t=e.get()-n.get(),r=!a(t);return r&&n.set(e),r},update:function(){c.add(s),n.add(c),s.multiply(0)},useBaseMass:function(){return g(t)},useBaseSpeed:function(){return m(e)},useMass:g,useSpeed:m};return v}function p(n,e,t,r){var o=!1;return{constrain:function(i){if(!o&&n.reachedAny(t.get())&&n.reachedAny(e.get())){var u=i?.7:.45,a=t.get()-e.get();t.subtract(a*u),!i&&Math.abs(a)<10&&(t.set(n.constrain(t.get())),r.useSpeed(10).useMass(3))}},toggleActive:function(n){o=!n}}}function m(n,t,r,o,i){var u=e(-t+n,r[0]),a=o.map(u.constrain);return{snapsContained:function(){if(t<=n)return[u.max];if("keepSnaps"===i)return a;var r=function(){var n=a[0],t=s(a),r=a.lastIndexOf(n),o=a.indexOf(t)+1;return e(r,o)}(),o=r.min,c=r.max;return a.slice(o,c)}()}}function g(n,t,r,o,i){var u=e(r.min+t.measure(.1),r.max+t.measure(.1)),a=u.reachedMin,c=u.reachedMax;return{loop:function(e){if(function(n){return 1===n?c(o.get()):-1===n&&a(o.get())}(e)){var t=n*(-1*e);i.forEach((function(n){return n.add(t)}))}}}}function v(n){var e=n.max,t=n.length;return{get:function(n){return(n-e)/-t}}}function h(n,e,t,r,o,i){var u,c,d=n.startEdge,f=n.endEdge,l=o.map((function(n){return r[d]-n[d]})).map(t.measure).map((function(n){return-Math.abs(n)})),p=(u=a(l,i).map((function(n){return n[0]})),c=a(o,i).map((function(n){return s(n)[f]-n[0][d]})).map(t.measure).map(Math.abs).map(e.measure),u.map((function(n,e){return n+c[e]})));return{snaps:l,snapsAligned:p}}function x(n,e,t,r,o){var i=r.reachedAny,u=r.removeOffset,a=r.constrain;function c(n,e){return Math.abs(n)<Math.abs(e)?n:e}function s(e,r){var o=e,i=e+t,u=e-t;if(!n)return o;if(!r)return c(c(o,i),u);var a=c(o,1===r?i:u);return Math.abs(a)*r}return{byDistance:function(t,r){var c=o.get()+t,d=function(t){var r=n?u(t):a(t);return{index:e.map((function(n){return n-r})).map((function(n){return s(n,0)})).map((function(n,e){return{diff:n,index:e}})).sort((function(n,e){return Math.abs(n.diff)-Math.abs(e.diff)}))[0].index,distance:r}}(c),f=d.index,l=d.distance,p=!n&&i(c);return!r||p?{index:f,distance:t}:{index:f,distance:t+s(e[f]-l,0)}},byIndex:function(n,t){return{index:n,distance:s(e[n]-o.get(),t)}},shortcut:s}}function b(n,e,t,r,o,i,u,a){var s,d=c(r),f=c(r).reverse(),l=(s=o[0]-1,g(m(f,s),"end")).concat(function(){var n=e-o[0]-1;return g(m(d,n),"start")}());function p(n,e){return n.reduce((function(n,e){return n-r[e]}),e)}function m(n,e){return n.reduce((function(n,t){return p(n,e)>0?n.concat([t]):n}),[])}function g(n,e){var r="start"===e,o=r?-t:t,a=i.findSlideBounds(o);return n.map((function(n){var e=r?0:-t,o=r?t:0,i=a.filter((function(e){return e.index===n}))[0][r?"end":"start"];return{point:i,getTarget:function(){return u.get()>i?e:o},index:n,location:-1}}))}return{canLoop:function(){return l.every((function(n){var t=n.index;return p(d.filter((function(n){return n!==t})),e)<=0}))},clear:function(){l.forEach((function(e){var t=e.index;a[t].style[n.startEdge]=""}))},loop:function(){l.forEach((function(e){var t=e.getTarget,r=e.location,o=e.index,i=t();i!==r&&(a[o].style[n.startEdge]=i+"%",e.location=i)}))},loopPoints:l}}function y(n,e,t){var r=t.style,o="x"===n.scroll?function(n){return"translate3d("+n+"%,0px,0px)"}:function(n){return"translate3d(0px,"+n+"%,0px)"},i=!1;return{clear:function(){r.transform=""},to:function(n){i||(r.transform=o(e.applyTo(n.get())))},toggleActive:function(n){i=!n}}}function M(i,u,a,M,S){var w,T=M.align,E=M.axis,A=M.direction,P=M.startIndex,B=M.inViewThreshold,D=M.loop,I=M.speed,O=M.dragFree,z=M.slidesToScroll,L=M.skipSnaps,k=M.containScroll,N=u.getBoundingClientRect(),C=a.map((function(n){return n.getBoundingClientRect()})),j=function(n){var e="rtl"===n?-1:1;return{applyTo:function(n){return n*e}}}(A),V=function(n,e){var t="y"===n?"y":"x";return{scroll:t,cross:"y"===n?"x":"y",startEdge:"y"===t?"top":"rtl"===e?"right":"left",endEdge:"y"===t?"bottom":"rtl"===e?"left":"right",measureSize:function(n){var e=n.width,r=n.height;return"x"===t?e:r}}}(E,A),H=(w=V.measureSize(N),{measure:function(n){return 0===w?0:n/w*100},totalPercent:100}),F=H.totalPercent,R=n(T,F),U=function(n,e,t,r,o){var i=n.measureSize,u=n.startEdge,a=n.endEdge,c=r.map(i);return{slideSizes:c.map(e.measure),slideSizesWithGaps:r.map((function(n,e,r){var i=e===d(r),f=window.getComputedStyle(s(t)),l=parseFloat(f.getPropertyValue("margin-"+a));return i?c[e]+(o?l:0):r[e+1][u]-n[u]})).map(e.measure).map(Math.abs)}}(V,H,a,C,D),G=U.slideSizes,W=U.slideSizesWithGaps,X=h(V,R,H,N,C,z),q=X.snaps,J=X.snapsAligned,Y=-s(q)+s(W),K=m(F,Y,q,J,k).snapsContained,Q=!D&&""!==k?K:J,Z=function(n,t,r){var o,i;return{limit:(o=t[0],i=s(t),e(r?o-n:i,o))}}(Y,Q,D).limit,$=t(d(Q),P,D),_=$.clone(),nn=c(a),en=function(n){var e=0;function t(n,t){return function(){n===!!e&&t()}}function r(){e=window.requestAnimationFrame(n)}return{proceed:t(!0,r),start:t(!1,r),stop:t(!0,(function(){window.cancelAnimationFrame(e),e=0}))}}((function(){D||dn.scrollBounds.constrain(dn.dragHandler.pointerDown()),dn.scrollBody.seek(on).update();var n=dn.scrollBody.settle(on);n&&!dn.dragHandler.pointerDown()&&(dn.animation.stop(),S.emit("settle")),n||S.emit("scroll"),D&&(dn.scrollLooper.loop(dn.scrollBody.direction()),dn.slideLooper.loop()),dn.translate.to(rn),dn.animation.proceed()})),tn=Q[$.get()],rn=o(tn),on=o(tn),un=l(rn,I,1),an=x(D,Q,Y,Z,on),cn=function(n,e,t,r,o,i){function u(r){var u=r.distance,a=r.index!==e.get();u&&(n.start(),o.add(u)),a&&(t.set(e.get()),e.set(r.index),i.emit("select"))}return{distance:function(n,e){u(r.byDistance(n,e))},index:function(n,t){var o=e.clone().set(n);u(r.byIndex(o.get(),t))}}}(en,$,_,an,on,S),sn=function(n,e,t,r,o,i){var u=Math.min(Math.max(i,.01),.99),a=(o?[0,e,-e]:[0]).reduce((function(n,e){return n.concat(c(e,u))}),[]);function c(e,o){var i=t.map((function(n){return n*(o||0)}));return r.map((function(r,o){return{start:r-t[o]+i[o]+e,end:r+n-i[o]+e,index:o}}))}return{check:function(n){return a.reduce((function(e,t){var r=t.index,o=t.start,i=t.end;return-1===e.indexOf(r)&&o<n&&i>n?e.concat([r]):e}),[])},findSlideBounds:c}}(F,Y,G,q,D,B),dn={animation:en,axis:V,direction:j,dragHandler:f(V,j,i,on,O,function(n,e){var t=n.scroll,r={x:"clientX",y:"clientY"},i=o(0),u=o(0),a=o(0),c=o(0),s=[],d=(new Date).getTime(),f=!1;function l(n,e){f=!n.touches;var t=r[e],o=f?n[t]:n.touches[0][t];return c.set(o)}return{pointerDown:function(n){var r=l(n,t);return i.set(r),a.set(r),e.measure(i.get())},pointerMove:function(n){var r=l(n,t),o=(new Date).getTime(),i=o-d;return i>=10&&(i>=100&&(s=[]),s.push(r.get()),d=o),u.set(r).subtract(a),a.set(r),e.measure(u.get())},pointerUp:function(){var n=(new Date).getTime()-d,t=a.get(),r=s.slice(-5).map((function(n){return t-n})).sort((function(n,e){return Math.abs(n)<Math.abs(e)?1:-1}))[0];return a.set(n>100||!r?0:r),s=[],e.measure(a.get())},readPoint:l}}(V,H),rn,en,cn,un,an,$,S,D,L),eventStore:r(),pxToPercent:H,index:$,indexPrevious:_,limit:Z,location:rn,options:M,scrollBody:un,scrollBounds:p(Z,rn,on,un),scrollLooper:g(Y,H,Z,rn,[rn,on]),scrollProgress:v(Z),scrollSnaps:Q,scrollTarget:an,scrollTo:cn,slideLooper:b(V,F,Y,W,Q,sn,rn,a),slidesInView:sn,slideIndexes:nn,target:on,translate:y(V,j,u)};return dn}var S={align:"center",axis:"x",containScroll:"",direction:"ltr",dragFree:!1,draggable:!0,inViewThreshold:0,loop:!1,skipSnaps:!1,slidesToScroll:1,speed:10,startIndex:0};return function(n,e,t){var r,o,i,u,a,c,s,d,f,l=function(){var n={};function e(e){return n[e]||[]}var t={emit:function(n){return e(n).forEach((function(e){return e(n)})),t},off:function(r,o){return n[r]=e(r).filter((function(n){return n!==o})),t},on:function(r,o){return n[r]=e(r).concat([o]),t}};return t}(),p=(r=function(){if(h){var n=u.axis.measureSize(s.getBoundingClientRect());y!==n&&E(),l.emit("resize")}},o=500,i=0,function(){window.clearTimeout(i),i=window.setTimeout(r,o)||0}),m=E,g=l.on,v=l.off,h=!1,x=Object.assign({},S),b=Object.assign({},x),y=0;function w(){var e,t="container"in n&&n.container,r="slides"in n&&n.slides;s="root"in n?n.root:n,d=t||s.children[0],f=r||[].slice.call(d.children),e=getComputedStyle(s,":before").content,a={get:function(){try{return JSON.parse(e.slice(1,-1).replace(/\\/g,""))}catch(n){}return{}}}}function T(n,e){if(w(),x=Object.assign({},x,n),b=Object.assign({},x,a.get()),c=Object.assign([],e),(u=M(s,d,f,b,l)).eventStore.add(window,"resize",p),u.translate.to(u.location),y=u.axis.measureSize(s.getBoundingClientRect()),c.forEach((function(n){return n.init(I)})),b.loop){if(!u.slideLooper.canLoop())return A(),T({loop:!1},e);u.slideLooper.loop()}b.draggable&&d.offsetParent&&f.length&&u.dragHandler.addActivationEvents(),h||(setTimeout((function(){return l.emit("init")}),0),h=!0)}function E(n,e){if(h){var t=D(),r=Object.assign({startIndex:t},n);A(),T(r,e||c),l.emit("reInit")}}function A(){u.dragHandler.removeAllEvents(),u.animation.stop(),u.eventStore.removeAll(),u.translate.clear(),u.slideLooper.clear(),c.forEach((function(n){return n.destroy()}))}function P(n){var e=u[n?"target":"location"].get(),t=b.loop?"removeOffset":"constrain";return u.slidesInView.check(u.limit[t](e))}function B(n,e,t){u.scrollBody.useBaseMass().useSpeed(e?100:b.speed),h&&u.scrollTo.index(n,t||0)}function D(){return u.index.get()}var I={canScrollNext:function(){return u.index.clone().add(1).get()!==D()},canScrollPrev:function(){return u.index.clone().add(-1).get()!==D()},clickAllowed:function(){return u.dragHandler.clickAllowed()},containerNode:function(){return d},internalEngine:function(){return u},destroy:function(){h&&(A(),h=!1,l.emit("destroy"))},off:v,on:g,previousScrollSnap:function(){return u.indexPrevious.get()},reInit:m,rootNode:function(){return s},scrollNext:function(n){B(u.index.clone().add(1).get(),!0===n,-1)},scrollPrev:function(n){B(u.index.clone().add(-1).get(),!0===n,1)},scrollProgress:function(){return u.scrollProgress.get(u.location.get())},scrollSnapList:function(){return u.scrollSnaps.map(u.scrollProgress.get)},scrollTo:B,selectedScrollSnap:D,slideNodes:function(){return f},slidesInView:P,slidesNotInView:function(n){var e=P(n);return u.slideIndexes.filter((function(n){return-1===e.indexOf(n)}))}};return T(e,t),I}}));