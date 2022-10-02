function search() {
    if (document.getElementById("fakeimg") !== null) {
        document.getElementById("fakeimg").style.display = "none";
    }
    if (document.getElementById("rowupdate2") !== null) {
        document.getElementById("rowupdate2").style.display = "none";
    }
    document.getElementById("rowadd_delete").style.display = "none"
    document.getElementById("rowupdate").style.display = "none"
    if (document.getElementById("rowsearch").style.display === "flex") {
        document.getElementById("rowsearch").style.display = "none";
    } else {
        document.getElementById("rowsearch").style.display = "flex";
    }
}

function add_delete() {
    if (document.getElementById("fakeimg") !== null) {
        document.getElementById("fakeimg").style.display = "none";
    }
    if (document.getElementById("rowupdate2") !== null) {
        document.getElementById("rowupdate2").style.display = "none";
    }
    document.getElementById("rowsearch").style.display = "none"
    document.getElementById("rowupdate").style.display = "none"
    if (document.getElementById("rowadd_delete").style.display === "flex") {
        document.getElementById("rowadd_delete").style.display = "none"
    } else {
        document.getElementById("rowadd_delete").style.display = "flex"
    }
}

function update() {
    if (document.getElementById("fakeimg") !== null) {
        document.getElementById("fakeimg").style.display = "none";
    }
    if (document.getElementById("rowupdate2") !== null) {
        document.getElementById("rowupdate2").style.display = "none";
    }
    document.getElementById("rowsearch").style.display = "none"
    document.getElementById("rowadd_delete").style.display = "none"
    if (document.getElementById("rowupdate").style.display === "flex") {
        document.getElementById("rowupdate").style.display = "none"
    } else {
        document.getElementById("rowupdate").style.display = "flex"
    }

 function plus(){


    }   
}