function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

syncTime = randomNumber(2000, 8000);

setTimeout(() => {
    syncHWdata();
  }, syncTime)