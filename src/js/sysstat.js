function SystemStatus() {
    SystemStatus = "<b>Online und Verfügbar</b>";
    document.getElementById("sysstat").innerHTML = "Systemstatus crackyOS Server:<br>" + SystemStatus;
}

function randomNumber(min, max) {
    return Math.random() * (max - min) + min;
}

syncTime = randomNumber(1500, 2300);

setTimeout(() => {
    SystemStatus();
  }, syncTime)