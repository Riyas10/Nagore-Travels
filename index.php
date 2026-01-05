<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>JSN Cars & Travels | Nagore</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="JSN Cars & Travels Nagore – Local, outstation travel, airport pickup & drop services.">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif}
html{scroll-behavior:smooth}
body{
  background:#f1f5f9;
  color:#0f172a;
  overflow-x:hidden;
  opacity:0;
  transition:.8s;
}
body.loaded{opacity:1}

/* TOP SCROLL LOADER */
#topLoader{
  position:fixed;
  top:0;left:0;
  height:4px;
  width:0%;
  background:linear-gradient(90deg,#22c55e,#38bdf8,#facc15);
  z-index:10001;
}

/* PAGE LOADER */
#loader{
  position:fixed;
  inset:0;
  background:linear-gradient(135deg,#020617,#0f172a);
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:10000;
  transition:.8s;
}
#loader.hide{opacity:0;visibility:hidden}
.loader-box{text-align:center;color:#fff}
.car{font-size:48px;animation:bounce .8s infinite alternate}
@keyframes bounce{to{transform:translateY(-6px)}}
.road{
  width:220px;height:6px;
  background:#334155;
  margin:12px auto;
  border-radius:10px;
  overflow:hidden;
  position:relative
}
.road::after{
  content:"";
  position:absolute;
  width:40px;height:100%;
  background:#facc15;
  animation:road 1s linear infinite
}
@keyframes road{from{left:-40px}to{left:220px}}

/* NAV */
nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:15px 25px;
  background:#020617;
  color:#fff;
  position:sticky;
  top:0;
  z-index:1000
}
.logo-area{display:flex;align-items:center;gap:10px;font-weight:700}
.logo-area img{height:42px}
.menu-btn{font-size:26px;cursor:pointer;display:none}
nav ul{list-style:none;display:flex;gap:18px}
nav a{
  color:#fff;
  text-decoration:none;
  padding:8px 14px;
  border-radius:18px
}
nav a:hover{background:#1e293b}

@media(max-width:768px){
.menu-btn{display:block}
nav ul{
  position:absolute;
  top:70px;left:0;
  width:100%;
  background:#020617;
  flex-direction:column;
  display:none;
  align-items:center;
  padding:15px 0
}
nav ul.show{display:flex}
}

/* HERO */
.hero{
  padding:120px 20px;
  background:linear-gradient(135deg,#020617,#0f172a);
  color:#fff;
  text-align:center
}
.hero h1{font-size:44px}
#typing{
  margin-top:15px;
  font-size:22px;
  color:#38bdf8;
  min-height:28px;
}

/* SECTIONS */
.section{padding:80px 20px}
.container{
  max-width:1100px;
  margin:auto;
  padding:60px 30px;
  border-radius:28px;
  background:#fff;
  opacity:0;
  transform:translateY(60px);
  transition:.8s;
}
.container.show{opacity:1;transform:none}

.about-section{background:#e0f2fe}
.pricing-section{background:#fef3c7}
.faq-section{background:#f0fdf4}
.contact-section{background:#dcfce7}

h2{text-align:center;margin-bottom:25px}

/* SLIDER */
.slider-wrapper{overflow:hidden;border-radius:22px}
.vehicle-slider{display:flex;transition:.5s}
.slide{min-width:100%}
.slide img{width:100%;height:320px;object-fit:cover}

/* PRICING */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:25px
}
.card{
  padding:35px;
  border-radius:24px;
  color:#fff;
  font-weight:700;
  text-align:center;
  transition:.4s
}
.card:hover{transform:translateY(-10px)}
.p1{background:#818cf8}
.p2{background:#22c55e}
.p3{background:#f87171}

.action-btns{
  display:flex;
  gap:10px;
  margin-top:15px
}
.action-btns a{
  flex:1;
  padding:12px;
  border-radius:30px;
  font-size:14px;
  font-weight:700;
  text-decoration:none;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:6px;
  color:#fff;
  transition:.3s
}
.wa-btn{background:#25d366}
.call-btn{background:#38bdf8}
.action-btns a:hover{transform:scale(1.1)}

/* FAQ */
.faq-item{
  background:#fff;
  margin-bottom:15px;
  border-radius:18px;
  overflow:hidden;
  box-shadow:0 8px 20px rgba(0,0,0,.08)
}
.faq-question{
  padding:18px;
  background:linear-gradient(135deg,#fde047,#facc15);
  cursor:pointer;
  font-weight:700;
  display:flex;
  justify-content:space-between;
  align-items:center
}
.faq-question i{transition:.4s}
.faq-answer{
  max-height:0;
  overflow:hidden;
  padding:0 18px;
  background:#dcfce7;
  transition:.5s ease
}
.faq-item.active .faq-answer{
  max-height:200px;
  padding:18px
}
.faq-item.active .faq-question i{
  transform:rotate(180deg)
}

/* CONTACT */
.contact-layout{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:25px
}
.map{height:320px;border-radius:22px;overflow:hidden}
form{background:#fff;padding:25px;border-radius:22px}
input,textarea{
  width:100%;
  padding:14px;
  margin-bottom:14px;
  border-radius:12px;
  border:1px solid #ccc
}
button{
  width:100%;
  padding:14px;
  background:#25d366;
  color:#fff;
  border:none;
  border-radius:30px;
  font-weight:700;
  cursor:pointer
}
button:hover{background:#1ebe5d}

@media(max-width:768px){
.contact-layout{grid-template-columns:1fr}
}

/* FLOATING BUTTONS */
#whatsappBtn,#scrollTop{
  position:fixed;
  right:20px;
  width:55px;
  height:55px;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:24px;
  cursor:pointer;
  z-index:999;
  box-shadow:0 6px 20px rgba(0,0,0,.3)
}
#whatsappBtn{
  bottom:20px;
  background:#25d366;
  color:#fff;
  animation:pulse 2s infinite
}
#scrollTop{
  bottom:90px;
  background:#38bdf8;
  color:#fff;
  display:none
}
@keyframes pulse{
  0%{transform:scale(1)}
  50%{transform:scale(1.1)}
  100%{transform:scale(1)}
}

/* FOOTER */
footer{
  background:#020617;
  color:#fff;
  text-align:center;
  padding:22px;
  font-size:14px
}
footer a{
  color:#38bdf8;
  text-decoration:none;
  margin:0 4px
}
footer a:hover{text-decoration:underline}
</style>
</head>

<body>

<div id="topLoader"></div>

<div id="loader">
  <div class="loader-box">
    <div class="car">🚕</div>
    <div class="road"></div>
    <p>Loading Your Journey...</p>
  </div>
</div>

<nav>
  <div class="logo-area">
    <img src="https://i.ibb.co/zT6pFdV3/JSN-LOGO.png">
    <span>JSN Cars & Travels</span>
  </div>
  <div class="menu-btn" id="menuBtn">☰</div>
  <ul id="menu">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#vehicles">Vehicles</a></li>
    <li><a href="#pricing">Pricing</a></li>
    <li><a href="#faq">FAQ</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<div class="hero" id="home">
  <h1>JSN Cars & Travels</h1>
  <div id="typing"></div>
</div>

<section class="section" id="vehicles">
  <div class="container slider-wrapper">
    <div class="vehicle-slider" id="slider">
      <div class="slide"><img src="https://i.ibb.co/Fqx2KZV3/Dzire-desk-Varient-2000x1171.png"></div>
      <div class="slide"><img src="https://i.ibb.co/vNfgy1v/unrivaled-performance-banner1600x1000.jpg"></div>
      <div class="slide"><img src="https://i.ibb.co/8gVQLs44/Picsart-26-01-03-01-59-53-809.jpg"></div>
    </div>
  </div>
</section>

<section class="section about-section" id="about">
  <div class="container">
    <h2>About Us</h2>
    <p style="text-align:center">
      JSN Cars & Travels provides safe, reliable and affordable travel services in Nagore.
    </p>
  </div>
</section>

<section class="section pricing-section" id="pricing">
  <div class="container">
    <h2>Pricing</h2>
    <div class="grid">
      <div class="card p1">
        Local – ₹12/km
        <div class="action-btns">
          <a class="wa-btn" href="https://wa.me/919884250787">WhatsApp</a>
          <a class="call-btn" href="tel:+919884250787">Call</a>
        </div>
      </div>
      <div class="card p2">
        Outstation – ₹14/km
        <div class="action-btns">
          <a class="wa-btn" href="https://wa.me/919884250787">WhatsApp</a>
          <a class="call-btn" href="tel:+919884250787">Call</a>
        </div>
      </div>
      <div class="card p3">
        Airport – ₹16/km
        <div class="action-btns">
          <a class="wa-btn" href="https://wa.me/919884250787">WhatsApp</a>
          <a class="call-btn" href="tel:+919884250787">Call</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section faq-section" id="faq">
  <div class="container">
    <h2>FAQ</h2>
    <div class="faq-item">
      <div class="faq-question">How to book a car? <i class="fas fa-chevron-down"></i></div>
      <div class="faq-answer">Book instantly via WhatsApp or phone call.</div>
    </div>
    <div class="faq-item">
      <div class="faq-question">Airport pickup available? <i class="fas fa-chevron-down"></i></div>
      <div class="faq-answer">Yes, airport pickup & drop available 24/7.</div>
    </div>
  </div>
</section>

<section class="section contact-section" id="contact">
  <div class="container">
    <h2>Contact Us</h2>
    <div class="contact-layout">
      <div class="map">
        <iframe src="https://maps.google.com/maps?q=Nagore&t=&z=14&output=embed" width="100%" height="100%"></iframe>
      </div>
      <form onsubmit="sendWhatsApp();return false;">
        <input id="name" placeholder="Your Name" required>
        <input id="phone" placeholder="Phone Number" required>
        <textarea id="msg" placeholder="Travel Requirement"></textarea>
        <button>Send via WhatsApp</button>
      </form>
    </div>
  </div>
</section>

<div id="whatsappBtn"><i class="fab fa-whatsapp"></i></div>
<div id="scrollTop"><i class="fas fa-chevron-up"></i></div>

<footer>
  © 2026 <b>JSN Cars & Travels</b> |
  <a href="#home">Home</a> |
  <a href="#about">About</a> |
  <a href="#pricing">Pricing</a> |
  <a href="#faq">FAQ</a> |
  <a href="#contact">Contact</a>
</footer>

<script>
menuBtn.onclick=()=>menu.classList.toggle("show");

/* PAGE LOAD */
window.addEventListener("load",()=>{
  document.body.classList.add("loaded");
  setTimeout(()=>loader.classList.add("hide"),600);
  startTyping();
});

/* TYPING EFFECT */
const typingEl=document.getElementById("typing");
const texts=["Local Travel","Outstation","Airport Pickup"];
let t=0,i=0,del=false;
function startTyping(){type();}
function type(){
  const txt=texts[t];
  typingEl.innerHTML=txt.substring(0,i)+"<span>|</span>";
  del?i--:i++;
  if(i===txt.length+1){del=true;setTimeout(type,800);return}
  if(del&&i===0){del=false;t=(t+1)%texts.length}
  setTimeout(type,del?60:120)
}

/* TOP LOADER + SCROLL TOP */
window.addEventListener("scroll",()=>{
  const h=document.documentElement.scrollHeight-document.documentElement.clientHeight;
  topLoader.style.width=(document.documentElement.scrollTop/h)*100+"%";
  scrollTop.style.display=window.scrollY>400?"flex":"none";
});
scrollTop.onclick=()=>window.scrollTo({top:0,behavior:"smooth"});

/* SECTION REVEAL */
const obs=new IntersectionObserver(e=>e.forEach(x=>x.isIntersecting&&x.target.classList.add("show")),{threshold:.2});
document.querySelectorAll(".container").forEach(c=>obs.observe(c));

/* SLIDER */
let idx=0;
setInterval(()=>{idx=(idx+1)%3;slider.style.transform=`translateX(-${idx*100}%)`},4000);

/* FAQ AUTO CLOSE */
document.querySelectorAll(".faq-question").forEach(q=>{
  q.onclick=()=>{
    document.querySelectorAll(".faq-item").forEach(i=>i!==q.parentElement&&i.classList.remove("active"));
    q.parentElement.classList.toggle("active");
  }
});

/* WHATSAPP */
whatsappBtn.onclick=()=>window.open("https://wa.me/919884250787","_blank");
function sendWhatsApp(){
  const text=`Hello JSN Cars & Travels,
Name: ${name.value}
Phone: ${phone.value}
Requirement: ${msg.value}`;
  window.open("https://wa.me/919884250787?text="+encodeURIComponent(text),"_blank");
}
</script>

</body>
</html>
