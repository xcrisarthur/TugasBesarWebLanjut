// // Get all the course checkboxes
// const checkboxes = document.querySelectorAll('.course-checkbox');
//
// // Array to store the selected courses
// const selectedCourses = [];
//
// // Function to handle checkbox click event
// function handleCheckboxClick(event) {
//     const checkbox = event.target;
//     const courseRow = checkbox.closest('tr');
//     const courseName = courseRow.querySelector('.course-name').innerText;
//
//     if (checkbox.checked) {
//         // Add the course to the selected courses
//         selectedCourses.push(courseName);
//     } else {
//         // Remove the course from the selected courses
//         const index = selectedCourses.indexOf(courseName);
//         if (index > -1) {
//             selectedCourses.splice(index, 1);
//         }
//     }
//
//     // Display the selected courses
//     displaySelectedCourses();
// }
//
// // Function to display the selected courses
// function displaySelectedCourses() {
//     const selectedCoursesElement = document.getElementById('selected-courses');
//     selectedCoursesElement.innerText = selectedCourses.join(', ');
// }
//
// // Attach the event listener to each checkbox
// checkboxes.forEach((checkbox) => {
//     checkbox.addEventListener('change', handleCheckboxClick);
// });
