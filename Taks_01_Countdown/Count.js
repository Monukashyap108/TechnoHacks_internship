const startingMinutes =10;
let time = startingMinutes * 60;
const countdownEl = document.getElementById("Countdown");
setInterval(updateCountdown,100);

function updateCountdown(){
    const minutes = Math.floor(time/60);
    let seconds = time % 60;
    seconds = seconds < 10 ? '0'seconds;
    countdownEl .innerHTML = ' ${ minutes} : ${seconds} ';
    time--;

}
