//页面加载调用
window.onload=function(){
  //每1秒刷新时间
  setInterval("d()",1000);
};
function d() {
var d = new Date();
var min = d.getMinutes();
if (min<10) {
  min='0'+min;
} else {
  min= min;
};
var week = d.getDay();
var z = '周'
if (week = 0) {
  week = z+'一';
} else if (week = 1) {
  week = z + '二';
}
 else if (week = 2) {
   week = z + '三';
 }
 else if (week = 3) {
    week = z + '四';
  }
 else if (week = 4) {
    week = z + '五';
}
  else if (week = 5) {
    week = z + '六';
  }
  else if (week = 6) {
    week = z + '日';
  };
var time= d.getHours()+':'+min;
document.getElementById('time').innerHTML = time;
document.getElementById('month').innerHTML = d.getMonth()+1 +'月'+d.getDate()+'日&nbsp&nbsp'+week;
  
};