 $(document).ready(function() {

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