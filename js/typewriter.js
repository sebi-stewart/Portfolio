

function typeWriter (elementID) {

  function sleep(ms){
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  const SLEEP_TIME = 225;
  const el = document.getElementById("name");

  let modSleepTime = SLEEP_TIME;
  let currSleepTime;

  const writeLoop= async() => {
    let curWord = "Sebastian Stewart";

    for (let i = 0; i < curWord.length; i++){
      el.textContent = curWord.slice(0, i + 1);

      currSleepTime = modSleepTime;

      if(curWord.slice(i,i+1) === " "){
        currSleepTime += SLEEP_TIME;
        modSleepTime = SLEEP_TIME;
      } else{
        modSleepTime += Math.floor(Math.random()*modSleepTime/6*7) - modSleepTime/4*3;
      }

      await sleep(currSleepTime);
    }
    fadeOut("#cursor")

  };

  writeLoop();

}

function fadeOut(element){
  let el = $(element);
  let interval = setInterval(function() {
    let opacity = el.css('opacity');
    if (opacity > 0){
      opacity -= 0.02;
      el.css('opacity', opacity);
    } else{
      el.remove();
      clearInterval(interval);
    }
  }, 50);
}
