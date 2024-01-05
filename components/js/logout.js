// log out
const logout = document.getElementById('user-menu-item-2');

logout.addEventListener('click', () => {
  if(confirm('Are you sure you to log out?')){
    window.location = "./singin.view.php";
  }
});
