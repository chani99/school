 function createtemps(data, manu) {
     $('#course').html("");

     $.ajax('front/views/course_temp.html').always(function(courseTemplate) {
         for (let i = 0; i < data.length; i++) {
             var c = courseTemplate;
             c = c.replace("{{name}}", data[i].Course_name);
             c = c.replace("{{descrip}}", data[i].Course_name);
             c = c.replace("{{imgsrc}}", "back/images/" + data[i].Course_image);

             let d = document.createElement('div');
             d.innerHTML = c;
             $('#course').append(d);

         }


     });

 }