let namesList = document.getElementsByClassName("namesList")[0];
let inputName = document.getElementById("inputName");
let inputFamily = document.getElementById("inputFamily");
let inputAge = document.getElementById("inputAge");
let inputGender1 = document.getElementById("inputGender1").checked;
let inputGender2 = document.getElementById("inputGender2").checked;
let btn1 = document.querySelector("#btn1");
let btn2 = document.querySelector("#btn2");


////defualt man
let genderState = 1
let genderStateName = "آقا"

//// just one choice for man or woman
function check1() {
    document.getElementById("inputGender1").checked = true;
    document.getElementById("inputGender2").checked = false;
    genderState = 1
    genderStateName = "آقا"
}
function check2() {
    document.getElementById("inputGender2").checked = true;
    document.getElementById("inputGender1").checked = false;
    genderState = 0
    genderStateName = "خانم"
}

function getFullName() {
    return inputName.value + " " + inputFamily.value + "," + inputAge.value + " ساله ," + genderStateName;
}
/////////

// const p = {
//     firstName: inputName.value,
//     lastName: inputFamily.value,
//     age: inputAge.value,
//     gState: +genderState,
// }
// pesons.push(p)
/////////////////
const peronList = []

function addMyNewItem() {
    ////add to array
    peronList.push({
        firstName: inputName.value,
        lastName: inputFamily.value,
        age: inputAge.value,
        gState: +genderState,
    })

    ////add to list and refresh inputbox
    const newElement = document.createElement("li");
    newElement.innerText = getFullName();
    namesList.prepend(newElement);
    inputName.value = "";
    inputFamily.value = "";
    inputAge.value = "";
    check1();
    inputName.focus()

    ////count of man and woman
    let sumOfMan = 0
    let sumOfWoman = 0
    let sumOfMan1828 = 0
    let sumOfWoman1828 = 0
    function myfunc(gState, index) {

        if (peronList[index].gState == 0) sumOfWoman++;
        else if (peronList[index].gState == 1) sumOfMan++;

        if ((peronList[index].gState == 0) && (peronList[index].age >= 18) && (peronList[index].age <= 28)) sumOfWoman1828++;
        else if (peronList[index].gState == 1 && peronList[index].age >= 18 && peronList[index].age <= 28) sumOfMan1828++;

    }
    peronList.forEach(myfunc);
    ////show result
    btn2.onclick = function () {

        alert(`تعداد کل آقایان : ${sumOfMan}
        تعداد کل خانم ها :${sumOfWoman} 
        تعدادکل آقایان گروه سنی18-28 برابر است با:${sumOfMan1828}
        تعداد کل خانم های گروه سنی18-28 برار است با :${sumOfWoman1828}
                `);
    }

}






alert("hi1");


fetch("http://roll.diceapi.com/json/d6")
    .then(Response => Response.json())
    .then(json => {
        console.log(json.dice[0].value)

        alert(document.getElementById("image1").src);
        document.getElementById("image1").src = "D:/html-ss-project/myfirstproject/photos/20.jpg";
        //document.getElementById('image1').src = "D:\html-ss-project\myfirstproject\photos\20.jpg";

        switch (json.dice[0].value) {
            case 1:
                
                break;
            case 2:
                alert(+json.dice[0].value);
                
                break;
            case 3:
               
                break;
            case 4:
               
                break;
            case 5:
               
                break;
            case 6:
                
                break;
        }


    })
    