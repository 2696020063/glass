var yiyan = document.getElementById('yiyan').style;
function yi() {
  yiyan.opacity = 1;
  yiyan.top = '20px';
};
setTimeout(yi,500);
function yiy() {
  yiyan.top = '30px';
  yiyan.opacity = 0;
};
setTimeout(yiy,5000);
if (innerHeight > 1000) {
  document.getElementById('xx1').style.display = 'block';
} else {
  document.getElementById('xx2').style.display = 'block';
}