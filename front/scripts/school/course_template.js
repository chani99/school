 function createtemps(data, manu) {
     switch (manu) {
         case "allstudends":

             $('#Students').html("");
             $.ajax('front/views/student_temp.html').always(function(courseTemplate) {
                 for (let i = 0; i < data.length; i++) {
                     var c = courseTemplate;
                     c = c.replace("{{name}}", data[i].Student_name);
                     c = c.replace("{{phone}}", data[i].Student_phone);
                     c = c.replace("{{imgsrc}}", "back/images/" + data[i].Student_image);

                     let d = document.createElement('div');
                     d.innerHTML = c;
                     $('#Students').append(d);
                 }
             });

             break;

         case "allcourses":
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
             break;
     }
 }