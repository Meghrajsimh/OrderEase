$(document).ready(()=>{
    // $(".toggle").click(()=>{
    //     // $(".sidebar").toggleClass("close");
    // });

    $("#orderManagementLink").click(()=>{
        loadContent("order_mangement.php");
    });

    $("#menuManagementLink").click(()=>{
        loadContent("menu_management.php");
    })

    $("#tableManagementLink").click(()=>{
        loadContent("table_management.php");
    })
});

async function loadContent(url) {
   await fetch(url)
        .then(response => response.text())
        .then(data => {
          document.getElementById("contentPlaceholder").innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
}



