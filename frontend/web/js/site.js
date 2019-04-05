var img = document.getElementsByTagName("img");
img[2].parentElement.parentElement.setAttribute("class", "item active");
var product = Array.from(document.getElementsByClassName("list-view")[0].children);
// product.getElementByClassName("item");
var empat = [];

product.forEach(i => {
	if(i.className == "item"){
		empat.push(i);
	}
})

for(let i = 0; i<empat.length; i++){
	if(window.innerWidth > 1200)
	{
		if(i % 4 == 3){
			empat[i].insertAdjacentHTML('afterEnd', '<div class="fiftypx"></div>');
		}
	}
}

// var imgArr = Array.from(img);
// console.log(img);

// var filterImg;

// console.log(img[2].parentElement.parentElement.classList("active"));

// imgArr.forEach(i => {
//   var src = i.getAttribute("src");
//   if (src.includes("8_title")) {
//     filterImg = i;
//   }
//   console.log(src);
// });

// console.log(filterImg);
