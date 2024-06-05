

function userOrder() {
  let get = JSON.parse(localStorage.getItem("placeOrder")) || [];
  let totalTable = [];
  get.map((ele) => {
      totalTable.push(ele.tableNo);
    });
  let filterTableArr = totalTable.filter((a, b) => totalTable.indexOf(a) === b);
  document.querySelector(".orderBox").innerHTML = "";

  filterTableArr.forEach((ele) => {
    let price = 0;
    let email;
    let userName ;
     for(let x in get) {
      if(ele == get[x].tableNo) {
        userName = get[x].userName;
        break;
      }
     }
    let display = `<div class="box">
    <div class="heading">
      <p>Table No. ${ele}</p>
      <p id="name">Name : ${userName}</p>
    </div>
    <hr>
    <div class="details">`;
    
    get.forEach((element) => {
     
      if (ele == element.tableNo) {
        display += `
             <div >
             <span id="foodName">${element.foodName}</span> X
             <span>${element.count} </span> = 
             <span>${element.totalAmount} ₹</span>
            </div>
            <hr> `;
        price += element.totalAmount;
        email = element.userEmail;
      }
      
    });

    display += `
        </div> 
        <div class="pay">
           Pay : ${price} ₹
        </div>  
        <hr> 
        <div class="doneBtn">
        <button class="btn btn-primary" onclick="deleteData(${ele},'${email}')">Done</button>
        </div>
        `;
     
   document.querySelector(".orderBox").innerHTML += display;

  });
}
userOrder();

async function deleteData(id,mail) {
  let get = JSON.parse(localStorage.getItem("placeOrder"));
  
  // let mailData = get.filter(ele => id == ele.tableNo);

  // await fetch("http://localhost/php/SGP/admi/php/email.php",{
    
  //     method: "POST",
  //     headers: {
  //       "Content-Type": "application/json;charset=utf-8",
  //     },
  //     body: JSON.stringify(mailData),
    
  // });

  const deleted = get.filter(({tableNo})=> tableNo != id);

  localStorage.setItem("placeOrder",JSON.stringify(deleted));
  userOrder();
  changeData(id);
}

function changeData(id) {
  location.href = `changeStatus.php?id=${id}`;
}
