var currentIndex = 0;

window.addEventListener("load", function () {
    postsArray = document.getElementById("posts").value;
    last = document.getElementById("posts_count").value;
    postsArray = JSON.parse(postsArray);

    renderTitle();
});

function showPrevious() {
    if(postsArray[currentIndex -1] != null){
        currentIndex--;

        var previous = document.querySelector(".post.active").previousElementSibling;
        document.querySelector(".post.active").className = "post";
        previous.className = "post active";
    }else{
        currentIndex=last-1;

        var previous = document.getElementById("main_svg").lastElementChild;
        document.querySelector(".post.active").className = "post";
        previous.className = "post active";

    }
    renderTitle();
    
}

function showNext() {
    if(postsArray[currentIndex +1] != null){
        currentIndex++;

        var next = document.querySelector(".post.active").nextElementSibling;
        document.querySelector(".post.active").className = "post";
        next.className = "post active";
    }else{
        currentIndex=0;

        var next = document.getElementById("main_svg").firstElementChild;
        document.querySelector(".post.active").className = "post";
        next.className = "post active";

    }

    renderTitle();
}

function renderTitle() {

    if (postsArray[currentIndex + 1] != null) {
        document.querySelector(".next-post").style.visibility = "visible";
        document.getElementById("next-post-title").innerHTML = postsArray[currentIndex + 1].NameNotion;

    }else{
        document.getElementById("next-post-title").innerHTML = postsArray[0].NameNotion;
    }

    if (postsArray[currentIndex - 1] != null) {
        document.querySelector(".previous-post").style.visibility = "visible";
        document.getElementById("previous-post-title").innerHTML = postsArray[currentIndex - 1].NameNotion;
    }else{
        document.getElementById("previous-post-title").innerHTML = postsArray[last-1].NameNotion;
    }
    
}
