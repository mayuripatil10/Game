//  var topic=["btn","btn1"];
// var button;
// function divbtn(){
//     for(var i=0;i<topic.length;i++){
//         button.html("<input type='button' id='button' value='" + topic[i]+"'/>");
//         $("#btns").append(buttons);
//     }
// }
//  ivaBtns();
//
//  $('#btns').on('click', 'button', function(){
//      console.log("click");
//  });
//  var page=['page.html','welcome'];
//  for(i=0;i<=1;i++) {
//      var g = document.getElementById("demo");
//      var btn = ["btn" , "btn1" ,"btn2"];
// for(var i=0;i<=document.getElementById("demo").length;i++)
// {
//     (function(index){
//         g.btn[i].onclick = function(){
//             (i) ;
//         }
//     });
// }
     // var displaytext = ["hi" , "how" ,"are you?"];
     // btn.forEach(function(check){
     //     check.addEventListener('click', checkIndex);
     // })
     // function checkIndex(event) {
     //     //  var btton = document.getElementById(btn[i]);
     //
     // / btn.addEventListener("click", function (event) {
     //         document.getElementById(Array.from(btn).indexOf(event.target));
     //     g.insertAdjacentHTML('beforeend', 'test');
     //     });
     //
     // }
var demoContainer=document.getElementById ("demo");
var btn=document.getElementById ("btn");
btn.addEventListener ("click",function() {
    $('#demo').load('index.html');
});