var tp2 = 0.0;
function maliyet(malzeme, adet, fiyat) {
    document.getElementById("tbl_body2").innerHTML += 
    "<tr>" +
    "<td>" + malzeme + "</td>" +
    "<td>" + fiyat + "<b>$</b>"+ " x " + adet + "</td>" +
    "<td>" + adet * fiyat + "</td></tr>";
    tp2 = tp2 + (adet*fiyat);
    document.getElementById("tbl_toplam2").innerHTML = "Toplam: " + Number.parseFloat(tp2) + "<b>$</b>";
    getTp(tp2);
} 

/*
    //stringe array ile erişme
    tpValue = document.getElementById("tbl_toplam").innerHTML;
    var split_string = tpValue.split(" ");
    document.getElementById("needs").innerHTML = split_string[1];
*/

var tpValue=0;
var sonuc=0;
function toplamKw(tp) {
    
    if ( tp <= sonuc) 
    {
        // işlem yapma
    } 
    else 
    {
        if (tp <= 1000 ) {
            tp2 = 0;
            document.getElementById("tbl_body2").innerHTML = "";
            document.getElementById("needs").innerHTML = "<ul>";
            malzeme = "6 adet 360kw";
            document.getElementById("needs").innerHTML += "<li>" +malzeme+ "</li>";
            maliyet(malzeme, 6, 10);

            malzeme = "5 adet 360kw monokristal";
            document.getElementById("needs").innerHTML += "<li>" +malzeme+ "</li>";
            maliyet(malzeme, 5, 8);
            document.getElementById("needs").innerHTML += "</ul>";
            sonuc = 1000;

        } else if (tp <= 2000 ) {
            tp2 = 0;
            document.getElementById("tbl_body2").innerHTML = "";
            document.getElementById("needs").innerHTML = "<ul>";
            malzeme = "5 adet 360kw";
            document.getElementById("needs").innerHTML += "<li>" +malzeme+ "</li>";
            maliyet(malzeme, 5, 6);
            document.getElementById("needs").innerHTML += "</ul>";
            sonuc = 2000;

        } else if (tp <= 3000 ) {

            tp2 = 0;
            document.getElementById("tbl_body2").innerHTML = "";
            document.getElementById("needs").innerHTML = "<ul>";
            malzeme = "4 adet 360kw";
            document.getElementById("needs").innerHTML += "<li>" +malzeme+ "</li>";
            maliyet(malzeme, 4, 7);
            document.getElementById("needs").innerHTML += "</ul>";
            sonuc = 3000;

        } else {

            document.getElementById("needs").innerHTML = "Bu değer aralığı tanımlı değil";
        }
    }
    
}

var x;
function myFunction(selTag) {
    x = selTag.options[selTag.selectedIndex].text;
}

var a=0;
var tp=0;
function btn_ListeyeEkle() {
    if(document.getElementById("txt_kw").value == "") {
        document.getElementById("txt_kw").placeholder = "Bir değer giriniz.";
    } else {
        a = a+1;
        var val = document.getElementById("txt_kw").value;
        tp = tp + Number.parseInt(val);
        document.getElementById("tbl_body").innerHTML += 
        "<tr id='tr-list-" +a + "'>" +
        "<td id='tbl-td tbl-td-"+a+"'>" + a + "</td>" +
        "<td id='tbl-td'>" + x + "</td>" +
        "<td id='tbl-td'>" + val + 
        "<button onclick='deleteList("+a+")' id='list-delete-button' class='btn btn-secondary type='button'><i class='bi bi-trash'></i></button>"+
        "</td></tr>";
        document.getElementById("tbl_toplam").innerHTML = "Toplam: " + Number.parseInt(tp);
        toplamKw(tp); 
        document.getElementById("txt_kw").placeholder = "ör. 250 kw";
        document.getElementById("txt_kw").value = "";
    }
    max = a;
    
}

// bunu çerez olarak kaydetmek gerekiyor
function ChangeMode() { 
    if (document.body.style.backgroundColor == "white") {
        // gece modu
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
        document.getElementById("table-list").style.backgroundColor = "black";
        document.getElementById("table-list").style.color = "white";
        document.getElementById("mod").innerHTML = '<i class="bi bi-brightness-high-fill"></i>';
    } else {
        // gündüz modu
        document.body.style.backgroundColor = "white";
        document.body.style.color = "black";
        document.getElementById("table-list").style.backgroundColor = "white";
        document.getElementById("table-list").style.color = "black";
        document.getElementById("mod").innerHTML = '<i class="bi bi-moon-fill"></i>'; 
    }
}


function deleteList(data) {

    document.getElementById("tr-list-"+data).style.display = "none";
    for (i=data; i< max; i++) {
        document.getElementById("tbl-td-"+data+1).innerHTML = data-1; 
    }
    max = max - 1;
}






$('#ciktiButon').click(function(){
    $("#orderView").print();
});

