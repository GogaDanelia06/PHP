<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Physics</title>
    <style>
    form{
    width: 100%;
    min-height: 30px;
    margin: auto;
    padding: 15px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.wrap{
    width: 80%;
    min-height: 30px;
    margin: auto;
    box-shadow: 0px 0px 15px green;
    border-radius: 8px;
    padding-bottom: 30px;
}

form button{
    width: 100px;
    height: 50px;
    border-radius: 15px;
    font-size: 20px;
    background-color: indianred;
    color: white;
    border: none;
}

form button:hover{
    background-color: rgb(240, 74, 74);
    cursor: pointer;
    font-size: 25px;
}
.task{
    width: 95%;
    min-height: 60px;
    border-left: 2px solid gray;
    margin-bottom: 20px;
    padding: 8px;
    text-align: left;
}
body{
    text-align: center;
}

.result{
    width: 800px;
    height: 50px;
    margin: auto;
    margin-top: 15px;
    margin-bottom: 15px;
    font-size: 25px;
    color: gray;
    font-style: italic;
}

h4{
    font-size: 12px;
    color: gray;
    font-style: italic;
}
    </style>
</head>

<body>
    <h1>ისტორიის გამოცდა</h1>
    <div class="wrap">
        <form method="POST">
            <div class="task">
                <span>1.რამ განაპირობა ძვ.წ. XIV საუკუნეში ეგვიპტეში ახალი დედაქალაქის - ახეტატონის დაარსება?</span>
                <br><br>
                <input type="hidden" name="question1" value="0">
                <input type="radio" name="question1" value="1">
                <label for="1"> ნილოსის დინების ცვლილებამ</label><br>
                <input type="radio" name="question1" value="2">
                <label for="2">ფარაონის რელიგიურმა რეფორმამ</label><br>
                <input type="radio" name="question1" value="3">
                <label for="3">ქურუმთა წინასწარმეტყველებამ</label> <br>
                <input type="radio" name="question1" value="4">
                <label for="4">ახალი დინასტიის გამეფებამ</label>
            </div>

            <div class="task">
                <span>2.რა იყო პელოპონესის ომის უმთავრესი მიზეზი?</span>
                <br><br>
                <input type="hidden" name="question2" value="0">
                <input type="radio" name="question2" value="1">
                <label for="1">დაპირისპირება კორინთოსა და ლაკედემონს შორის</label><br>
                <input type="radio" name="question2" value="2">
                <label for="2">გაძლიერებული მაკედონიის სამეფოს აგრესიული პოლიტიკა</label><br>
                <input type="radio" name="question2" value="3">
                <label for="3">ბრძოლა პირველობისთვის ათენსა და სპარტას შორის</label> <br>
                <input type="radio" name="question2" value="4">
                <label for="4">სპარსელთა ბალკანეთში გაბატონების სურვილი</label>
            </div>

            <div class="task">
                <span>3.რატომ ეწოდა რომის რესპუბლიკის ცნობილ სარდალ სციპიონს „აფრიკელი“?</span>
                <br><br>
                <input type="hidden" name="question3" value="0">
                <input type="radio" name="question3" value="1">
                <label for="1">სციპიონთა საგვარეულო წარმოშობით აფრიკიდან იყო</label><br>
                <input type="radio" name="question3" value="2">
                <label for="2">მისი ლეგიონერების უმრავლესობა აფრიკელი იყო</label><br>
                <input type="radio" name="question3" value="3">
                <label for="3">დაიპყრო აფრიკაში მდებარე უკანასკნელი ელინისტური სახელმწიფო</label> <br>
                <input type="radio" name="question3" value="4">
                <label for="4">მეორე პუნიკური ომის დროს დიდ წარმატებას მიაღწია აფრიკაში</label>
            </div>

            <div class="task">
                <span>4. რას გულისხმობდა ცივი ომის დროს შემუშავებული „ტრუმენის დოქტრინა“?</span>
                <br><br>
                <textarea name="question4" cols="100" rows="5" placeholder="Answer here..."></textarea>
                <?php
                if (isset($_POST['sub'])) {
                ?>

                    <h4>* Right Answer : Our solar system</h4>

                <?php
                }
                ?>
            </div>


            <div class="task">
                <span>5.რა მოიმოქმედა სსრკ-ს ხელმძღვანელობამ, როდესაც უნგრეთში 1956 წელს ანტისაბჭოთა
გამოსვლები დაიწყო??</span>
                <br><br>
                <textarea name="question5" cols="100" rows="5" placeholder="Answer here..."></textarea>
                <?php
                if (isset($_POST['sub'])) {
                ?>

                    <h4>* Right Answer : Its outer edge would be beyond the orbit of Jupiter - basically half the size of our whole solar system</h4>

                <?php
                }
                ?>
            </div>


            <button type="submit" name="sub">Submit</button>
        </form>

        <?php
        $answers = array("2", "1", "2", "Our solar system", "Its outer edge would be beyond the orbit of Jupiter - basically half the size of our whole solar system");
        if (isset($_POST['sub'])) {

            $right_count = 0;
            $check = "question";
            for ($i = 0; $i <= sizeof($answers) - 1; $i++) {
                if ($answers[$i] == $_POST[$check . $i + 1]) {
                    $right_count++;
                }
            }
        ?>
            <div class="result">
                Final Score : <?= $right_count ?>/<?= sizeof($answers) ?>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>