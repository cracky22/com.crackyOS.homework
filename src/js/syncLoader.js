function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

syncTime = randomNumber(4600, 12000);

setTimeout(() => {
    syncHWdata();
  }, syncTime)