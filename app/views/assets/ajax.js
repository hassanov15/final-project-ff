
function populateProvince(){
    var province = new XMLHttpRequest();
    province.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("province").innerHTML = this.responseText;
        }
    };
    province.open("GET", "../app/controllers/provinces.php", true);
    province.send();
}

function selectCity(province){
    var city = new XMLHttpRequest();
    city.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("city").innerHTML = this.responseText;
        }
    };

    city.open("GET", "../app/controllers/city.php?q=" + province, true);
    city.send();
}

function checkEmail(Email){
    var email = new XMLHttpRequest();
    email.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("emailError").innerHTML = this.responseText;
        }
    };

    email.open("GET", "../app/controllers/email.php?q=" + Email, true);
    email.send();
}

function checkPhone(Phone){
    var phone = new XMLHttpRequest();
    phone.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("phoneError").innerHTML = this.responseText;
        }
    };

    phone.open("GET", "../app/controllers/phone.php?q=" + Phone, true);
    phone.send();
}

function checkName(Name){
    var name = new XMLHttpRequest();
    name.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("nameError").innerHTML = this.responseText;
        }
    };

    name.open("GET", "../app/controllers/name.php?q=" + Name, true);
    name.send();
}
function checkDOB(DOB){
    var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
    if (DOB == null || DOB == "" || !pattern.test(DOB)) {
        document.getElementById("dobError").innerHTML= "Invalid date of birth\n";
        return false;
    }else{
        document.getElementById("dobError").innerHTML= "";
        return true;
    }
}
function createReport(value){
    var report = new XMLHttpRequest();
    report.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tableBody").innerHTML = this.responseText;
        }
    };

    report.open("GET", "../app/controllers/createReport.php?q=" + value, true);
    report.send();
}

function populateManagers(manager){
    if(manager == "manager") {

        var managers = new XMLHttpRequest();
        managers.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("manager").innerHTML = this.responseText;
            }
        };

        managers.open("GET", "../app/controllers/managers.php?q=" + manager, true);
        managers.send();
    }else{
        document.getElementById("manager").innerHTML = "";
    }
}