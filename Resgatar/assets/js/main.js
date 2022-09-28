const body = document.querySelector('body'),
  sidebar = body.querySelector('nav'),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
body.classList.toggle("dark");

if(body.classList.contains("dark")){
    modeText.innerText = "Light mode";
}else{
    modeText.innerText = "Dark mode";
    
}
});

//Temporizador
future = Date.parse("jun 12, 2022 01:30:00");
now = new Date();
diff = future - now;
days = Math.floor(diff / (1000 * 60 * 60 * 24));
hours = Math.floor(diff / (1000 * 60 * 60));
mins = Math.floor(diff / (1000 * 60));
secs = Math.floor(diff / 1000); 
d = days;
h = hours - days * 24;
m = mins - hours * 60;
s = secs - mins * 60;
document.getElementById("timer")
.innerHTML =
'<div>' + d + '<span>Days</span></div>' +
'<div>' + h + '<span>Hours</span></div>' +
'<div>' + m + '<span>Minutes</span></div>' +
'<div>' + s + '<span>Seconds</span></div>';
setInterval('updateTimer()', 1000); 
function updateTimer() {
  future = Date.parse("sep 27, 2022 09:00:00");
now = new Date();
diff = future - now;

days = Math.floor(diff / (1000 * 60 * 60 * 24));
hours = Math.floor(diff / (1000 * 60 * 60));
mins = Math.floor(diff / (1000 * 60));
secs = Math.floor(diff / 1000);

d = days;
h = hours - days * 24;
m = mins - hours * 60;
s = secs - mins * 60;

document.getElementById("timer")
.innerHTML =
'<div>' + d + '<span>Days</span></div>' +
'<div>' + h + '<span>Hours</span></div>' +
'<div>' + m + '<span>Minutes</span></div>' +
'<div>' + s + '<span>Seconds</span></div>';
}
setInterval('updateTimer()', 1000);

//Notificação
const a = document.querySelector(".button"),
      toast = document.querySelector(".toast")
      closeIcon = document.querySelector(".close"),
      progress = document.querySelector(".progress");

      let timer1, timer2;

      a.addEventListener("click", () => {
        toast.classList.add("active");
        progress.classList.add("active");

        timer1 = setTimeout(() => {
            toast.classList.remove("active");
        }, 5000); //1s = 1000 milliseconds

        timer2 = setTimeout(() => {
          progress.classList.remove("active");
        }, 5300);
      });
      
      closeIcon.addEventListener("click", () => {
        toast.classList.remove("active");
        
        setTimeout(() => {
          progress.classList.remove("active");
        }, 300);

        clearTimeout(timer1);
        clearTimeout(timer2);
      });
