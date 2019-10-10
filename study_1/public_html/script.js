function createParagraph() {
var para = document.createElement('p');
para.textContent = 'You clicked the button!';
document.body.appendChild(para);
}

var buttons = document.querySelectorAll('button');

for (var i = 0; i < buttons.length ; i++) {
buttons[i].addEventListener('click', createParagraph);
}



// Но так делать не стоит, тем самым мы загрязним html и к каждой кнопке придётся подключать js
// function createParagraph() {
//   var para = document.createElement('p');
//   para.textContent = 'You clicked the button!';
//   document.body.appendChild(para);
// }