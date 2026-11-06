// THIS FILE HELPS ME ACTUALLY RETRIEVE THE COURSE DETAILS FIELD BY FIELD

import { getCourses } from "./firebase";

const list = document.getElementById("course-list");

getCourses()
  .then(courses => {
    list.innerHTML = courses.map(c => `
      <article class="course-card">
        <h3 class="course-title"><span>${c.code}</span> – ${c.name}</h3>
        <div class="course-tags">
          <span class="tag">Credits: ${c.credits}</span>
          <span class="tag">Pre-requisites: ${c.prerequisites}</span>
        </div>
        <p class="course-desc">${c.description}</p>
      </article>`).join("");
  })
  //IN CASE OF ERRORS
  .catch(err => {
    console.error(err);
    list.textContent = "Could not load courses.";
  });