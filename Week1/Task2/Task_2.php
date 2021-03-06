<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .wrapper{
    width: 80%;
    box-shadow: 0px 0px 15px gray;
    border-radius: 15px;
    margin:auto;
    text-align: center;
    padding: 15px;
}

form{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-direction: column;
}

#personalInfo{
    width: 90%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: row;
}

#courses{
    width: 90%;
    margin-top: 15px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    flex-direction: column;
}
.item{
    border-right: 2px solid lightgreen;
    display: flex;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 15px;
}

#add{
    margin-top: 15px;
    width: 50px;
    height: 50px;
    background-color: lightgreen;
    border: none;
    border-radius: 50%;
    font-size: 40px;
    color: white;
}
#add:hover{
    cursor: pointer;
    background: green;
}

table{
    margin: auto;
}

td, th{
    min-width: 60px;
    padding: 5px;
    border: solid 1px black;
}

.base{
    text-align: center;
}
    </style>
</head>

<body>

    <div class="wrapper">
        <h3>უწყისი</h3>
        <form action="" method="post">
            <div id="personalInfo">
                <input type="text" name="fname" placeholder="სახელი">
                <input type="text" name="lname" placeholder="გვარი">
                <div>
                    <label for="year">კურსი : </label>
                    <select name="year" id="">
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                        <option value="4">IV</option>
                    </select>
                </div>

                <div>
                    <label for="semester">სემესტრი : </label>
                    <select name="semester" id="">
                        <option value="1">I</option>
                        <option value="2">II</option>
                    </select>
                </div>
            </div>

            <div id="courses">

            </div>
            <input id="toge" type="hidden" name="my_counter" value="0">
            <button type="button" id="add">+</button>
            <br>
            <button type="submit" name="sub">Done!</button>
        </form>
    </div>

    <?php
    if (isset($_POST['sub'])) {
    ?>
        <div class="base">
            <h4>სტუდენტი</h4>
            <table>

                <tr>
                    <th>სახელი</th>
                    <th>გვარი</th>
                    <th>კურსი</th>
                    <th>სემესტრი</th>
                </tr>

                <tr>
                    <td><?= $_POST["fname"] ?></td>
                    <td><?= $_POST["lname"] ?></td>
                    <td><?= $_POST["year"] ?></td>
                    <td><?= $_POST["semester"] ?></td>
                </tr>
            </table>
        </div>

        <div class="base">
            <h3>საგნები</h3>
            <table id="results">
                <tr>
                    <th>კურსი</th>
                    <th>ლექტორი</th>
                    <th>ქულა</th>
                </tr>

                <?php
                    for($i = 0; $i < $_POST['my_counter']; $i++){
                ?>
                    <tr>
                        <td><?=$_POST['CourseName'.$i]?></td>
                        <td><?=$_POST['teacher'.$i]?></td>
                        <td><?=$_POST["score".$i]?></td>
                    </tr>
                <?php     
                    }
                ?>
            </table>
        </div>
    <?php
    }
    ?>


    <script>
        var courseCounter = 0;
        document.getElementById("add").addEventListener('click', function() {

            var template = `
                <div class="item">
                    <label for="courseName${courseCounter}">კურსის დასახელება : </label>
                    <input type="text" name="CourseName${courseCounter}">
                    <label for="teacher${courseCounter}">ლექტორი : </label>
                    <input type="text" name="teacher${courseCounter}">
                    
                    <label for="score${courseCounter}">ქულა :</label>
                    <input style="width:50px" type="number" name="score${courseCounter}">
                </div>
            
            `;
            document.getElementById("toge").value = courseCounter + 1
            courseCounter++;
            document.getElementById("courses").innerHTML += template;
        })

    </script>


</body>

</html>