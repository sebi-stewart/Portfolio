

function typeWriter (elementID) {

  function sleep(ms){
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  const SLEEP_TIME = 200;
  const el = document.getElementById("name");
  el.insertAdjacentHTML("afterend", "<span id=\"cursor\">|</span>");

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
        modSleepTime += Math.floor(Math.random()*SLEEP_TIME) - modSleepTime/4*3;
      }

      await sleep(currSleepTime);
    }
  };

  writeLoop();

  let cursor = document.getElementById("cursor");
  cursor.remove();

}
