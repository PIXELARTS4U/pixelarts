let names = [
    "painting",
    "cinema",
    "music",
    "theater",
    "photography",
    "literature",
    "dance",
]

let sortedNames = names.sort();

let input = document.getElementById("input");

input.addEventListener("keyup", (e) =>{
    for (let i of sortedNames) {
        if (i.toLowerCase().startsWith(input.value.toLowerCase()) && input.value != "") {
            let listItem = document.createElement("li");
            listItem.classList.add("list-items");
            listItem.style.cursor = "pointer";
            listItem.setAttribute("onclick", "displayNames('" + i + "')");
            let word = "<a href="+i+".html>" + "<b>" + i.substr(0,input.value.length) + "</b></a>";
            word += i.substr(input.value.length);
            listItem.innerHTML=word;
            document.querySelector(".list").appendChild(listItem);
        }
    }
});

function displayNames(value) {
    input.value = value;
}