function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

syncTime = randomNumber(2100, 12000);

setTimeout(() => {
    syncHWdata();
  }, syncTime)