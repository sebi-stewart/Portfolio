function openTab(evt, tabName){
  let i, tabContent, tabLinks;

  // Get all tabContent elements and hide them
  tabContent = document.getElementsByClassName("tabcontent");
  for(i = 0; i < tabContent.length; i++){
    tabContent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tabLinks = document.getElementsByClassName("tablinks");
  for(i = 0; i < tabLinks.length; i++){
    tabLinks[i].className = tabLinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}


