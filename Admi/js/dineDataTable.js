async function cleaningTime(id) {

  let get = JSON.parse(localStorage.getItem("placeOrder")) || [];
  let pay = get.findIndex(({tableNo})=> tableNo == id);
  if (pay != -1) {
        alert("not pay");
  } else {
    document.querySelector(`#deactive${id}`).innerHTML = "Cleaning....";
    setTimeout(async () => {
      location.href = `changeStatus.php?id=${id}`;
    }, 1000);
  }

}

function changeData(id) {
  location.href = `changeStatus.php?id=${id}`;
}
