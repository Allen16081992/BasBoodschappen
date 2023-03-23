function OpenEditMenu(number, dbtable)
{
    switch(dbtable)
    {
        case "klant":
            hiddenKlantEdit = document.getElementsByClassName("hiddenKlantEdit");
            for (i = 0; i < 1; i++) {
                hiddenKlantEdit[number - 1].removeAttribute("id");
            }

            shownKlantEdit = document.getElementsByClassName("shownEditKlant");
            for (i = 0; i < 1; i++) {
                shownKlantEdit[number - 1].setAttribute("id", "hidden");
            }
        break;

        case "leverancier":
            hiddenLeverancierEdit = document.getElementsByClassName("hiddenLeverancierEdit");
            for(i = 0; i < 1; i++) {
                hiddenLeverancierEdit[number - 1].removeAttribute("id");
            }

            shownLeverancierEdit = document.getElementsByClassName("shownLeverancierEdit");
            for(i = 0; i < 1; i++) {
                shownLeverancierEdit[number - 1].setAttribute("id", "hidden");
            }
        break;

        case "inkooporder":
            hiddenInkoopOrderEdit = document.getElementsByClassName("hiddenInkoopOrderEdit");
            for(i = 0; i < 1; i++) {
                hiddenInkoopOrderEdit[number - 1].removeAttribute("id");
            }

            shownInkoopOrderEdit = document.getElementsByClassName("shownInkoopOrderEdit");
            for(i = 0; i < 1; i++) {
                shownInkoopOrderEdit[number - 1].setAttribute("id", "hidden");
            }
            break;
    }
}
function CloseEditMenu(number, dbtable)
{
    switch(dbtable)
    {
        case "klant":
            hiddenKlantEdit = document.getElementsByClassName("hiddenKlantEdit");
            for(i = 0; i < 1; i++) {
                hiddenKlantEdit[number - 1].setAttribute("id", "hidden");
            }


            shownKlantEdit = document.getElementsByClassName("shownEditKlant");
            for(i = 0; i < 1; i++) {
                shownKlantEdit[number - 1].removeAttribute("id");
            }
        break;

        case "leverancier":
            hiddenLeverancierEdit = document.getElementsByClassName("hiddenLeverancierEdit");

            for(i = 0; i < 1; i++) {
                hiddenLeverancierEdit[number - 1].setAttribute("id", "hidden");
            }

            shownLeverancierEdit = document.getElementsByClassName("shownLeverancierEdit");
            for(i = 0; i < 1; i++) {
                shownLeverancierEdit[number - 1].removeAttribute("id");
            }
        break;
        case "inkooporder":
            hiddenInkoopOrderEdit = document.getElementsByClassName("hiddenInkoopOrderEdit");

            for(i = 0; i < 1; i++) {
                hiddenInkoopOrderEdit[number - 1].setAttribute("id", "hidden");
            }

            shownInkoopOrderEdit = document.getElementsByClassName("shownInkoopOrderEdit");
            for(i = 0; i < 1; i++) {
                shownInkoopOrderEdit[number - 1].removeAttribute("id");
            }
            break;
    }

}

let stateKlant = 0;
var ElemKlant;
var CreateButtonKlant;

let stateLeverancier = 0;
var ElemLeverancier;
var CreateButtonLeverancier;

let stateInkoop = 0;
var ElemInkoop;
var CreateButtonInkoop;
function ShowCreateMenu()
{
    if(sessionStorage.getItem("CurrentTab") == 1)
    {
        if(stateKlant == 0) //state 0 means the menu is hiddenKlant
        {
            CreateButtonKlant.innerText = "Hide";
            ElemKlant.removeAttribute("id");
            stateKlant = 1
        }
        else
        {
            CreateButtonKlant.innerText = "Create";
            ElemKlant.setAttribute("id", "hidden");
            stateKlant = 0
        }
    }

    if(sessionStorage.getItem("CurrentTab") == 2)
    {
        if(stateLeverancier == 0) //state 0 means the menu is hidden
        {
            CreateButtonLeverancier.innerText = "Hide";
            ElemLeverancier.removeAttribute("id");
            stateLeverancier = 1
        }
        else
        {
            CreateButtonLeverancier.innerText = "Create";
            ElemLeverancier.setAttribute("id", "hidden");
            stateLeverancier = 0
        }
    }

    if(sessionStorage.getItem("CurrentTab") == 3)
    {
        if(stateInkoop == 0) //state 0 means the menu is hidden
        {
            CreateButtonInkoop.innerText = "Hide";
            ElemInkoop.removeAttribute("id");
            stateInkoop = 1
        }
        else
        {
            CreateButtonInkoop.innerText = "Create";
            ElemInkoop.setAttribute("id", "hidden");
            stateInkoop = 0
        }
    }

}

function SetCorrectElements_klant(Form, Create)
{
    if(ElemKlant == null || CreateButtonKlant == null)
    {
        ElemKlant = document.getElementById(Form);
        CreateButtonKlant = document.getElementById(Create);
    }
}

function SetCorrectElements_leverancier(Form, Create)
{
    if(ElemLeverancier == null || CreateButtonLeverancier == null)
    {
        ElemLeverancier = document.getElementById(Form);
        CreateButtonLeverancier = document.getElementById(Create);
    }
}

function SetCorrectElements_inkoopOrder(Form, Create)
{
    if(ElemInkoop == null || CreateButtonInkoop == null)
    {
        ElemInkoop = document.getElementById(Form);
        CreateButtonInkoop = document.getElementById(Create);
    }
}
