<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz</title>
    <style>
    #uploadForm{
    box-shadow: 5px 5px 20px gray;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    width: 300px;
    margin-bottom: 20px;
    margin-top: 20px;
}

#wrapper{
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column;
}

table{
    width: 800px;
}

td,th{
    text-align: center;
}

.error{
    font-size: 12px;
    font-style: italic;
    color: red;
    margin-bottom: 15px;
}

#preview{
    width: 600px;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column;
    box-shadow: 0px 0px 15px gray;
    border-radius: 5px;
    margin: auto;
}

.question{
    width: 85%;
    padding: 25px;
    box-shadow: 0px 0px 15px palegreen;
    border-radius: 5px;
    margin-bottom: 30px;
}

#result{
    width: 300px;
    padding: 25px;
    border-radius: 2px;
    box-shadow: 0px 0px 15px palegreen;
    margin: auto;
}

#result h1{
    text-align: center;
    color: chocolate;
}

#result h3{
    text-align: center;

}
    </style>
</head>

<body>
    <?php
        $currentFile = fopen('tests/'.$_GET['Quiz'], 'r');
        $questions = explode("<->",fread($currentFile, filesize('tests/'.$_GET['Quiz'])));

        // echo "<pre>";
        // print_r($questions);
        // echo "</pre>";
    ?>

    <form id="preview" action="Final.php" method="POST">


        <?php
            $counter = 0;
            foreach ($questions as $question) {
                $splitedQuestion = explode("<>", $question)
        ?>

        <div class="question">
            <h3><?=$splitedQuestion[0]?></h3>
            <input type="hidden" name="choice<?=$counter?>" value="0" checked>
            <input type="radio" name="choice<?=$counter?>" value="1"> <?=$splitedQuestion[1]?> <br>
            <input type="radio" name="choice<?=$counter?>" value="2"> <?=$splitedQuestion[2]?> <br>
            <input type="radio" name="choice<?=$counter?>" value="3"> <?=$splitedQuestion[3]?>
            <input type="hidden" name="correct<?=$counter?>" value="<?=$splitedQuestion[4]?>">
        </div> 
            
        <?php $counter++; } ?>

        <button>Submit</button>
    </form>

</body>

</html>