<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.min.js"></script>
    <style>
    .grid-container{
    display: grid;
    grid-gap: 10px;
    padding: 10px;
}
.header{
    height: 200px;
    width: 100%;
    background: yellow;
    grid-column: 1/span 3;
}
.parallax {
    min-height: 300px;
    background: transparent;
}
.parallax1 {
    min-height: 400px;
    background: transparent;
    margin-top: 100px;
}
.topnav{
    width: 820px;
    height: 60px;
    overflow: auto;
    border-radius: 20px;
    z-index: 2;
    position: relative;
    left: 300px;
    top: -250px;
}
.topnav a{
    height: 40px;
    float: right;
    padding: 10px;
    color: black;
    text-decoration: none;
    font-size: 20px;
}
.topnav a:hover{
    background-color: chocolate;
}
.active{
    background-color: coral;
}
.img1{
    z-index: 2;
    position: relative;
    left: 150px;
    top: -310px;
}
.body{
    width: 800px;
    padding: 10px;
    height: 500px;
    background-color: lightgray;
    text-align: inherit;
    margin-left: 250px;
    margin-top: 70px;
}
.p1{
    z-index: 2;
    position: relative;
}
.footer{
    height: 200px;
    width: 100%;
    background: yellow;
    grid-column: 1/span 3;
}
.icons{
    height: 50px;
    width: 150px;
    z-index: 2;
    position: relative;
}
.i1{
    height:50px;
    width: 50px;
    background: white;
    border-radius: 20px;
    position: relative;
    left: 500px;
    top: 20px;
}
.i1:hover{
    background: thistle;
}
.i2:hover{
    background: thistle;
}
.i3:hover{
    background: thistle;
}
.i2{
    height:50px;
    width: 50px;
    background: white;
    border-radius: 20px;
    position: relative;
    left: 550px;
    top: 20px;
}
.i3{
    height:50px;
    width: 50px;
    background: white;
    border-radius: 20px;
    position: relative;
    left: 700px;
    top: -30px;
}
    </style>
</head>
<body>
    <div class="grid-container">
        <div class="header">
        <div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="unnamed.png"></div>
        <div class="topnav">
            <a href="">კონტაქტი</a>
            <a href="http://localhost:8084/Project/Registration/login.php">ავტორიზაცია</a>
            <a href="http://localhost:8084/Project/Registration/reg.php">რეგისტრაცია</a>
            <a href="">ავეჯი</a>
            <a href="http://localhost:8084/Project/Repair/Repair.php">რემონტი</a>
            <a class="active" href="http://localhost:8084/Project/Us/us.php">ჩვენს შესახებ</a>
            <a href="http://localhost:8084/Project/main/">მთავარი</a>
        </div>
        <img src="capture.png" class="img1">
        </div>
        <div class="body">
            <p class="p1"><img style="float: left;" src="capture1.png">T&T Group დაარსდა 2006 წელს. კომპანიაში სამუშაოდ მოწვეულნი 
                იყვნენ საუკეთესო პროფესიონალები არქიტექტურისა და მშენებლობის 
                დარგში. ამ დროის განმავლობაში ჩვენი კომპანია იზრდებოდა და 
                ფართოვდებოდა. განვახორციელეთ მრავალი საინტერესო პროექტი, 
                როგორც კერძო, ასევე სახელმწიფო სექტორში.წლებისგანმავლობაში 
                კომპანია იხვეწებოდა და სრულყოფილდებოდა, ახალი 
                ტექნოლოგიებისა და საუკეთესო მასალების გამოყენებით, როგორც 
                სამშენებლო, ასევე სარემონტო სამუშაოების  განხორციელებაში. ჩვენი 
                სპეციალისტები უფასო კონსულტაციას გადიან მომხმარებელთან ყველა 
                სფეროში, ავეჯის, აქესესუარებისა და ტექნიკის შერჩევის ჩათვლით. 
                დღესდღეისობით ჩვენ შეგვიძლია თამამად ავღნიშნოთ რომ საქართველოს 
                ბაზარზე ვიმყოფებით ლიდერთა სიაში,რომელიც ორიენტირებულია 
                კოტეჯურ მშენებლობასა და რემონტზე, როგორც ინტერიერის ასევე 
                ექსტერიერის. . ჩვენს კომპანიას შეუძლია მოგაწოდოთ მაღალი კლასის 
                ინტერიერისა და ლანდშაფტის დიზაინერის მომსახურეობა. კომპანია 
                დაკომპლექტებულია ახალგაზრდა, პროფესიონალი კადრებით. მონაწილეობას 
                ღებულობს საქველმოქმედო აქციებში. . ჩვენთან თანამშრომლობა გაძლევთ 
                გარანტიას, დროულად და ხარისხიანად შესრულდეს სამშენებლო და 
                სარემონტო სამუშაოები.</p>
        </div>
        <div class="footer">
        <div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="unnamed.png">
            <div class="icons">
                <a href=""><img class="i1" src="facebook.png"></a>
                <a href=""><img class="i2" src="ui.png"></a>
                <a href=""><img class="i3" src="youtube.png"></a>
            </div>
        </div>
    </div>
    </div>
</body>
</html>