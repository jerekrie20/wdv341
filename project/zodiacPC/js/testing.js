$(document).ready(function() {
    // Activate Carousel
    $("#myCarousel").carousel();

    // Enable Carousel Indicators
    $(".item1").click(function() {
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function() {
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function() {
        $("#myCarousel").carousel(2);
    });

    $(".item4").click(function() {
        $("#myCarousel").carousel(3);
    });

    $(".item5").click(function() {
        $("#myCarousel").carousel(4);
    });

    // Enable Carousel Controls
    $(".carousel-control-prev").click(function() {
        $("#myCarousel").carousel("prev");
    });
    $(".carousel-control-next").click(function() {
        $("#myCarousel").carousel("next");
    });
});
// Customize page and updating the information and/or images

function validation() { //checking to see if a case SIZE was chosen
    caseSize = "Please Choose a Size"
    clickedSize = document.querySelector("#caseSize").value;

    if (caseSize == clickedSize) {
        alert("Please Select an Case Size from the List");
        document.getElementById("caseSize").focus();

    }

    validationTwo();
}
//checking to see if a case TYPE was chosen
function validationTwo() {
    caseType = "Please Choose a Case"
    clickedType = document.querySelector("#caseType").value;
    if (caseType == clickedType) {
        alert("Please Select a Case Type from the List");
        document.getElementById("caseType").focus();
    }
}

function checkCase() {
    case1 = "NZXT H510 White";
    case2 = "Zalman S4 Black/Grey";
    case3 = "Panteck White"
    case4 = "Phantek Eclipse"
    caseChosen = document.querySelector("#caseType").value;

    if (case1 == caseChosen) {
        document.getElementById("caseImage").src = "./images/customize/case1.png";
    } else if (case2 == caseChosen) {
        document.getElementById("caseImage").src = "./images/customize/case2.png";
    } else if (case3 == caseChosen) {
        document.getElementById("caseImage").src = "./images/customize/case3.png";
    } else if (case4 == caseChosen) {
        document.getElementById("caseImage").src = "./images/customize/case4.png";
    }
}

//end

// running the validation and the checkcase function to change the image

function runCase() {
    validation()
    checkCase()
}

//end


//adding the information to the UPDATED INORMATION in the customize page
function getCpu() {
    let cpu = document.getElementById("CPU").value;
    document.getElementById("cpuList").innerHTML = cpu;
}

function getGpu() {
    let gpu = document.getElementById("GPU").value;
    document.getElementById("gpuList").innerHTML = gpu;
}

function getPsu() {
    let psu = document.getElementById("PSU").value;
    document.getElementById("psuList").innerHTML = psu;
}

function getMotherBoard() {
    let motherBoard = document.getElementById("motherBoard").value;
    document.getElementById("motherBoardList").innerHTML = motherBoard;
}

function getStorage() {
    let storage = document.getElementById("storage").value;
    document.getElementById("storageList").innerHTML = storage;
}

function getCooling() {
    cooling = document.getElementById("cooling").value;
    document.getElementById("coolingList").innerHTML = cooling;

    if (cooling == "Water") {
        document.getElementById("watercooling").style.display = "inline-block";
        document.getElementById("displayFan").style.display = "none";
        document.getElementById("fanList").innerHTML = "None Selected";

    } else if (cooling == "Fan") {
        document.getElementById("displayFan").style.display = "inline-block";
        document.getElementById("watercooling").style.display = "none";
        document.getElementById("waterCoolingList").innerHTML = "None Selected";


    } else if (cooling == "Fan & Water") {
        document.getElementById("watercooling").style.display = "inline-block";
        document.getElementById("displayFan").style.display = "inline-block";
        getWaterCooling();
        getFan();

    } else {
        alert("Please choose a cooling type")
    }


}

function getWaterCooling() {
    let water = document.getElementById("water").value;
    document.getElementById("waterCoolingList").innerHTML = water;
}

function getFan() {
    let fan = document.getElementById("Fan").value;
    document.getElementById("fanList").innerHTML = fan;
}

function displayModal() {
    myModal = document.getElementById("noticeModal");
    myModal.style.display = "block";
    console.log("Did it display?")
}

//end

// When the user clicks on <span> (x), close the modal
function closeModal() {
    myModal.style.display = "none";
}