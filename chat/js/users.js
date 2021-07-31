const searchBar = document.querySelector(".users .search input"),
  searchBtn = document.querySelector(".users .search button"),
  usersList = document.querySelector(".users .users-list");
searchBtn.onclick = () => {
  searchBar.classlist.toggle("active");
  searchBar.focus();
  searchBtn.classlist.toggle("active");
  searchBar.value = "";
};

searchBar.oninput = () => {
  let searchTerm = searchBar.value;
  if (searchTerm != "") {
    searchBar.classList.add("active");
  } else {
    searchBar.classList.remove("active");
  }
  //let's start ajax
  let xhr = new XMLHttpRequest(); //CREATING XML OBJECT
  xhr.open("POST", "php/search.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        usersList.innerHTML = data;
      }
    }
  };
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
};

setInterval(() => {
  //let's start ajax
  let xhr = new XMLHttpRequest(); //CREATING XML OBJECT
  xhr.open("GET", "php/users.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (!searchBar.classList.contains("active")) {
          // if active user not contains in search bar then add this data
          usersList.innerHTML = data;
        }
      }
    }
  };
  xhr.send();
}, 500); // this function will run frequently after 500ms
