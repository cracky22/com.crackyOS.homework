function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

syncTime = randomNumber(2100, 14000);

setTimeout(() => {
    syncHWdata();
  }, syncTime)