function togglemenu(){var e=n("menu");function n(e){return document.getElementById(e)}"menuhide"===e.className?(e.className="menushow",n("menutoggle").innerText="✖"):(e.className="menuhide",n("menutoggle").innerText="☰")}
            _scheme = "http://";
            function gotologin() { window.location =_scheme + "www.blogfa.com/desktop/login.aspx?r=637906581412508148";}

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
    