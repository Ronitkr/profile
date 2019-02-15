// product img thumbnail
var bigImg = document.getElementById('big');
var subImg = document.getElementById('sub').getElementsByTagName('img');

for (var i = 0; i < subImg.length; i++) {
	subImg[i].addEventListener('click', full_image);
}
function full_image(){
	var imgsrc = this.getAttribute('src');
	bigImg.innerHTML = "<img src = "+imgsrc+">";
};





