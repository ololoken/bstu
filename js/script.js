$('.click').click(divResize);


function divResize() {
            var text = $(this).text();
           

 	        $(this).prev('#textContainer').toggleClass('off');
            $(this).prev('#textContainer').prev('.imageContainer').toggleClass('off');


            if (text == "Развернуть") $(this).text("Свернуть");
            else $(this).text("Развернуть");
}