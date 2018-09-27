$(window).on('load',function(){
    // depending on the button clicked target user to the apropriate website
    const targetBtn = document.querySelectorAll(".target");
    console.log(targetBtn);
    targetBtn.forEach((el) => {
        el.addEventListener("click", (e) => {
            console.log(e.target.dataset.target);
            
            let target = e.target.dataset.target;
            target === "student"? window.location.href = "http://google.com": window.location.href = "http://bing.com";
        });
    });

    $('#userSelect').modal('show');
});