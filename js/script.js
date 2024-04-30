//时间代码
const divObj=document.getElementsByClassName('time')[0];
    setInterval(()=>{
        const nowTime=getNowTime();
        divObj.innerText=nowTime;
    })
    function getNowTime(){
        const date=new Date();
        const year=date.getFullYear();
        const month=date.getMonth();
        const day=date.getDate();
        const hour=date.getHours();
        const minite=date.getMinutes();
        const seconds=date.getSeconds();
        return `${hour}:${minite}:${seconds<10?'0'+seconds:seconds}`;
    }