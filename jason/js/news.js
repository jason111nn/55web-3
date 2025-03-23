const newDate = {
    1:{src:"./img/01.jpg",title:"News-1",text:"news1news1news1news1news1news1news1news1news1"},
    2:{src:"./img/02.jpg",title:"News-2",text:"news2news2news2news2news2news2news2news2news2"},
    3:{src:"./img/03.jpg",title:"News-3",text:"news3news3news3news3news3news3news3news3news3"},
    4:{src:"./img/04.jpg",title:"News-4",text:"news4news4news4news4news4news4news4news4news4"},
    5:{src:"./img/05.jpg",title:"News-5",text:"news5news5news5news5news5news5news5news5news5"}
}

function news(number){
    let newsItem = newDate[number];
    $("#nimg").attr("src",newsItem.src)
    $("#ntitle").text(newsItem.title)
    $("#ntext").text(newsItem.text)
}