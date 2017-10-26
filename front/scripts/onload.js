 $(document).ready(function() {
     $("#loginform").hide();
     const session_sto = localStorage.getItem("User");
     let user = JSON.parse(session_sto) || undefined;
     if (user == undefined) {
         $("#loginform").show();
         $("#navlist, .mainscreen").hide();




     }

     //     if (check if not loged in) {
     // show the login screen and hide everytihng else
     //     }
     //     else {
     (function() {
         let course_model = new CourseModuleController();
         course_model.GetAllCourse('allcourses');
     })();


     // }


 });

 //  var myJSON = JSON.stringify(NoteDataArray);
 // localStorage.setItem("Tasks", myJSON);